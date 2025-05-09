<?php

namespace App\Http\Controllers;

use App\Models\User;

class SuperAdminController extends Controller
{
    public function user_list()
    {
        $data['getRecord'] = User::where('is_role', 0)->get();
        return view('superadmin.user.list', $data);
    }
}
