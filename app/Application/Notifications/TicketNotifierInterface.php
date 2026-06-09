<?php

namespace App\Application\Notifications;

use App\Domain\Event\Entities\Event;
use App\Domain\Sale\Entities\Ticket;

interface TicketNotifierInterface
{
    public function notifyConfirmed(
        Ticket $ticket,
        Event $event,
        string $userName,
        string $userEmail
    ): void;
}
