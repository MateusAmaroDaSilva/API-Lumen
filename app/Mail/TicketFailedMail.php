<?php

namespace App\Mail;

use App\Domain\Event\Entities\Event;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TicketFailedMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public readonly Event $event,
        public readonly string $userName,
        public readonly string $paymentMethod
    ) {}

    public function build()
    {
        return $this->subject('Falha no pagamento do seu ingresso para ' . $this->event->getName())
                    ->view('emails.ticket_failed');
    }
}
