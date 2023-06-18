@extends('app')

@section('content')

<a class="top-right-corner red-btn" href="{{ route('home') }}">Back ></a>

<div style="margin-top:100px">
    <div class="profile-header">
        <p class="title profile-name">{{ auth()->user()->username }}</p>
        <p class="title profile-email">{{ auth()->user()->email }}</p>
    </div>

    <div class="profile-header">
        <p class="title profile-xp">{{ auth()->user()->quizzes()->sum('score') }} XP</p>

    </div>
    <div class="profile-header">
        <p class="title profile-xp">
            Rank :
            @if(auth()->user()->quizzes()->sum('score') < 1500)
                Quiz Apprentice
            @elseif(auth()->user()->quizzes()->sum('score') < 5000)
                Average Quizer
            @elseif(auth()->user()->quizzes()->sum('score') < 10000)
                Epic Quizer
            @else
                Quiz Master
            @endif
        </p>

    </div>

{{--    the percentage of correct answers for each category--}}
{{--    number of correct answers for each category--}}
{{--    number of total questions answered for each category--}}
    @foreach($categories as $category)
        <div class="profile-header">
            <p class="title profile-xp">
                {{ucwords($category['name'])}} :
            </p>
            <div>

                <p class="title profile-email">Answered {{ $category['answeredCorrectly'] }} question{{$category['answeredCorrectly'] === 1 ? '' : 's'}} correctly</p>
                <p class="title profile-email">Total quizzed {{ $category['quizzed'] }}</p>
                <p class="title profile-email">Percentage : {{$category['percentage']}}%</p>
            </div>
        </div>

    @endforeach
</div>



@endsection
