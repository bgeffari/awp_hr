<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmployeeI;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmployeeIController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('employee_i_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.employee-i.index');
    }

    public function create()
    {
        abort_if(Gate::denies('employee_i_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.employee-i.create');
    }

    public function edit(EmployeeI $employeeI)
    {
        abort_if(Gate::denies('employee_i_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.employee-i.edit', compact('employeeI'));
    }

    public function show(EmployeeI $employeeI)
    {
        abort_if(Gate::denies('employee_i_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeI->load('location', 'sector', 'department', 'grade', 'major');

        return view('admin.employee-i.show', compact('employeeI'));
    }
}
