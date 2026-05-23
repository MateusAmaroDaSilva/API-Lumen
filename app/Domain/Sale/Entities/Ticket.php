<?php

namespace App\Domain\Sale\Entities;

use DomainException;

class Ticket
{
    const STATUS_PENDING   = 'pending';
    const STATUS_CONFIRMED = 'confirmed';
    const STATUS_EXPIRED   = 'expired';

    private ?int $id;
    private int $eventId;
    private int $userId;
    private string $status;

    public function __construct(
        int $eventId,
        int $userId,
        ?int $id = null,
        string $status = self::STATUS_PENDING
    ) {
        $this->id      = $id;
        $this->eventId = $eventId;
        $this->userId  = $userId;
        $this->status  = $status;
    }

    public function confirm(): void
    {
        if ($this->status !== self::STATUS_PENDING) {
            throw new DomainException("Não é possível confirmar um ingresso com status '{$this->status}'.");
        }
        $this->status = self::STATUS_CONFIRMED;
    }

    public function expire(): void
    {
        if ($this->status !== self::STATUS_PENDING) {
            throw new DomainException("Não é possível expirar um ingresso com status '{$this->status}'.");
        }
        $this->status = self::STATUS_EXPIRED;
    }

    public function isPending(): bool    { return $this->status === self::STATUS_PENDING; }
    public function isConfirmed(): bool  { return $this->status === self::STATUS_CONFIRMED; }
    public function isExpired(): bool    { return $this->status === self::STATUS_EXPIRED; }

    public function getId(): ?int        { return $this->id; }
    public function getEventId(): int    { return $this->eventId; }
    public function getUserId(): int     { return $this->userId; }
    public function getStatus(): string  { return $this->status; }

    public function toArray(): array
    {
        return [
            'id'       => $this->id,
            'event_id' => $this->eventId,
            'user_id'  => $this->userId,
            'status'   => $this->status,
        ];
    }
}
