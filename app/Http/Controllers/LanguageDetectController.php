<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use LanguageDetection\Language;


class LanguageDetectController extends Controller
{
    public function getLanguageDetect($text){

    	$ld = new Language();
    	$result = $ld->detect($text)->bestResults()->close();
    	$keys = array_keys($result);
    	$isoLanguage = $keys[0];
    	return $isoLanguage;
    }

    public function getDBLanguageId($iso){
    	$query = "select * from language where iso2 = '$iso'";
    	$queryResult = DB::select($query);
    	return $queryResult[0]->language_id;
    }
}
