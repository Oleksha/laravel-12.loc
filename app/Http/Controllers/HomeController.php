<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $data['meta_title'] = 'Welcome';
        return view('index', $data);
    }
}
