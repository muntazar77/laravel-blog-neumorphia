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
    // Home Page
    public function index()
    {

        //  $categories =Category::all();->to get all the categories
        $categories = Category::take(3)->get();
        $posts_fovourite = Post::where('fovourite', 1)->get() ;//to get all the post with fovourite = 1
        $posts = Post::paginate(6);

        return view('index', ['posts' =>$posts ,'posts_fovourite' => $posts_fovourite, 'categories'=>$categories]);
    }

    // Post show Page
    public function post_show($post_title){
        $categories =Category::all();
        $post=Post::where('title',$post_title)->first();

        return view('post_show',['post'=>$post, 'categories'=>$categories]);
    }


    //  about page
    public function about(){
         $categories = Category::take(3)->get();
        return view('about',['categories'=>$categories]);
    }

    // contact Page
    public function contact(){
         $categories = Category::take(3)->get();
        return view('contact',['categories'=>$categories]);
    }

}
