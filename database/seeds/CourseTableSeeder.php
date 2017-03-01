<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('courses')->insert([
        'title' => '101-Math',
        'description' => 'Basic Math 01',
        'content' => '<p>this is math 101</p><p>basic math thing</p>',
        'course_owner' => 1,
        'created_at' => '2017-01-02 10:53:00',
        ]);
        DB::table('courses')->insert([
        'title' => '111-Math',
        'description' => 'Basic Math 02',
        'content' => '<p>this is math 111</p><p>basic math thing</p>',
        'course_owner' => 1,
        'created_at' => '2017-01-02 10:53:00',
        ]);
        DB::table('courses')->insert([
        'title' => '121-Math',
        'description' => 'Basic Math 03',
        'content' => '<p>this is math 121</p><p>basic math thing</p>',
        'course_owner' => 1,
        'created_at' => '2017-01-02 10:53:00',
        ]);
        DB::table('courses')->insert([
        'title' => '101-Physic',
        'description' => 'Basic Pyhsic 01',
        'content' => '<p>this is physic 101</p><p>basic physic thing</p>',
        'course_owner' => 2,
        'created_at' => '2017-01-02 10:53:00',
        ]);
        DB::table('courses')->insert([
        'title' => '111-Physic',
        'description' => 'Basic Pyhsic 02',
        'content' => '<p>this is physic 111</p><p>basic physic thing</p>',
        'course_owner' => 2,
        'created_at' => '2017-01-02 10:53:00',
        ]);
    }
}
