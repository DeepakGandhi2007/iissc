<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacultyController extends Controller
{
    //
    public function index(){
        $faculty = db::table('faculities')->get();
        return view("faculty",["faculty"=>$faculty]);
    }
    public function chairman(){
        return view("chairman");
    }
    public function Durgesh(){
        return view("Durgesh");
    }
    public function Upendra(){
        return view("Upendra");
    }
}