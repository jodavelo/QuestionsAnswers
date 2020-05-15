<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/translate', 'TranslateController@translate');
Route::get('/detect', 'LanguageDetectController@getLanguageDetect');

Route::get('/', function () {
    return view('layouts.index');
});

//Route::get('test/{question}', 'BusinessLogicController@testMethod');
Route::get('test/{question}', 'BusinessLogicController@mainMethod');

Route::get('simi1', 'SimilarityController@primerMetodo');
Route::get('simi2', 'SimilarityController@segundoMetodo');

Route::get('save', 'TestController@test');
Route::get('questions', 'SimilarityController@getQuestionSimilarity');
//Route::get('languageTest/{iso}', 'LanguageDetectController@getDBLanguageId');
Route::get('lg2', 'TestController@testLanguageDetect2');
Route::get('save_report', 'ReportController@saveReport');