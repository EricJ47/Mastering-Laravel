<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function login(LoginRequest $request) {
        // dd($request->all());

        // $request->validate( [
        //     'username.required' => 'Username is required',
        //     'username.alpha' => 'Username must be alphabet, kenot lah kenott',
        //     'email.required' => 'Email is required',
        //     'email.email' => 'Email must be valid',
        //     'password.required' => 'Password is required',
        //     'password.min' => 'Password must be at least 8 characters',
        // ]);

        return $request->all();
    }
}
