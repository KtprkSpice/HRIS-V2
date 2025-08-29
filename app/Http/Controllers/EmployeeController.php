<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function show(Employee $employee) {
        $departments = Department::all();
        return view("employees.show", compact("employee", "departments"));
    }

    public function create()
    {
        $departments = Department::all();
        return view('employees.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|unique:employees,email',
            'phone' => 'required|string|max:18',
            'department_id' => 'required',
            'address' => 'nullable|string',
            'born_date' => 'required|date',
        ]);

        // Create Account For Login
        $user = User::create([
            'name' => $request->fullname,
            'email' => strtolower($request->fullname . '@swatservices.com'),
            'password' => Hash::make(strtolower($request->fullname . '@swatservices.com')),
            'role_id' => 2,
            'status' => 'active',
        ]);

        Employee::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
            'department_id' => $request->department_id,
            'address' => $request->address,
            'born_date' => $request->born_date,
            'hire_date' => Carbon::now(),
            'user_id' => $user->id,
        ]);

        return redirect()->route('employees.index')->with('success', 'Success Add New Employee');
    }

    public function edit(Employee $employee)
    {
        $departments = Department::all();

        return view('employees.edit', compact('departments', 'employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|string',
            'phone' => 'required|string|max:18',
            'department_id' => 'required',
            'address' => 'nullable|string',
            'born_date' => 'required|date',
        ]);

        $employee->update($request->all());

        return redirect()->route('employees.index')->with('success', 'Data Successfully Updated');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Data Successfuly Deleted');
    }
}
