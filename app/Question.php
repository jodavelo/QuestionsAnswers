<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    $primaryKey = 'question_id';

    /**
	 * Get the answer record associated with the question
    **/

    public function answer(){
    	return $this->hasOne('App\Answer');
    }
}
