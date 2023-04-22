<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Data_element>
 */
class Data_elementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'earning' => $this->faker->numberBetween(1,999999),
            'switch_earning' => $this->faker->numberBetween(1,999999),
            'conversion_bookings' => $this->faker->numberBetween(1,999999),
            'conversion_views' => $this->faker->numberBetween(1,999999),
            'switch_credits' => $this->faker->numberBetween(1,999999),
        ];
    }
}
