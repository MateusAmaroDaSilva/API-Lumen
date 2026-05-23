<?php

namespace App\Infrastructure\Models;

use Illuminate\Database\Eloquent\Model;

class EventModel extends Model
{
    protected $table = 'events';

    protected $fillable = [
        'name',
        'description',
        'price',
        'event_date',
        'capacity',
    ];

    protected $casts = [
        'event_date' => 'datetime',
        'price'      => 'float',
        'capacity'   => 'integer',
    ];

    public function tickets()
    {
        return $this->hasMany(TicketModel::class, 'event_id');
    }
}
