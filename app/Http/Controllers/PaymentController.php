<?php

namespace App\Http\Controllers;

class PaymentController extends Controller
{
    public function index()
    {
        return view('superadmin.payments.index');
    }
}
