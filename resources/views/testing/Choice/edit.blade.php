@extends('layout.app')
<script src="https://cdn.tailwindcss.com"></script>
@section('contents')
    <div class="mx-14">
        <div class="mt-3 text-center text-4xl font-bold">Update Choice</div>
        <form action="/admin/testing/choice/update/{{$choice->id}}" method="POST">
            @csrf
            @method('POST')
            <div class="p-8">
                <div class="my-6 flex gap-4">
                    <select name="question_id" id="select" class="block w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 font-semibold text-gray-500 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm">
                        <option  class="font-semibold text-slate-300">Please Select Question</option>
                        @foreach($questions as $question )
                            <option name="{{$question->id}}" value="{{$question->id}}"  {{ $question->id == $choice->question_id ? 'selected' : '' }} class="font-semibold text-slate-300">{{$question->question_text}}</option>
                        @endforeach
                    </select>
                    <select name="is_correct" id="is_correct" class="block w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 font-semibold text-gray-500 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm">
                        <option  class="font-semibold text-slate-300">Please Select answer</option>
                        <option class="font-semibold text-slate-300" value="1" {{ $choice->is_correct ? 'selected' : '' }}>Yes</option>
                        <option class="font-semibold text-slate-300" value="0" {{ !$choice->is_correct ? 'selected' : '' }}>No</option>
                    </select>
                </div>
                <div class="">
                    <textarea name="choice_text"  id="text" cols="30" rows="10" class="mb-10 h-40 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-600">{{ $choice->choice_text}}</textarea>
                </div>
                <div class="text-center">
                    <button class="cursor-pointer rounded-lg bg-blue-700 px-8 py-5 text-sm font-semibold text-white">Create</button>
                </div>
            </div>
        </form>
    </div>

@endsection

