<?php

namespace App\Infrastructure\Jobs;

use App\Application\DTOs\BuyTicketDTO;
use App\Application\UseCases\ProcessTicketPurchaseUseCase;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ProcessTicketPurchaseJob implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    public int $tries   = 3;
    public int $timeout = 60;

    public function __construct(
        public readonly BuyTicketDTO $dto
    ) {}

    public function handle(ProcessTicketPurchaseUseCase $useCase): void
    {
        try {
            $ticket = $useCase->execute($this->dto);

            Log::info('Ingresso processado com sucesso.', [
                'ticket_id'  => $ticket->getId(),
                'status'     => $ticket->getStatus(),
                'event_id'   => $this->dto->eventId,
                'user_email' => $this->dto->userEmail,
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
