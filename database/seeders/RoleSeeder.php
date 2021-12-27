<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::updateOrCreate(
            ['id' => 1], ['name' => 'Superuser', 'description' => 'A Superuser can do everything, nobody can edit this permission']
        );
        Role::updateOrCreate(
            ['id' => 2], ['name' => 'Admin', 'description' => 'An Administrator can change all the settings of the app']
        );
        Role::updateOrCreate(
            ['id' => 3], ['name' => 'Moderator', 'description' => 'A Moderator can see, approve, add, edit and delete all Stamps, Posts and Comments']
        );
        Role::updateOrCreate(
            ['id' => 4], ['name' => 'Curator', 'description' => 'A Curator can see, approve, add, edit and delete all Stamps']
        );
        Role::updateOrCreate(
            ['id' => 5], ['name' => 'User', 'description' => 'A User can submit new Stamps, create Posts and Comments']
        );
        Role::updateOrCreate(
            ['id' => 6], ['name' => 'Shadowbanned', 'description' => 'A Shadowbanned User can create Stamps, Posts and Comments, but they do not appear']
        );
    }
}
