<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if (Auth::User()->is_role ==  2) {
            // Super Admin
            $data['meta_title'] = 'Super Admin Dashboard Page';
            $data['getRecord'] = User::find(Auth::User()->id);
            return view('superadmin.dashboard', $data);
        } elseif (Auth::User()->is_role ==  1) {
            // Admin
            $data['meta_title'] = 'Admin Dashboard Page';
            $data['getRecord'] = User::find(Auth::User()->id);
            return view('admin.dashboard', $data);
        } elseif (Auth::User()->is_role ==  0) {
            // User
            $data['meta_title'] = 'User Dashboard Page';
            $data['getRecord'] = User::find(Auth::User()->id);
            return view('user.dashboard', $data);
        }
    }
}
