<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Report;

use DB;
use App\Http\Resources\AnswersByLanguageResource;
use App\Http\Resources\UnsolicitedQuestionsResource;

use App\Question;

class ReportController extends Controller
{
    public function saveReport($answerId, $languageId){
   		$report = new Report();
   		$report->answer_id = $answerId;
   		$report->language_id = $languageId;
   		//dd($report);
   		$report->save();
   }

   	public function answersByLanguage(){
   		$query = "SELECT rp.language_id, lg.language, count(an.answer_id) as numero_repuesta_dadas
					from report rp
						inner join answers an on an.answer_id = rp.answer_id
						inner join language lg on lg.language_id = rp.language_id
					    inner join questions q on q.question_id = an.question_id
					group by rp.language_id, lg.language";
		$result = DB::select($query);
		return AnswersByLanguageResource::collection(collect($result));
   	}

   	public function numberOfUnsolicitedQuestions(){
   		$arrayQuery1 = array();
   		$arrayQuery2 = array();
   		$query1 = "SELECT question_id from questions;";
   		$query2 = "SELECT question_id
					from answers 
					where answer_id in (
						SELECT DISTINCT  answer_id 
						FROM report
					);";
		$result1 = DB::select($query1);
		$result2 = DB::select($query2);
		foreach ($result1 as $key => $value) {
			array_push($arrayQuery1, $value->question_id);
		}
		foreach ($result2 as $key => $value) {
			array_push($arrayQuery2, $value->question_id);
		}
		$dif = array_diff($arrayQuery1, $arrayQuery2);
		$number = sizeof($dif);	
		
		return new UnsolicitedQuestionsResource($number);
    }
}
