<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Career;

class QuestionController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::all();
        $careers = Career::all();
        $questions = Question::all();
        return view('/testing/Question/index', compact('questions','quizzes','careers'));
    }

    public function create()
    {
        $quizzes = Quiz::all();
        $career = Career::all();
        return view('testing/Question/create', compact('quizzes', 'career'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'quiz_id' => 'required|exists:quizzes,id',
            'career_id' => 'required|exists:careers,id',
            'question_text' => 'required|string'
        ]);

        Question::create([
            'quiz_id' => $request->quiz_id,
            'career_id' => $request->career_id,
            'question_text' => $request->question_text,
            'score' => $request->score,
        ]);
        return redirect('/admin/testing/question/index')->with('success', 'Question created successfully.');
    }

    public function show($id)
    {
        $question = Question::with(['quiz', 'career'])->findOrFail($id);
        return view('questions.show', compact('question'));
    }

    public function edit($id)
    {
        $question = Question::findOrFail($id);
        $quizzes = Quiz::all();
        $careers = Career::all();
        return view('testing.Question.edit', compact('question', 'quizzes', 'careers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'quiz_id' => 'required|exists:quizzes,id',
            'career_id' => 'required|exists:careers,id',
            'question_text' => 'required|string',
            'score' => 'nullable|numeric',
        ]);

        $question = Question::findOrFail($id);
        $question->update($request->all());

        return redirect('/admin/testing/question/index')->with('success', 'Question updated successfully.');
    }

    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();

        return redirect()->back()->with('success', 'Question deleted successfully.');
    }
}

