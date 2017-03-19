<?php

use Illuminate\Database\Seeder;

class qaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for( $i=1;$i<=40;$i++){
            $str = 'Question ' . $i;

            DB::table('questions')->insert([
                    'text' => $str ,
            ]);
            for( $j=1;$j<=4; $j++){
                $ans = 'Question '.$i.' - answer ' . $j;
                DB::table('answers')->insert([
                        'question_id' => $i,
                        'text' => $ans,
                ]);
            
            }
        }
        DB::table('quizes')->insert([
            'course_id' => 1,
            'TimeAllowance' =>20,
            'NumberOfQuestion' => 10,
            
        ]);
        
        for($i=1;$i<=20;$i++){
            DB::table('quiz_questions')->insert([
                'quiz_id' => 1,
                'question_id' => $i,
            ]);
        }
        
    }
}
