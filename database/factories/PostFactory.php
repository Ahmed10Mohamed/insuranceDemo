<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = \Illuminate\Database\Eloquent\Model::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(6),
            'subTitle' => $this->faker->sentence(6),
            'link' => $this->faker->url(),
            'desc' => $this->faker->paragraph(5),
            'isSlider' => $this->faker->boolean(),
            'isUrgent' => $this->faker->boolean(),
            'isProfile' => $this->faker->boolean(),
            'isTrand' => $this->faker->boolean(),
        ];
    }
}
