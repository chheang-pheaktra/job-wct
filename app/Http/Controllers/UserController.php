<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
        $jobs=Career::all();
        return view('job/index',compact('jobs'));
    }
    public function view_category($id)
    {
        $jobs=Career::get();
        $category=Category::find($id);
        return view('category_view',compact('jobs','category'));
    }
    public function resume()
    {
        return view('/menu-profile/resume');
    }
    public function create_resume()
    {
        return view('/menu-profile/create_resume');
    }
}
