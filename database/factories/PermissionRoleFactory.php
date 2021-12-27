<?php

namespace Database\Factories;

use App\Models\Permission;
use Illuminate\Database\Eloquent\Factories\Factory;

class PermissionRoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'permission_id' => Permission::inRandomOrder()->first()->id,
            'role_id' => Role::inRandomOrder()->first()->id,
        ];
    }
}
