@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.grade.title_singular') }}:
                    {{ trans('cruds.grade.fields.id') }}
                    {{ $grade->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.grade.fields.id') }}
                            </th>
                            <td>
                                {{ $grade->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.grade.fields.grade') }}
                            </th>
                            <td>
                                {{ $grade->grade }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('grade_edit')
                    <a href="{{ route('admin.grades.edit', $grade) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.grades.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection