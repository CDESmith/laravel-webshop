<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductVariant>
 */
class ProductVariantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'colour' => $this->faker->randomElement(['Green', 'Yellow', 'Brown', 'Pink', 'Technicolour']),
            'size' => $this->faker->randomElement(['S', 'M', 'L', 'XL', 'XXL'])
        ];
    }
}
