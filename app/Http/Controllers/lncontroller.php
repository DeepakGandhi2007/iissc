<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class lncontroller extends Controller
{
    //
    public function index(){
        return view("ln2");
    }
    public function userregister(){
        return view("userregister");
    }

    public function saveuser(Request $request)
    {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $password = $request->input('password');

        DB::table('saveduser')->insert([
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'password'=>$password,
        ]);

        return redirect()->back()->with('success', 'User saved successfully');
    }

    public function userlogin(){
        return view("userlogin");
    }

    public function loginuser(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = DB::table('saveduser')->where('email', $email)->first();

        if ($user) {
            $pass = DB::table('saveduser')->where('password', $password)->first();
            if($pass){
                return redirect('L2N');

            }
            else{
                return redirect()->back()->with('error', 'Password Is Incorrect');

            }

        }

        return redirect()->back()->with('error', 'user not found with this email');
    }
    public function ln2save(Request $request)
    {
        $Issuer = $request->input('Issuer');
        $Department = $request->input('Department');
        $faculty = $request->input('faculty');
        $Product = $request->input('Product');
        $Quantity = $request->input('Quantity');
        $Container = $request->input('Container');
        $Total = $request->input('Totalam');

        DB::table('l2n')->insert([
            'Issuer' => $Issuer,
            'Department' => $Department,
            'faculty' => $faculty,
            'Product'=>$Product,
            'Quantity'=>$Quantity,
            'Container'=>$Container,
            'Ammount'=>$Total,

        ]);

        return redirect()->back()->with('success', 'Request Submitted successfully');
    }

    public function l2nrequest(){
        $l2n = db::table('l2n')->get();
        return view("admin/l2n/index",["l2n"=>$l2n]);
    }

    public function getL2nDetails($id)
    {
        $l2n = db::table('l2n')->where('id',$id)->get();

        if (!$l2n) {
            return response()->json(['error' => 'L2n entry not found'], 404);
        }

        return response()->json($l2n);
    }
        public function report(){
            return view("admin/l2n/report");
        }
        public function fetchdata(Request $request)
    {
        $startDate = $request->input('start');
        $endDate = $request->input('end');
        $product = $request->input('product');
        $guide = $request->input('guide');
        $department = $request->input('department');
        $query = DB::table('l2n');

        if ($startDate) {
            $query->whereDate('created_at', '>=', $startDate);
        }
    
        if ($endDate) {
            $query->whereDate('created_at', '<=', $endDate);
        }
    
        if ($product) {
            $query->where('Product', $product);
        }
    
        if ($guide) {
            $query->where('faculty', $guide);
        }
    
        if ($department) {
            $query->where('Department', $department);
        }
    
        $results = $query->get();
    
        return response()->json($results);
    }

}