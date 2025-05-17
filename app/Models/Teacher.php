<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'specialization',
        'joining_date',
    ];

    public static function getRecord()
    {
        $return = self::select('teachers.*');
        if (!empty(Request::get('id'))) {
            $return = $return->where('id', Request::get('id'));
        }
        if (!empty(Request::get('name'))) {
            $return = $return->where('name', 'like', '%' . Request::get('name') . '%');
        }
        if (!empty(Request::get('email'))) {
            $return = $return->where('email', 'like', '%' . Request::get('email') . '%');
        }
        if (!empty(Request::get('joining_date'))) {
            $return = $return->where('joining_date', 'like', '%' . Request::get('joining_date') . '%');
        }
        $return = $return->orderBy('id', 'asc')->paginate(20);
        return $return;
    }
}
