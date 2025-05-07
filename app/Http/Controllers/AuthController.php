<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
    public function registration()
    {
        $data['meta_title'] = 'Registration';
        return view('auth.registration', $data);
    }

    public function login()
    {
        $data['meta_title'] = 'Login';
        return view('auth.login', $data);
    }

    public function forgot()
    {
        $data['meta_title'] = 'Forgot Password';
        return view('auth.forgot', $data);
    }
}
