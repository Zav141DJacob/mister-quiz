<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {

        $art = $this->getCategoryAnswerValues('art');
        $geography = $this->getCategoryAnswerValues('geography');;
        $history = $this->getCategoryAnswerValues('history');;
        $science = $this->getCategoryAnswerValues('science');;
        $sports = $this->getCategoryAnswerValues('sports');;

        return view('profile', ['categories' => ['art' => $art, 'geography' => $geography, 'history' => $history, 'science' => $science, 'sports' => $sports]]);
    }

    /**
     * Looks through the database for correct and incorrect answers
     * and counts the answers into an array
     * @return array
     */
    public function getCategoryAnswerValues($category): array
    {
        $answers = Quiz::where('user_id', auth()->id())->where('category', $category);
//        dd($answers->get(), $answers->count());
        $totalCount =  $answers->count();
        $correct = $answers->where('score', '>', 0)->count();
//        $incorrect = $answers->where('score', 0)->count();
//        dd($totalCount);
//        dd($category,$answers->count(), $answers->where('score', '!=', 0)->count(), $correct);
        return [
            'name' => $category,
            'answeredCorrectly' => $correct,
            'quizzed' => $totalCount,
            'percentage' => $correct / ($totalCount === 0 ? 1 : $totalCount) * 100
        ];
    }
}
