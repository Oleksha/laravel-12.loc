<?php

namespace App\Models;

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
     * @throws \Exception
     */
    public static function recordInsert($request): void
    {
        try {
            $save = new self();
            $save->student_id = trim($request->student_id);
            $save->class_id = trim($request->class_id);
            $save->enrollment_date = trim($request->enrollment_date);
            $save->save();
        } catch (\Exception $e) {
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
        /*if (!empty(Request::get('id'))) {
            $return = $return->where('classes.id', Request::get('id'));
        }
        if (!empty(Request::get('subject_id'))) {
            $return = $return->where('subjects.name', 'like', '%' . Request::get('subject_id') . '%');
        }
        if (!empty(Request::get('teacher_id'))) {
            $return = $return->where('teachers.name', 'like', '%' . Request::get('teacher_id') . '%');
        }
        if (!empty(Request::get('start_time'))) {
            $return = $return->where('classes.start_time', 'like', '%' . Request::get('start_time') . '%');
        }*/
        // Search End
        return $return->orderBy('id', 'asc')->paginate(20);
    }
}
