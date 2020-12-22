@extends('layouts.app')

@section('title', 'tags')


@section('content')

    <div class="container">
<form class="mt-5" method="POST" action="{{route('tags')}}">
    @csrf
    <div class="form-group">
        <label for="name">Tag</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" name="name">
        <button type="submit" class="btn btn-primary mt-2">Submit</button>

    </div>
</form>

    </div>

    @endsection
