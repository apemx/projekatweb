<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission ;
use Spatie\Permission\Models\Role ;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::updateOrCreate(['name'=>'admin']); 
        Role::updateOrCreate(['name'=>'admin'])->givePermissionTo('admin');
        Permission::updateOrCreate(['name' =>'agent']); 
        Role::updateOrCreate(['name' => 'agent'])->givePermissionTo('agent');
        Permission::updateOrCreate(['name' => 'user']); 
        Role::updateOrCreate(['name' => 'user'])->givePermissionTo('user');
    }
}
