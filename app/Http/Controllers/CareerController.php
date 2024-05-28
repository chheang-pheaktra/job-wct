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
        $request->validate([
            'thumbnail' => 'nullable|image|max:10240|mimes:jpeg,jpg,png',
        ]);
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('asset'), $imageName);
        $imagePath = 'asset/' . $imageName; // Set the image path
        $description=$dom->saveHTML();
        Career::create([
            'level_id'=>$request->level,
            'category_id'=>$request->category,
            'bank_name'=>$request->bank,
            'position'=>$request->position,
            'salary'=>$request->salary,
            'location'=>$request->location,
            'available_position'=>$request->post,
            'thumbnail'=>$imagePath,
            'description'=>$description
        ]);
        return redirect('/admin/career');
    }

    public function update(Request $request, $id)
    {
        $career = Career::find($id);
        $description = $request->description;

        // Process the description to handle image uploads
        $dom = new DOMDocument();
        $dom->loadHTML($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            if (strpos($img->getAttribute('src'), 'data:image/') === 0) {
                $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
                $image_name = "/upload/" . time() . $key . 'png';
                file_put_contents(public_path() . $image_name, $data);
                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);
            }
        }

        // Validate and handle the new image upload
        $request->validate([
            'thumbnail' => 'nullable|image|max:10240|mimes:jpeg,jpg,png',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('asset'), $imageName);
            $imagePath = 'asset/' . $imageName; // Set the image path
        } else {
            $imagePath = $career->thumbnail; // Keep the existing thumbnail
        }

        // Update the career record
        $career->update([
            'bank_name' => $request->bank,
            'position' => $request->position,
            'salary' => $request->salary,
            'location' => $request->location,
            'available_position' => $request->post,
            'thumbnail' => $imagePath,
            'description' => $dom->saveHTML(),
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
