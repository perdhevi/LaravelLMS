<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuizUserAnswer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('answer_quiz_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quiz_user_id');
            $table->integer('sequence');
            $table->integer('question_id');
            $table->integer('answer_id');
            $table->integer('score');
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
        Schema::drop('answer_quiz_user');  
    }
}
