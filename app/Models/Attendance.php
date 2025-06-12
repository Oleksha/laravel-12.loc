<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
        /*if (!empty(Request::get('id'))) {
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
        }*/
        // Search End
        return $return->orderBy('id', 'asc')->paginate(20);
    }
}
