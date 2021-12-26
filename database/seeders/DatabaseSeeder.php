<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            PrefectureSeeder::class,
            CitySeeder::class,
            CompanySeeder::class,
            LineSeeder::class,
            PostcodeSeeder::class,
        ]);

        // Update ID index on PSQL...
        $tables = \DB::select('SELECT table_name FROM information_schema.tables WHERE table_schema = \'public\' ORDER BY table_name;');

// Set the tables in the database you would like to ignore
        $ignores = array('password_resets');

//loop through the tables
        foreach ($tables as $table) {

            // if the table is not to be ignored then:
            if (!in_array($table->table_name, $ignores)) {

                //Get the max id from that table and add 1 to it
                $seq = \DB::table($table->table_name)->max('id') + 1;

                // alter the sequence to now RESTART WITH the new sequence index from above
                \DB::select('ALTER SEQUENCE ' . $table->table_name . '_id_seq RESTART WITH ' . $seq);

            }

        }
    }
}
