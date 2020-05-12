<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \Statickidz\GoogleTranslate;

class TranslateController extends Controller
{
   	public function translate($sourceDetected, $languageTarget, $text){

   		//$languageDetect = new LanguageDetectController();

   		//$ld = $languageDetect->getLanguageDetect($text);
        $source = $sourceDetected;
   		$target = $languageTarget;

   		$trans = new GoogleTranslate();
   		$result = $trans->translate($source, $target, $text);
	   	return $result;
   }

}
