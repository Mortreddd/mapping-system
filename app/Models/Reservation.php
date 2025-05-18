<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    /** @use HasFactory<\Database\Factories\ReservationFactory> */
    use HasFactory;

    protected $fillable = [
        'grave_id',
        'full_name',
        'email',
        'contact_number',
        'relationship',
        'deceased_full_name',
        'status',
        'date_of_birth',
        'date_of_death',
        'cause_of_death',
        'gender',
        'age',
        'address',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'date_of_death' => 'date',
    ];

    public function grave()
    {
        return static::belongsTo(Grave::class);
    }

}