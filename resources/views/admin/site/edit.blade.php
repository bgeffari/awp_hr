@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.site.title_singular') }}:
                    {{ trans('cruds.site.fields.id') }}
                    {{ $site->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('site.edit', [$site])
        </div>
    </div>
</div>
@endsection