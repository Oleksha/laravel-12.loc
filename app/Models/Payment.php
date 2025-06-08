<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Log;

class Payment extends Model
{
    protected $fillable = [
        'student_id',
        'amount',
        'payment_date',
        'payment_method',
        'notes',
    ];

    /**
     * @throws Exception
     */
    public static function recordInsert($request): void
    {
        try {
            $save = new self();
            $save->student_id = trim($request->student_id);
            $save->amount = trim($request->amount);
            $save->payment_date = trim($request->payment_date);
            $save->payment_method = trim($request->payment_method);
            $save->notes = trim($request->notes);
            $save->save();
        } catch (Exception $e) {
            Log::error("Error saving record: " . $e->getMessage());
            throw $e;
        }
    }
}
