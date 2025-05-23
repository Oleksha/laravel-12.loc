<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Request;

class Enrollment extends Model
{
    protected $fillable = [
        'student_id',
        'class_id',
        'enrollment_date',
    ];

    public static function getRecord()
    {
        $return = self::select('enrollments.*', 'students.name as student_name', 'classes.name as class_name');
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
