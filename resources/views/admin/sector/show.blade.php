@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.sector.title_singular') }}:
                    {{ trans('cruds.sector.fields.id') }}
                    {{ $sector->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.sector.fields.id') }}
                            </th>
                            <td>
                                {{ $sector->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.sector.fields.sector') }}
                            </th>
                            <td>
                                {{ $sector->sector }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('sector_edit')
                    <a href="{{ route('admin.sectors.edit', $sector) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.sectors.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection