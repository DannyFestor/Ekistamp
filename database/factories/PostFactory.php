<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->words(random_int(3, 6), true);

        return [
            'user_id' => User::whereHas('permissions', function ($query) {
                $query->where('permissions.name', '=', 'create_post');
                $query->orWhere('permissions.name', '=', 'all');
            })->inRandomOrder()->first(),
            'slug' => Str::slug($this->faker->date() . ' ' . $title, '-'),
            'title' => $title,
            'description' => $this->faker->realTextBetween(100, 300, 3),
            'content' => $this->faker->paragraphs(random_int(3, 6), true),
            'published_at' => random_int(0, 1) === 1 ? $this->faker->dateTimeBetween('-1 years') : null,
            'deleted_at' => random_int(0, 1) === 1 ? $this->faker->dateTimeBetween('-1 years') : null,
        ];
    }
}
