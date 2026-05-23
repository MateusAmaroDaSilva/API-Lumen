<?php

namespace App\Domain\Sale\Repositories;

use App\Domain\Sale\Entities\Ticket;

interface TicketRepositoryInterface
{
    public function create(Ticket $ticket): Ticket;
    public function findById(int $id): ?Ticket;
    public function findByUserId(int $userId): array;
    public function findByEventId(int $eventId): array;
    public function findAll(): array;
    public function save(Ticket $ticket): Ticket;
    public function countConfirmedByEventId(int $eventId): int;
}
