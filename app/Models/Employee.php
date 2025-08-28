<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        "fullname",
        "email",
        "department_id",
        "address",
        "status",
        "phone",
        "salary",
        "born_date",
        "hire_date",
    ];

    public function department() {
        return $this->belongsTo(Department::class);
    }
}
