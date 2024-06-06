@extends('layout.user')
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
@section('contents')
    <header class="bg-blue-900 text-white text-center py-12 mt-24">
        <h1 class="text-4xl font-bold">Quiz Result: {{ $quiz->title }}</h1>
        <p class="mt-4 text-white max-w-2xl mx-auto">{{ $quiz->description }}</p>
    </header>
    <main>
        <div class="container text-center mt-12">
            <h2 class="text-3xl font-bold">Your Score: {{ $score }}</h2>
            @if ($status == 'pass')
                <p class="mt-4 text-green-600 text-2xl">Congratulations! You passed the quiz.</p>
            @else
                <p class="mt-4 text-red-600 text-2xl">Unfortunately, you failed the quiz. Better luck next time!</p>
            @endif
            <a href="{{ url('/') }}" class="bg-blue-900 text-white p-4 rounded-md mt-10 inline-block">Go Back Home</a>
        </div>
    </main>
@endsection

