<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Student;
use Exception;
use Illuminate\Http\Request;
use PDF;

class PaymentController extends Controller
{
    public function index()
    {
        $data['getRecord'] = Payment::getRecord();
        return view('superadmin.payments.index', $data);
    }

    public function add()
    {
        $data['getStudents'] = Student::get();
        return view('superadmin.payments.add', $data);
    }

    /**
     * @throws Exception
     */
    public function store(Request $request)
    {
        Payment::recordInsert($request);
        return redirect('superadmin/payments/list')
            ->with('success', 'Record successfully create');
    }

    public function edit(string $id)
    {
        $data['getRecord'] = Payment::query()->find($id);
        $data['getStudents'] = Student::query()->get();
        return view('superadmin.payments.edit', $data);
    }

    /**
     * @throws Exception
     */
    public function update(Request $request, $id)
    {
        Payment::recordUpdate($request, $id);
        return redirect('superadmin/payments/list')
            ->with('success', 'Record successfully update');
    }

    public function destroy($id)
    {
        Payment::query()->find($id)->delete();
        return redirect()->back()->with('success', 'Record successfully deleted');
    }

    public function join_pdf()
    {
        $data['getRecords'] = Payment::select('payments.*', 'students.name')
            ->join('students', 'students.id', '=', 'payments.student_id')
            ->get();
        $pdf = PDF::loadView('pdf.payments_join', $data);
        return $pdf->download('PaymentsJoin.pdf');
    }
}
