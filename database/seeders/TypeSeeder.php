<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            'Plac',
            'Stan',
            'Kuca',
        ];
        foreach($types as $item){
            Type::create(['name'=>$item]);
        }
    
    }
}
