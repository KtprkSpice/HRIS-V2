<?php

namespace App\Http\Controllers;

use App\Models\LeaveRequest;
use Illuminate\Http\Request;

class LeaveRequestController extends Controller
{
    public function index() {
        $leave_requests = LeaveRequest::all();

        return view("leave.index", compact("leave_requests"));
    }
}
