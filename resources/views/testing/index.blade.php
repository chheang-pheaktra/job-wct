@extends('layout.app')
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    @section('contents')
        <div class="container">
           <div class="flex justify-between mb-10">
               <h1 class="text-2xl font-bold">Quizzes</h1>
               <a href="{{url('/admin/testing/create/quiz')}}">
                   <button class="bg-blue-600 p-3 rounded-lg text-white">
                       Create New Quiz
                   </button>
               </a>
           </div>
            <table  class="min-w-full divide-y divide-gray-200">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Full Score</th>
                    <th>category_id</th>
                    <th>career_id</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($quizzes as $quiz)
                    <tr class="text-center">
                        <td>{{$quiz->id}}</td>
                        <td>{{$quiz->title }}</td>
                        <td class="truncate max-w-xs">{{$quiz->description }}</td>
                        <td>{{$quiz->score}}</td>
                        <td>{{$quiz->category->name}}</td>
                        <td>{{$quiz->careers->position}}</td>

                        <td>
                            <a href="" class="btn btn-info">
                                <button class="bg-blue-600 p-3 mt-2 text-white rounded-lg">View</button>
                            </a>
                            <a href="{{url('/admin/testing/update/'.$quiz->id)}}" class="btn btn-warning">
                                <button class="bg-gray-600 p-3 mt-2 text-white rounded-lg">Edite</button>
                            </a>
                            <a href="{{url('/admin/testing/delete/' .$quiz->id)}}">
                                <button class="bg-red-600 p-3 mt-2 text-white rounded-lg">Delete</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endsection
