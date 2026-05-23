<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Event\Entities\Event;
use App\Domain\Event\Repositories\EventRepositoryInterface;
use App\Infrastructure\Models\EventModel;

class EloquentEventRepository implements EventRepositoryInterface
{
    public function findById(int $id): ?Event
    {
        $model = EventModel::find($id);
        return $model ? $this->toEntity($model) : null;
    }

    public function findByIdWithLock(int $id): ?Event
    {
        $model = EventModel::lockForUpdate()->find($id);
        return $model ? $this->toEntity($model) : null;
    }

    public function findAll(): array
    {
        return EventModel::orderBy('event_date')
            ->get()
            ->map(fn($model) => $this->toEntity($model)->toArray())
            ->toArray();
    }

    public function save(Event $event): Event
    {
        EventModel::where('id', $event->getId())->update([
            'capacity' => $event->getCapacity(),
        ]);
        return $event;
    }

    public function create(Event $event): Event
    {
        $model = EventModel::create([
            'name'        => $event->getName(),
            'description' => $event->getDescription(),
            'price'       => $event->getPrice(),
            'event_date'  => $event->getEventDate(),
            'capacity'    => $event->getCapacity(),
        ]);
        return $this->toEntity($model);
    }

    private function toEntity(EventModel $model): Event
    {
        return new Event(
            name:        $model->name,
            description: $model->description,
            price:       $model->price,
            eventDate:   $model->event_date->toDateTime(),
            capacity:    $model->capacity,
            id:          $model->id,
        );
    }
}
