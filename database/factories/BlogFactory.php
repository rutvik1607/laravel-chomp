<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name(),
            'title' => $this->faker->title,
            'description' => $this->faker->paragraph,
            'category' => $this->faker->text(), // password
            'image' => $this->faker->imageUrl,
            'ref1' => $this->faker->text()
        ];
    }
}
