<?php

namespace App\Application\UseCases;

use App\Domain\Event\Entities\Event;
use App\Domain\Event\Repositories\EventRepositoryInterface;

class GetEventUseCase
{
    public function __construct(
        private readonly EventRepositoryInterface $eventRepository
    ) {}

    public function execute(int $id): ?Event
    {
        return $this->eventRepository->findById($id);
    }
}
