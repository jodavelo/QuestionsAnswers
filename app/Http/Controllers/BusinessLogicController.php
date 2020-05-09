<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessLogicController extends Controller
{
    public function testMethod($question){
    	$languageDetect = new LanguageDetectController();
    	$translate = new TranslateController();
    	$langDetected = $languageDetect->getLanguageDetect($question);
    	$textTranslated1 = $translate->translate($langDetected, $question);
	   	$respuesta = $textTranslated1;
	    //return $respuesta."?";
	    return $langDetected;
   }
}
