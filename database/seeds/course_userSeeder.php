<?php

use Illuminate\Database\Seeder;

class course_userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('course_user')->insert([
        'course_id' => 1,
        'user_id' => 1,
        ]);        
        DB::table('course_user')->insert([
        'course_id' => 2,
        'user_id' => 1,
        ]);        
        DB::table('course_user')->insert([
        'course_id' => 1,
        'user_id' => 4,
        ]);        
        DB::table('course_user')->insert([
        'course_id' => 2,
        'user_id' => 4,
        ]);        
        DB::table('course_user')->insert([
        'course_id' => 3,
        'user_id' => 1,
        ]);        
    }
}
