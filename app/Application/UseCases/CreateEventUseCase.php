<?php

namespace App\Application\UseCases;

use App\Application\DTOs\CreateEventDTO;
use App\Domain\Event\Entities\Event;
use App\Domain\Event\Repositories\EventRepositoryInterface;
use DateTime;

class CreateEventUseCase
{
    public function __construct(
        private readonly EventRepositoryInterface $eventRepository
    ) {}

    public function execute(CreateEventDTO $dto): Event
    {
        $event = new Event(
            name:        $dto->name,
            description: $dto->description,
            price:       $dto->price,
            eventDate:   new DateTime($dto->eventDate),
            capacity:    $dto->capacity,
        );

        return $this->eventRepository->create($event);
    }
}
