<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(),
            'brand' => $this->faker->text(),
            'image' => $this->faker->file(),
           'category' => $this->faker->text(),

        ];
    }
}
