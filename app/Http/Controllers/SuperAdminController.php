<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function user_list()
    {
        $data['getRecord'] = User::getRecord();
        return view('superadmin.user.list', $data);
    }

    public function user_delete($id)
    {
        User::find($id)->delete();
        return redirect()->back()->with('error', 'Record successfully deleted');
    }
}
