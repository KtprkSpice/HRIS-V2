<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\RoleController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\LeaveRequestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('layouts.dashboard');
});

Route::resource('/employees', EmployeeController::class);

Route::resource('/departments', DepartmentController::class);

Route::resource('/tasks', TaskController::class);

Route::resource('leave-request', LeaveRequestController::class);

Route::resource('/roles', RoleController::class);
