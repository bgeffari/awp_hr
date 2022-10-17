<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('department.department') ? 'invalid' : '' }}">
        <label class="form-label required" for="department">{{ trans('cruds.department.fields.department') }}</label>
        <input class="form-control" type="text" name="department" id="department" required wire:model.defer="department.department">
        <div class="validation-message">
            {{ $errors->first('department.department') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.department.fields.department_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.departments.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>