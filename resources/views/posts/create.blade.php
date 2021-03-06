@extends('layouts.app')


@section('title', 'Create post')


@section('content')

    <form method="POST" action="{{route('posts.create')}}" class="mt-5">

        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Title"
                   name="title">
        </div>
        @include('partials.error-message', ['field' => 'title'])
        <div class="form-group mt-2">
            <label for="content">Content</label>
            <textarea type="text" class="form-control @error('content') is-invalid @enderror" id="content" rows="10"
                      cols="30" placeholder="Content" name="content"></textarea>
        </div>
        @include('partials.error-message', ['field' => 'title'])

@if($tags)
            <label for="tag_id">Select Tags</label>
            <select id="tag_id" name="tag_id">
            @foreach($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->name}}</option>
            @endforeach
        </select>

        @endif
        <div class="form-check mt-2">
            <input type="checkbox" class="form-check-input" id="is_published" name="is_published" value="1">
            <label class="form-check-label" for="is_published">Publish immediately</label>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>

@endsection
