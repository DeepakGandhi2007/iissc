<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Banner;

class BannerController extends Controller
{
    //
    public function index(){
        $blog = Banner::paginate(1);
        return view("admin/banner/index",["blog"=>$blog]);
    }

    public function add(){
        return view("admin/banner/add");
    }

    public function store(Request $request){  
        $title = $request->input("title");
        $banner =  $request->file('image');
        $youtube = $request->input("ytfr");
        $check  = $request->input("use_banner_image");

      if($check == "on"){
        if($banner){
            $banner =  $request->file('image')->hashName();
            DB::table('banners')->insert([
                'title' => $title,
                'image' => 'banner/' . $banner,
                'youtube' =>"",
                'sttaus' =>1
            ]);
            $request->file('image')->move(public_path('banner'), $request->file('image')->hashName());
            return redirect()->back()->with('success', 'banner added succesfully');

        }
        else{
            return redirect()->back()->with('error', 'Please Select Banner image');

        }

    }
    else{
        if($youtube){
        DB::table('banners')->insert([
            'title' => $title,
            'image' => "",
            'youtube' =>$youtube,
            'sttaus' =>1
        ]);
        return redirect()->back()->with('success', 'banner added succesfully');
    }
    else{
        return redirect()->back()->with('error', 'Please Select Youtube Link');

    }

    }
}

public function edit($id)
{
    $banner = Banner::findOrFail($id);

    return view('admin.banner.edit', ['banner' => $banner]);
}
public function update(Request $request, $id)
{
    $banner = Banner::findOrFail($id);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->move(public_path('banner'));
        $banner->image = 'banner/' .$imagePath->getFilename();
        $youtube="";
        $banner->title = $request->input('title');
        $banner->youtube = $youtube;
        $banner->sttaus = 1;
        $banner->save();
        
    }
    elseif ($request->input('oldimg')) {
        $banner->image = $request->input('oldimg');
        $youtube="";
        $banner->title = $request->input('title');
        $banner->youtube = $youtube;
        $banner->sttaus = 1;
        $banner->save();
    }
    else{
        $image="";
        $banner->image =$image;
        $banner->title = $request->input('title');
        $banner->youtube = $request->input('ytfr');
        $banner->sttaus = 1;
        $banner->save();
    }
   
   
    return redirect()->back()->with('success', 'Blog updated successfully.');
}

public function delete($id)
{
    $banner = Banner::findOrFail($id);
    $banner->delete();

    return  redirect()->back()->with('success', 'Banner deleted successfully');
}


public function publicevent(){
    $publicevent = db::table('publicevent')->paginate(1);
    return view("admin/public/index",["publicevent"=>$publicevent]);
}
public function addpublicevent(){
    return view("admin/public/add");
}

public function storepublicevenrt(Request $request){  
    $title = $request->input("title");
    $banner =  $request->file('image')->hashName();
    $description = $request->input("description");

        DB::table('publicevent')->insert([
            'title' => $title,
            'image' => 'publicevent/' . $banner,
            'Description' =>$description,
        ]);
        $request->file('image')->move(public_path('publicevent'), $request->file('image')->hashName());
        return redirect()->back()->with('success', 'publicevent added succesfully');

}

public function editpublicevent($id)
{
    $publicevent = db::table('publicevent')->where('id',$id)->get();
    return view('admin.public.edit', ['publicevent' => $publicevent]);
}

public function publiceventupdate(Request $request, $id)
{
    $publicevent = DB::table('publicevent')->where('id', $id)->first();

    if ($request->hasFile('image')) {
        $banner =  $request->file('image')->hashName();
        $publiceventData = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image' => 'publicevent/' . $banner,
            
        ];
        $request->file('image')->move(public_path('publicevent'), $request->file('image')->hashName());

    }
  
    else{
        $publiceventData = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image' => $request->input('oldimg')
            
        ];
    }
    DB::table('publicevent')->where('id', $id)->update($publiceventData);

   
    return redirect()->back()->with('success', 'Blog updated successfully.');
}
}