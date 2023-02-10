<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(200),
            'price' => $this->faker->numberBetween(30, 150),
            'ranking' => $this->faker->numberBetween(1,5),
            'image' => $this->faker->imageUrl(800,600),
        ];
    }
}
