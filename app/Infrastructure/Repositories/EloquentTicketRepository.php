<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Sale\Entities\Ticket;
use App\Domain\Sale\Repositories\TicketRepositoryInterface;
use App\Infrastructure\Models\TicketModel;

class EloquentTicketRepository implements TicketRepositoryInterface
{
    public function create(Ticket $ticket): Ticket
    {
        $model = TicketModel::create([
            'event_id' => $ticket->getEventId(),
            'user_id'  => $ticket->getUserId(),
            'status'   => $ticket->getStatus(),
        ]);
        return $this->toEntity($model);
    }

    public function findById(int $id): ?Ticket
    {
        $model = TicketModel::find($id);
        return $model ? $this->toEntity($model) : null;
    }

    public function findByUserId(int $userId): array
    {
        return TicketModel::where('user_id', $userId)
            ->with(['event', 'user'])
            ->get()
            ->map(fn($m) => $this->toEntity($m)->toArray())
            ->toArray();
    }

    public function findByEventId(int $eventId): array
    {
        return TicketModel::where('event_id', $eventId)
            ->with(['event', 'user'])
            ->get()
            ->map(fn($m) => $this->toEntity($m)->toArray())
            ->toArray();
    }

    public function findAll(): array
    {
        return TicketModel::with(['event', 'user'])->get()->toArray();
    }

    public function save(Ticket $ticket): Ticket
    {
        TicketModel::where('id', $ticket->getId())->update([
            'status' => $ticket->getStatus(),
        ]);
        return $ticket;
    }

    public function countConfirmedByEventId(int $eventId): int
    {
        return TicketModel::where('event_id', $eventId)
            ->where('status', Ticket::STATUS_CONFIRMED)
            ->count();
    }

    private function toEntity(TicketModel $model): Ticket
    {
        return new Ticket(
            eventId: $model->event_id,
            userId:  $model->user_id,
            id:      $model->id,
            status:  $model->status,
        );
    }
}
