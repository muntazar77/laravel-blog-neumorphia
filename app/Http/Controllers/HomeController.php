<?php

namespace App\Http\Controllers;

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
        $posts_fovourite = Post::where('fovourite', 1)->get() ;//to get all the post with fovourite = 1
        $posts = Post::all();


        //  foreach ($posts as $post) {
        //     dd($post);
        //  }

        return view('index', ['posts' =>$posts ,'posts_fovourite' => $posts_fovourite]);
    }

    public function post_show($post_id){

        // $post =Post::where('id',$post_id);
        $post = Post::find($post_id);

        return view('post_show',['post'=>$post]);
    }
}
