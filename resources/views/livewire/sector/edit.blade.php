<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('sector.sector') ? 'invalid' : '' }}">
        <label class="form-label required" for="sector">{{ trans('cruds.sector.fields.sector') }}</label>
        <input class="form-control" type="text" name="sector" id="sector" required wire:model.defer="sector.sector">
        <div class="validation-message">
            {{ $errors->first('sector.sector') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.sector.fields.sector_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.sectors.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>