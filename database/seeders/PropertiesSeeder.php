<?php

namespace Database\Seeders;

use App\Models\Properties;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Properties::factory()->count(3)->create();
    }
}
