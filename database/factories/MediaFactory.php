<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MediaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'desc'  => $this->faker->sentence(10),
            'link'  => $this->faker->url(),
            'type'  => $this->faker->randomElement(['sound', 'video']),
        ];
    }
}
