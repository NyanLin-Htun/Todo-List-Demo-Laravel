<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule as ValidationRule;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function registerPost()
    {
        $registerData = request()->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6'],
        ], [
            'name.required' => "We need your Name.",
            'name.min' => "Your Name must be more than 3 characters.",
        ]);
        $user = User::create($registerData);
        auth()->login($user);
        return redirect('/index');
    }
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function authenticate(Request $request)
    {
        $loginData = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6']
        ]);
        if(auth()->attempt($loginData)) {
            $request->session()->regenerate();
            return view('TodoTask.index');
            // return redirect('/index');
        }
    }
}
