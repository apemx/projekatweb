<?php

namespace Database\Factories;

use App\Models\PropertyRequest;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PropertyRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model=PropertyRequest::class;
    

     public function definition()
     {
         return [
             'user_id' => rand(4, 6),
             'property_id' => rand(1, 3), 
             'message' => $this->faker->sentence,
           
         ];
     }

}
