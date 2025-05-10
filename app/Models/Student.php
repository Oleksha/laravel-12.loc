<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'date_of_birth',
    ];

    public static function getRecord($request)
    {
        $return = self::select('students.*');
        if (!empty(Request::get('id'))) {
            $return = $return->where('id', Request::get('id'));
        }
        if (!empty(Request::get('name'))) {
            $return = $return->where('name', 'like', '%' . Request::get('name') . '%');
        }
        if (!empty(Request::get('email'))) {
            $return = $return->where('email', 'like', '%' . Request::get('email') . '%');
        }
        if (!empty(Request::get('date_of_birth'))) {
            $return = $return->where('date_of_birth', 'like', '%' . Request::get('date_of_birth') . '%');
        }
        $return = $return->orderBy('id', 'asc')->paginate(20);
        return $return;
    }
}
