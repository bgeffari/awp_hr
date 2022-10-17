<?php

namespace App\Http\Livewire\EmployeeI;

use App\Models\Department;
use App\Models\EmployeeI;
use App\Models\Grade;
use App\Models\Major;
use App\Models\Sector;
use App\Models\Site;
use Livewire\Component;

class Edit extends Component
{
    public EmployeeI $employeeI;

    public array $listsForFields = [];

    public function mount(EmployeeI $employeeI)
    {
        $this->employeeI = $employeeI;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.employee-i.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->employeeI->save();

        return redirect()->route('admin.employee-is.index');
    }

    protected function rules(): array
    {
        return [
            'employeeI.sap' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'required',
            ],
            'employeeI.name' => [
                'string',
                'required',
            ],
            'employeeI.company' => [
                'string',
                'required',
            ],
            'employeeI.location_id' => [
                'integer',
                'exists:sites,id',
                'required',
            ],
            'employeeI.sector_id' => [
                'integer',
                'exists:sectors,id',
                'required',
            ],
            'employeeI.department_id' => [
                'integer',
                'exists:departments,id',
                'required',
            ],
            'employeeI.section' => [
                'string',
                'required',
            ],
            'employeeI.grade_id' => [
                'integer',
                'exists:grades,id',
                'required',
            ],
            'employeeI.sap_number' => [
                'numeric',
                'required',
            ],
            'employeeI.job_title' => [
                'string',
                'required',
            ],
            'employeeI.major_id' => [
                'integer',
                'exists:majors,id',
                'required',
            ],
            'employeeI.graduation_year' => [
                'required',
                'date_format:' . config('project.date_format'),
            ],
            'employeeI.date_of_birth' => [
                'required',
                'date_format:' . config('project.date_format'),
            ],
            'employeeI.date_of_hiring' => [
                'required',
                'date_format:' . config('project.date_format'),
            ],
            'employeeI.phone_number' => [
                'numeric',
                'required',
            ],
            'employeeI.e_mail' => [
                'email:rfc',
                'nullable',
            ],
            'employeeI.address_inside_the_kingdom' => [
                'string',
                'required',
            ],
            'employeeI.region_in_ksa' => [
                'string',
                'required',
            ],
            'employeeI.city' => [
                'string',
                'required',
            ],
            'employeeI.national_address' => [
                'numeric',
                'nullable',
            ],
            'employeeI.address_outside_the_kingdom' => [
                'string',
                'required',
            ],
            'employeeI.region_out_ksa' => [
                'string',
                'required',
            ],
            'employeeI.city_out_ksa' => [
                'string',
                'required',
            ],
            'employeeI.nearest_landmark' => [
                'string',
                'required',
            ],
            'employeeI.airport_home' => [
                'string',
                'required',
            ],
            'employeeI.marital_status' => [
                'required',
                'in:' . implode(',', array_keys($this->listsForFields['marital_status'])),
            ],
            'employeeI.gender' => [
                'required',
                'in:' . implode(',', array_keys($this->listsForFields['gender'])),
            ],
            'employeeI.religion' => [
                'required',
                'in:' . implode(',', array_keys($this->listsForFields['religion'])),
            ],
            'employeeI.nationality' => [
                'required',
                'in:' . implode(',', array_keys($this->listsForFields['nationality'])),
            ],
            'employeeI.identity_number' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'required',
            ],
            'employeeI.occupation_in_iqama' => [
                'string',
                'required',
            ],
            'employeeI.passport_number' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'required',
            ],
            'employeeI.iqama_expiry_date' => [
                'required',
                'date_format:' . config('project.date_format'),
            ],
            'employeeI.passport_expiry_date' => [
                'required',
                'date_format:' . config('project.date_format'),
            ],
            'employeeI.is_there_any_other_private_work' => [
                'string',
                'required',
            ],
            'employeeI.the_job' => [
                'string',
                'required',
            ],
            'employeeI.the_average_monthly_salary' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'required',
            ],
            'employeeI.duration_of_time_to_reach_work_minutes' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'required',
            ],
            'employeeI.type_of_housing' => [
                'required',
                'in:' . implode(',', array_keys($this->listsForFields['type_of_housing'])),
            ],
            'employeeI.transportation_of_moving_to_the_company' => [
                'string',
                'required',
            ],
            'employeeI.shoe_size' => [
                'required',
                'in:' . implode(',', array_keys($this->listsForFields['shoe_size'])),
            ],
            'employeeI.weight' => [
                'required',
                'in:' . implode(',', array_keys($this->listsForFields['weight'])),
            ],
            'employeeI.height' => [
                'required',
                'in:' . implode(',', array_keys($this->listsForFields['height'])),
            ],
            'employeeI.in_emergency_cases_we_can_contact' => [
                'string',
                'required',
            ],
            'employeeI.relevancy' => [
                'string',
                'required',
            ],
            'employeeI.phone_number_emergency' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'required',
            ],
            'employeeI.husband_wife_name' => [
                'string',
                'nullable',
            ],
            'employeeI.average_monthly_income' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'required',
            ],
            'employeeI.is_the_husband_wife' => [
                'required',
                'in:' . implode(',', array_keys($this->listsForFields['is_the_husband_wife'])),
            ],
            'employeeI.job' => [
                'string',
                'nullable',
            ],
            'employeeI.work_site' => [
                'string',
                'nullable',
            ],
            'employeeI.do_you_suffer_from_chronic_diseases_may_god_not' => [
                'required',
                'in:' . implode(',', array_keys($this->listsForFields['do_you_suffer_from_chronic_diseases_may_god_not'])),
            ],
            'employeeI.diseases' => [
                'string',
                'nullable',
            ],
            'employeeI.does_a_family_member_suffer_from_chronic_diseases_may_god_not' => [
                'required',
                'in:' . implode(',', array_keys($this->listsForFields['does_a_family_member_suffer_from_chronic_diseases_may_god_not'])),
            ],
            'employeeI.family_diseases' => [
                'string',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['location']                                                      = Site::pluck('site_name', 'id')->toArray();
        $this->listsForFields['sector']                                                        = Sector::pluck('sector', 'id')->toArray();
        $this->listsForFields['department']                                                    = Department::pluck('department', 'id')->toArray();
        $this->listsForFields['grade']                                                         = Grade::pluck('grade', 'id')->toArray();
        $this->listsForFields['major']                                                         = Major::pluck('majors', 'id')->toArray();
        $this->listsForFields['marital_status']                                                = $this->employeeI::MARITAL_STATUS_RADIO;
        $this->listsForFields['gender']                                                        = $this->employeeI::GENDER_RADIO;
        $this->listsForFields['religion']                                                      = $this->employeeI::RELIGION_RADIO;
        $this->listsForFields['nationality']                                                   = $this->employeeI::NATIONALITY_SELECT;
        $this->listsForFields['type_of_housing']                                               = $this->employeeI::TYPE_OF_HOUSING_RADIO;
        $this->listsForFields['shoe_size']                                                     = $this->employeeI::SHOE_SIZE_SELECT;
        $this->listsForFields['weight']                                                        = $this->employeeI::WEIGHT_SELECT;
        $this->listsForFields['height']                                                        = $this->employeeI::HEIGHT_SELECT;
        $this->listsForFields['is_the_husband_wife']                                           = $this->employeeI::IS_THE_HUSBAND_WIFE_RADIO;
        $this->listsForFields['do_you_suffer_from_chronic_diseases_may_god_not']               = $this->employeeI::DO_YOU_SUFFER_FROM_CHRONIC_DISEASES_MAY_GOD_NOT_RADIO;
        $this->listsForFields['does_a_family_member_suffer_from_chronic_diseases_may_god_not'] = $this->employeeI::DOES_A_FAMILY_MEMBER_SUFFER_FROM_CHRONIC_DISEASES_MAY_GOD_NOT_RADIO;
    }
}
