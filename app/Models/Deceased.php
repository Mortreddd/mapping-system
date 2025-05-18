<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deceased extends Model
{
    /** @use HasFactory<\Database\Factories\DeceasedFactory> */
    use HasFactory;

    protected $fillable = [
        'full_name',
        'date_of_birth',
        'date_of_death',
        'cause_of_death',
        'gender',
        'age',
        'address',
        'grave_id',
        'created_at',
        'updated_at'
    ];


    protected $casts = [
        'date_of_birth' => 'date',
        'date_of_death' => 'date',
        'age' => 'integer'
        // ...
    ];

    public function grave()
    {
        return $this->belongsTo(Grave::class);
    }
}