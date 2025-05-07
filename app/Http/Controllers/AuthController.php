<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
    public function registration()
    {
        return view('auth.registration');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function forgot()
    {
        return view('auth.forgot');
    }
}
