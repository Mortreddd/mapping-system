<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grave extends Model
{
    /** @use HasFactory<\Database\Factories\GraveFactory> */
    use HasFactory;

    protected $fillable = [
        'grave_number',
        'status',
        'created_at',
        'updated_at',
    ];

    public function deceased()
    {
        return $this->hasOne(Deceased::class)
            ->withDefault([
                'full_name' => 'No Deceased',
                'date_of_birth' => null,
                'date_of_death' => null
            ]);
    }

}