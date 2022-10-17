<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sector;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SectorController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('sector_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sector.index');
    }

    public function create()
    {
        abort_if(Gate::denies('sector_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sector.create');
    }

    public function edit(Sector $sector)
    {
        abort_if(Gate::denies('sector_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sector.edit', compact('sector'));
    }

    public function show(Sector $sector)
    {
        abort_if(Gate::denies('sector_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sector.show', compact('sector'));
    }
}
