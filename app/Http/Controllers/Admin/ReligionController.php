<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Religion;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ReligionController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('religion_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.religion.index');
    }

    public function create()
    {
        abort_if(Gate::denies('religion_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.religion.create');
    }

    public function edit(Religion $religion)
    {
        abort_if(Gate::denies('religion_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.religion.edit', compact('religion'));
    }

    public function show(Religion $religion)
    {
        abort_if(Gate::denies('religion_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.religion.show', compact('religion'));
    }
}
