<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $locations = [
            'Beograd',
            'Novi Sad',
            'Nis',
            'Kragujevac',
            'Subotica'
        ];
    
        foreach ($locations as $location) {
            Location::create(['name' => $location]);
        }
    }
    
}
