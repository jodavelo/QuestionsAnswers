<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('language')->insert([
        	'language' => 'spanish',
        	'iso2' => 'es'
        ]);
        DB::table('language')->insert([
        	'language' => 'english',
        	'iso2' => 'en'
        ]);
        DB::table('language')->insert([
        	'language' => 'french',
        	'iso2' => 'fr'
        ]);
    }
}
