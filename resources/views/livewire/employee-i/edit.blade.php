<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('employeeI.sap') ? 'invalid' : '' }}">
        <label class="form-label required" for="sap">{{ trans('cruds.employeeI.fields.sap') }}</label>
        <input class="form-control" type="number" name="sap" id="sap" required wire:model.defer="employeeI.sap" step="1">
        <div class="validation-message">
            {{ $errors->first('employeeI.sap') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.sap_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.employeeI.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="employeeI.name">
        <div class="validation-message">
            {{ $errors->first('employeeI.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.company') ? 'invalid' : '' }}">
        <label class="form-label required" for="company">{{ trans('cruds.employeeI.fields.company') }}</label>
        <input class="form-control" type="text" name="company" id="company" required wire:model.defer="employeeI.company">
        <div class="validation-message">
            {{ $errors->first('employeeI.company') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.company_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.location_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="location">{{ trans('cruds.employeeI.fields.location') }}</label>
        <x-select-list class="form-control" required id="location" name="location" :options="$this->listsForFields['location']" wire:model="employeeI.location_id" />
        <div class="validation-message">
            {{ $errors->first('employeeI.location_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.location_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.sector_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="sector">{{ trans('cruds.employeeI.fields.sector') }}</label>
        <x-select-list class="form-control" required id="sector" name="sector" :options="$this->listsForFields['sector']" wire:model="employeeI.sector_id" />
        <div class="validation-message">
            {{ $errors->first('employeeI.sector_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.sector_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.department_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="department">{{ trans('cruds.employeeI.fields.department') }}</label>
        <x-select-list class="form-control" required id="department" name="department" :options="$this->listsForFields['department']" wire:model="employeeI.department_id" />
        <div class="validation-message">
            {{ $errors->first('employeeI.department_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.department_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.section') ? 'invalid' : '' }}">
        <label class="form-label required" for="section">{{ trans('cruds.employeeI.fields.section') }}</label>
        <input class="form-control" type="text" name="section" id="section" required wire:model.defer="employeeI.section">
        <div class="validation-message">
            {{ $errors->first('employeeI.section') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.section_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.grade_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="grade">{{ trans('cruds.employeeI.fields.grade') }}</label>
        <x-select-list class="form-control" required id="grade" name="grade" :options="$this->listsForFields['grade']" wire:model="employeeI.grade_id" />
        <div class="validation-message">
            {{ $errors->first('employeeI.grade_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.grade_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.sap_number') ? 'invalid' : '' }}">
        <label class="form-label required" for="sap_number">{{ trans('cruds.employeeI.fields.sap_number') }}</label>
        <input class="form-control" type="number" name="sap_number" id="sap_number" required wire:model.defer="employeeI.sap_number" step="0.1">
        <div class="validation-message">
            {{ $errors->first('employeeI.sap_number') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.sap_number_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.job_title') ? 'invalid' : '' }}">
        <label class="form-label required" for="job_title">{{ trans('cruds.employeeI.fields.job_title') }}</label>
        <input class="form-control" type="text" name="job_title" id="job_title" required wire:model.defer="employeeI.job_title">
        <div class="validation-message">
            {{ $errors->first('employeeI.job_title') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.job_title_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.major_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="major">{{ trans('cruds.employeeI.fields.major') }}</label>
        <x-select-list class="form-control" required id="major" name="major" :options="$this->listsForFields['major']" wire:model="employeeI.major_id" />
        <div class="validation-message">
            {{ $errors->first('employeeI.major_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.major_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.graduation_year') ? 'invalid' : '' }}">
        <label class="form-label required" for="graduation_year">{{ trans('cruds.employeeI.fields.graduation_year') }}</label>
        <x-date-picker class="form-control" required wire:model="employeeI.graduation_year" id="graduation_year" name="graduation_year" picker="date" />
        <div class="validation-message">
            {{ $errors->first('employeeI.graduation_year') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.graduation_year_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.date_of_birth') ? 'invalid' : '' }}">
        <label class="form-label required" for="date_of_birth">{{ trans('cruds.employeeI.fields.date_of_birth') }}</label>
        <x-date-picker class="form-control" required wire:model="employeeI.date_of_birth" id="date_of_birth" name="date_of_birth" picker="date" />
        <div class="validation-message">
            {{ $errors->first('employeeI.date_of_birth') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.date_of_birth_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.date_of_hiring') ? 'invalid' : '' }}">
        <label class="form-label required" for="date_of_hiring">{{ trans('cruds.employeeI.fields.date_of_hiring') }}</label>
        <x-date-picker class="form-control" required wire:model="employeeI.date_of_hiring" id="date_of_hiring" name="date_of_hiring" picker="date" />
        <div class="validation-message">
            {{ $errors->first('employeeI.date_of_hiring') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.date_of_hiring_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.phone_number') ? 'invalid' : '' }}">
        <label class="form-label required" for="phone_number">{{ trans('cruds.employeeI.fields.phone_number') }}</label>
        <input class="form-control" type="number" name="phone_number" id="phone_number" required wire:model.defer="employeeI.phone_number" step="0.01">
        <div class="validation-message">
            {{ $errors->first('employeeI.phone_number') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.phone_number_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.e_mail') ? 'invalid' : '' }}">
        <label class="form-label" for="e_mail">{{ trans('cruds.employeeI.fields.e_mail') }}</label>
        <input class="form-control" type="email" name="e_mail" id="e_mail" wire:model.defer="employeeI.e_mail">
        <div class="validation-message">
            {{ $errors->first('employeeI.e_mail') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.e_mail_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.address_inside_the_kingdom') ? 'invalid' : '' }}">
        <label class="form-label required" for="address_inside_the_kingdom">{{ trans('cruds.employeeI.fields.address_inside_the_kingdom') }}</label>
        <input class="form-control" type="text" name="address_inside_the_kingdom" id="address_inside_the_kingdom" required wire:model.defer="employeeI.address_inside_the_kingdom">
        <div class="validation-message">
            {{ $errors->first('employeeI.address_inside_the_kingdom') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.address_inside_the_kingdom_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.region_in_ksa') ? 'invalid' : '' }}">
        <label class="form-label required" for="region_in_ksa">{{ trans('cruds.employeeI.fields.region_in_ksa') }}</label>
        <input class="form-control" type="text" name="region_in_ksa" id="region_in_ksa" required wire:model.defer="employeeI.region_in_ksa">
        <div class="validation-message">
            {{ $errors->first('employeeI.region_in_ksa') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.region_in_ksa_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.city') ? 'invalid' : '' }}">
        <label class="form-label required" for="city">{{ trans('cruds.employeeI.fields.city') }}</label>
        <input class="form-control" type="text" name="city" id="city" required wire:model.defer="employeeI.city">
        <div class="validation-message">
            {{ $errors->first('employeeI.city') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.city_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.national_address') ? 'invalid' : '' }}">
        <label class="form-label" for="national_address">{{ trans('cruds.employeeI.fields.national_address') }}</label>
        <input class="form-control" type="number" name="national_address" id="national_address" wire:model.defer="employeeI.national_address" step="0.01">
        <div class="validation-message">
            {{ $errors->first('employeeI.national_address') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.national_address_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.address_outside_the_kingdom') ? 'invalid' : '' }}">
        <label class="form-label required" for="address_outside_the_kingdom">{{ trans('cruds.employeeI.fields.address_outside_the_kingdom') }}</label>
        <input class="form-control" type="text" name="address_outside_the_kingdom" id="address_outside_the_kingdom" required wire:model.defer="employeeI.address_outside_the_kingdom">
        <div class="validation-message">
            {{ $errors->first('employeeI.address_outside_the_kingdom') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.address_outside_the_kingdom_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.region_out_ksa') ? 'invalid' : '' }}">
        <label class="form-label required" for="region_out_ksa">{{ trans('cruds.employeeI.fields.region_out_ksa') }}</label>
        <input class="form-control" type="text" name="region_out_ksa" id="region_out_ksa" required wire:model.defer="employeeI.region_out_ksa">
        <div class="validation-message">
            {{ $errors->first('employeeI.region_out_ksa') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.region_out_ksa_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.city_out_ksa') ? 'invalid' : '' }}">
        <label class="form-label required" for="city_out_ksa">{{ trans('cruds.employeeI.fields.city_out_ksa') }}</label>
        <input class="form-control" type="text" name="city_out_ksa" id="city_out_ksa" required wire:model.defer="employeeI.city_out_ksa">
        <div class="validation-message">
            {{ $errors->first('employeeI.city_out_ksa') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.city_out_ksa_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.nearest_landmark') ? 'invalid' : '' }}">
        <label class="form-label required" for="nearest_landmark">{{ trans('cruds.employeeI.fields.nearest_landmark') }}</label>
        <input class="form-control" type="text" name="nearest_landmark" id="nearest_landmark" required wire:model.defer="employeeI.nearest_landmark">
        <div class="validation-message">
            {{ $errors->first('employeeI.nearest_landmark') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.nearest_landmark_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.airport_home') ? 'invalid' : '' }}">
        <label class="form-label required" for="airport_home">{{ trans('cruds.employeeI.fields.airport_home') }}</label>
        <input class="form-control" type="text" name="airport_home" id="airport_home" required wire:model.defer="employeeI.airport_home">
        <div class="validation-message">
            {{ $errors->first('employeeI.airport_home') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.airport_home_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.marital_status') ? 'invalid' : '' }}">
        <label class="form-label required">{{ trans('cruds.employeeI.fields.marital_status') }}</label>
        @foreach($this->listsForFields['marital_status'] as $key => $value)
            <label class="radio-label"><input type="radio" name="marital_status" wire:model="employeeI.marital_status" value="{{ $key }}">{{ $value }}</label>
        @endforeach
        <div class="validation-message">
            {{ $errors->first('employeeI.marital_status') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.marital_status_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.gender') ? 'invalid' : '' }}">
        <label class="form-label required">{{ trans('cruds.employeeI.fields.gender') }}</label>
        @foreach($this->listsForFields['gender'] as $key => $value)
            <label class="radio-label"><input type="radio" name="gender" wire:model="employeeI.gender" value="{{ $key }}">{{ $value }}</label>
        @endforeach
        <div class="validation-message">
            {{ $errors->first('employeeI.gender') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.gender_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.religion') ? 'invalid' : '' }}">
        <label class="form-label required">{{ trans('cruds.employeeI.fields.religion') }}</label>
        @foreach($this->listsForFields['religion'] as $key => $value)
            <label class="radio-label"><input type="radio" name="religion" wire:model="employeeI.religion" value="{{ $key }}">{{ $value }}</label>
        @endforeach
        <div class="validation-message">
            {{ $errors->first('employeeI.religion') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.religion_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.nationality') ? 'invalid' : '' }}">
        <label class="form-label required">{{ trans('cruds.employeeI.fields.nationality') }}</label>
        <select class="form-control" wire:model="employeeI.nationality">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['nationality'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('employeeI.nationality') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.nationality_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.identity_number') ? 'invalid' : '' }}">
        <label class="form-label required" for="identity_number">{{ trans('cruds.employeeI.fields.identity_number') }}</label>
        <input class="form-control" type="number" name="identity_number" id="identity_number" required wire:model.defer="employeeI.identity_number" step="1">
        <div class="validation-message">
            {{ $errors->first('employeeI.identity_number') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.identity_number_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.occupation_in_iqama') ? 'invalid' : '' }}">
        <label class="form-label required" for="occupation_in_iqama">{{ trans('cruds.employeeI.fields.occupation_in_iqama') }}</label>
        <input class="form-control" type="text" name="occupation_in_iqama" id="occupation_in_iqama" required wire:model.defer="employeeI.occupation_in_iqama">
        <div class="validation-message">
            {{ $errors->first('employeeI.occupation_in_iqama') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.occupation_in_iqama_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.passport_number') ? 'invalid' : '' }}">
        <label class="form-label required" for="passport_number">{{ trans('cruds.employeeI.fields.passport_number') }}</label>
        <input class="form-control" type="number" name="passport_number" id="passport_number" required wire:model.defer="employeeI.passport_number" step="1">
        <div class="validation-message">
            {{ $errors->first('employeeI.passport_number') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.passport_number_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.iqama_expiry_date') ? 'invalid' : '' }}">
        <label class="form-label required" for="iqama_expiry_date">{{ trans('cruds.employeeI.fields.iqama_expiry_date') }}</label>
        <x-date-picker class="form-control" required wire:model="employeeI.iqama_expiry_date" id="iqama_expiry_date" name="iqama_expiry_date" picker="date" />
        <div class="validation-message">
            {{ $errors->first('employeeI.iqama_expiry_date') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.iqama_expiry_date_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.passport_expiry_date') ? 'invalid' : '' }}">
        <label class="form-label required" for="passport_expiry_date">{{ trans('cruds.employeeI.fields.passport_expiry_date') }}</label>
        <x-date-picker class="form-control" required wire:model="employeeI.passport_expiry_date" id="passport_expiry_date" name="passport_expiry_date" picker="date" />
        <div class="validation-message">
            {{ $errors->first('employeeI.passport_expiry_date') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.passport_expiry_date_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.is_there_any_other_private_work') ? 'invalid' : '' }}">
        <label class="form-label required" for="is_there_any_other_private_work">{{ trans('cruds.employeeI.fields.is_there_any_other_private_work') }}</label>
        <input class="form-control" type="text" name="is_there_any_other_private_work" id="is_there_any_other_private_work" required wire:model.defer="employeeI.is_there_any_other_private_work">
        <div class="validation-message">
            {{ $errors->first('employeeI.is_there_any_other_private_work') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.is_there_any_other_private_work_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.the_job') ? 'invalid' : '' }}">
        <label class="form-label required" for="the_job">{{ trans('cruds.employeeI.fields.the_job') }}</label>
        <input class="form-control" type="text" name="the_job" id="the_job" required wire:model.defer="employeeI.the_job">
        <div class="validation-message">
            {{ $errors->first('employeeI.the_job') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.the_job_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.the_average_monthly_salary') ? 'invalid' : '' }}">
        <label class="form-label required" for="the_average_monthly_salary">{{ trans('cruds.employeeI.fields.the_average_monthly_salary') }}</label>
        <input class="form-control" type="number" name="the_average_monthly_salary" id="the_average_monthly_salary" required wire:model.defer="employeeI.the_average_monthly_salary" step="1">
        <div class="validation-message">
            {{ $errors->first('employeeI.the_average_monthly_salary') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.the_average_monthly_salary_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.duration_of_time_to_reach_work_minutes') ? 'invalid' : '' }}">
        <label class="form-label required" for="duration_of_time_to_reach_work_minutes">{{ trans('cruds.employeeI.fields.duration_of_time_to_reach_work_minutes') }}</label>
        <input class="form-control" type="number" name="duration_of_time_to_reach_work_minutes" id="duration_of_time_to_reach_work_minutes" required wire:model.defer="employeeI.duration_of_time_to_reach_work_minutes" step="1">
        <div class="validation-message">
            {{ $errors->first('employeeI.duration_of_time_to_reach_work_minutes') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.duration_of_time_to_reach_work_minutes_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.type_of_housing') ? 'invalid' : '' }}">
        <label class="form-label required">{{ trans('cruds.employeeI.fields.type_of_housing') }}</label>
        @foreach($this->listsForFields['type_of_housing'] as $key => $value)
            <label class="radio-label"><input type="radio" name="type_of_housing" wire:model="employeeI.type_of_housing" value="{{ $key }}">{{ $value }}</label>
        @endforeach
        <div class="validation-message">
            {{ $errors->first('employeeI.type_of_housing') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.type_of_housing_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.transportation_of_moving_to_the_company') ? 'invalid' : '' }}">
        <label class="form-label required" for="transportation_of_moving_to_the_company">{{ trans('cruds.employeeI.fields.transportation_of_moving_to_the_company') }}</label>
        <input class="form-control" type="text" name="transportation_of_moving_to_the_company" id="transportation_of_moving_to_the_company" required wire:model.defer="employeeI.transportation_of_moving_to_the_company">
        <div class="validation-message">
            {{ $errors->first('employeeI.transportation_of_moving_to_the_company') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.transportation_of_moving_to_the_company_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.shoe_size') ? 'invalid' : '' }}">
        <label class="form-label required">{{ trans('cruds.employeeI.fields.shoe_size') }}</label>
        <select class="form-control" wire:model="employeeI.shoe_size">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['shoe_size'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('employeeI.shoe_size') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.shoe_size_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.weight') ? 'invalid' : '' }}">
        <label class="form-label required">{{ trans('cruds.employeeI.fields.weight') }}</label>
        <select class="form-control" wire:model="employeeI.weight">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['weight'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('employeeI.weight') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.weight_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.height') ? 'invalid' : '' }}">
        <label class="form-label required">{{ trans('cruds.employeeI.fields.height') }}</label>
        <select class="form-control" wire:model="employeeI.height">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['height'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('employeeI.height') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.height_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.in_emergency_cases_we_can_contact') ? 'invalid' : '' }}">
        <label class="form-label required" for="in_emergency_cases_we_can_contact">{{ trans('cruds.employeeI.fields.in_emergency_cases_we_can_contact') }}</label>
        <input class="form-control" type="text" name="in_emergency_cases_we_can_contact" id="in_emergency_cases_we_can_contact" required wire:model.defer="employeeI.in_emergency_cases_we_can_contact">
        <div class="validation-message">
            {{ $errors->first('employeeI.in_emergency_cases_we_can_contact') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.in_emergency_cases_we_can_contact_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.relevancy') ? 'invalid' : '' }}">
        <label class="form-label required" for="relevancy">{{ trans('cruds.employeeI.fields.relevancy') }}</label>
        <input class="form-control" type="text" name="relevancy" id="relevancy" required wire:model.defer="employeeI.relevancy">
        <div class="validation-message">
            {{ $errors->first('employeeI.relevancy') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.relevancy_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.phone_number_emergency') ? 'invalid' : '' }}">
        <label class="form-label required" for="phone_number_emergency">{{ trans('cruds.employeeI.fields.phone_number_emergency') }}</label>
        <input class="form-control" type="number" name="phone_number_emergency" id="phone_number_emergency" required wire:model.defer="employeeI.phone_number_emergency" step="1">
        <div class="validation-message">
            {{ $errors->first('employeeI.phone_number_emergency') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.phone_number_emergency_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.husband_wife_name') ? 'invalid' : '' }}">
        <label class="form-label" for="husband_wife_name">{{ trans('cruds.employeeI.fields.husband_wife_name') }}</label>
        <input class="form-control" type="text" name="husband_wife_name" id="husband_wife_name" wire:model.defer="employeeI.husband_wife_name">
        <div class="validation-message">
            {{ $errors->first('employeeI.husband_wife_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.husband_wife_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.average_monthly_income') ? 'invalid' : '' }}">
        <label class="form-label required" for="average_monthly_income">{{ trans('cruds.employeeI.fields.average_monthly_income') }}</label>
        <input class="form-control" type="number" name="average_monthly_income" id="average_monthly_income" required wire:model.defer="employeeI.average_monthly_income" step="1">
        <div class="validation-message">
            {{ $errors->first('employeeI.average_monthly_income') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.average_monthly_income_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.is_the_husband_wife') ? 'invalid' : '' }}">
        <label class="form-label required">{{ trans('cruds.employeeI.fields.is_the_husband_wife') }}</label>
        @foreach($this->listsForFields['is_the_husband_wife'] as $key => $value)
            <label class="radio-label"><input type="radio" name="is_the_husband_wife" wire:model="employeeI.is_the_husband_wife" value="{{ $key }}">{{ $value }}</label>
        @endforeach
        <div class="validation-message">
            {{ $errors->first('employeeI.is_the_husband_wife') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.is_the_husband_wife_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.job') ? 'invalid' : '' }}">
        <label class="form-label" for="job">{{ trans('cruds.employeeI.fields.job') }}</label>
        <input class="form-control" type="text" name="job" id="job" wire:model.defer="employeeI.job">
        <div class="validation-message">
            {{ $errors->first('employeeI.job') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.job_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.work_site') ? 'invalid' : '' }}">
        <label class="form-label" for="work_site">{{ trans('cruds.employeeI.fields.work_site') }}</label>
        <input class="form-control" type="text" name="work_site" id="work_site" wire:model.defer="employeeI.work_site">
        <div class="validation-message">
            {{ $errors->first('employeeI.work_site') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.work_site_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.do_you_suffer_from_chronic_diseases_may_god_not') ? 'invalid' : '' }}">
        <label class="form-label required">{{ trans('cruds.employeeI.fields.do_you_suffer_from_chronic_diseases_may_god_not') }}</label>
        @foreach($this->listsForFields['do_you_suffer_from_chronic_diseases_may_god_not'] as $key => $value)
            <label class="radio-label"><input type="radio" name="do_you_suffer_from_chronic_diseases_may_god_not" wire:model="employeeI.do_you_suffer_from_chronic_diseases_may_god_not" value="{{ $key }}">{{ $value }}</label>
        @endforeach
        <div class="validation-message">
            {{ $errors->first('employeeI.do_you_suffer_from_chronic_diseases_may_god_not') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.do_you_suffer_from_chronic_diseases_may_god_not_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.diseases') ? 'invalid' : '' }}">
        <label class="form-label" for="diseases">{{ trans('cruds.employeeI.fields.diseases') }}</label>
        <input class="form-control" type="text" name="diseases" id="diseases" wire:model.defer="employeeI.diseases">
        <div class="validation-message">
            {{ $errors->first('employeeI.diseases') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.diseases_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.does_a_family_member_suffer_from_chronic_diseases_may_god_not') ? 'invalid' : '' }}">
        <label class="form-label required">{{ trans('cruds.employeeI.fields.does_a_family_member_suffer_from_chronic_diseases_may_god_not') }}</label>
        @foreach($this->listsForFields['does_a_family_member_suffer_from_chronic_diseases_may_god_not'] as $key => $value)
            <label class="radio-label"><input type="radio" name="does_a_family_member_suffer_from_chronic_diseases_may_god_not" wire:model="employeeI.does_a_family_member_suffer_from_chronic_diseases_may_god_not" value="{{ $key }}">{{ $value }}</label>
        @endforeach
        <div class="validation-message">
            {{ $errors->first('employeeI.does_a_family_member_suffer_from_chronic_diseases_may_god_not') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.does_a_family_member_suffer_from_chronic_diseases_may_god_not_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employeeI.family_diseases') ? 'invalid' : '' }}">
        <label class="form-label" for="family_diseases">{{ trans('cruds.employeeI.fields.family_diseases') }}</label>
        <input class="form-control" type="text" name="family_diseases" id="family_diseases" wire:model.defer="employeeI.family_diseases">
        <div class="validation-message">
            {{ $errors->first('employeeI.family_diseases') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employeeI.fields.family_diseases_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.employee-is.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>