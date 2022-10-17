@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.major.title_singular') }}:
                    {{ trans('cruds.major.fields.id') }}
                    {{ $major->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.major.fields.id') }}
                            </th>
                            <td>
                                {{ $major->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.major.fields.majors') }}
                            </th>
                            <td>
                                {{ $major->majors }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('major_edit')
                    <a href="{{ route('admin.majors.edit', $major) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.majors.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection