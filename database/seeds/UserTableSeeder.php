<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
        'name' => 'Me',
        'email' => 'me@here.local',
        'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
        'name' => 'you',
        'email' => 'you@here.local',
        'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
        'name' => 'him',
        'email' => 'him@here.local',
        'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
        'name' => 'her',
        'email' => 'her@here.local',
        'password' => bcrypt('secret'),
        ]);
    }
}
