<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MedaljaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'takmicenje'=>$this->faker->lexify('?????? ??????'),
            'godina'=>$this->faker->numberBetween($min=1990,$max=2022),
            'sportista_id'=>$this->faker->numberBetween($min=28,$max=43),
        ];
    }
}
