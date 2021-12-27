<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = Role::all();
        $permissions = Permission::all();

        $superuser = $roles->find(1);
        $superuser->permissions()->sync($permissions->where('name', '=', 'all')->first());

        $admin = $roles->find(2);
        $admin->permissions()->sync($permissions->where('name', '!=', 'all')->pluck('id')->toArray());

        $moderator = $roles->find(3);
        $moderator->permissions()->sync(
            $permissions
                ->filter(function ($permission) {
                    return $permission->name === 'access_admin' || Str::endsWith($permission->name, ['_prefecture', '_city', '_station', '_stamp', '_post', '_comment']);
                })
                ->pluck('id')
        );

        $curator = $roles->find(4);
        $curator->permissions()->sync(
            $permissions
                ->filter(function ($permission) {
                    return $permission->name === 'access_admin' || Str::endsWith($permission->name, ['_prefecture', '_city', '_station', '_stamp', 'create_post', 'create_comment']);
                })
                ->pluck('id')
        );

        $user = $roles->find(5);
        $user->permissions()->sync(
            $permissions
                ->filter(function ($permission) {
                    return Str::endsWith($permission->name, ['create_post', 'create_comment']);
                })
                ->pluck('id')
        );

        $shadowbanned = $roles->find(6);
    }
}
