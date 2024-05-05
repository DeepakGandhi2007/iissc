<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class NewsController extends Controller
{
    //
    public function index(){
        $news = db::table('news')->paginate(1);
        return view("admin/news/index",["news"=>$news]);
    }

    public function add(){
        return view("admin/news/add");
    }

    public function store(Request $request){  
        $title = $request->input("title");
        $news = $request->input("News");
    
     

            DB::table('news')->insert([
                'title' => $title,
                'news' =>$news,
               
                
            ]);
            return redirect()->back()->with('success', 'News added succesfully');
      

   
    }


public function edit($id)
{
    $news = db::table('news')->where('id',$id)->get();

    return view('admin.news.edit', ['news' => $news]);
}

public function update(Request $request, $id)
{
    $news = DB::table('news')->where('id', $id)->first();
    if (!$news) {
        return redirect()->back()->with('error', 'news not found.');
    }

  

    $newsData = [
        'title' => $request->input('title'),
        'news' => $request->input('news'),

    ];

  
    DB::table('news')->where('id', $id)->update($newsData);
    return redirect()->back()->with('success', 'news updated successfully.');
}



public function delete($id)
{
    $news = DB::table('news')->where('id', $id)->first();

    if (!$news) {
        return redirect()->back()->with('error', 'news not found.');
    }

    DB::table('news')->where('id', $id)->delete();

    return redirect()->back()->with('success', 'news deleted successfully');
}
}