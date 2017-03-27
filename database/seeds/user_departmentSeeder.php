<?php

use Illuminate\Database\Seeder;

class user_departmentSeeder extends Seeder
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
        $table->integer('user_id');
        $table->integer('department_id');
        $table->integer('division_id');
        */
        DB::table('user_department')->insert([
            'user_id' => 0, 'department_id' => 0, 'division_id' => 0, 
        ]);
        DB::table('user_department')->insert([
            'user_id' => 1, 'department_id' => 2, 'division_id' => 0, 
        ]);
        DB::table('user_department')->insert([
            'user_id' => 2, 'department_id' => 3, 'division_id' => 0, 
        ]);
        DB::table('user_department')->insert([
            'user_id' => 3, 'department_id' => 1, 'division_id' => 0, 
        ]);
        DB::table('user_department')->insert([
            'user_id' => 4, 'department_id' => 0, 'division_id' => 0, 
        ]);
        DB::table('user_department')->insert([
            'user_id' => 5, 'department_id' => 1, 'division_id' => 0, 
        ]);
        DB::table('user_department')->insert([
            'user_id' => 6, 'department_id' => 2, 'division_id' => 0, 
        ]);
        DB::table('user_department')->insert([
            'user_id' => 7, 'department_id' => 5, 'division_id' => 0, 
        ]);
        DB::table('user_department')->insert([
            'user_id' => 8, 'department_id' => 7, 'division_id' => 0, 
        ]);
        DB::table('user_department')->insert([
            'user_id' => 9, 'department_id' => 8, 'division_id' => 0, 
        ]);
        DB::table('user_department')->insert([
            'user_id' => 10, 'department_id' => 9, 'division_id' => 0, 
        ]);
        DB::table('user_department')->insert([
            'user_id' => 11, 'department_id' => 2, 'division_id' => 0, 
        ]);
        DB::table('user_department')->insert([
            'user_id' => 12, 'department_id' => 3, 'division_id' => 0, 
        ]);
        DB::table('user_department')->insert([
            'user_id' => 13, 'department_id' => 5, 'division_id' => 0, 
        ]);
        DB::table('user_department')->insert([
            'user_id' => 14, 'department_id' => 7, 'division_id' => 0, 
        ]);
        DB::table('user_department')->insert([
            'user_id' => 15, 'department_id' => 5, 'division_id' => 0, 
        ]);
        DB::table('user_department')->insert([
            'user_id' => 16, 'department_id' => 1, 'division_id' => 0, 
        ]);
        DB::table('user_department')->insert([
            'user_id' => 17, 'department_id' => 3, 'division_id' => 0, 
        ]);
        DB::table('user_department')->insert([
            'user_id' => 18, 'department_id' => 2, 'division_id' => 0, 
        ]);
        DB::table('user_department')->insert([
            'user_id' => 19, 'department_id' => 4, 'division_id' => 0, 
        ]);
        DB::table('user_department')->insert([
            'user_id' => 20, 'department_id' => 0, 'division_id' => 0, 
        ]);
        DB::table('user_department')->insert([
            'user_id' => 21, 'department_id' => 3, 'division_id' => 0, 
        ]);
        DB::table('user_department')->insert([
            'user_id' => 22, 'department_id' => 7, 'division_id' => 0, 
        ]);
        DB::table('user_department')->insert([
            'user_id' => 23, 'department_id' => 4, 'division_id' => 0, 
        ]);
        DB::table('user_department')->insert([
            'user_id' => 24, 'department_id' => 2, 'division_id' => 0, 
        ]);
        DB::table('user_department')->insert([
            'user_id' => 25, 'department_id' => 0, 'division_id' => 0, 
        ]);
    }
}
