<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserDepartment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('user_department', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('user_id');
        $table->integer('department_id');
        $table->integer('division_id');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('user_department');        
        Schema::drop('user_department');
    }
}
