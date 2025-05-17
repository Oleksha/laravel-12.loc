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

    public function edit($id)
    {
        $data['getRecord'] = Teacher::query()->find($id);
        return view('superadmin.teachers.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $update = Teacher::query()->find($id);
        $update->name = trim($request->name);
        $update->email = trim($request->email);
        $update->phone = trim($request->phone);
        $update->specialization = trim($request->specialization);
        $update->joining_date = trim($request->joining_date);
        $update->save();
        return redirect('superadmin/teachers/list')
            ->with('success', 'Record successfully update');
    }

    public function destroy($id)
    {
        Teacher::query()->find($id)->delete();
        return redirect()->back()->with('error', 'Record successfully deleted');
    }
}
