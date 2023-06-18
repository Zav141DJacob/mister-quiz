<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    public function index()
    {
//        dd(User::orderByXp());
        return view('leaderboard', [
            'users' => User::orderByXp()->paginate(10),
        ]);
    }
}
