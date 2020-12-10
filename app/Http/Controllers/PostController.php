<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::orderBy('id', 'desc')->paginate(20);
        return view('posts.posts', compact('posts'));
    }

    public function show(Post $post){
      return view('posts.post', compact('post'));
    }
}
