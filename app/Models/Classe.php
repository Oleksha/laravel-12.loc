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
        /*if (!empty(Request::get('id'))) {
            $return = $return->where('id', Request::get('id'));
        }
        if (!empty(Request::get('name'))) {
            $return = $return->where('name', 'like', '%' . Request::get('name') . '%');
        }
        if (!empty(Request::get('description'))) {
            $return = $return->where('description', 'like', '%' . Request::get('description') . '%');
        }
        if (!empty(Request::get('created_at'))) {
            $return = $return->where('created_at', 'like', '%' . Request::get('created_at') . '%');
        }*/
        $return = $return->orderBy('id', 'asc')->paginate(20);
        return $return;
    }
}
