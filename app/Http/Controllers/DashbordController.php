<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class dashbordController extends Controller
{
 
    // Dashbord Page
    public function index(){
        $users = User::all();
        $posts = Post::all();
        $categories = Category::all();

        return view('admin/dashbord',['users' => $users , 'posts' => $posts , 'categories' => $categories]);
    }


}
