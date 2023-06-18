<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{

    public function index()
    {
        $category = Input::get('category', 'default category');
//        dd()
        return view('questions.results', [
            'results' => \request('results'),
        ]);
    }
    public function patch(Quiz $quiz)
    {

        $attributes = request()->validate([
            'selected' => 'required',
        ]);

        $quiz->update($attributes);

        return redirect(url()->previous()."#".$quiz->question_id);
    }
}
