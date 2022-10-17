@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.sector.title_singular') }}:
                    {{ trans('cruds.sector.fields.id') }}
                    {{ $sector->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('sector.edit', [$sector])
        </div>
    </div>
</div>
@endsection