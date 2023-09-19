<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = 
            [
                'name' => 'agent',
                'email' => 'agent@agent.com',
                'password' => bcrypt('sifra'),
                'contact'=>fake()->unique()->randomNumber($nbDigits = 5, $strict = true)
            ];
        $user=User::create($users);
        $user->assignRole('agent');
    }
}
