<?php

namespace App\Domain\Event\Entities;

use DateTimeInterface;
use DateTime;
use DomainException;
use InvalidArgumentException;

class Event
{
    private ?int $id;
    private string $name;
    private string $description;
    private float $price;
    private DateTimeInterface $eventDate;
    private int $capacity;

    public function __construct(
        string $name,
        string $description,
        float $price,
        DateTimeInterface $eventDate,
        int $capacity,
        ?int $id = null
    ) {
        if ($capacity < 0) {
            throw new InvalidArgumentException('A capacidade não pode ser negativa.');
        }
        if ($price < 0) {
            throw new InvalidArgumentException('O preço não pode ser negativo.');
        }

        $this->id          = $id;
        $this->name        = $name;
        $this->description = $description;
        $this->price       = $price;
        $this->eventDate   = $eventDate;
        $this->capacity    = $capacity;
    }

    public function isPastEvent(): bool
    {
        return $this->eventDate < new DateTime('now');
    }

    public function hasAvailableCapacity(): bool
    {
        return $this->capacity > 0;
    }

    public function decrementCapacity(): void
    {
        if (!$this->hasAvailableCapacity()) {
            throw new DomainException('Não há ingressos disponíveis para este evento.');
        }
        $this->capacity--;
    }

    public function getId(): ?int                    { return $this->id; }
    public function getName(): string                { return $this->name; }
    public function getDescription(): string         { return $this->description; }
    public function getPrice(): float                { return $this->price; }
    public function getEventDate(): DateTimeInterface { return $this->eventDate; }
    public function getCapacity(): int               { return $this->capacity; }

    public function toArray(): array
    {
        return [
            'id'           => $this->id,
            'name'         => $this->name,
            'description'  => $this->description,
            'price'        => $this->price,
            'event_date'   => $this->eventDate->format('Y-m-d H:i:s'),
            'capacity'     => $this->capacity,
            'is_past'      => $this->isPastEvent(),
            'has_capacity' => $this->hasAvailableCapacity(),
        ];
    }
}
