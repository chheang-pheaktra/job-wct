@extends('layout.app')
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
@section('contents')
    <div class="container">
        <h1 class="text-2xl font-bold">User Responses</h1>
        <table class="min-w-full divide-y divide-gray-200 mt-10">
            <thead>
            <tr>
                <th>ID</th>
                <th>User Name</th>
                <th>Category</th>
                <th>Career</th>
                <th>Quiz Title</th>
                <th>Total Score</th>
                <th>Created At</th>
            </tr>
            </thead>
            <tbody>
            @foreach($results as $result)
                <tr class="text-center">
                    <td>{{ $result['user']->id }}</td>
                    <td>{{ $result['user']->name }}</td>
                    <td>{{ $result['quiz']->category->name }}</td>
                    <td>{{ $result['quiz']->careers->position }}</td>
                    <td>{{ $result['quiz']->title }}</td>
                    <td>{{ $result['total_score'] }}</td>
                    <td>{{ $result['user']->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

