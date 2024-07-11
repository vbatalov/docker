<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Place>
 */
class PlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => User::factory(),
            "name" => fake()->name(),
            "coordinates" => fake()->randomElements([1.12, 2.31, 30.1, 4.31, 5.11, 6.12, 7.33, 12.32,21.22, 9.11], count: 2, allowDuplicates: false),
        ];
    }
}
