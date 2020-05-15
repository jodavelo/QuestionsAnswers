<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Language;
use \DetectLanguage\DetectLanguage;

class TestController extends Controller
{
    public function test(){
    	$language = new Language();
    	$language->language = "italian";
    	$language->iso2 = 'it';
    	//$language->save();
    	dd("finish");
    }

    public function testLanguageDetect2(){
    	$detectLanguage = new DetectLanguage();
    	$detectLanguage::setApiKey("your api key");
    	$results = $detectLanguage::simpleDetect("comme celles-ci");
    	dd($results);
    }
}
