@extends('layouts.app')


@section('title', 'login')


@section('content')



    <form method="POST" action="{{route('login')}}" class="mt-5">

        @csrf
        <div class="form-group">
            <label for="email">email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email"
                   name="email">
        </div>
        @include('partials.error-message', ['field' => 'email'])

        <div class="form-group mt-2">
            <label for="password">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                   placeholder="password" name="password">
        </div>
        @include('partials.error-message', ['field' => 'passwords'])

        <button type="submit" class="btn btn-primary mt-2">Login</button>
    </form>


@endsection
