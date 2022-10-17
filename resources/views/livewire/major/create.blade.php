<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('major.majors') ? 'invalid' : '' }}">
        <label class="form-label required" for="majors">{{ trans('cruds.major.fields.majors') }}</label>
        <input class="form-control" type="text" name="majors" id="majors" required wire:model.defer="major.majors">
        <div class="validation-message">
            {{ $errors->first('major.majors') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.major.fields.majors_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.majors.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>