@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.religion.title_singular') }}:
                    {{ trans('cruds.religion.fields.id') }}
                    {{ $religion->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.religion.fields.id') }}
                            </th>
                            <td>
                                {{ $religion->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.religion.fields.religion') }}
                            </th>
                            <td>
                                {{ $religion->religion }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('religion_edit')
                    <a href="{{ route('admin.religions.edit', $religion) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.religions.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection