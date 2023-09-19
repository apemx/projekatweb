<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
            $this->call(PermissionSeeder::class);
            $this->call(AdminSeeder::class);
            $this->call(AgentSeeder::class);
            $this->call(UsersSeeder::class);
            $this->call(LocationSeeder::class);
            $this->call(TypeSeeder::class);
            $this->call(PropertiesSeeder::class);
            $this->call(RequestSeeder::class);
      


    }
}
