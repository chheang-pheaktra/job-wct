<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryControll extends Controller
{
    public function create(Request $request)
    {
        $category= new Category();
       $category->name = $request->title;
       $category->save();
        return redirect()->back();
    }
    public function delete(Request $request)
    {
        $categories=Category::find($request->id);
        $categories->delete();
        return redirect()->back();
    }
    public function update(Request $request,$id)
    {
        $categories=Category::find($id);
        $categories->update([
            $categories->name = $request->title
        ]);
        return redirect()->back()->with('success','Category Update Successfully');
    }

}
