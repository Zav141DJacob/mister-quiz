<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'question';

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }

    public function getUnsubmitted()
    {
//        dd(Quiz::where('question_id', $this->id)->where('submitted', false)->first());
        return Quiz::where('question_id', $this->id)->where('submitted', false)->first();
//            Question::whereHas('quizzes', function($query){
//            $query->where('submitted', false);
//        })->with('quizzes')->get();
    }
}
