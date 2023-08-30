<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use DB;

use App\Models\Cooperatives;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function view()
    {
        return view('viewposts');
    }

    public function updateposts(){
        return view('updateposts');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'content' => 'required|string',
            'published_at' => 'required|date',
        ]);

        Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'published_at' => $request->input('published_at'),
        ]);

        return redirect('/view')->with('success', 'Post created successfully!');

        
    }

    public function delete(Request $request,$id){
        $posts = Post::find($id);
        $posts->delete();


        return redirect('/view');
    }

    public function viewpost() {
        $data=Post::all();
        return view('viewposts')->with('data',$data);
       }  


       public function viewpost_home() {
        $data=Post::all();
        return view('home')->with('data',$data);
       }



       public function show($id) {
        $data1 = DB::select('select * from posts where id = ?',[$id]);
        return view('updateposts')->with('data1',$data1);
    }


    public function edit_save(Request $request,$id) {
        $id=$request->input('id');
        $title=$request->input('title');
        $content=$request->input('content');
        $published_at=$request->input('published_at');
        
   
    DB::update('update posts set title= ?,content=?,published_at=?     where id = ?',
    [$title,$content,$published_at,$id]);
    return redirect('/view');
    }   

}
