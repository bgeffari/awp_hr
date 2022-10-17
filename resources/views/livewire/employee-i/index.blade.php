<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('employee_i_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="EmployeeI" format="csv" />
                <livewire:excel-export model="EmployeeI" format="xlsx" />
                <livewire:excel-export model="EmployeeI" format="pdf" />
            @endif




        </div>
        <div class="w-full sm:w-1/2 sm:text-right">
            Search:
            <input type="text" wire:model.debounce.300ms="search" class="w-full sm:w-1/3 inline-block" />
        </div>
    </div>
    <div wire:loading.delay>
        Loading...
    </div>

    <div class="overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table table-index w-full">
                <thead>
                    <tr>
                        <th class="w-9">
                        </th>
                        <th class="w-28">
                            {{ trans('cruds.employeeI.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.sap') }}
                            @include('components.table.sort', ['field' => 'sap'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.name') }}
                            @include('components.table.sort', ['field' => 'name'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.company') }}
                            @include('components.table.sort', ['field' => 'company'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.location') }}
                            @include('components.table.sort', ['field' => 'location.site_name'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.sector') }}
                            @include('components.table.sort', ['field' => 'sector.sector'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.department') }}
                            @include('components.table.sort', ['field' => 'department.department'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.section') }}
                            @include('components.table.sort', ['field' => 'section'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.grade') }}
                            @include('components.table.sort', ['field' => 'grade.grade'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.sap_number') }}
                            @include('components.table.sort', ['field' => 'sap_number'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.job_title') }}
                            @include('components.table.sort', ['field' => 'job_title'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.major') }}
                            @include('components.table.sort', ['field' => 'major.majors'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.graduation_year') }}
                            @include('components.table.sort', ['field' => 'graduation_year'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.date_of_birth') }}
                            @include('components.table.sort', ['field' => 'date_of_birth'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.date_of_hiring') }}
                            @include('components.table.sort', ['field' => 'date_of_hiring'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.phone_number') }}
                            @include('components.table.sort', ['field' => 'phone_number'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.e_mail') }}
                            @include('components.table.sort', ['field' => 'e_mail'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.address_inside_the_kingdom') }}
                            @include('components.table.sort', ['field' => 'address_inside_the_kingdom'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.region_in_ksa') }}
                            @include('components.table.sort', ['field' => 'region_in_ksa'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.city') }}
                            @include('components.table.sort', ['field' => 'city'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.national_address') }}
                            @include('components.table.sort', ['field' => 'national_address'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.address_outside_the_kingdom') }}
                            @include('components.table.sort', ['field' => 'address_outside_the_kingdom'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.region_out_ksa') }}
                            @include('components.table.sort', ['field' => 'region_out_ksa'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.city_out_ksa') }}
                            @include('components.table.sort', ['field' => 'city_out_ksa'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.nearest_landmark') }}
                            @include('components.table.sort', ['field' => 'nearest_landmark'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.airport_home') }}
                            @include('components.table.sort', ['field' => 'airport_home'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.marital_status') }}
                            @include('components.table.sort', ['field' => 'marital_status'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.gender') }}
                            @include('components.table.sort', ['field' => 'gender'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.religion') }}
                            @include('components.table.sort', ['field' => 'religion'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.nationality') }}
                            @include('components.table.sort', ['field' => 'nationality'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.identity_number') }}
                            @include('components.table.sort', ['field' => 'identity_number'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.occupation_in_iqama') }}
                            @include('components.table.sort', ['field' => 'occupation_in_iqama'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.passport_number') }}
                            @include('components.table.sort', ['field' => 'passport_number'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.iqama_expiry_date') }}
                            @include('components.table.sort', ['field' => 'iqama_expiry_date'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.passport_expiry_date') }}
                            @include('components.table.sort', ['field' => 'passport_expiry_date'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.is_there_any_other_private_work') }}
                            @include('components.table.sort', ['field' => 'is_there_any_other_private_work'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.the_job') }}
                            @include('components.table.sort', ['field' => 'the_job'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.the_average_monthly_salary') }}
                            @include('components.table.sort', ['field' => 'the_average_monthly_salary'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.duration_of_time_to_reach_work_minutes') }}
                            @include('components.table.sort', ['field' => 'duration_of_time_to_reach_work_minutes'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.type_of_housing') }}
                            @include('components.table.sort', ['field' => 'type_of_housing'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.transportation_of_moving_to_the_company') }}
                            @include('components.table.sort', ['field' => 'transportation_of_moving_to_the_company'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.shoe_size') }}
                            @include('components.table.sort', ['field' => 'shoe_size'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.weight') }}
                            @include('components.table.sort', ['field' => 'weight'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.height') }}
                            @include('components.table.sort', ['field' => 'height'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.in_emergency_cases_we_can_contact') }}
                            @include('components.table.sort', ['field' => 'in_emergency_cases_we_can_contact'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.relevancy') }}
                            @include('components.table.sort', ['field' => 'relevancy'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.phone_number_emergency') }}
                            @include('components.table.sort', ['field' => 'phone_number_emergency'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.husband_wife_name') }}
                            @include('components.table.sort', ['field' => 'husband_wife_name'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.average_monthly_income') }}
                            @include('components.table.sort', ['field' => 'average_monthly_income'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.is_the_husband_wife') }}
                            @include('components.table.sort', ['field' => 'is_the_husband_wife'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.job') }}
                            @include('components.table.sort', ['field' => 'job'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.work_site') }}
                            @include('components.table.sort', ['field' => 'work_site'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.do_you_suffer_from_chronic_diseases_may_god_not') }}
                            @include('components.table.sort', ['field' => 'do_you_suffer_from_chronic_diseases_may_god_not'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.diseases') }}
                            @include('components.table.sort', ['field' => 'diseases'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.does_a_family_member_suffer_from_chronic_diseases_may_god_not') }}
                            @include('components.table.sort', ['field' => 'does_a_family_member_suffer_from_chronic_diseases_may_god_not'])
                        </th>
                        <th>
                            {{ trans('cruds.employeeI.fields.family_diseases') }}
                            @include('components.table.sort', ['field' => 'family_diseases'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($employeeIs as $employeeI)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $employeeI->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $employeeI->id }}
                            </td>
                            <td>
                                {{ $employeeI->sap }}
                            </td>
                            <td>
                                {{ $employeeI->name }}
                            </td>
                            <td>
                                {{ $employeeI->company }}
                            </td>
                            <td>
                                @if($employeeI->location)
                                    <span class="badge badge-relationship">{{ $employeeI->location->site_name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($employeeI->sector)
                                    <span class="badge badge-relationship">{{ $employeeI->sector->sector ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($employeeI->department)
                                    <span class="badge badge-relationship">{{ $employeeI->department->department ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                {{ $employeeI->section }}
                            </td>
                            <td>
                                @if($employeeI->grade)
                                    <span class="badge badge-relationship">{{ $employeeI->grade->grade ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                {{ $employeeI->sap_number }}
                            </td>
                            <td>
                                {{ $employeeI->job_title }}
                            </td>
                            <td>
                                @if($employeeI->major)
                                    <span class="badge badge-relationship">{{ $employeeI->major->majors ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                {{ $employeeI->graduation_year }}
                            </td>
                            <td>
                                {{ $employeeI->date_of_birth }}
                            </td>
                            <td>
                                {{ $employeeI->date_of_hiring }}
                            </td>
                            <td>
                                {{ $employeeI->phone_number }}
                            </td>
                            <td>
                                <a class="link-light-blue" href="mailto:{{ $employeeI->e_mail }}">
                                    <i class="far fa-envelope fa-fw">
                                    </i>
                                    {{ $employeeI->e_mail }}
                                </a>
                            </td>
                            <td>
                                {{ $employeeI->address_inside_the_kingdom }}
                            </td>
                            <td>
                                {{ $employeeI->region_in_ksa }}
                            </td>
                            <td>
                                {{ $employeeI->city }}
                            </td>
                            <td>
                                {{ $employeeI->national_address }}
                            </td>
                            <td>
                                {{ $employeeI->address_outside_the_kingdom }}
                            </td>
                            <td>
                                {{ $employeeI->region_out_ksa }}
                            </td>
                            <td>
                                {{ $employeeI->city_out_ksa }}
                            </td>
                            <td>
                                {{ $employeeI->nearest_landmark }}
                            </td>
                            <td>
                                {{ $employeeI->airport_home }}
                            </td>
                            <td>
                                {{ $employeeI->marital_status_label }}
                            </td>
                            <td>
                                {{ $employeeI->gender_label }}
                            </td>
                            <td>
                                {{ $employeeI->religion_label }}
                            </td>
                            <td>
                                {{ $employeeI->nationality_label }}
                            </td>
                            <td>
                                {{ $employeeI->identity_number }}
                            </td>
                            <td>
                                {{ $employeeI->occupation_in_iqama }}
                            </td>
                            <td>
                                {{ $employeeI->passport_number }}
                            </td>
                            <td>
                                {{ $employeeI->iqama_expiry_date }}
                            </td>
                            <td>
                                {{ $employeeI->passport_expiry_date }}
                            </td>
                            <td>
                                {{ $employeeI->is_there_any_other_private_work }}
                            </td>
                            <td>
                                {{ $employeeI->the_job }}
                            </td>
                            <td>
                                {{ $employeeI->the_average_monthly_salary }}
                            </td>
                            <td>
                                {{ $employeeI->duration_of_time_to_reach_work_minutes }}
                            </td>
                            <td>
                                {{ $employeeI->type_of_housing_label }}
                            </td>
                            <td>
                                {{ $employeeI->transportation_of_moving_to_the_company }}
                            </td>
                            <td>
                                {{ $employeeI->shoe_size_label }}
                            </td>
                            <td>
                                {{ $employeeI->weight_label }}
                            </td>
                            <td>
                                {{ $employeeI->height_label }}
                            </td>
                            <td>
                                {{ $employeeI->in_emergency_cases_we_can_contact }}
                            </td>
                            <td>
                                {{ $employeeI->relevancy }}
                            </td>
                            <td>
                                {{ $employeeI->phone_number_emergency }}
                            </td>
                            <td>
                                {{ $employeeI->husband_wife_name }}
                            </td>
                            <td>
                                {{ $employeeI->average_monthly_income }}
                            </td>
                            <td>
                                {{ $employeeI->is_the_husband_wife_label }}
                            </td>
                            <td>
                                {{ $employeeI->job }}
                            </td>
                            <td>
                                {{ $employeeI->work_site }}
                            </td>
                            <td>
                                {{ $employeeI->do_you_suffer_from_chronic_diseases_may_god_not_label }}
                            </td>
                            <td>
                                {{ $employeeI->diseases }}
                            </td>
                            <td>
                                {{ $employeeI->does_a_family_member_suffer_from_chronic_diseases_may_god_not_label }}
                            </td>
                            <td>
                                {{ $employeeI->family_diseases }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('employee_i_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.employee-is.show', $employeeI) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('employee_i_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.employee-is.edit', $employeeI) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('employee_i_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $employeeI->id }})" wire:loading.attr="disabled">
                                            {{ trans('global.delete') }}
                                        </button>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10">No entries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            @if($this->selectedCount)
                <p class="text-sm leading-5">
                    <span class="font-medium">
                        {{ $this->selectedCount }}
                    </span>
                    {{ __('Entries selected') }}
                </p>
            @endif
            {{ $employeeIs->links() }}
        </div>
    </div>
</div>

@push('scripts')
    <script>
        Livewire.on('confirm', e => {
    if (!confirm("{{ trans('global.areYouSure') }}")) {
        return
    }
@this[e.callback](...e.argv)
})
    </script>
@endpush