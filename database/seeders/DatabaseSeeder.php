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
            StreetSeeder::class,
            StationSeeder1::class,
            StationSeeder2::class,
            StationSeeder3::class,
            StationSeeder4::class,
            StationSeeder5::class,
            StationSeeder6::class,
            StationSeeder7::class,
            StationSeeder8::class,
            StationSeeder9::class,
            StationSeeder10::class,
            StationSeeder11::class,
            StationSeeder12::class,
            StationSeeder13::class,
            StationSeeder14::class,
            StationSeeder15::class,
            StationSeeder16::class,
            StationSeeder17::class,
            StationSeeder18::class,
            StationSeeder19::class,
            StationSeeder20::class,
            StationSeeder21::class,
            StationSeeder22::class,
            StationSeeder23::class,
            StationSeeder24::class,
            StationSeeder25::class,
            StationSeeder26::class,
            StationSeeder27::class,
            StationSeeder28::class,
            StationSeeder29::class,
            StationSeeder30::class,
            StationSeeder31::class,
            StationSeeder32::class,
            StationSeeder33::class,
            StationSeeder34::class,
            StationSeeder35::class,
            StationSeeder36::class,
            StationSeeder37::class,
            StationSeeder38::class,
            StationSeeder39::class,
            StationSeeder40::class,
            StationSeeder41::class,
            StationSeeder42::class,
            StationSeeder43::class,
            StationSeeder44::class,
            StationSeeder45::class,
            StationSeeder46::class,
            StationSeeder47::class,
            LineStationSeeder::class,
            StampSeeder::class,
            StampUserSeeder::class,
            RoleSeeder::class,
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
