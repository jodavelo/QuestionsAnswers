<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Language;

class TestController extends Controller
{
    public function test(){
    	$language = new Language();
    	$language->language = "italian";
    	$language->iso2 = 'it';
    	//$language->save();
    	dd("finish");
    }
}
