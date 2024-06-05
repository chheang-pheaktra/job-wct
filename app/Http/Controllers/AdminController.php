<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use App\Models\Career;
use App\Models\Category;
use App\Models\Level;
use App\Models\Quiz;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function profilepage()
    {
        return view('profile');
    }
    public function category()
    {
        $category=Category::oldest()->paginate(6);
        $job=Career::all();
        return view('category',compact('category','job'));
    }
    public function career()
    {
        $job=Career::oldest()->paginate(10);
        return view('career',compact('job'));
    }
    public function create()
    {
        $category=Category::all();
        $level=Level::all();
        return view('career_create',compact('category','level'));
    }
    public function show(string $id)
    {
        $career=Career::find($id);
        return view('detail',compact('career'));
    }
    public function edit(Request $id)
    {
        $category=Category::all();
        $career=Career::find($id);
        return view('career_edit',compact('career','category'));
    }
    public function index()
    {
        $apply=Apply::all();
        $career=Career::all();
        $user=User::all();
        return view('apply/index',compact('apply','career','user'));
    }
    public function search(Request $request)
    {
        $search = $request->input('search');
        // Search for categories and careers
        $category = Category::where('name', 'like', '%' . $search . '%')->get();


        return view('category', compact('category', 'search'));
    }
    public function search_career(Request $request)
    {
        $search = $request->input('search');
        $job= Career::where('position', 'like', '%' . $search . '%')
            ->orWhere('bank_name', 'like', '%' . $search . '%')
            ->get();
        return view('career',compact('job'));
    }

    public function test_index()
    {
       $quizzes=Quiz::all();
       return view('/testing/index',compact('quizzes'));
    }

}
