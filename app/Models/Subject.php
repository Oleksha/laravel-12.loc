<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Request;

class Subject extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public static function getRecord()
    {
        $return = self::select('subjects.*');
        if (!empty(Request::get('id'))) {
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
        }
        $return = $return->orderBy('id', 'asc')->paginate(20);
        return $return;
    }
}
