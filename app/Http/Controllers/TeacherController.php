<?php

namespace App\Http\Controllers;

use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index()
    {
        $data['getRecord'] = Teacher::all();
        return view('superadmin.teachers.index', $data);
    }
}
