<?php

namespace App\Http\Controllers;

use Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if (Auth::User()->is_role ==  2) {
            // Super Admin
            echo 'S';die;
        } elseif (Auth::User()->is_role ==  1) {
            // Admin
            echo 'A';die;
        } elseif (Auth::User()->is_role ==  0) {
            // User
            echo 'U';die;
        } else {
            return redirect('login')->with('error', 'No Available Email.. Please Check');
        }
    }
}
