<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Report;
use App\Answer;

class BusinessLogicController extends Controller
{
    public function mainMethod($question){
    	$similarityController = new SimilarityController();
    	$languageDetect = new LanguageDetectController();
    	$translate = new TranslateController();
    	$langDetected = $languageDetect->getLanguageDetect($question);
    	$textTranslated1 = $translate->translate($langDetected, 'en',$question);
    	$questionMatch = $similarityController->getQuestionSimilarity($textTranslated1);
    	if($questionMatch == null){
    		return "Not results found";
    	}
    	$answerMatch = Answer::find($questionMatch->question_id);
    	$languageId = $languageDetect->getDBLanguageId($langDetected);
    	$answerId = $answerMatch->answer_id;
    	$textTranslated2 = $translate->translate('en', $langDetected, $answerMatch->answer);
    	//dd($textTranslated2);
	    return $textTranslated2;
	    //return $langDetected;
   }

   public function saveReport($answerId,  $languageId){
   		$report = new Report();
   		$report->answer_id;
   		$report->language_id;
   		//$report->save();
   }
}
