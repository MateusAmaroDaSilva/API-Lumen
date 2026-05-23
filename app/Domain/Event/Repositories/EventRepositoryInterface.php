<?php

namespace App\Domain\Event\Repositories;

use App\Domain\Event\Entities\Event;

interface EventRepositoryInterface
{
    public function findById(int $id): ?Event;
    public function findByIdWithLock(int $id): ?Event;
    public function findAll(): array;
    public function save(Event $event): Event;
    public function create(Event $event): Event;
}
