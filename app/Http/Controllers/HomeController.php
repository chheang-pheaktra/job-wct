<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories=Category::all();
        return view('/home',compact('categories'));
    }

    public function adminHome()
    {
        $users=User::all();
        $job=Career::all();
        $category=Category::all();
        return view('dashboard',compact('users','job','category'));
    }
}
