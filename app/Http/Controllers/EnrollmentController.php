<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Enrollment;
use App\Models\Student;
use Exception;
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

    /**
     * @throws Exception
     */
    public function store(Request $request)
    {
        Enrollment::recordInsert($request);
        return redirect('superadmin/enrollments/list')
            ->with('success', 'Record successfully create');
    }

    public function edit($id)
    {
        $data['getRecord'] = Enrollment::query()->find($id);
        $data['getStudents'] = Student::query()->get();
        $data['getClasses'] = Classe::query()->get();
        return view('superadmin.enrollments.edit', $data);
    }

    /**
     * @throws Exception
     */
    public function update(Request $request, $id)
    {
        Enrollment::recordUpdate($request, $id);
        return redirect('superadmin/enrollments/list')
            ->with('success', 'Record successfully update');
    }

    public function destroy($id)
    {
        Enrollment::query()->find($id)->delete();
        return redirect()->back()->with('success', 'Record successfully deleted');
    }
}
