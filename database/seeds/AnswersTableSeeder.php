<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
        	'question_id' => 1,
        	'answer' => 'Very well, ready for anything',
        ]);
        DB::table('answers')->insert([
        	'question_id' => 2,
        	'answer' => 'bit cloudy',
        ]);
    }
}
