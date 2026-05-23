<?php

namespace App\Application\DTOs;

class CreateEventDTO
{
    public function __construct(
        public readonly string $name,
        public readonly string $description,
        public readonly float  $price,
        public readonly string $eventDate,
        public readonly int    $capacity,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            name:       $data['name'],
            description: $data['description'],
            price:      (float) $data['price'],
            eventDate:  $data['event_date'],
            capacity:   (int) $data['capacity'],
        );
    }
}
