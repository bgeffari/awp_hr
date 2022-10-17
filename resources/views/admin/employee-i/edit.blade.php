@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.employeeI.title_singular') }}:
                    {{ trans('cruds.employeeI.fields.id') }}
                    {{ $employeeI->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('employee-i.edit', [$employeeI])
        </div>
    </div>
</div>
@endsection