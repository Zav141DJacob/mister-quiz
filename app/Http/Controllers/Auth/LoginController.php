<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Nette\Schema\ValidationException;


class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store()
    {
        //validate
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
//        dd($attributes);

        //attempt login
        if (!auth()->attempt($attributes)) {
            throw \Illuminate\Validation\ValidationException::withMessages([
               'email' => "Provided credentials could not be verified"
            ]);
        }

        //create session
        session()->regenerate();

        //redirect
        return redirect()->route('home');
    }
}
