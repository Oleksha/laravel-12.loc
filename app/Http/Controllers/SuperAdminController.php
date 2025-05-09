<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function user_list(Request $request)
    {
        //$data['getRecord'] = User::where('is_role', 0)->get();
        $data['getRecord'] = User::getRecord($request);
        return view('superadmin.user.list', $data);
    }

    public function user_delete($id)
    {
        User::find($id)->delete();
        return redirect()->back()->with('error', 'Record successfully deleted');
    }
}
