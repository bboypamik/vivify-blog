<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getRegistrationForm(){
        return view('auth.register');
    }


    public function register(RegisterRequest $request){

        $data = $request->validated();

        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);

        auth()->login($user);
        return redirect('/');
    }

    public function getLoginForm(){
        return view('auth.login');
    }

    public function login(LoginRequest $request){

        $credentials = $request->validated();

        $isSuccessfull = auth()->attempt($credentials);

      if ($isSuccessfull) {
          return redirect('/');
      }
      return back()->withErrors([
          'email' => 'incorrect email or password'
      ]);
    }

    public function logout(){
        auth()->logout();

        return redirect('login');
    }
}
