<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Choice;
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

        $totalScore = 0;

        \DB::transaction(function () use ($request, $quiz, &$totalScore) {
            foreach ($request->responses as $questionId => $choiceId) {
                $choice = Choice::find($choiceId);

                if ($choice && $choice->is_correct) {
                    $totalScore += $choice->question->score;
                }

                UserResponse::updateOrCreate(
                    [
                        'user_id' => Auth::id(),
                        'quiz_id' => $quiz->id,
                        'questions_id' => $questionId,
                    ],
                    [
                        'choice_id' => $choiceId,
                        'category_id' => $quiz->category_id,
                        'career_id' => $quiz->career_id,
                    ]
                );
            }
        });

        return redirect()->route('quiz.result', ['quiz' => $quiz->id, 'score' => $totalScore])
            ->with('success', 'Responses saved successfully.');
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

    public function result($quizId, $score)
    {
        $quiz = Quiz::findOrFail($quizId);
        $status = $score >= 50 ? 'pass' : 'fail';

        return view('QuizUser.results', compact('quiz', 'score', 'status'));
    }
}


