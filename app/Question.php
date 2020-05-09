<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    $incrementing = true;
    $primaryKey = 'question_id';

    /**
	 * Get the answer record associated with the question
    **/

    public function answer(){
    	return $this->hasOne(Answer::class, 'answer_id');
    }
}
