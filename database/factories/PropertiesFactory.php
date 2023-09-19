<?php

namespace Database\Factories;

use App\Models\Properties;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Properties>
 */
class PropertiesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Properties::class;
    public function definition(): array
    {
        return [
            'title' => "test",
            'description' => $this->faker->paragraph,
            'price' => rand(1000,1500),
            'type_id' => rand(1, 3),
            'location_id' => rand(1, 3),
            'image' => '1694031193.jpg',
        ];
    }
}

