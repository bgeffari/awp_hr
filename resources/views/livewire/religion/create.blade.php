<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('religion.religion') ? 'invalid' : '' }}">
        <label class="form-label required" for="religion">{{ trans('cruds.religion.fields.religion') }}</label>
        <input class="form-control" type="text" name="religion" id="religion" required wire:model.defer="religion.religion">
        <div class="validation-message">
            {{ $errors->first('religion.religion') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.religion.fields.religion_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.religions.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>