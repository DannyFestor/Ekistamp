<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Prefecture;
use Illuminate\Database\Eloquent\Factories\Factory;

class LineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'prefecture_id' => Prefecture::inRandomOrder()->first()->id,
            'company_id' => Company::inRandomOrder()->first()->id,
            'name' => implode('-', $this->faker->unique()->words(3)),
        ];
    }
}
