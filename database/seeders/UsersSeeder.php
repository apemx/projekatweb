<?php

namespace Database\Seeders;
use Illuminate\Support\Str;

use App\Models\User;
use Illuminate\Database\Seeder;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    { 
        $user1 = 
        [
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('sifra'),
            'contact'=>fake()->unique()->randomNumber($nbDigits = 4, $strict = true)
        ];
        $user1=User::create($user1);
        $user1->assignRole('agent');

        for ($i = 0; $i < 5; $i++) {
            $user = User::factory()->create();
            $user->assignRole('user');
        }
    }
}

