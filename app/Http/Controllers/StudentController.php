<?php

namespace App\Http\Controllers;

class StudentController extends Controller
{
    public function index()
    {
        return view('superadmin.students.index');
    }
}
