<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        // Select * from posts
        $postsFromDB = Post::all();  // collection objects
        return view('posts.post', ['posts' => $postsFromDB]);
    }

    public function show(Post $post)  // type hinting
    {
        // select * from posts where id = $postid
        // $singlePostFromDB= Post::find($id);   // model object
        // if(is_null($singlePostFromDB)){
        //     return to_route('posts.index') ;
        // }
        // $singlePostFromId = Post::where('id', $id)->first(); // Collection object
        // $singlePostFromId = Post::where('id' , $id)->get();   // Collection object
        // Post::where('title' ,'php')->first() // select * from posts where title = 'php' limit 1
        // Post::where('title', 'php' )->get() // select * from posts where title = 'php'

        // $singlePost = [
        //     "id" => $id, "title" => "PHP", 'description' => "This is Description", "Posted_By" => "Ahmed", "Created_At" => "2024-07-21 14:34:56"
        // ];
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        // Select * from users
        $users = User::all();
        return view('posts.create', ['users' => $users]);
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => ['required', 'string', 'min:3'],
        'description' => ['required', 'string', 'min:10'],
        'post_creator' => ['required', 'exists:users,id'],
        'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
    ]);

    $imageName = null;
    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
    }

    Post::create([
        'title' => $request->title,
        'description' => $request->description,
        'user_id' => $request->post_creator,
        'image' => $imageName,
    ]);

    return to_route('posts.index');
}

    public function edit(Post $post)
    {
        $users = User::all();
        return view('posts.edit', ['users' => $users, 'post' => $post]);
    }

    public function update(Request $request, Post $post)
{
    $request->validate([
        'title' => ['required', 'string', 'min:3'],
        'description' => ['required', 'string', 'min:10'],
        'post_creator' => ['required', 'exists:users,id'],
        'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
    ]);

    $imageName = $post->image;
    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
    }

    $post->update([
        'title' => $request->title,
        'description' => $request->description,
        'user_id' => $request->post_creator,
        'image' => $imageName,
    ]);

    return to_route('posts.show', $post->id);
}
    public function destroy(Post $post)
    {
        // 1- Delete the post from the database
        if ($post) {
            $post->delete();
        }

        // 2- Redirect to post.index
        return to_route('posts.index');
    }
}