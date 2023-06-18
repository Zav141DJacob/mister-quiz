@extends('app')

@section('content')

<x-back-button/>


<div id="leaderboard-page">

{{--    <table>--}}


{{--        @foreach($users as $user)--}}
{{--            <ul>--}}
{{--                <p>--User: {{$user->username}} {{ $user->xp }} xp .. Correct answers: {{$user->correctAnswers()}} --</p>--}}
{{--            </ul>--}}
{{--        @endforeach--}}

{{--    </table>--}}
    <h1 class="white-text center">Top 10 Players</h1>
    <h1 class="white-text center">--------------</h1>
    <table class="zigzag leaderboard-table center">
        <thead>
        <tr>
            <th class="header">Player</th>
            <th class="header">Experience points</th>
            <th class="header">Correct answers</th>
{{--            <th class="header">Latest</th>--}}
        </tr>
        </thead>
        <tbody>

                @foreach($users as $user)
                    <tr>
                        <td>{{$user->username}}</td>
                        <td>{{ $user->quizzes_sum_score ?? 0 }}</td>
                        <td>{{$user->quizzes_count}}</td>
                    </tr>
                @endforeach
        </tbody>
    </table>
</div>


@endsection
