<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeaveRequest extends Model
{
    protected $fillable = [
        "empployee_id",
        "status",
        "start_date",
        "end_date",
        "leave_type",
    ];

    public function employee() {
        return $this->belongsTo(Employee::class);
    }
}
