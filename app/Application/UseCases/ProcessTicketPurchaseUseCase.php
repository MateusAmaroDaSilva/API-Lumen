<?php

namespace App\Application\UseCases;

use App\Application\DTOs\BuyTicketDTO;
use App\Domain\Event\Repositories\EventRepositoryInterface;
use App\Domain\Sale\Entities\Ticket;
use App\Domain\Sale\Repositories\TicketRepositoryInterface;
use App\Models\User;
use DomainException;
use Illuminate\Support\Facades\DB;

class ProcessTicketPurchaseUseCase
{
    public function __construct(
        private readonly EventRepositoryInterface  $eventRepository,
        private readonly TicketRepositoryInterface $ticketRepository,
    ) {}

    public function execute(BuyTicketDTO $dto): Ticket
    {
        return DB::transaction(function () use ($dto) {
            // lockForUpdate garante que apenas uma transação processa este evento por vez
            $event = $this->eventRepository->findByIdWithLock($dto->eventId);

            if (!$event) {
                throw new \InvalidArgumentException('Evento não encontrado.');
            }

            if ($event->isPastEvent()) {
                throw new DomainException('Não é possível comprar ingressos para eventos que já ocorreram.');
            }

            if (!$event->hasAvailableCapacity()) {
                throw new DomainException('Ingressos esgotados: capacidade máxima atingida.');
            }

            $user = User::firstOrCreate(
                ['email' => $dto->userEmail],
                ['name'  => $dto->userName]
            );

            $ticket = new Ticket(
                eventId: $event->getId(),
                userId:  $user->id,
            );

            $ticket->confirm();
            $event->decrementCapacity();

            $this->eventRepository->save($event);

            return $this->ticketRepository->create($ticket);
        });
    }
}
