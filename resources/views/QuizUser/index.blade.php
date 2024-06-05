@extends('layout.user')
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
@section('contents')
<div class="bg-white">
    <header class="bg-blue-900 text-white text-center py-12 mt-24">
        <h1 class="text-4xl font-bold">Test Your Ability</h1>
    </header>
    <section class="text-center py-12 px-4">
        <h2 class="text-2xl font-bold">Get In Touch</h2>
        <p class="mt-4 text-gray-700 max-w-2xl mx-auto">We are here to help you. Reach out to us via any of the following methods.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mt-8 animate-fadeIn">
            @foreach($quizzes as $quiz)
                <a href="{{ url('/quizzes/' . $quiz->id) }}">
                    <div class="p-4 shadow-lg rounded-lg bg-blue-900 hover:bg-blue-500 transition-colors">
                        <h3 class="text-xl font-bold text-white">{{ $quiz->title }}</h3>
                        <p class="text-white mt-2 truncate max-w-xs">{{ $quiz->description }}</p>
                        <p class="text-white mt-2">{{ $quiz->score }} Points</p>
                    </div>
                </a>
            @endforeach

        </div>
    </section>
</div>
@endsection
