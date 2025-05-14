<?php

namespace Database\Seeders;

use App\Models\Deceased;
use App\Models\Grave;
use Illuminate\Database\Seeder;

class DeceasedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $grave1 = Grave::findOrFail(1);
        $grave2 = Grave::findOrFail(50);
        $grave3 = Grave::findOrFail(90);
        $grave1->update(['status' => 'occupied']);
        $grave2->update(['status' => 'occupied']);
        $grave3->update(['status' => 'occupied']);
        
        
        Deceased::create([
            'full_name' => 'John Paul Alde',
            'grave_id' => 1,
            'date_of_birth' => '1980-01-01',
            'date_of_death' => '2020-01-01',
        ]);
        Deceased::create([
            'full_name' => 'Juval Lapasanda',
            'grave_id' => 50,
            'date_of_birth' => '1980-01-01',
            'date_of_death' => '2020-01-01',
        ]);
        Deceased::create([
            'full_name' => 'Raizza Beth Dacalos',
            'grave_id' => 90,
            'date_of_birth' => '1980-01-01',
            'date_of_death' => '2020-01-01',
        ]);
    }
}