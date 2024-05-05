<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Banner;

class adminFacultyController extends Controller
{
    //
    public function index(){
        $faculty = db::table('faculities')->paginate(1);
        return view("admin/faculty/index",["faculty"=>$faculty]);
    }

    public function add(){
        return view("admin/faculty/add");
    }

    public function store(Request $request){  
        $post = $request->input("post");
        if($request->file('image')){
        $banner =  $request->file('image')->hashName();
        $request->file('image')->move(public_path('faculities'), $request->file('image')->hashName());

        }else{
            $banner = "";

        }
        $Name = $request->input("Name");
        $check  = $request->input("use_banner_image");
        $Ocuupation = $request->input("Ocuupation");
        $Where = $request->input("Where");
        $Link = $request->input("Link");

      if($check == "on"){
        if($Link){

            DB::table('faculities')->insert([
                'name' => $Name,
                'image' => 'faculities/' . $banner,
                'post' =>$post,
                'theydo' =>$Ocuupation,
                'where' =>$Where,
                'redirect' =>$Link,
                
            ]);
            return redirect()->back()->with('success', 'faculities added succesfully');
        }
        else{
            return redirect()->back()->with('error', 'please add link');

        }

    }
    else{
        DB::table('faculities')->insert([
            'name' => $Name,
            'image' => 'faculities/' . $banner,
            'post' =>$post,
            'theydo' =>$Ocuupation,
            'where' =>$Where,
            'redirect' =>"",
        ]);
        return redirect()->back()->with('success', 'faculities added succesfully');
    }
}

public function edit($id)
{
    $faculty = db::table('faculities')->where('id',$id)->get();

    return view('admin.faculty.edit', ['faculty' => $faculty]);
}

public function update(Request $request, $id)
{
    $faculty = DB::table('faculities')->where('id', $id)->first();
    if (!$faculty) {
        return redirect()->back()->with('error', 'Faculty not found.');
    }

    $redirect = $request->input('Link');
    $imagePath = null;

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->move(public_path('faculities'));
    }

    $facultyData = [
        'name' => $request->input('Name'),
        'post' => $request->input('post'),
        'theydo' => $request->input('Ocuupation'),
        'where' => $request->input('Where'),
        'redirect' => $redirect ? $redirect : "",
    ];

    if ($imagePath) {
        $facultyData['image'] = 'faculities/' . $imagePath->getFilename();
    } elseif ($request->input('oldimg')) {
        $facultyData['image'] = $request->input('oldimg');
    }

    DB::table('faculities')->where('id', $id)->update($facultyData);

    return redirect()->back()->with('success', 'Faculty updated successfully.');
}



public function delete($id)
{
    $banner = DB::table('faculities')->where('id', $id)->first();

    if (!$banner) {
        return redirect()->back()->with('error', 'Banner not found.');
    }

    DB::table('faculities')->where('id', $id)->delete();

    return redirect()->back()->with('success', 'Banner deleted successfully');
}

}