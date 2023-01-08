<?php

namespace Database\Factories;

use App\Models\Klijent;
use App\Models\Putovanje;
use Illuminate\Database\Eloquent\Factories\Factory;

class KupovinaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
 

    public function definition()
    {
        return [
            'datum' => $this->faker->date($format = 'Y-m-d', $max = 'now'), 
            'klijent_id' => $this->faker->numberBetween($min = 1, $max = Klijent::count()),
            'putovanje_id' =>$this->faker->numberBetween($min = 1, $max = Putovanje::count()),
     
        
        ];
    }
}
