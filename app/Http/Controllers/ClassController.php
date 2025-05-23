<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $data['getRecord'] = Classe::getRecord();
        return view('superadmin.classes.index', $data);
    }

    public function add()
    {
        $data['getSubjects'] = Subject::query()->get();
        $data['getTeachers'] = Teacher::query()->get();
        return view('superadmin.classes.add', $data);
    }

    public function store(Request $request)
    {
        $save = new Classe();
        $save->subject_id = trim($request->subject_id);
        $save->teacher_id = trim($request->teacher_id);
        $save->start_time = trim($request->start_time);
        $save->end_time = trim($request->end_time);
        $save->room_number = trim($request->room_number);
        $save->save();
        return redirect('superadmin/classes/list')
            ->with('success', 'Record successfully create');
    }

    public function edit($id)
    {
        $data['getRecord'] = Classe::query()->find($id);
        $data['getSubjects'] = Subject::query()->get();
        $data['getTeachers'] = Teacher::query()->get();
        return view('superadmin.classes.edit', $data);
    }

    public function update(string $id, Request $request)
    {
        $update = Classe::query()->find($id);
        $update->subject_id = trim($request->subject_id);
        $update->teacher_id = trim($request->teacher_id);
        $update->start_time = trim($request->start_time);
        $update->end_time = trim($request->end_time);
        $update->room_number = trim($request->room_number);
        $update->update();
        return redirect('superadmin/classes/list')
            ->with('success', 'Record successfully update');
    }
}
