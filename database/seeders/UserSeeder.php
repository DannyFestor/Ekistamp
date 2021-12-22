<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create(['email' => 'superadmin@ekistamp.info', 'name' => 'Superadmin User']);
        User::factory()->create(['email' => 'admin@ekistamp.info', 'name' => 'Admin User']);
        User::factory()->create(['email' => 'moderator@ekistamp.info', 'name' => 'Moderator User']);
        User::factory()->create(['email' => 'curator@ekistamp.info', 'name' => 'Curator User']);
        User::factory()->create(['email' => 'user@ekistamp.info', 'name' => 'User']);
        User::factory()->unverified()->create(['email' => 'unverified@ekistamp.info', 'name' => 'User']);
        User::factory()->create(['email' => 'shadowbanned@ekistamp.info', 'name' => 'Shadowbanned User']);
        User::factory()->deleted()->create(['email' => 'deleted@ekistamp.info', 'name' => 'Deleted User']);
        User::factory(10)->create();
    }
}
