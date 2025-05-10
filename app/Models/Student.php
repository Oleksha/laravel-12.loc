<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public static function getRecord()
    {
        $return = self::select('students.*')
            ->orderBy('id', 'desc')
            ->paginate(20);
        return $return;
    }
}
