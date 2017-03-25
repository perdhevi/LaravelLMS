<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserCourse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Setting Course taken by the user
        Schema::create('course_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id');
            $table->integer('user_id');
            $table->integer('status');  //0:taking 10:complete 20:canceled
            
            $table->timestamps();
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
        Schema::drop('course_user');
    }
}
