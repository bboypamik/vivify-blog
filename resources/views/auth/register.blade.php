@extends('layouts.app')

@section('title', 'Register')


@section('content')

    <form method="POST" action="{{route('register')}}" class="mt-5">

        @csrf
        <div class="form-group">
            <label for="email">email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email" name="email">
        </div>
        @include('partials.error-message', ['field' => 'email'])
        <div class="form-group mt-2">
            <label for="Name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" name="name">
        </div>
        @include('partials.error-message', ['field' => 'name'])
        <div class="form-group mt-2">
            <label for="password">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="password" name="password">
        </div>
        @include('partials.error-message', ['field' => 'password'])
        <div class="form-group mt-2">
            <label for="password">Password again</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="password" name="password">
        </div>
        @include('partials.error-message', ['field' => 'password'])
        <div class="form-check mt-2">
            <input type="checkbox" class="form-check-input" id="agreed" name="agreed"  value="1">
            <label class="form-check-label" for="agreed">I agree to terms and conditions</label>
        </div>
        @include('partials.error-message', ['field' => 'checkbox'])
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>

@endsection
