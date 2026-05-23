<?php

namespace App\Providers;

use App\Domain\Event\Repositories\EventRepositoryInterface;
use App\Domain\Sale\Repositories\TicketRepositoryInterface;
use App\Infrastructure\Repositories\EloquentEventRepository;
use App\Infrastructure\Repositories\EloquentTicketRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(EventRepositoryInterface::class, EloquentEventRepository::class);
        $this->app->bind(TicketRepositoryInterface::class, EloquentTicketRepository::class);
    }
}
