<?php

namespace Database\Seeders;

use App\Models\Stamp;
use Illuminate\Database\Seeder;

class StampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stamp::factory(500)->create();
    }
}
