<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    public function index()
    {
//        dd(User::orderByXp());
        $users = User::orderByXp();
//        dd($users->get());
        return view('leaderboard', [
            'users' => $users->paginate(10),
        ]);
    }
}
