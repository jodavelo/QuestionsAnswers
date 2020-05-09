<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answers';
    $incrementing = true;
    $primaryKey = 'answer_id';


    /**
	* Get the question related to answer
    */
	public function question(){
		return $this->belongsTo(Question::class, 'question_id');
	}

	// 1->*
	public function language(){
		return $this->hasMany(Language::class, 'language_id');
	}
}
