<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Major;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MajorController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('major_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.major.index');
    }

    public function create()
    {
        abort_if(Gate::denies('major_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.major.create');
    }

    public function edit(Major $major)
    {
        abort_if(Gate::denies('major_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.major.edit', compact('major'));
    }

    public function show(Major $major)
    {
        abort_if(Gate::denies('major_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.major.show', compact('major'));
    }
}
