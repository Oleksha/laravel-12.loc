<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Log;
use Request;

class Attendance extends Model
{
    protected $fillable = [
        'student_id',
        'class_id',
        'attendance_date',
        'status',
    ];

    public static function getRecords()
    {
        $return = self::select('attendances.*', 'students.name as student_name', 'classes.room_number as class_room_number');
        $return = $return->join('students', 'students.id', '=', 'attendances.student_id');
        $return = $return->join('classes', 'classes.id', '=', 'attendances.class_id');
        // Search start
        if (!empty(Request::get('id'))) {
            $return = $return->where('attendances.id', Request::get('id'));
        }
        if (!empty(Request::get('student_id'))) {
            $return = $return->where('students.name', 'like', '%' . Request::get('student_id') . '%');
        }
        if (!empty(Request::get('class_id'))) {
            $return = $return->where('classes.room_number', 'like', '%' . Request::get('class_id') . '%');
        }
        if (!empty(Request::get('attendance_date'))) {
            $return = $return->where('attendances.attendance_date', 'like', '%' . Request::get('attendance_date') . '%');
        }
        if (!empty(Request::get('status'))) {
            $return = $return->where('attendances.status', 'like', '%' . Request::get('status') . '%');
        }
        // Search End
        return $return->orderBy('id', 'asc')->paginate(20);
    }

    /**
     * @throws Exception
     */
    public static function recordInsert($request): void
    {
        try {
            $save = new self();
            $save->student_id = trim($request->student_id);
            $save->class_id = trim($request->class_id);
            $save->attendance_date = trim($request->attendance_date);
            $save->status = trim($request->status);
            $save->save();
        } catch (Exception $e) {
            Log::error("Error saving record: " . $e->getMessage());
            throw $e;
        }
    }

    /**
     * @throws Exception
     */
    public static function recordUpdate($request, $id): void
    {
        try {
            $update = self::query()->find($id);
            $update->student_id = trim($request->student_id);
            $update->class_id = trim($request->class_id);
            $update->attendance_date = trim($request->attendance_date);
            $update->status = trim($request->status);
            $update->save();
        } catch (Exception $e) {
            Log::error("Error saving record: " . $e->getMessage());
            throw $e;
        }
    }
}
