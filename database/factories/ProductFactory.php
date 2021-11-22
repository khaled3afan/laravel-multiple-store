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
            'category_id' => rand(1, 10),
            'shop_id' => rand(1,10),
            'title' => $this->faker->name(),
            'description' => $this->faker->text()
        ];
    }
}
