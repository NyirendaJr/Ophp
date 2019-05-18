<?php

namespace Controllers;
use Models\Question;
class QuestionController{

    public static function createQuestion($question,$user_id){
        $question = Question::create([
            'question'=>$question,
            'user_id'=>$user_id
        ]);
        return $question;
    }

    public static function getQuestionWithAnswers(){
        $questions = Question::with('answers')->get();
        return $questions;
    }
}
