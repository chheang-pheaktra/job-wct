<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Category;
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
        $category=Category::all();
        return view('category',compact('category'));
    }
    public function career()
    {
        $category=Category::all();
        $job=Career::all();
        return view('career',compact('category','job'));
    }
    public function create()
    {
        $category=Category::all();
        return view('career_create',compact('category'));
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
}
