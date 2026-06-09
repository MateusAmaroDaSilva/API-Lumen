<?php

namespace App\Infrastructure\Jobs;

use App\Application\DTOs\BuyTicketDTO;
use App\Application\UseCases\ProcessTicketPurchaseUseCase;
use App\Domain\Event\Repositories\EventRepositoryInterface;
use App\Mail\TicketPurchasedMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ProcessTicketPurchaseJob implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    public int $tries   = 3;
    public int $timeout = 60;

    public function __construct(
        public readonly BuyTicketDTO $dto
    ) {}

    public function handle(ProcessTicketPurchaseUseCase $useCase, EventRepositoryInterface $eventRepository): void
    {
        try {
            // Buscar evento para contexto
            $event = $eventRepository->findById($this->dto->eventId);
            
            if (!$event) {
                Log::error('Evento não encontrado no Job', ['event_id' => $this->dto->eventId]);
                return;
            }

            // Simular comunicação com Gateway de Pagamento (50% de chance de sucesso)
            $isPaymentSuccessful = rand(1, 100) > 50;

            if (!$isPaymentSuccessful) {
                // Pagamento falhou: envia e-mail de falha e NÃO cria o ingresso
                Mail::to($this->dto->userEmail)->send(new \App\Mail\TicketFailedMail($event, $this->dto->userName, $this->dto->paymentMethod));
                
                Log::warning('Pagamento recusado pelo gateway simulado.', [
                    'event_id'       => $this->dto->eventId,
                    'user_email'     => $this->dto->userEmail,
                    'payment_method' => $this->dto->paymentMethod,
                ]);
                
                return; // Encerra o job com "sucesso" na fila para não causar retry, pois foi uma falha de negócio definitiva
            }

            // Pagamento aprovado: Processa a regra de negócio (reserva vaga e cria ticket)
            $ticket = $useCase->execute($this->dto);

            // Enviar E-mail de Sucesso
            Mail::to($this->dto->userEmail)->send(new TicketPurchasedMail($ticket, $event, $this->dto->userName));

            Log::info('Pagamento aprovado. Ingresso processado com sucesso e e-mail enviado.', [
                'ticket_id'      => $ticket->getId(),
                'payment_method' => $this->dto->paymentMethod,
                'event_id'       => $this->dto->eventId,
                'user_email'     => $this->dto->userEmail,
            ]);
        } catch (\DomainException $e) {
            Log::warning('Compra recusada pelas regras de negócio.', [
                'reason'     => $e->getMessage(),
                'event_id'   => $this->dto->eventId,
                'user_email' => $this->dto->userEmail,
            ]);
        } catch (\Exception $e) {
            Log::error('Falha ao processar compra de ingresso.', [
                'error'      => $e->getMessage(),
                'event_id'   => $this->dto->eventId,
                'user_email' => $this->dto->userEmail,
            ]);
            throw $e;
        }
    }

    public function failed(\Throwable $exception): void
    {
        Log::error('Job falhou após todas as tentativas.', [
            'event_id'   => $this->dto->eventId,
            'user_email' => $this->dto->userEmail,
            'error'      => $exception->getMessage(),
        ]);
    }
}
