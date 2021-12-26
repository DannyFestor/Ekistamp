<?php

namespace Database\Factories;

use App\Models\Line;
use App\Models\Station;
use Illuminate\Database\Eloquent\Factories\Factory;

class LineStationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "line_id" => Line::inRandomOrder()->first()->id,
            "station_id" => Station::inRandomOrder()->first()->id,
            "order" => random_int(1, 50),
        ];
    }
}
