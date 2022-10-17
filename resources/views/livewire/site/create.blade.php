<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('site.site_name') ? 'invalid' : '' }}">
        <label class="form-label required" for="site_name">{{ trans('cruds.site.fields.site_name') }}</label>
        <input class="form-control" type="text" name="site_name" id="site_name" required wire:model.defer="site.site_name">
        <div class="validation-message">
            {{ $errors->first('site.site_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.site.fields.site_name_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.sites.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>