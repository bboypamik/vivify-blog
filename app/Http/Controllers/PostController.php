<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::with('comments')->orderBy('id', 'desc')->paginate(20);
        return view('posts.posts', compact('posts'));
    }

    public function show(Post $post){



      return view('posts.post', compact('post'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(CreatePostRequest $request){

      $data = $request->validated();
        Post::create($data);
       return redirect('/');
    }
}
