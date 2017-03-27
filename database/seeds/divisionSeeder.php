<?php

use Illuminate\Database\Seeder;

class divisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('divisions')->insert(['name' => 'Electrical', ]);
        DB::table('divisions')->insert(['name' => 'Civil', ]);
        DB::table('divisions')->insert(['name' => 'Human Resource', ]);
    }
}
