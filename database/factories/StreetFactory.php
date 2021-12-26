<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Postcode;
use App\Models\Prefecture;
use Illuminate\Database\Eloquent\Factories\Factory;

class StreetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "prefecture_id" => Prefecture::inRandomOrder()->first()->id,
            "city_id" => City::inRandomOrder()->first()->id,
            "postcode_id" => Postcode::inRandomOrder()->first()->id,
            "name" => implode("-", $this->faker->unique()->words(3)),
            "romaji" => implode("-", $this->faker->unique()->words(3)),
            "hiragana" => implode("-", $this->faker->unique()->words(3)),
            "katakana" => implode("-", $this->faker->unique()->words(3)),
            "katakana_half" => implode("-", $this->faker->unique()->words(3)),
        ];
    }
}
