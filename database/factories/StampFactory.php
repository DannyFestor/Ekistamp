<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Station;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class StampFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'station_id' => Station::inRandomOrder()->first()->id,
            'company_id' => Company::inRandomOrder()->first()->id,
            'name' => implode('-', $this->faker->unique()->words(3)),
            'name_eng' => implode('-', $this->faker->unique()->words(3)),
            'description' => implode('-', $this->faker->unique()->words(3)),
            'description_eng' => implode('-', $this->faker->unique()->words(3)),
            'is_approved' => (bool)random_int(0, 1),
        ];
    }
}
