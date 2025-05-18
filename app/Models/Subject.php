<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public static function getRecord()
    {
        return self::select('subjects.*')->paginate(20);
    }
}
