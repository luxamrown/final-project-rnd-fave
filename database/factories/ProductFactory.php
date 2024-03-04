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
    public function definition(): array
    {
        return [
            'productName' => $this->faker->text(20),
            'productImage' => $this->faker->imageUrl(200, 200),
            'productDescription' => $this->faker->text(50),
            'productPrice' => $this->faker->numberBetween(100000, 1000000),
            'productStock' => $this->faker->numberBetween(1, 100),
            'categoryId' => $this->faker->numberBetween(1, 4)
        ];
    }
}
