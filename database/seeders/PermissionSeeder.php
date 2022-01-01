<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::factory()->create(['name' => 'all', 'description' => 'This Permission allows for everything']);
        Permission::factory()->create(['name' => 'access_admin', 'description' => 'This Permission allows accessing the Admin Panel']);
        Permission::factory()->create(['name' => 'show_permission', 'description' => 'Allows Showing of Permissions']);
        Permission::factory()->create(['name' => 'create_permission', 'description' => 'Allows Creation of Permissions']);
        Permission::factory()->create(['name' => 'edit_permission', 'description' => 'Allows Edit of Permissions']);
        Permission::factory()->create(['name' => 'delete_permission', 'description' => 'Allows Delete of Permissions']);
        Permission::factory()->create(['name' => 'show_role', 'description' => 'Allows Showing of Roles']);
        Permission::factory()->create(['name' => 'create_role', 'description' => 'Allows Creation of Roles']);
        Permission::factory()->create(['name' => 'edit_role', 'description' => 'Allows Edit of Roles']);
        Permission::factory()->create(['name' => 'delete_role', 'description' => 'Allows Delete of Roles']);
        Permission::factory()->create(['name' => 'assign_role', 'description' => 'Allows Assing of Roles to User']);
        Permission::factory()->create(['name' => 'show_prefecture', 'description' => 'Allows Showing of Prefectures']);
        Permission::factory()->create(['name' => 'create_prefecture', 'description' => 'Allows Creation of Prefectures']);
        Permission::factory()->create(['name' => 'edit_prefecture', 'description' => 'Allows Edit of Prefectures']);
        Permission::factory()->create(['name' => 'delete_prefecture', 'description' => 'Allows Delete of Prefectures']);
        Permission::factory()->create(['name' => 'show_city', 'description' => 'Allows Showing of Cities']);
        Permission::factory()->create(['name' => 'create_city', 'description' => 'Allows Creation of Cities']);
        Permission::factory()->create(['name' => 'edit_city', 'description' => 'Allows Edit of Cities']);
        Permission::factory()->create(['name' => 'delete_city', 'description' => 'Allows Delete of Cities']);
        Permission::factory()->create(['name' => 'show_street', 'description' => 'Allows Showing of Streets']);
        Permission::factory()->create(['name' => 'create_street', 'description' => 'Allows Creation of Streets']);
        Permission::factory()->create(['name' => 'edit_street', 'description' => 'Allows Edit of Streets']);
        Permission::factory()->create(['name' => 'delete_street', 'description' => 'Allows Delete of Streets']);
        Permission::factory()->create(['name' => 'show_postcode', 'description' => 'Allows Showing of Postcodes']);
        Permission::factory()->create(['name' => 'create_postcode', 'description' => 'Allows Creation of Postcodes']);
        Permission::factory()->create(['name' => 'edit_postcode', 'description' => 'Allows Edit of Postcodes']);
        Permission::factory()->create(['name' => 'delete_postcode', 'description' => 'Allows Delete of Postcodes']);
        Permission::factory()->create(['name' => 'show_company', 'description' => 'Allows Showing of Companies']);
        Permission::factory()->create(['name' => 'create_company', 'description' => 'Allows Creation of Companies']);
        Permission::factory()->create(['name' => 'edit_company', 'description' => 'Allows Edit of Companies']);
        Permission::factory()->create(['name' => 'delete_company', 'description' => 'Allows Delete of Companies']);
        Permission::factory()->create(['name' => 'show_line', 'description' => 'Allows Showing of Lines']);
        Permission::factory()->create(['name' => 'create_line', 'description' => 'Allows Creation of Lines']);
        Permission::factory()->create(['name' => 'edit_line', 'description' => 'Allows Edit of Lines']);
        Permission::factory()->create(['name' => 'delete_line', 'description' => 'Allows Delete of Lines']);
        Permission::factory()->create(['name' => 'show_station', 'description' => 'Allows Showing of Stations']);
        Permission::factory()->create(['name' => 'create_station', 'description' => 'Allows Creation of Stations']);
        Permission::factory()->create(['name' => 'edit_station', 'description' => 'Allows Edit of Stations']);
        Permission::factory()->create(['name' => 'delete_station', 'description' => 'Allows Delete of Stations']);
        Permission::factory()->create(['name' => 'show_stamp', 'description' => 'Allows Showing of Stamps']);
        Permission::factory()->create(['name' => 'create_stamp', 'description' => 'Allows Creation of Stamps']);
        Permission::factory()->create(['name' => 'edit_stamp', 'description' => 'Allows Edit of Stamps']);
        Permission::factory()->create(['name' => 'delete_stamp', 'description' => 'Allows Delete of Stamps']);
        Permission::factory()->create(['name' => 'show_post', 'description' => 'Allows Showing of Posts']);
        Permission::factory()->create(['name' => 'create_post', 'description' => 'Allows Creation of Posts']);
        Permission::factory()->create(['name' => 'edit_post', 'description' => 'Allows Edit of Posts']);
        Permission::factory()->create(['name' => 'delete_post', 'description' => 'Allows Delete of Posts']);
        Permission::factory()->create(['name' => 'show_comment', 'description' => 'Allows Showing of Comment']);
        Permission::factory()->create(['name' => 'create_comment', 'description' => 'Allows Creation of Comment']);
        Permission::factory()->create(['name' => 'edit_comment', 'description' => 'Allows Edit of Comment']);
        Permission::factory()->create(['name' => 'delete_comment', 'description' => 'Allows Delete of Comment']);
    }
}
