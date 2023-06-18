<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store()
    {
        //validate
        $attributes = request()->validate([
            'username' => 'required|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|min:7|max:255'
        ]);

//        dd($attributes);
        //create
        $user = User::create($attributes);

        //login
        auth()->login($user);

        //redirect
        return redirect()->route('home');
    }
}
