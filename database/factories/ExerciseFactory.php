<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExerciseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'calories' => $this->faker->randomFloat,
            'time' => $this->faker->randomElement([15, 30, 45,60]),
        ];
    }
}
