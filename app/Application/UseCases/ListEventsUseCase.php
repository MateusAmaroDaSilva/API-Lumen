<?php

namespace App\Application\UseCases;

use App\Domain\Event\Repositories\EventRepositoryInterface;

class ListEventsUseCase
{
    public function __construct(
        private readonly EventRepositoryInterface $eventRepository
    ) {}

    public function execute(): array
    {
        return $this->eventRepository->findAll();
    }
}
