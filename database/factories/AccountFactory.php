<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'description' => $this->faker->paragraphs(3, true),
            'type' => $this->faker->randomElement(['Credit', 'Debit']),
            'cost' => $this->faker->numberBetween($min = 100, $max = 10000),
        ];
    }
}
