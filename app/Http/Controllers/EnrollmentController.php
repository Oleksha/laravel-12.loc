<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Enrollment;
use App\Models\Student;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function index()
    {
        $data['getRecord'] = Enrollment::getRecord();
        return view('superadmin.enrollments.index', $data);
    }

    public function add()
    {
        $data['getStudents'] = Student::query()->get();
        $data['getClasses'] = Classe::query()->get();
        return view('superadmin.enrollments.add', $data);
    }

    public function store(Request $request)
    {
        Enrollment::recordInsert($request);
        return redirect('superadmin/enrollments/list')
            ->with('success', 'Record successfully create');
    }
}
