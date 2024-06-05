@extends('layout.app')
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
@section('contents')
    <div class="container">
       <div class="flex justify-between mt-10">
           <h1>Questions</h1>
           <a href="{{url('/admin/testing/question/create')}}" class="bg-blue-600 text-white p-3 rounded-md">Add Question</a>
       </div>
            <table class="min-w-full divide-y divide-gray-200 mt-10 ">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Quiz</th>
                    <th>Career</th>
                    <th>Question Text</th>
                    <th>Score</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="mt-10">
                @foreach($questions as $question)
                    <tr class="text-center mt-10">
                        <td>{{ $question->id }}</td>
                        <td>{{ $question->quiz->title }}</td>
                        <td>{{ $question->careers->position}}</td>
                        <td>{{ $question->question_text }}</td>
                        <td>{{ $question->score }}</td>
                        <td>
                            <a href="" >
                                <button class="bg-blue-600 p-3 mt-2 text-white rounded-lg">View</button>
                            </a>
                            <a href="{{url('/admin/testing/question/edit/' .$question->id)}}" >
                                <button class="bg-gray-600 p-3 mt-2 text-white rounded-lg">Edit</button>
                            </a>
                           <a href="{{url('/admin/testing/question/delete/' .$question->id)}}">
                               <button class="bg-red-600 p-3 mt-2 text-white rounded-lg">Delete</button>
                           </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>
@endsection

