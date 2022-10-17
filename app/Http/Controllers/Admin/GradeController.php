<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GradeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('grade_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.grade.index');
    }

    public function create()
    {
        abort_if(Gate::denies('grade_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.grade.create');
    }

    public function edit(Grade $grade)
    {
        abort_if(Gate::denies('grade_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.grade.edit', compact('grade'));
    }

    public function show(Grade $grade)
    {
        abort_if(Gate::denies('grade_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.grade.show', compact('grade'));
    }
}
