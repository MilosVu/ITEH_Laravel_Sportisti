<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SportistaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime'=>$this->faker->lexify('?????'),
            'prezime'=>$this->faker->lexify('??????'),
            'pol'=>$this->faker->numberBetween($min=1,$max=2),
            'starost'=>$this->faker->numberBetween($min=18,$max=32),
            'sport_id'=>$this->faker->numberBetween($min=23,$max=29),
            'zemlja_id'=>$this->faker->numberBetween($min=37,$max=48)
        ];
    }
}
