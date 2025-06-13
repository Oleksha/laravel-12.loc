<?php

namespace App\Http\Controllers;

class SMTPController extends Controller
{
    public function smtp()
    {
        return view('superadmin.smtp.index');
    }
}
