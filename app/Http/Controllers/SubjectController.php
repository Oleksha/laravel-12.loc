<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $data['getRecord'] = Subject::getRecord();
        return view('superadmin.subjects.index', $data);
    }

    public function add()
    {
        return view('superadmin.subjects.add');
    }

    public function store(Request $request)
    {
        $save = new Subject();
        $save->name = trim($request->name);
        $save->description = trim($request->description);
        $save->save();
        return redirect('superadmin/subjects/list')
            ->with('success', 'Record successfully create');
    }

    public function edit($id)
    {
        $data['getRecord'] = Subject::query()->find($id);
        return view('superadmin.subjects.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $update = Subject::query()->find($id);
        $update->name = trim($request->name);
        $update->description = trim($request->description);
        $update->save();
        return redirect('superadmin/subjects/list')
            ->with('success', 'Record successfully update');
    }

    public function destroy($id)
    {
        Subject::query()->find($id)->delete();
        return redirect()->back()->with('success', 'Record successfully deleted');
    }
}
