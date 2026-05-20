<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(6),
            'image' => $this->faker->imageUrl(640, 480, 'blog', true), 
            'link' => $this->faker->url(),
            'addBy' => $this->faker->name(), 
            'desc' => $this->faker->paragraph(5),
        ];
    }
}
