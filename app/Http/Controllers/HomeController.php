<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // // $users = User::all()->paginate(5);

        // $titles = DB::table('users')->pluck('title');
        $categories =Category::all();
        $posts_fovourite = Post::where('fovourite', 1)->get() ;//to get all the post with fovourite = 1
        $posts = Post::paginate(6);

 

        return view('index', ['posts' =>$posts ,'posts_fovourite' => $posts_fovourite, 'categories'=>$categories]);
    }

    public function post_show($post_title){

        // $post =Post::where('id',$post_id);
        // $post = Post::find($post_id);
        $categories =Category::all();

        $post=Post::where('title',$post_title)->first();

        return view('post_show',['post'=>$post, 'categories'=>$categories]);
    }

    public function about(){
        $categories =Category::all();

        return view('about',['categories'=>$categories]);
    }

    public function contact(){
        $categories =Category::all();

        return view('contact',['categories'=>$categories]);
    }

    public function dashbord(){
        // $categories =Category::all();

        return view('admin/dashbord');
    }
}
