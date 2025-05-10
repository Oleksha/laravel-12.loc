<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $data['getRecord'] = Student::getRecord($request);
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

    public function edit($id)
    {
        $data['getRecord'] = Student::query()->find($id);
        return view('superadmin.students.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $save = Student::query()->find($id);
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->phone = trim($request->phone);
        $save->address = trim($request->address);
        $save->date_of_birth = trim($request->date_of_birth);
        $save->save();
        return redirect('superadmin/students/list')
            ->with('success', 'Record successfully update');
    }

    public function destroy($id)
    {
        Student::query()->find($id)->delete();
        return redirect()->back()->with('error', 'Record successfully deleted');
    }
}
