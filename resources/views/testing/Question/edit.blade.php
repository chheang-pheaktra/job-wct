@extends('layout.app')

@section('contents')
    <div class="container">
        <h1>Edit Question</h1>
        <form action="{{url('/admin/testing/question/update/' .$question->id) }}" method="POST">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="quiz_id">Quiz</label>
                <select name="quiz_id" id="quiz_id" class="form-control" required>
                    @foreach($quizzes as $quiz)
                        <option value="{{ $quiz->id }}" {{ $quiz->id == $question->quiz_id ? 'selected' : '' }}>{{ $quiz->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="career_id">Career</label>
                <select name="career_id" id="career_id" class="form-control" required>
                    @foreach($careers as $career)
                        <option value="{{ $career->id }}" {{ $career->id == $question->career_id ? 'selected' : '' }}>{{ $career->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="question_text">Question Text</label>
                <textarea name="question_text" id="question_text" class="form-control" required>{{ $question->question_text }}</textarea>
            </div>
            <div class="form-group">
                <label for="score">Score</label>
                <input type="text" name="score" id="score" class="form-control" value="{{ $question->score }}">
            </div>
            <button type="submit" class="btn btn-primary">Update Question</button>
        </form>
    </div>
@endsection

