<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('grade.grade') ? 'invalid' : '' }}">
        <label class="form-label required" for="grade">{{ trans('cruds.grade.fields.grade') }}</label>
        <input class="form-control" type="number" name="grade" id="grade" required wire:model.defer="grade.grade" step="0.01">
        <div class="validation-message">
            {{ $errors->first('grade.grade') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.grade.fields.grade_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.grades.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>