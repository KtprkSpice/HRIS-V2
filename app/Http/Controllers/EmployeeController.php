<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() {
        $employees = Employee::all();
        return view("employees.index", compact('employees'));
    }

    public function create() {
        $departments = Department::all();
        return view("employees.create", compact("departments"));
    }

    public function store(Request $request) {
        $request->validate([
            "fullname" => "required|string|max:255",
            "email" => "required|string|unique:employees,email",
            "phone" => "required|string|max:18",
            "department_id" => "required",
            "address" => "nullable|string",
            "born_date" => "required|date",
        ]);

        Employee::create($request->all());

        return redirect()->route("employees.index")->with("success", "Success Add New Employee");
    }

    public function edit(Employee $employee) {
        $departments = Department::all();

        return view("employees.edit", compact("departments", "employee"));
    }

    public function update(Request $request, Employee $employee) {

        $request->validate([
            "fullname" => "required|string|max:255",
            "email" => "required|string",
            "phone" => "required|string|max:18",
            "department_id" => "required",
            "address" => "nullable|string",
            "born_date" => "required|date",
        ]);

        $employee->update($request->all());

        return redirect()->route("employees.index")->with("success", "Data Successfully Updated");
    }

    public function destroy(Employee $employee) {
        $employee->delete();

        return redirect()->route("employees.index")->with("success", "Data Successfuly Deleted");
    }
}
