<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'report';
    public $incrementing = true;
    public $primaryKey = 'report_id';
    public $timestamps = false;

    // *->1
    public function answer(){
    	return $this->belongsTo(Answer::class, 'answer_id');
    }

    public function language(){
    	return $this->belongsTo(Language::class, 'language_id');
    }
}
