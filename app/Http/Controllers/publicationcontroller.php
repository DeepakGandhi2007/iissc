<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\post;
class publicationcontroller extends Controller
{
    //
    public function index(){
        $post = post::paginate(1);
        return view("admin/publication/index",["post"=>$post]);
    }

    public function add(){
        return view("admin/publication/add");
    }

    public function store(Request $request){  
        $title = $request->input("title");
        if($request->file('image')){
            $banner =  $request->file('image')->hashName();
            $request->file('image')->move(public_path('posts'), $request->file('image')->hashName());

        }
        else{
            $banner = '';
        }
        $image =  $request->file('image');
        $desc  = $request->input("Description");

            DB::table('posts')->insert([
                'title' => $title,
                'image' => 'posts/' . $banner,
                'description' =>  $desc,
                
            ]);
            return redirect()->back()->with('success', 'post added succesfully');

       

    }
   

public function edit($id)
{
    $post = post::findOrFail($id);

    return view('admin.publication.edit', ['post' => $post]);
}
public function update(Request $request, $id)
{
    $post = post::findOrFail($id);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->move(public_path('posts'));
        $post->image = 'posts/' .$imagePath->getFilename();
        $post->title = $request->input('title');
        $post->description = $request->input('Description');
        $post->save();
        
    }
    else{
        $post->image = $request->input('oldimg');
        $post->title = $request->input('title');
        $post->description = $request->input('Description');
        $post->save();
    }
   
   
    return redirect()->back()->with('success', 'post updated successfully.');
}

public function delete($id)
{
    $post = post::findOrFail($id);
    $post->delete();

    return  redirect()->back()->with('success', 'post deleted successfully');
}

}