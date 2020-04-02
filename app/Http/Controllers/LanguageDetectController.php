<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
