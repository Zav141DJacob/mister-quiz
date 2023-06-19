<?php

namespace App\Http\Controllers\Questions;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class QuestionController extends Controller
{
    public function index()
    {
        $categories = ['art', 'history', 'geography', 'science', 'sports'];
        $questions = [];

        $quizzes = Quiz::where('submitted', false)->get();
        if (count($quizzes) > 0) {

            $qs = Question::whereHas('quizzes', function($query){
                $query->where('submitted', false);
            })->with('quizzes')->get();

//            dd($qs->first());
            return view('questions.list', [
                'quiz' => ['questions' => $qs],
            ]);
        }

        //getting 1 random question from each category
        foreach ($categories as $cat) {
            $query_questions = Question::inRandomOrder()->where('category', $cat)->limit(4)->with('quizzes')->get();
            foreach ($query_questions as $qq) {
                array_push($questions, $qq);
                Quiz::create([
                        'submitted' => false,
                        'category' => $cat,
                        'question_id' => $qq->id,
                        'user_id' => \auth()->id(),
                        'score' => $qq->xp,
                ]);
            }
        }
        // Used to shuffle questions if there were multiple with the same category
//        shuffle($questions);

        return view('questions.list', [
            'quiz' => ['questions' => $questions],
        ]);
    }

    public function store()
    {
        $results = [
          'overall' => 0,
          'art' => 0,
          'geography' => 0,
          'history' => 0,
          'science' => 0,
          'sports' => 0,
        ];
        $overall = 0;
        $quizzes = \auth()->user()->quizzes()->where('submitted', false)->where('selected', '>', 0)->get();
        if (count($quizzes) < 5) {
            throw ValidationException::withMessages([
               'missing_answer' => "Please make sure you have selected an answer for every question"
            ]);
        }
        foreach ($quizzes as $quiz) {
            $answer = Answer::where('id', $quiz->selected)->get()->first();
            $quiz->submitted = true;
            if (!$answer->correct) {
                $quiz->score = 0;

            } else {
                $results['overall'] += 1;
                $results[$quiz->category] += 1;
            }
            $quiz->save();
        }

//        return view('questions.results', [
//            'results' => \request('results'),
//        ]);
        return view('questions.results', ['results' => $results]);

        //get quiz from DB
//        $quiz = Quiz::where('id', $request->quiz)->get()->first();
//        $request = $request->all();
//        //makes quiz completed
//        $quiz['submitted'] = 1;
//
//        $results = array('overall' => 0, 'art' => 0, 'geography' => 0, 'history' => 0, 'science' => 0, 'sports' => 0);
//        $xp = 0;
//
//        //figuring out which answers are correct
//        foreach ($request as $key => $value) {
//            if (is_numeric($key)) {
//                $correct_answer = Answer::where('question_id', $key)->where('correct', 1)->get()->first()['answer'];
//                if ($correct_answer == $value) {
//                    $question = Question::where('id', $key)->get()->first();
//                    $results['overall']++;
//                }
//            }
//        }
//
//        //adding xp to the
//        Auth::user()['xp'] += $xp;
//
//        //adding categories score to the user
//        foreach ($results as $key => $value) {
//            if ($key != 'overall') {
//                [$correct, $total] = [explode("/", Auth::user()[$key])[0], explode("/", Auth::user()[$key])[1]];
//                Auth::user()[$key] = ($correct + $value) . "/" . ($total + 4);
//            }
//        }
//
//        //adding xp to the user
//        Auth::user()['xp'] += $xp;
//
//        //save changes in DB
//        Auth::user()->save();
//        $quiz->save();
//
//
//        return view('questions.results', ['results' => $results]);
    }
}
