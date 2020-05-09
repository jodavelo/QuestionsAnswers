<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('questions')->insert([
        	'question' => 'How are you today?',
        ]);

        DB::table('questions')->insert([
        	'question' => "How's the weather today?",
        ]);
    }
}
