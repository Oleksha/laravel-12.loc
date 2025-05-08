<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function registration()
    {
        $data['meta_title'] = 'Registration';
        return view('auth.registration', $data);
    }

    public function registration_post(Request $request)
    {
        $user = request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required_with:password|same:password|min:6',
            'is_role' => 'required',
        ]);
        $user = new User();
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->is_role = trim($request->is_role);
        $user->remember_token = Str::random(50);
        $user->save();
        return redirect(url('login'))->with('success', 'Register successfully');
    }

    public function login()
    {
        $data['meta_title'] = 'Login';
        return view('auth.login', $data);
    }

    public function login_post(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {
            if (Auth::User()->is_role ==  2) {
                // Super Admin
                return redirect()->intended('superadmin/dashboard');
            } elseif (Auth::User()->is_role ==  1) {
                // Admin
                return redirect()->intended('admin/dashboard');
            } elseif (Auth::User()->is_role ==  0) {
                // User
                return redirect()->intended('user/dashboard');
            } else {
                return redirect('login')->with('error', 'No Available Email.. Please Check');
            }
        } else {
            return redirect()->back()->with('error', 'Please enter the correct credentials');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect(url('/'));
    }

    public function forgot()
    {
        $data['meta_title'] = 'Forgot Password';
        return view('auth.forgot', $data);
    }
}
