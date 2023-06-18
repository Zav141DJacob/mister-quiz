@props(['question'])
{{--<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.x.x/dist/alpine.min.js" defer></script>--}}

<form method="POST" action="/quiz/{{$question->getUnsubmitted()->id}}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div id="{{$question->id}}" class="mb4">
        <p class="center title ">Category: {{ $question->category }}</p>
        <p class="center title">{{ $question->question }}</p>

            <div class="checkboxes-wrapper container">
                @foreach ($question->answers as $answer)
{{--                    @dd($answer->id,$question->getUnsubmitted()->selected)--}}
                    <button class="box {{$answer->id == $question->getUnsubmitted()->selected ? 'glow' : 'non-glow'}}" name="selected" type="submit" value="{{$answer->id}}">{{$answer->answer}}</button>
                @endforeach
            </div>
        <div class="center line"></div>
    </div>
</form>
