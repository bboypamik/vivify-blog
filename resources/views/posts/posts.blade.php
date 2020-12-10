@extends('layouts/app')

@section('title', 'Posts')

@section('content')
<div class="container mt-5">
    <h1>Posts</h1>


    <ul class="list-group">
        @foreach($posts as $post)
                <a class=" list-group-item d-flex" href="{{route('post', $post->id)}}">{{$post->title}}</a>

        @endforeach
    </ul>

    <div class="pt-3">{{$posts ->links()}}</div>
</div>

    @endsection
