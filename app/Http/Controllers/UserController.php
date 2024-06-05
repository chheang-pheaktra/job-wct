<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Category;
use App\Models\Level;
use App\Models\Quiz;
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
        $level=Level::all();
        $jobs=Career::OrderBy('created_at','asc')->paginate(6);
        return view('job/index',compact('jobs','categories','level'));
    }
    public function view_job($id)
    {
        $jobs=Career::find($id);
        $level=Level::all();
        return view('job/view_job',compact('jobs','level'));
    }
    public function view_category($id)
    {
        $jobs=Career::OrderBy('created_at','asc')->paginate(8);
        $category=Category::find($id);
        return view('category_view',compact('jobs','category'));
    }
    public function view_level($id)
    {
        $jobs=Career::OrderBy('created_at','asc')->paginate(8);
        $level=Level::find($id);
        return view('apply/Level-job',compact('jobs','level'));
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
    public function testing()
    {
        $quizzes = Quiz::all();
        return view('QuizUser/index',compact('quizzes'));
    }

}
