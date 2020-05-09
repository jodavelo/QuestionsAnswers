<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'language';
    $incrementing = true;
    $primaryKey = 'language_id';

    // 1->*
    public function answer(){
    	return $this->hasMany(Answer::class, 'answer_id');
    }
}
