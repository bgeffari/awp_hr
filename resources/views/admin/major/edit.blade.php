@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.major.title_singular') }}:
                    {{ trans('cruds.major.fields.id') }}
                    {{ $major->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('major.edit', [$major])
        </div>
    </div>
</div>
@endsection