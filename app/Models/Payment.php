<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Log;
use Request;

class Payment extends Model
{
    protected $fillable = [
        'student_id',
        'amount',
        'payment_date',
        'payment_method',
        'notes',
    ];

    /**
     * @throws Exception
     */
    public static function recordInsert($request): void
    {
        try {
            $save = new self();
            $save->student_id = trim($request->student_id);
            $save->amount = trim($request->amount);
            $save->payment_date = trim($request->payment_date);
            $save->payment_method = trim($request->payment_method);
            $save->notes = trim($request->notes);
            $save->save();
        } catch (Exception $e) {
            Log::error("Error saving record: " . $e->getMessage());
            throw $e;
        }
    }

    public static function getRecord()
    {
        $return = self::select('payments.*', 'students.name as student_name');
        $return = $return->join('students', 'students.id', '=', 'payments.student_id');
        // Search start
        if (!empty(Request::get('id'))) {
            $return = $return->where('payments.id', Request::get('id'));
        }
        if (!empty(Request::get('student_id'))) {
            $return = $return->where('students.name', 'like', '%' . Request::get('student_id') . '%');
        }
        if (!empty(Request::get('amount'))) {
            $return = $return->where('payments.amount', 'like', '%' . Request::get('amount') . '%');
        }
        if (!empty(Request::get('payment_date'))) {
            $return = $return->where('payments.payment_date', 'like', '%' . Request::get('payment_date') . '%');
        }
        // Search End
        return $return->orderBy('id', 'desc')->paginate(20);
    }

    /**
     * @throws Exception
     */
    public static function recordUpdate($request, $id): void
    {
        try {
            $update = self::query()->find($id);
            $update->student_id = trim($request->student_id);
            $update->amount = trim($request->amount);
            $update->payment_date = trim($request->payment_date);
            $update->payment_method = trim($request->payment_method);
            $update->notes = trim($request->notes);
            $update->save();
        } catch (Exception $e) {
            Log::error("Error saving record: " . $e->getMessage());
            throw $e;
        }
    }
}
