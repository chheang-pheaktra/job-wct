<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function level()
    {
        $level=Level::all();
        return view('level',compact('level'));
    }
    public function create(Request $request)
    {
        $level= new Level();
        $level->name = $request->title;
        $level->save();
        return redirect()->back();
    }
    public function update(Request $request , $id)
    {
        $level=Level::find($id);
        $level->update([
           $level->name = $request->title
        ]);
        return redirect()->back()->with('success','Level Update Successfully');
    }
    public function delete($id)
    {
        $level=Level::find($id);
        $level->delete();
        return redirect()->back();
    }
}
