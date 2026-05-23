<?php

namespace App\Application\UseCases;

use App\Application\DTOs\BuyTicketDTO;
use App\Domain\Event\Repositories\EventRepositoryInterface;
use App\Infrastructure\Jobs\ProcessTicketPurchaseJob;
use DomainException;
use InvalidArgumentException;

class RequestTicketUseCase
{
    public function __construct(
        private readonly EventRepositoryInterface $eventRepository
    ) {}

    public function execute(BuyTicketDTO $dto): array
    {
        $event = $this->eventRepository->findById($dto->eventId);

        if (!$event) {
            throw new InvalidArgumentException('Evento não encontrado.');
        }

        if ($event->isPastEvent()) {
            throw new DomainException('Não é possível comprar ingressos para eventos que já ocorreram.');
        }

        if (!$event->hasAvailableCapacity()) {
            throw new DomainException('Não há ingressos disponíveis para este evento.');
        }

        dispatch(new ProcessTicketPurchaseJob($dto));

        return [
            'message' => 'Solicitação de compra recebida. Seu ingresso está sendo processado.',
            'event'   => $event->getName(),
            'status'  => 'queued',
        ];
    }
}
