@extends('layouts/app')

@section('title', 'Posts')

@section('content')
    <div class="container max-w-xl mx-auto">
        <h1 class="text-center mt-5 font-bold">Posts</h1>

        <a class="btn btn-primary" href="{{route('posts.create')}}">Create New Post</a>
        <ul class=" mt-5">
            @foreach($posts as $post)
             <li class="list-group-item m-2">   <a  href="{{route('post', $post->id)}}">{{$post->title}} - ({{$post->comments->count()}})</a>
             </li>
            @endforeach
        </ul>

        <div class="pt-5">
            {{$posts ->links()}}
        </div>
    </div>

@endsection
