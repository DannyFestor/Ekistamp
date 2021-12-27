<?php

namespace Database\Seeders;

use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::find(1)->roles()->attach(1);
        User::find(2)->roles()->attach(2);
        User::find(3)->roles()->attach(3);
        User::find(4)->roles()->attach(4);
        User::find(5)->roles()->attach(5);
        User::find(6)->roles()->attach(6);

        $remainingUsers = User::select('id')->where('id', '>=', 7)->pluck('id');
        RoleUser::insert(
            $remainingUsers->map(function ($userId) {
                return [
                    'role_id' => 5,
                    'user_id' => $userId,
                ];
            })->toArray()
        );
    }
}
