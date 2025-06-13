<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Classe;
use App\Models\Student;
use Exception;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        $data['getRecord'] = Attendance::getRecords();
        return view('superadmin.attendance.index', $data);
    }

    public function add()
    {
        $data['getStudents'] = Student::query()->get();
        $data['getClasses'] = Classe::query()->get();
        return view('superadmin.attendance.add', $data);
    }

    /**
     * @throws Exception
     */
    public function store(Request $request)
    {
        Attendance::recordInsert($request);
        return redirect('superadmin/attendance/list')
            ->with('success', 'Record successfully create');
    }

    public function edit($id)
    {
        $data['getRecord'] = Attendance::query()->find($id);
        $data['getStudents'] = Student::query()->get();
        $data['getClasses'] = Classe::query()->get();
        return view('superadmin.attendance.edit', $data);
    }

    /**
     * @throws Exception
     */
    public function update(Request $request, $id)
    {
        Attendance::recordUpdate($request, $id);
        return redirect('superadmin/attendance/list')
            ->with('success', 'Record successfully update');
    }

    public function destroy(string $id)
    {
        Attendance::query()->find($id)->delete();
        return redirect()->back()->with('success', 'Record successfully deleted');
    }
}
