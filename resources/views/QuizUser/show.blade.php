@extends('layout.user')
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
@section('contents')
    <header class="bg-blue-900 text-white text-center py-12 mt-24">
        <h1 class="text-4xl font-bold">{{ $quiz->title }}</h1>
        <p class="mt-4 text-white max-w-2xl mx-auto">{{$quiz->description}}</p>
    </header>
    <main>
        <div class="container">
            <form action="/quizzes/{{$quiz->id}}/responses" method="POST">
                @csrf
                @if($questions->isEmpty())
                    <p class="mt-10 text-black text-center text-xl">No available question</p>
                @else
                    @foreach($questions as $question)
                        <div class="px-24 text-gray-700">
                           <div class="flex justify-between">
                               <h3 class="text-xl font-bold mt-10">{{$question->id}} .{{ $question->question_text }}</h3>
                               <h3 class="text-xl font-bold mt-10">/{{$question->score}}</h3>
                           </div>
                            @foreach($question->choice as $choice)
                                <div class="mt-8">
                                    <input type="radio" name="responses[{{ $question->id }}]" value="{{ $choice->id }}" id="choice_{{ $choice->id }}">
                                    <label for="choice_{{ $choice->id }}">{{ $choice->choice_text}}</label>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                    <button type="submit" class="bg-blue-900 text-white p-4 rounded-md mt-10">Submit</button>
                @endif
            </form>
        </div>
    </main>
@endsection

