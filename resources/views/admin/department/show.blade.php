@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.department.title_singular') }}:
                    {{ trans('cruds.department.fields.id') }}
                    {{ $department->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.department.fields.id') }}
                            </th>
                            <td>
                                {{ $department->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.department.fields.department') }}
                            </th>
                            <td>
                                {{ $department->department }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('department_edit')
                    <a href="{{ route('admin.departments.edit', $department) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.departments.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection