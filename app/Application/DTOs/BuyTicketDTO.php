<?php

namespace App\Application\DTOs;

class BuyTicketDTO
{
    public function __construct(
        public readonly int    $eventId,
        public readonly string $userName,
        public readonly string $userEmail,
        public readonly string $paymentMethod,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            eventId:       (int) $data['event_id'],
            userName:      $data['user_name'],
            userEmail:     $data['user_email'],
            paymentMethod: $data['payment_method'],
        );
    }
}
