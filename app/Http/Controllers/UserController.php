<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use PHPUnit\TextUI\Application;

class UserController extends Controller
{
    public function userprofile()
    {
        return view('userprofile');
    }
    public function about()
    {
        return view('about');
    }
    public function job()
    {
        $categories=Category::get();
        $jobs=Career::OrderBy('created_at','asc')->paginate(6);
        return view('job/index',compact('jobs','categories'));
    }
    public function view_job($id)
    {
        $jobs=Career::find($id);
        return view('job/view_job',compact('jobs'));
    }
    public function view_category($id)
    {
        $jobs=Career::OrderBy('created_at','asc')->paginate(8);
        $category=Category::find($id);
        return view('category_view',compact('jobs','category'));
    }
    public function category()
    {
        $jobs=Career::OrderBy('created_at','asc')->paginate(8);
        $categories=Category::OrderBy('created_at','asc')->paginate(6);
        return view('Category/index',compact('categories','jobs'));
    }
    public function resume()
    {
        return view('/menu-profile/resume');
    }
    public function create_resume()
    {
        return view('/menu-profile/create_resume');
    }
    public function setting()
    {
        return view('/menu-profile/setting');
    }
    public function apply(Request $request, $id)
    {
        $request->validate([
            'cv' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);

        $jobs = Career::findOrFail($id);

        // Handle file upload
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('cvs', 'public');

            // Save application to the database
            Application::create([
                'job_id' => $job->id,
                'user_id' => auth()->id(), // Assuming the user is authenticated
                'cv' => $cvPath,
            ]);
        }

        return redirect()->route('jobs.show', $jobs->id)->with('success', 'Your application has been submitted successfully!');
    }
}
