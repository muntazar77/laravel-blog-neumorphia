<?php

namespace App\Http\Controllers;

use App\Models\Post;
use  App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts =Post::all();
        // $users = User::all();
       return view('admin/posts', ['posts' =>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
       return view('admin/create_edit_post', ['users' =>$users, 'page_type'=>'post_create']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'content' => 'required',
             'post_creator' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            // 'image' =>  'file|mimes:jpg,jpeg,png,gif|max:1024'
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        //  dd($request->fovourite);

        $post = new Post;

      
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = $request->post_creator;
        $post->image = $imageName;
        $post->fovourite = $request->has('fovourite');
        $post->save();




        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($postId)
    {
        $post = Post::find($postId);
        $users = User::all();
        return view('admin/create_edit_post', ['post' => $post, 'users' => $users,'page_type'=>'post_edit']);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'post_creator' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Delete the old image
            if (file_exists(public_path('images/'.$post->image))) {
                unlink(public_path('images/'.$post->image));
            }

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $post->image = $imageName;
        }

        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = $request->post_creator;
        $post->fovourite = $request->has('fovourite');
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // Delete the associated image
        if (file_exists(public_path('images/'.$post->image))) {
            unlink(public_path('images/'.$post->image));
        }

        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
