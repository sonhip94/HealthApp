<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserChallengeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => \App\Models\User::inRandomOrder()->first()->id,
            'challenge' => $this->faker->text,
        ];
    }
}
