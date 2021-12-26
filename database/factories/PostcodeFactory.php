<?php

namespace Database\Factories;

use App\Models\Prefecture;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostcodeFactory extends Factory
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
            "post_code" => str_pad(random_int(1, 9999999), 7, "0", STR_PAD_LEFT),
            "post_code_prefix" => str_pad(random_int(1, 999), 3, "0", STR_PAD_LEFT),
        ];
    }
}
