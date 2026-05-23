<?php

namespace App\Application\UseCases;

use App\Domain\Sale\Repositories\TicketRepositoryInterface;

class ListTicketsUseCase
{
    public function __construct(
        private readonly TicketRepositoryInterface $ticketRepository
    ) {}

    public function execute(): array
    {
        return $this->ticketRepository->findAll();
    }
}
