<?php

namespace Database\Seeders;

use App\Models\Stamp;
use App\Models\User;
use Database\Factories\StampUserFactory;
use Illuminate\Database\Seeder;

class StampUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $stamps = Stamp::all();

        foreach ($users as $user) {
            $user->stamps->sync($stamps->random(random_int(10, 100))->pluck('id')->toArray());
        }
    }
}
