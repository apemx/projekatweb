<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = 
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('sifra'),
                'contact'=>fake()->unique()->randomNumber($nbDigits = 6, $strict = true),
            ];
        $user=User::create($users);
        $user->assignRole('admin');
    }
}
