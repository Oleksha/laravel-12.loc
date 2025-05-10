<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public static function getRecord()
    {
        $return = self::select('students.*')
            ->orderBy('id', 'asc')
            ->paginate(20);
        return $return;
    }
}
