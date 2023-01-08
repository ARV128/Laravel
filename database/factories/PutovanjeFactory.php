<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PutovanjeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'destinacija' => $this->faker->country(),
            'broj_dana' => $this->faker->numberBetween($min = 1, $max = 30),
            'prevoz' => $this->faker->randomElement($array = array ('avio','bus','sopstveni')),
            'cena' => $this->faker->numberBetween($min = 100, $max = 3000),
        
        ];
    }
}
