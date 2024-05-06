<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Category;
use DOMDocument;
use Faker\Core\File;
use Illuminate\Http\Request;
use Psy\Util\Str;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        //Display a listing of the resource
        $job=Career::all();
        return view('/admin/career',compact('job'));
    }
    public function edit($id)
    {
        $career = Career::findOrFail($id); // Find the career by its ID
        $categories = Category::all(); // Fetch categories or any other necessary data

        return view('career_edit', compact('career', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $description=$request->description;
        $dom=new DOMDocument();
        $dom->loadHTML($description,9);
        $images=$dom->getElementsByTagName('img');
        foreach ($images as $key=>$img){
            $data=base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
            $image_name="/upload/".time().$key.'png';
            file_put_contents(public_path().$image_name,$data);
            $img->removeAttribute('src');
            $img->setArttribute('src',$image_name);
        }
        $description=$dom->saveHTML();
        Career::create([
            'bank_name'=>$request->bank,
            'position'=>$request->position,
            'salary'=>$request->salary,
            'location'=>$request->location,
            'available_position'=>$request->post,
            'description'=>$description
        ]);
        return redirect('/admin/career');
    }

    public function update(Request $request,$id)
    {
        $career=Career::find($id);
        $description=$request->description;
        $dom=new  DOMDocument();
        $dom->loadHTML($description,9);
        $image=$dom->getElementsByTagName('img');
        foreach ($image as $key=>$img){
            if(strpos($img ->getAttribute('src'),'data:image/')==0){
                $data=base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
                $image_name="/upload/".time().$key.'png';
                file_put_contents(public_path().$image_name,$data);
                $img->removeAttribute('src');
                $img->setAttribute('src',$image_name);
            }
        }
        $description=$dom->saveHTML();
        $career->update([
            'bank_name'=>$request->bank,
            'position'=>$request->position,
            'salary'=>$request->salary,
            'location'=>$request->location,
            'available_position'=>$request->post,
            'description'=>$description
        ]);
        return redirect('/admin/career');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $career=Career::find($id);
        $dom=new DOMDocument();
        $dom->loadHTML($career->description,9);
        $images=$dom->getElementsByTagName('img');
        foreach ($images as $key=>$img){
            $src=$img->getAttribute('src');
            $path=Str::of($src)->after('/');
            if (File::exists($path)){
                File::delete($path);
            }
        }
        $career->delete();
        return redirect()->back();
    }
}
