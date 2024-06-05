@extends('layout.app')

@section('content')
    <div class="container">
        <h1>Question Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Quiz: {{ $question->quiz->title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Career: {{ $question->career->name }}</h6>
                <p class="card-text">Question: {{ $question->question_text }}</p>
                <p class="card-text">Score: {{ $question->score }}</p>
                <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('questions.destroy', $question->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection

