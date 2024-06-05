<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Choice;
use App\Models\Question;

class ChoiceController extends Controller
{
    public function index()
    {
        $choices = Choice::all();
        return view('testing/Choice/index', compact('choices'));
    }

    public function create()
    {
        $questions = Question::all();
        return view('testing/Choice/create', compact('questions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'question_id' => 'required|exists:questions,id',
            'choice_text' => 'required|string',
            'is_correct' => 'required|boolean',
        ]);

        Choice::create([
            'question_id'=>$request->question_id,
            'choice_text'=>$request->choice_text,
            'is_correct'=>$request->is_correct
        ]);

        return redirect('/admin/testing/choice/index')->with('success', 'Choice created successfully.');
    }

    public function edit($id)
    {
        $choice = Choice::findOrFail($id);
        $questions = Question::all();
        return view('testing/Choice/edit', compact('choice', 'questions'));
    }

    public function update(Request $request, $id)
    {
        $choice = Choice::findOrFail($id);

        $request->validate([
            'question_id' => 'required|exists:questions,id',
            'choice_text' => 'required|string',
            'is_correct' => 'required|boolean',
        ]);
        $choice->update([
            'question_id'=>$request->question_id,
            'choice_text'=>$request->choice_text,
            'is_correct'=>$request->is_correct
        ]);

        return redirect('/admin/testing/choice/index')->with('success', 'Choice updated successfully.');
    }

    public function destroy($id)
    {
        $choice = Choice::findOrFail($id);
        $choice->delete();

        return redirect()->back()->with('success', 'Choice deleted successfully.');
    }
}

