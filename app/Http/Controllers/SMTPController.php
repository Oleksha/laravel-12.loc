<?php

namespace App\Http\Controllers;

use App\Models\Smtp;
use Illuminate\Http\Request;

class SMTPController extends Controller
{
    public function smtp()
    {
        $data['getRecord'] = SMTP::query()->find(1);
        return view('superadmin.smtp.index', $data);
    }

    public function update(Request $request)
    {
        $user = SMTP::query()->find(1);
        $user->app_name = trim($request->app_name);
        $user->mail_mailer = trim($request->mail_mailer);
        $user->mail_host = trim($request->mail_host);
        $user->mail_port = trim($request->mail_port);
        $user->mail_username = trim($request->mail_username);
        $user->mail_password = trim($request->mail_password);
        $user->mail_encryption = trim($request->mail_encryption);
        $user->mail_from_address = trim($request->mail_from_address);
        $user->save();
        return redirect()->back()->with('success', 'SMTP updated successfully');
    }
}
