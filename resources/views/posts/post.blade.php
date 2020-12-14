@extends('layouts.app')


@section('title', $post->title)

@section('content')

<div class="text-center mt-5">
    <h1 class="font-bold">{{$post->title}}</h1>
    <p class="mt-5">{{$post->content}}</p>
</div>

    @endsection
