@extends('layout.app')
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
@section('contents')
    <div class="container">
        <div class="flex justify-between mb-10">
            <h1 class="text-2xl font-bold">Create Choice For Question</h1>
            <a href="{{url('/admin/testing/choice/create')}}">
                <button class="bg-blue-600 p-3 rounded-lg text-white">
                    Create Choice
                </button>
            </a>
        </div>
        <table  class="min-w-full divide-y divide-gray-200">
            <thead>
            <tr>
                <th>ID</th>
                <th>Question ID</th>
                <th>Choice Text</th>
                <th>Is Correct</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($choices as $choice)
                <tr class="truncate text-center">
                    <td>{{ $choice->id }}</td>
                    <td>{{ $choice->question_id }}</td>
                    <td class="truncate max-w-xs">{{ $choice->choice_text }}</td>
                    <td>{{$choice->is_correct ? 'Yes' : 'No' }}</td>
                    <td>
                        <a href="{{url('/admin/testing/choice/edit/' .$choice->id)}}" >
                            <button class="bg-blue-600 p-3 mt-2 text-white rounded-lg">Edite</button>
                        </a>
                        <a href="{{url('/admin/testing/choice/delete/' .$choice->id)}}" >
                            <button class="bg-red-600 p-3 mt-2 text-white rounded-lg">Delete</button>
                        </a>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

