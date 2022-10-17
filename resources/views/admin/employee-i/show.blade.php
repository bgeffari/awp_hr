@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.employeeI.title_singular') }}:
                    {{ trans('cruds.employeeI.fields.id') }}
                    {{ $employeeI->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.id') }}
                            </th>
                            <td>
                                {{ $employeeI->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.sap') }}
                            </th>
                            <td>
                                {{ $employeeI->sap }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.name') }}
                            </th>
                            <td>
                                {{ $employeeI->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.company') }}
                            </th>
                            <td>
                                {{ $employeeI->company }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.location') }}
                            </th>
                            <td>
                                @if($employeeI->location)
                                    <span class="badge badge-relationship">{{ $employeeI->location->site_name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.sector') }}
                            </th>
                            <td>
                                @if($employeeI->sector)
                                    <span class="badge badge-relationship">{{ $employeeI->sector->sector ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.department') }}
                            </th>
                            <td>
                                @if($employeeI->department)
                                    <span class="badge badge-relationship">{{ $employeeI->department->department ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.section') }}
                            </th>
                            <td>
                                {{ $employeeI->section }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.grade') }}
                            </th>
                            <td>
                                @if($employeeI->grade)
                                    <span class="badge badge-relationship">{{ $employeeI->grade->grade ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.sap_number') }}
                            </th>
                            <td>
                                {{ $employeeI->sap_number }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.job_title') }}
                            </th>
                            <td>
                                {{ $employeeI->job_title }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.major') }}
                            </th>
                            <td>
                                @if($employeeI->major)
                                    <span class="badge badge-relationship">{{ $employeeI->major->majors ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.graduation_year') }}
                            </th>
                            <td>
                                {{ $employeeI->graduation_year }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.date_of_birth') }}
                            </th>
                            <td>
                                {{ $employeeI->date_of_birth }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.date_of_hiring') }}
                            </th>
                            <td>
                                {{ $employeeI->date_of_hiring }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.phone_number') }}
                            </th>
                            <td>
                                {{ $employeeI->phone_number }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.e_mail') }}
                            </th>
                            <td>
                                <a class="link-light-blue" href="mailto:{{ $employeeI->e_mail }}">
                                    <i class="far fa-envelope fa-fw">
                                    </i>
                                    {{ $employeeI->e_mail }}
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.address_inside_the_kingdom') }}
                            </th>
                            <td>
                                {{ $employeeI->address_inside_the_kingdom }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.region_in_ksa') }}
                            </th>
                            <td>
                                {{ $employeeI->region_in_ksa }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.city') }}
                            </th>
                            <td>
                                {{ $employeeI->city }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.national_address') }}
                            </th>
                            <td>
                                {{ $employeeI->national_address }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.address_outside_the_kingdom') }}
                            </th>
                            <td>
                                {{ $employeeI->address_outside_the_kingdom }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.region_out_ksa') }}
                            </th>
                            <td>
                                {{ $employeeI->region_out_ksa }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.city_out_ksa') }}
                            </th>
                            <td>
                                {{ $employeeI->city_out_ksa }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.nearest_landmark') }}
                            </th>
                            <td>
                                {{ $employeeI->nearest_landmark }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.airport_home') }}
                            </th>
                            <td>
                                {{ $employeeI->airport_home }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.marital_status') }}
                            </th>
                            <td>
                                {{ $employeeI->marital_status_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.gender') }}
                            </th>
                            <td>
                                {{ $employeeI->gender_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.religion') }}
                            </th>
                            <td>
                                {{ $employeeI->religion_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.nationality') }}
                            </th>
                            <td>
                                {{ $employeeI->nationality_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.identity_number') }}
                            </th>
                            <td>
                                {{ $employeeI->identity_number }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.occupation_in_iqama') }}
                            </th>
                            <td>
                                {{ $employeeI->occupation_in_iqama }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.passport_number') }}
                            </th>
                            <td>
                                {{ $employeeI->passport_number }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.iqama_expiry_date') }}
                            </th>
                            <td>
                                {{ $employeeI->iqama_expiry_date }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.passport_expiry_date') }}
                            </th>
                            <td>
                                {{ $employeeI->passport_expiry_date }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.is_there_any_other_private_work') }}
                            </th>
                            <td>
                                {{ $employeeI->is_there_any_other_private_work }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.the_job') }}
                            </th>
                            <td>
                                {{ $employeeI->the_job }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.the_average_monthly_salary') }}
                            </th>
                            <td>
                                {{ $employeeI->the_average_monthly_salary }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.duration_of_time_to_reach_work_minutes') }}
                            </th>
                            <td>
                                {{ $employeeI->duration_of_time_to_reach_work_minutes }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.type_of_housing') }}
                            </th>
                            <td>
                                {{ $employeeI->type_of_housing_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.transportation_of_moving_to_the_company') }}
                            </th>
                            <td>
                                {{ $employeeI->transportation_of_moving_to_the_company }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.shoe_size') }}
                            </th>
                            <td>
                                {{ $employeeI->shoe_size_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.weight') }}
                            </th>
                            <td>
                                {{ $employeeI->weight_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.height') }}
                            </th>
                            <td>
                                {{ $employeeI->height_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.in_emergency_cases_we_can_contact') }}
                            </th>
                            <td>
                                {{ $employeeI->in_emergency_cases_we_can_contact }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.relevancy') }}
                            </th>
                            <td>
                                {{ $employeeI->relevancy }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.phone_number_emergency') }}
                            </th>
                            <td>
                                {{ $employeeI->phone_number_emergency }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.husband_wife_name') }}
                            </th>
                            <td>
                                {{ $employeeI->husband_wife_name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.average_monthly_income') }}
                            </th>
                            <td>
                                {{ $employeeI->average_monthly_income }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.is_the_husband_wife') }}
                            </th>
                            <td>
                                {{ $employeeI->is_the_husband_wife_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.job') }}
                            </th>
                            <td>
                                {{ $employeeI->job }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.work_site') }}
                            </th>
                            <td>
                                {{ $employeeI->work_site }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.do_you_suffer_from_chronic_diseases_may_god_not') }}
                            </th>
                            <td>
                                {{ $employeeI->do_you_suffer_from_chronic_diseases_may_god_not_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.diseases') }}
                            </th>
                            <td>
                                {{ $employeeI->diseases }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.does_a_family_member_suffer_from_chronic_diseases_may_god_not') }}
                            </th>
                            <td>
                                {{ $employeeI->does_a_family_member_suffer_from_chronic_diseases_may_god_not_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.employeeI.fields.family_diseases') }}
                            </th>
                            <td>
                                {{ $employeeI->family_diseases }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('employee_i_edit')
                    <a href="{{ route('admin.employee-is.edit', $employeeI) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.employee-is.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection