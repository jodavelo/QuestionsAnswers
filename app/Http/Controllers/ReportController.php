<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Report;

class ReportController extends Controller
{
    public function saveReport($answerId, $languageId){
   		$report = new Report();
   		$report->answer_id = $answerId;
   		$report->language_id = $languageId;
   		//dd($report);
   		$report->save();
   }
}
