<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\UserResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserResponseController extends Controller
{
    public function store(Request $request, Quiz $quiz)
    {
        $request->validate([
            'responses' => 'required|array',
            'responses.*' => 'required|exists:choices,id',
        ]);

        \DB::transaction(function () use ($request, $quiz) {
            foreach ($request->responses as $questionId => $choiceId) {
                $userResponse = UserResponse::where('user_id', Auth::id())
                    ->where('quiz_id', $quiz->id)
                    ->where('questions_id', $questionId)
                    ->first();

                if ($userResponse) {
                    // Update existing response
                    $userResponse->update([
                        'choice_id' => $choiceId,
                    ]);
                } else {
                    // Create new response
                    UserResponse::create([
                        'user_id' => Auth::id(),
                        'category_id' => $quiz->category_id,
                        'career_id' => $quiz->career_id,
                        'quiz_id' => $quiz->id,
                        'questions_id' => $questionId,
                        'choice_id' => $choiceId,
                    ]);
                }
            }
        });

        return redirect('/')->with('success', 'Responses saved successfully.');
    }

    public function index()
    {
        $userResponses = UserResponse::with(['user', 'quiz', 'question', 'choice'])->get();

        $groupedResponses = $userResponses->groupBy(function ($response) {
            return $response->user_id . '-' . $response->quiz_id;
        });

        $results = $groupedResponses->map(function ($responses) {
            $totalScore = $responses->sum(function ($response) {
                return $response->choice->is_correct ? $response->question->score : 0;
            });

            return [
                'user' => $responses->first()->user,
                'quiz' => $responses->first()->quiz,
                'total_score' => $totalScore,
            ];
        });

        return view('testing.UserResponse.index', ['results' => $results]);
    }

    public function show(Quiz $quiz)
    {
        $questions = $quiz->question()->with('choice')->get();
        return view('QuizUser.show', compact('quiz', 'questions'));
    }
}

