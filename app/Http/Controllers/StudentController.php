<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    //
    public function index(){
        $students = db::table('students')->get();

        return view("students" ,["students"=>$students]);
    }
    public function admin(){
        $students = db::table('students')->paginate(1);
        return view("admin/students/index",["students"=>$students]);
    }

    public function add(){
        return view("admin/students/add");
    }

    public function store(Request $request){  
        $post = $request->input("post");
        $Name = $request->input("Name");
    
     

            DB::table('students')->insert([
                'post' => $post,
                'name' =>$Name,
               
                
            ]);
            return redirect()->back()->with('success', 'students added succesfully');
      

   
    }


public function edit($id)
{
    $students = db::table('students')->where('id',$id)->get();

    return view('admin.students.edit', ['students' => $students]);
}

public function update(Request $request, $id)
{
    $students = DB::table('students')->where('id', $id)->first();
    if (!$students) {
        return redirect()->back()->with('error', 'students not found.');
    }

  

    $studentsData = [
        'name' => $request->input('Name'),
        'post' => $request->input('post'),

    ];

  
    DB::table('students')->where('id', $id)->update($studentsData);

    return redirect()->back()->with('success', 'students updated successfully.');
}



public function delete($id)
{
    $students = DB::table('students')->where('id', $id)->first();

    if (!$students) {
        return redirect()->back()->with('error', 'students not found.');
    }

    DB::table('students')->where('id', $id)->delete();

    return redirect()->back()->with('success', 'students deleted successfully');
}
}