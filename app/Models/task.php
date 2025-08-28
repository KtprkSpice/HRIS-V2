<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class task extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "task";
    protected $fillable = [
        "name",
        "employee_id",
        "description",
        "start_date",
        "end_date"
    ];

    public function employee() {
        return $this->belongsTo(Employee::class);
    }
}
