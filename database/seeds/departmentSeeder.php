<?php

use Illuminate\Database\Seeder;

class departmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Electrical
        DB::table('departments')->insert([
        'name' => 'Maintenance', 'parent_id' => -1, 'division_id' => 0, ]); //0
        DB::table('departments')->insert([
        'name' => 'Line Maintenance', 'parent_id' => 0, 'division_id' => 0, ]);  //1        
        DB::table('departments')->insert([
        'name' => 'Components', 'parent_id' => 0, 'division_id' => 0, ]);  //2
        DB::table('departments')->insert([
        'name' => 'Repair & Replacement', 'parent_id' => -1, 'division_id' => 0, ]); //3
        //Civil
        DB::table('departments')->insert([
        'name' => 'Construction', 'parent_id' => -1, 'division_id' => 1, ]); //4
        DB::table('departments')->insert([
        'name' => 'Equipments', 'parent_id' => 4, 'division_id' => 1, ]); //5
        DB::table('departments')->insert([
        'name' => 'Demolition', 'parent_id' => -1, 'division_id' => 1, ]); //6
        //HR
        DB::table('departments')->insert([
        'name' => 'Recruitment', 'parent_id' => -1, 'division_id' => 2, ]); //7
        DB::table('departments')->insert([
        'name' => 'Training', 'parent_id' => -1, 'division_id' => 2, ]); //8
        DB::table('departments')->insert([
        'name' => 'Administration', 'parent_id' => -1, 'division_id' => 2, ]); //9
    }
}
