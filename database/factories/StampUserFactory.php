<?php

namespace Database\Factories;

use App\Models\Stamp;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class StampUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'stamp_id' => Stamp::inRandomOrder()->first()->id,
            'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}
