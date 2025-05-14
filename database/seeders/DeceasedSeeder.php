<?php

namespace Database\Seeders;

use App\Models\Deceased;
use App\Models\Grave;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeceasedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Deceased::factory()
            ->count(10)
            ->create(fn () => [
                'grave_id' => rand(1, 240),
                'date_of_birth' => now()->subYears(rand(20, 80))->toDateString(), // Only date
                'date_of_death' => now()->subYears(rand(0, 20))->toDateString(), 
                'full_name' => fake()->name(),
                'created_at' => now(),
                'updated_at' => now()
            ]);
    }
}