<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//追記
use App\Post;

class PostController extends Controller
{
    public function create()
    {
        return view('post/create');
    }

    //追記
    public function store(Request $request)
    {
        $post = new Post;
        $post->name = $request->name;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect()->route('post.create');
    }
}