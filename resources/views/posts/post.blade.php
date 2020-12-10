@extends('layouts.app')


@section('title', $post->title)

@section('content')

<div class="container mt-5">
    <h1>{{$post->title}}</h1>
    <p>{{$post->content}}</p>
</div>

    @endsection
