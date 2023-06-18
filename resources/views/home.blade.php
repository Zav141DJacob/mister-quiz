@extends('app')

@section('content')

@auth
<a class="top-left-corner blue-btn" href="{{ route('profile') }}">{{ auth()->user()->username }}</a>
@endauth

<x-header/>

<div class="main-img">
    <img src="{{ asset('images/mister_quiz.png') }}" alt="">
    <p class="title">Mister Quiz</p>

    <a style="margin-bottom:20px" class="green-btn center" href="{{ route('quiz') }}">Start Quiz</a>
</div>

@endsection
