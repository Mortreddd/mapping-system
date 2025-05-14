<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    /** @use HasFactory<\Database\Factories\ReservationFactory> */
    use HasFactory;

    protected $fillable = [
        'deceased_id',
        'grave_id',
        'full_name',
        'email',
        'date_of_birth',
        'date_of_death',
        'deceased_full_name',
        'status'
    ];

    public function grave()
    {
        return static::belongsTo(Grave::class);
    }

}