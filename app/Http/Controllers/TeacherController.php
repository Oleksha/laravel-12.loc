<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $data['getRecord'] = Teacher::all();
        return view('superadmin.teachers.index', $data);
    }

    public function add()
    {
        return view('superadmin.teachers.add');
    }

    public function store(Request $request)
    {
        $save = new Teacher();
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->phone = trim($request->phone);
        $save->specialization = trim($request->specialization);
        $save->joining_date = trim($request->joining_date);
        $save->save();
        return redirect('superadmin/teachers/list')
            ->with('success', 'Record successfully create');
    }
}
