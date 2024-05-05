<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CourseController extends Controller
{
    //
    public function index(){
        $courses = db::table('courses')->get();
        return view("courses",["courses"=>$courses]);
    }
    
    public function research(){
        $researches = db::table('researches')->get();
        return view("research",["researches"=>$researches]);
    }

    public function outreach(){
        $outreaches = db::table('outreaches')->where('id','=',1)->get();

        return view("outreach",["outreaches"=>$outreaches]);
    }
    public function news(){
        $news = db::table('news')->get();

        return view("news",["news"=>$news]);
    }
    public function events(){
        $post_data= DB::table("posts")->get();

        return view("events",["post_data"=>$post_data]);
    }
    public function contact(){
        return view("contact");
    }

    public function admin(){
        $courses = db::table('courses')->paginate(1);
        return view("admin/courses/index",["courses"=>$courses]);
    }

    public function add(){
        return view("admin/courses/add");
    }


    public function store(Request $request){  
        $title = $request->input("title");
        $facuilty = $request->input("Faculty");
        $desc = $request->input("Description");

            DB::table('courses')->insert([
                'title' => $title,
                'facuilty' => $facuilty,
                'desc' => $desc,
             
            ]);
            return redirect()->back()->with('success', 'courses added succesfully');


    }

    public function edit($id){
        $courses = db::table('courses')->where('id',$id)->get();
        return view("admin/courses/edit",["courses"=>$courses]);
    }

    public function update(Request $request, $id)
{
    $courses = DB::table('courses')->where('id', $id)->first();
    if (!$courses) {
        return redirect()->back()->with('error', 'about not found.');
    }
    $coursesData = [
        'title' => $request->input('title'),
        'facuilty' => $request->input('Faculty'),
        'desc' => $request->input('Description'),
    ];
    DB::table('courses')->where('id', $id)->update($coursesData);
        
   
   
    return redirect()->back()->with('success', 'courses updated successfully.');
}

public function delete($id)
{
    $courses = DB::table('courses')->where('id', $id)->first();

    if (!$courses) {
        return redirect()->back()->with('error', 'courses not found.');
    }

    DB::table('courses')->where('id', $id)->delete();

    return redirect()->back()->with('success', 'courses deleted successfully');
}

}