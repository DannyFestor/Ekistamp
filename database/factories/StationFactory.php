<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Prefecture;
use App\Models\Street;
use Illuminate\Database\Eloquent\Factories\Factory;

class StationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "prefecture_id" => Prefecture::inRandomOrder()->first(),
            "city_id" => City::inRandomOrder()->first(),
            "street_id" => Street::inRandomOrder()->first(),
            "name" => implode("-", $this->faker->unique()->words(3)),
            "hiragana" => implode("-", $this->faker->unique()->words(3)),
            "katakana" => implode("-", $this->faker->unique()->words(3)),
            "katakana_half" => implode("-", $this->faker->unique()->words(3)),
            "romaji" => implode("-", $this->faker->unique()->words(3)),
            "memo" => implode("-", $this->faker->unique()->words(3)),
            "latitude" => "41.773758",
            "altitude" => "140.726374",
        ];
    }
}
