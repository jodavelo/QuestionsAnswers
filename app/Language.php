<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'language';
    public $incrementing = true;
    public $primaryKey = 'language_id';
    public $timestamps = true;

    // 1->*
    public function answer(){
    	return $this->hasMany(Answer::class, 'answer_id');
    }
}
