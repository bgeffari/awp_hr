@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.religion.title_singular') }}:
                    {{ trans('cruds.religion.fields.id') }}
                    {{ $religion->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('religion.edit', [$religion])
        </div>
    </div>
</div>
@endsection