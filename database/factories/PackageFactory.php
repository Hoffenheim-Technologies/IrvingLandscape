<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Package>
 */
class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->paragraphs(3, true),
            'period' => $this->faker->numberBetween($min = 1, $height = 12). ' months',
            'price' => $this->faker->numberBetween($min = 100, $max = 10000),
        ];
    }
}
