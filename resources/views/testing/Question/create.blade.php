@extends('layout.app')
<script src="https://cdn.tailwindcss.com"></script>
@section('contents')
    <div class="mx-14">
        <div class="mt-3 text-center text-4xl font-bold">Create Question</div>
        <form action="{{url('/admin/testing/question/store')}}" method="POST">
            @csrf
            @method('POST')
            <div class="p-8">
                <div class="flex gap-4">
                    <select name="quiz_id" id="select" class="block w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 font-semibold text-gray-600 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm">
                        <option  class="font-semibold text-slate-300">Select Quiz</option>
                        @foreach($quizzes as $quiz)
                            <option  class="font-semibold text-slate-300" name="{{$quiz->name}}" value="{{$quiz->id}}">{{$quiz->title}}</option>
                        @endforeach
                    </select>
                    <input type="number" name="score" class="mt-1 block w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 placeholder-slate-400 shadow-sm placeholder:font-semibold placeholder:text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm" placeholder="Score *" />
                </div>
                <div class="my-6 flex gap-4">
                    <select name="career_id" id="select" class="block w-full rounded-md border border-slate-300 bg-white px-3 py-4 font-semibold text-gray-500 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm">
                        <option  class="font-semibold text-slate-300">Please Select Career</option>
                        @foreach($career as $careers)
                            <option  class="font-semibold text-slate-300" name="{{$careers->id}}" value="{{$careers->id}}">{{$careers->position}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="">
                    <textarea name="question_text" id="text" cols="30" rows="10" class="mb-10 h-40 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-600" placeholder="Make your Question"></textarea>
                </div>
                <div class="text-center">
                    <button class="cursor-pointer rounded-lg bg-blue-700 px-8 py-5 text-sm font-semibold text-white">Create</button>
                </div>
            </div>
        </form>
    </div>
@endsection

