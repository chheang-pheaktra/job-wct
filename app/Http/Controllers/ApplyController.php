<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PHPUnit\TextUI\Application;

class ApplyController extends Controller
{
    public function apply(Request $request, $user_id, $job_id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'gender' => 'required|string|in:Male,Female',
            'cv' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);

        $jobs = Career::findOrFail($job_id);

        // Handle file upload
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('cvs', 'public');

            // Save application to the database
            Apply::create([
                'job_id' => $jobs->id,
                'user_id' => $user_id,
                'name' => $request->name,
                'email' => $request->email,
                'gender' => $request->gender,
                'cv' => $cvPath,
            ]);
        }

        return redirect()->back()->with('Applying is Success');
    }
    public function downloadCv($id)
    {
        $application = Apply::findOrFail($id);
        $cvPath = $application->cv;

        if (Storage::disk('public')->exists($cvPath)) {
            return Storage::disk('public')->download($cvPath);
        } else {
            return redirect()->back()->with('error', 'File not found.');
        }
    }
    public function viewCv($id)
    {
        $application = Apply::findOrFail($id);
        $cvPath = $application->cv;

        if (Storage::disk('public')->exists($cvPath)) {
            $fileContent = Storage::disk('public')->get($cvPath);
            $mimeType = Storage::disk('public')->mimeType($cvPath);

            return response($fileContent, 200)
                ->header('Content-Type', $mimeType);
        } else {
            return redirect()->back()->with('error', 'File not found.');
        }
    }
}
