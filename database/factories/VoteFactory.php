<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VoteFactory extends Factory
{
    public function definition(): array
    {
        return [
            'question' => $this->faker->sentence(8),
            'type' => $this->faker->randomElement(['agree', 'refuse', 'agreeWithinLimits', 'notInterested']),
        ];
    }
}
