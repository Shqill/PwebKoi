<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Unique;
use Session;
use Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('home');
        } else {
            return redirect('home')->with('error_message', 'Wrong email or password');
        }
    }

    public function logout(){
        Session::flush();
        Auth::logout();

        return redirect('home');
    }

    public function register(Request $request)
    {
        $request->validate([
           'email'      =>'unique:users|email',
           'password'   =>'min:6'
        ]);

        User::create([
            'name'      => $request->input('name'),
            'email'     => $request->input('email'),
            'password'  => Hash::make($request->input('password')),
        ]);

        return redirect('home');
    }
}
