<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $data['getRecord'] = Student::getRecord();
        return view('superadmin.students.index', $data);
    }

    public function add()
    {
        return view('superadmin.students.add');
    }

    public function store(Request $request)
    {
        $save = new Student();
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->phone = trim($request->phone);
        $save->address = trim($request->address);
        $save->date_of_birth = trim($request->date_of_birth);
        $save->save();
        return redirect('superadmin/students/list')
            ->with('success', 'Record successfully create');
    }
}
