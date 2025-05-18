<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Teacher;

class SubjectController extends Controller
{
    public function index()
    {
        $data['getRecord'] = Subject::getRecord();
        return view('superadmin.subjects.index', $data);
    }
}
