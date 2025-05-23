<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Request;

class Classe extends Model
{
    protected $fillable = [
        'subject_id',
        'teacher_id',
        'start_time',
        'end_time',
        'room_number',
    ];

    public static function getRecord()
    {
        $return = self::select('classes.*', 'subjects.name as subject_name', 'teachers.name as teacher_name');
        $return = $return->join('subjects', 'subjects.id', '=', 'classes.subject_id');
        $return = $return->join('teachers', 'teachers.id', '=', 'classes.teacher_id');
        // Search start
        if (!empty(Request::get('id'))) {
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
        }
        // Search End
        return $return->orderBy('id', 'asc')->paginate(20);
    }
}
