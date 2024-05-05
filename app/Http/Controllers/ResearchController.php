<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ResearchController extends Controller
{
    //
    public function index(){
        $researches = db::table('researches')->paginate(1);
        return view("admin/research/index",["researches"=>$researches]);
    }

    public function add(){
        return view("admin/research/add");
    }


    public function store(Request $request){  
        $Professor = $request->input("Professor");
        $Lab = $request->input("Lab");
        $desc = $request->input("Description");


            DB::table('researches')->insert([
                'prof' => $Professor,
                'lab' => $Lab,
                'desc' => $desc,
             
            ]);
            return redirect()->back()->with('success', 'Researches added succesfully');


    }

    public function edit($id){
        $researches = db::table('researches')->where('id',$id)->get();
        return view("admin/research/edit",["researches"=>$researches]);
    }

    public function update(Request $request, $id)
{
    $researches = DB::table('researches')->where('id', $id)->first();
    if (!$researches) {
        return redirect()->back()->with('error', 'researches not found.');
    }
    $researchesData = [
        'prof' => $request->input('prof'),
        'lab' => $request->input('lab'),
        'desc' => $request->input('Description'),
    ];
    DB::table('researches')->where('id', $id)->update($researchesData);
   
   
    return redirect()->back()->with('success', 'courses updated successfully.');
}

public function delete($id)
{
    $researches = DB::table('researches')->where('id', $id)->first();

    if (!$researches) {
        return redirect()->back()->with('error', 'researches not found.');
    }

    DB::table('researches')->where('id', $id)->delete();

    return redirect()->back()->with('success', 'researches deleted successfully');
}
}