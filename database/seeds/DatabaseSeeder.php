<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserTableSeeder::class);
         $this->call(divisionSeeder::class);         
         $this->call(departmentSeeder::class);         
         $this->call(user_departmentSeeder::class);         
         $this->call(CourseTableSeeder::class);
         $this->call(course_departmentSeeder::class);
         $this->call(course_userSeeder::class);
         $this->call(qaSeeder::class);         
    }
}
