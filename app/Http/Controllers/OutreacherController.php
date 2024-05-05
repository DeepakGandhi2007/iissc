<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class OutreacherController extends Controller
{
    //
    public function index(){
        $outreaches = db::table('outreaches')->paginate(1);
        return view("admin/outreach/index",["outreaches"=>$outreaches]);
    }

    public function add(){
        return view("admin/outreach/add");
    }


    public function store(Request $request){  
        $desc = $request->input("desc");

            DB::table('outreaches')->insert([
                'desc' => $desc,
             
            ]);
            return redirect()->back()->with('success', 'about added succesfully');


    }

    public function edit($id){
        $outreaches = db::table('outreaches')->where('id',$id)->get();
        return view("admin/outreach/edit",["outreaches"=>$outreaches]);
    }

    public function update(Request $request, $id)
{
    $outreaches = DB::table('outreaches')->where('id', $id)->first();
    if (!$outreaches) {
        return redirect()->back()->with('error', 'outreaches not found.');
    }
    $outreachesData = [
        'desc' => $request->input('Description'),
    ];
    DB::table('outreaches')->where('id', $id)->update($outreachesData);
        
   
   
    return redirect()->back()->with('success', 'outreaches updated successfully.');
}
}