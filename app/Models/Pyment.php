<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pyment extends Model
{
    protected $fillable = [
        'student_id',
        'amount',
        'payment_date',
        'payment_method',
        'notes',
    ];
}
