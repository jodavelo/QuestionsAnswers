<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Report;

use DB;
use App\Http\Resources\AnswersByLanguageResource;

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
}
