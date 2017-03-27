<?php

use Illuminate\Database\Seeder;

class course_departmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /*
        $table->increments('id');
        $table->integer('course_id');
        $table->integer('department_id');
        */
        DB::table('course_department')->insert([
        'course_id' => 0, 'department_id' => 0,
        ]);
        DB::table('course_department')->insert([
        'course_id' => 1, 'department_id' => 0,
        ]);
        DB::table('course_department')->insert([
        'course_id' => 2, 'department_id' => 0,
        ]);
        DB::table('course_department')->insert([
        'course_id' => 3, 'department_id' => 0,
        ]);
        DB::table('course_department')->insert([
        'course_id' => 4, 'department_id' => 0,
        ]);
        DB::table('course_department')->insert([
        'course_id' => 0, 'department_id' => 1,
        ]);
        DB::table('course_department')->insert([
        'course_id' => 1, 'department_id' => 1,
        ]);
    }
}
