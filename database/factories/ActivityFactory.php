<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $activities = ['Dune Buggy Extreme', 'Desert Safari', 'Camel Ride', 'Sand Boarding'];

        return [
            'sport_name' => $this->faker->randomElement($activities),
            'location' => 'Dubai Marina',
            'price' => $this->faker->numberBetween(1, 999),
        ];
    }
}
