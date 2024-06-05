<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function create()
    {
        $category=Category::all();
        $career=Career::all();
        return view('testing/create',compact('category','career'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'score' => [
                'required',
                'numeric',
                function ($attribute, $value, $fail) {
                    if (!is_float((float)$value) && !is_int((float)$value)) {
                        $fail('The '.$attribute.' must be a float.');
                    }
                    if ($value < 0 || $value > 100) {
                        $fail('The '.$attribute.' must be between 0 and 100.');
                    }
                }
            ]
        ]);
        Quiz::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'score'=>$request->score,
            'category_id'=>$request->category_id,
            'career_id'=>$request->career_id
        ]);

        return redirect('/admin/testing/index')->with('success', 'Quiz created successfully.');
    }

    public function edit($id)
    {
        $category=Category::all();
        $career=Career::all();
        $quiz = Quiz::findOrFail($id);
        return view('testing.edit', compact('quiz','category','career'));
    }

    public function update(Request $request, $id)
    {
        $quiz=Quiz::find($id);
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'score' => [
                'required',
                'numeric',
                function ($attribute, $value, $fail) {
                    if (!is_float((float)$value) && !is_int((float)$value)) {
                        $fail('The '.$attribute.' must be a float.');
                    }
                    if ($value < 0 || $value > 100) {
                        $fail('The '.$attribute.' must be between 0 and 100.');
                    }
                }
            ]
        ]);
        $quiz->update([
            'title' => $request->title,
            'description' => $request->description,
            'score'=>$request->score,
            'category_id' => $request->category_id,
            'career_id' => $request->career_id,
        ]);
        return redirect('/admin/testing/index')->with('success', 'Quiz updated successfully.');
    }

    public function destroy($id)
    {
        $quiz = Quiz::findOrFail($id);
        $quiz->delete();
        return redirect()->back()->with('success', 'Quiz deleted successfully.');
    }
}

