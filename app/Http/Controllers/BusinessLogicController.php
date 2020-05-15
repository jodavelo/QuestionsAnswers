<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Answer;

class BusinessLogicController extends Controller
{
    public function mainMethod($question){
    	$similarityController = new SimilarityController();
      $reportController = new ReportController();
    	$languageDetect = new LanguageDetectController();
    	$translate = new TranslateController();
    	$langDetected = $languageDetect->getLanguageDetect($question);
      //dd($langDetected);
    	$textTranslated1 = $translate->translate($langDetected, 'en',$question);
      //dd($textTranslated1);
    	$questionMatch = $similarityController->getQuestionSimilarity($textTranslated1);
    	if($questionMatch == null){
    		return "Not results found";
    	}
    	$answerMatch = Answer::find($questionMatch->question_id);
    	$languageId = $languageDetect->getDBLanguageId($langDetected);
    	$answerId = $answerMatch->answer_id;
      $reportController->saveReport($answerId, $languageId);
    	$textTranslated2 = $translate->translate('en', $langDetected, $answerMatch->answer);
    	//dd($languageId);
	    return $textTranslated2;
	    //return $langDetected;
   }

}
