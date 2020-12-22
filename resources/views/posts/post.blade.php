@extends('layouts.app')


@section('title', $post->title)

@section('content')

<div class="text-center mt-5">
    <h1 class="font-bold">{{$post->title}}</h1>
    <p class="mt-5">{{$post->content}}</p>

    <div>
        @if(session()->has('message'))
            {{session()->get('message')}}
            @endif

    </div>

    <form class="mt-5" method="POST" action="{{route('comments.store', ['post' => $post])}}">
        @csrf
        <div class="form-group">
            <label for="content">Comment</label>
            <input type="text" class="form-control @error('content') is-invalid @enderror" id="content" placeholder="content" name="content">

            <input type="number" class="form-control @error('age') is-invalid @enderror" id="age" placeholder="age" name="age">
            <button type="submit" class="btn btn-primary mt-2">Submit</button>

        </div>
    </form>
        <p class="mt-4">Comments :</p>
        @foreach($post->comments as $comment)
            <p>{{$comment->content}}</p>
@endforeach
        @include('partials.error-message', ['field' => 'content'])

</div>



    @endsection
