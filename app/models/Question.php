<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model{
    protected $table = 'questions';
    protected $guarded = [];

    /**
     * get answers of the question
     */
    public function answers(){
        return $this->hasMany(Answer::class);
    }
}
