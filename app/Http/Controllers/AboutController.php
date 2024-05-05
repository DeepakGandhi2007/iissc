<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AboutController extends Controller
{
    //
    public function index(){
        $about = db::table('abouts')->where('id','=',1)->get();

        return view("about",["about"=>$about]);
    }

    public function homepage(){
        $banner_data= DB::table("banners")->where('sttaus',1)->get();
        $post_data= DB::table("posts")->get();
        $public_event= DB::table("publicevent")->get();

        return view("welcome",["banner_data"=>$banner_data,"post_data"=>$post_data,"public_event"=>$public_event]);
    }

    public function admin(){
        $about = db::table('abouts')->paginate(1);
        return view("admin/about/index",["about"=>$about]);
    }

    public function add(){
        return view("admin/about/add");
    }


    public function store(Request $request){  
        $about = $request->input("about");

            DB::table('abouts')->insert([
                'desc' => $about,
             
            ]);
            return redirect()->back()->with('success', 'about added succesfully');


    }

    public function edit($id){
        $about = db::table('abouts')->where('id',$id)->get();
        return view("admin/about/edit",["about"=>$about]);
    }

    public function update(Request $request, $id)
{
    $about = DB::table('abouts')->where('id', $id)->first();
    if (!$about) {
        return redirect()->back()->with('error', 'about not found.');
    }
    $aboutData = [
        'desc' => $request->input('Description'),
    ];
    DB::table('abouts')->where('id', $id)->update($aboutData);
        
   
   
    return redirect()->back()->with('success', 'post updated successfully.');
}

public function messageform(Request $request){
 
    $name = $request->input('name');
    $phone = $request->input('phone');
    $email = $request->input('email');
    $message = $request->input('message');
    $to = 'deepakgandhi2007@gmail.com';
    $subject = 'Lead for sobhaone  from ' . $name;
    $message = "Lead details: Name=$name, Email=$email, Phone=$phone message=$message";
    $headers = 'From: mshreleads@gmail.com' . "\r\n" .
                'Reply-To: mshreleads@gmail.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion() . "\r\n" .
                'MIME-Version: 1.0' . "\r\n" .
                'Content-type: text/html; charset=UTF-8' . "\r\n" .
                'List-Unsubscribe: <mailto:unsubscribe@example.com?subject=unsubscribe>, <http://www.example.com/unsubscribe>' . "\r\n" .
                'Feedback-ID: Lead-Email' . "\r\n" .
                'X-Priority: 1' . "\r\n";

    // Send email
    $success = mail($to, $subject, $message, $headers);

    if ($success) {
        // Redirect to thank you page
        header("Location: ");
       
    } else {
        echo "Data inserted successfully but failed to send email.";
    }
} 

}