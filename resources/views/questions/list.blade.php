@extends('app')

@section('content')



@if ($quiz)
@foreach ($quiz['questions'] as $question)
    <x-question :question="$question" />
@endforeach
@endif
<form method="POST" action="{{ route('quiz') }}" >
    @csrf
    <button type="submit" class="center green-btn">Submit</button>
</form>


@endsection
