<?php

namespace Database\Seeders;

use App\Models\Grave;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GraveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $maxNumber = 250;
        
        for($number = 1; $number <= $maxNumber; $number++) {
            Grave::create([
                'grave_number' => $number
            ]);
        }
    }
}