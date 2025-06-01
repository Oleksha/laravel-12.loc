<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Request;

class Enrollment extends Model
{
    protected $fillable = [
        'student_id',
        'class_id',
        'enrollment_date',
    ];

    /**
     * @throws Exception
     */
    public static function recordInsert($request): void
    {
        try {
            $save = new self();
            $save->student_id = trim($request->student_id);
            $save->class_id = trim($request->class_id);
            $save->enrollment_date = trim($request->enrollment_date);
            $save->save();
        } catch (Exception $e) {
            Log::error("Error saving record: " . $e->getMessage());
            throw $e;
        }
    }

    public static function getRecord()
    {
        $return = self::select('enrollments.*', 'students.name as student_name', 'classes.room_number as class_room_number');
        $return = $return->join('students', 'students.id', '=', 'enrollments.student_id');
        $return = $return->join('classes', 'classes.id', '=', 'enrollments.class_id');
        // Search start
        if (!empty(Request::get('id'))) {
            $return = $return->where('enrollments.id', Request::get('id'));
        }
        if (!empty(Request::get('student_id'))) {
            $return = $return->where('students.name', 'like', '%' . Request::get('student_id') . '%');
        }
        if (!empty(Request::get('class_id'))) {
            $return = $return->where('classes.room_number', 'like', '%' . Request::get('class_id') . '%');
        }
        if (!empty(Request::get('enrollment_date'))) {
            $return = $return->where('enrollments.enrollment_date', 'like', '%' . Request::get('enrollment_date') . '%');
        }
        // Search End
        return $return->orderBy('id', 'asc')->paginate(20);
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
            $update->enrollment_date = trim($request->enrollment_date);
            $update->save();
        } catch (Exception $e) {
            Log::error("Error saving record: " . $e->getMessage());
            throw $e;
        }
    }
}
