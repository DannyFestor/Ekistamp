<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PermissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => implode('-', $this->faker->unique()->words(2)),
            'description' => $this->faker->realTextBetween(10, 100, 3),
        ];
    }
}
