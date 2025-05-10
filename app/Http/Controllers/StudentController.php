<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $data['getRecord'] = Student::getRecord();
        return view('superadmin.students.index', $data);
    }
}
