<?php

namespace App\Mail;

use App\Domain\Event\Entities\Event;
use App\Domain\Sale\Entities\Ticket;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TicketPurchasedMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public readonly Ticket $ticket,
        public readonly Event $event,
        public readonly string $userName
    ) {}

    public function build()
    {
        return $this->subject('Seu ingresso para ' . $this->event->getName() . ' está confirmado!')
                    ->view('emails.ticket_purchased');
    }
}
