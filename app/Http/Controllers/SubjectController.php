<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Teacher;
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
}
