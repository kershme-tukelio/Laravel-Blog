<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    public function getRegistrationForm() {
        return view('auth.register');
    }
    public function register(RegisterRequest $request) {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);

        auth()->login($user);

        return redirect('/');
    }
    public function getLoginForm() {
        return view('auth.login');
    }

    public function login(LoginRequest $request) {

        $credentials = $request->validated();
        $isSuccessful = auth()->attempt($credentials);
        if ($isSuccessful) {
            return redirect('/');
        }
        return redirect('/login')->withErrors([
            'email' => 'Incorrect email or password.'
        ]);
    }
    public function logout() {
        auth()->logout();
        return redirect('/login');
    }
}
