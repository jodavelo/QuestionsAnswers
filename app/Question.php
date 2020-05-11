<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    public $incrementing = true;
    public $primaryKey = 'question_id';
    public $timestamps = true;

    /**
	 * Get the answer record associated with the question
    **/

    public function answer(){
    	return $this->hasOne(Answer::class, 'answer_id');
    }
}
