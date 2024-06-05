@extends('layout.app')
@extends('layout.boostrap')
@section('contents')
    <div class="container">
        <h1>Create a New Quiz</h1>
        <form action="{{ '/admin/testing/edit/'.$quiz->id }}" method="POST">
            @csrf
            @method('POST')

            <div>
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ $quiz->title }} " class="form-control" required>
            </div>
            <div>
                <label for="title">Score</label>
                <input type="text" name="score" id="title" value="{{ $quiz->score}} " class="form-control" required>
            </div>
            <div>
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control">{{ $quiz->description }}</textarea>
            </div>

            <div>
                <label for="category_id">Category</label>
                <select name="category_id" id="category_id" class="form-control">
                    <!-- Assuming you have a list of categories -->
                    @foreach($category as $categories)
                        <option value="{{ $categories->id }}" {{ $quiz->category_id == $categories->id ? 'selected' : '' }}>{{ $categories->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="career_id">Career</label>
                <select name="career_id" id="career_id" class="form-control">
                    <!-- Assuming you have a list of careers -->
                    @foreach($career as $careers)
                        <option value="{{ $careers->id }}" {{ $quiz->career_id == $careers->id ? 'selected' : '' }}>{{ $careers->position}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-10">Update Quiz</button>
        </form>

    </div>
@endsection
