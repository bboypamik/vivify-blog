<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::with('comments', 'tags')->orderBy('id', 'desc')->paginate(20);
        return view('posts.posts', compact('posts'));
    }

    public function show(Post $post){


      return view('posts.post', compact('post'));
    }

    public function create(){

        $tags =Tag::all();
        return view('posts.create', compact('tags'));
    }

    public function store(CreatePostRequest $request){

      $data = $request->validated();

      info($request);


     $post = auth()->user()->posts()->create($data);
        $post->tags()->attach($request->tag_id);

       return redirect('/');
    }
}
