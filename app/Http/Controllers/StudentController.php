<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Enrollment;
use App\Models\Payment;
use App\Models\Student;
use PDF;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $data['getRecord'] = Student::getRecord();
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
        Attendance::query()->where('attendances.student_id', $id)->delete();
        Enrollment::query()->where('enrollments.student_id', $id)->delete();
        Payment::query()->where('payments.student_id', $id)->delete();
        Student::query()->find($id)->delete();
        return redirect()->back()->with('success', 'Record Successfully Deleted');
    }

    public function pdf_student_one(string $id)
    {
        $getRecord = Student::query()->find($id);
        $data = [
            'title' => 'Students PDF',
            'date' => date('d-m-Y'),
            'getRecord' => $getRecord,
        ];
        $pdf = PDF::loadView('pdf.oneStudent', $data);
        return $pdf->download('Students.pdf');
    }

    public function pdf_student_all()
    {
        $getRecord = Student::query()->get();
        $data = [
            'title' => 'Students PDF',
            'date' => date('d-m-Y'),
            'getRecord' => $getRecord,
        ];
        $pdf = PDF::loadView('pdf.allStudents', $data);
        return $pdf->download('StudentsAll.pdf');
    }
}
