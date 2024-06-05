@extends('layout.app')
<script src="https://cdn.tailwindcss.com"></script>
@section('contents')
    <div class="mx-14">
        <div class="mt-3 text-center text-4xl font-bold">Create Quiz</div>
        <form action="/admin/testing/store/quiz" method="POST">
            @csrf
            @method('POST')
            <div class="p-8">
                <div class="flex gap-4">
                    <input type="Name" name="title" class="mt-1 block w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 placeholder-slate-400 shadow-sm placeholder:font-semibold placeholder:text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm" placeholder="Title Quiz*" />
                    <input type="Name" name="score" class="mt-1 block w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 placeholder-slate-400 shadow-sm placeholder:font-semibold placeholder:text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm" placeholder="Full Score*" />
                </div>
                <div class="my-6 flex gap-4">
                    <select name="category_id" id="select" class="block w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 font-semibold text-gray-500 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm">
                        <option  class="font-semibold text-slate-300">Please Select Category</option>
                        @foreach($category as $categories)
                            <option name="{{$categories->id}}" value="{{$categories->id}}"  class="font-semibold text-slate-300">{{$categories->name}}</option>
                        @endforeach
                    </select>
                    <select name="career_id" id="select" class="block w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 font-semibold text-gray-500 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm">
                        <option  class="font-semibold text-slate-300">Please Select Career</option>
                        @foreach($career as $careers)
                            <option  class="font-semibold text-slate-300" name="{{$careers->id}}" value="{{$careers->id}}">{{$careers->position}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="">
                    <textarea name="description" id="text" cols="30" rows="10" class="mb-10 h-40 w-full resize-none rounded-md border border-slate-300 p-5 font-semibold text-gray-300"></textarea>
                </div>
                <div class="text-center">
                    <button class="cursor-pointer rounded-lg bg-blue-700 px-8 py-5 text-sm font-semibold text-white">Create</button>
                </div>
            </div>
        </form>
    </div>

@endsection

