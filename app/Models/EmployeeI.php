<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmployeeI extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public const GENDER_RADIO = [
    ];

    public const WEIGHT_SELECT = [
    ];

    public const HEIGHT_SELECT = [
    ];

    public const RELIGION_RADIO = [
    ];

    public const SHOE_SIZE_SELECT = [
    ];

    public const NATIONALITY_SELECT = [
    ];

    public const MARITAL_STATUS_RADIO = [
    ];

    public const TYPE_OF_HOUSING_RADIO = [
    ];

    public const IS_THE_HUSBAND_WIFE_RADIO = [
    ];

    public const DO_YOU_SUFFER_FROM_CHRONIC_DISEASES_MAY_GOD_NOT_RADIO = [
    ];

    public const DOES_A_FAMILY_MEMBER_SUFFER_FROM_CHRONIC_DISEASES_MAY_GOD_NOT_RADIO = [
    ];

    public $table = 'employee_is';

    public $orderable = [
        'id',
        'sap',
        'name',
        'company',
        'location.site_name',
        'sector.sector',
        'department.department',
        'section',
        'grade.grade',
        'sap_number',
        'job_title',
        'major.majors',
        'graduation_year',
        'date_of_birth',
        'date_of_hiring',
        'phone_number',
        'e_mail',
        'address_inside_the_kingdom',
        'region_in_ksa',
        'city',
        'national_address',
        'address_outside_the_kingdom',
        'region_out_ksa',
        'city_out_ksa',
        'nearest_landmark',
        'airport_home',
        'marital_status',
        'gender',
        'religion',
        'nationality',
        'identity_number',
        'occupation_in_iqama',
        'passport_number',
        'iqama_expiry_date',
        'passport_expiry_date',
        'is_there_any_other_private_work',
        'the_job',
        'the_average_monthly_salary',
        'duration_of_time_to_reach_work_minutes',
        'type_of_housing',
        'transportation_of_moving_to_the_company',
        'shoe_size',
        'weight',
        'height',
        'in_emergency_cases_we_can_contact',
        'relevancy',
        'phone_number_emergency',
        'husband_wife_name',
        'average_monthly_income',
        'is_the_husband_wife',
        'job',
        'work_site',
        'do_you_suffer_from_chronic_diseases_may_god_not',
        'diseases',
        'does_a_family_member_suffer_from_chronic_diseases_may_god_not',
        'family_diseases',
    ];

    public $filterable = [
        'id',
        'sap',
        'name',
        'company',
        'location.site_name',
        'sector.sector',
        'department.department',
        'section',
        'grade.grade',
        'sap_number',
        'job_title',
        'major.majors',
        'graduation_year',
        'date_of_birth',
        'date_of_hiring',
        'phone_number',
        'e_mail',
        'address_inside_the_kingdom',
        'region_in_ksa',
        'city',
        'national_address',
        'address_outside_the_kingdom',
        'region_out_ksa',
        'city_out_ksa',
        'nearest_landmark',
        'airport_home',
        'marital_status',
        'gender',
        'religion',
        'nationality',
        'identity_number',
        'occupation_in_iqama',
        'passport_number',
        'iqama_expiry_date',
        'passport_expiry_date',
        'is_there_any_other_private_work',
        'the_job',
        'the_average_monthly_salary',
        'duration_of_time_to_reach_work_minutes',
        'type_of_housing',
        'transportation_of_moving_to_the_company',
        'shoe_size',
        'weight',
        'height',
        'in_emergency_cases_we_can_contact',
        'relevancy',
        'phone_number_emergency',
        'husband_wife_name',
        'average_monthly_income',
        'is_the_husband_wife',
        'job',
        'work_site',
        'do_you_suffer_from_chronic_diseases_may_god_not',
        'diseases',
        'does_a_family_member_suffer_from_chronic_diseases_may_god_not',
        'family_diseases',
    ];

    protected $dates = [
        'graduation_year',
        'date_of_birth',
        'date_of_hiring',
        'iqama_expiry_date',
        'passport_expiry_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'sap',
        'name',
        'company',
        'location_id',
        'sector_id',
        'department_id',
        'section',
        'grade_id',
        'sap_number',
        'job_title',
        'major_id',
        'graduation_year',
        'date_of_birth',
        'date_of_hiring',
        'phone_number',
        'e_mail',
        'address_inside_the_kingdom',
        'region_in_ksa',
        'city',
        'national_address',
        'address_outside_the_kingdom',
        'region_out_ksa',
        'city_out_ksa',
        'nearest_landmark',
        'airport_home',
        'marital_status',
        'gender',
        'religion',
        'nationality',
        'identity_number',
        'occupation_in_iqama',
        'passport_number',
        'iqama_expiry_date',
        'passport_expiry_date',
        'is_there_any_other_private_work',
        'the_job',
        'the_average_monthly_salary',
        'duration_of_time_to_reach_work_minutes',
        'type_of_housing',
        'transportation_of_moving_to_the_company',
        'shoe_size',
        'weight',
        'height',
        'in_emergency_cases_we_can_contact',
        'relevancy',
        'phone_number_emergency',
        'husband_wife_name',
        'average_monthly_income',
        'is_the_husband_wife',
        'job',
        'work_site',
        'do_you_suffer_from_chronic_diseases_may_god_not',
        'diseases',
        'does_a_family_member_suffer_from_chronic_diseases_may_god_not',
        'family_diseases',
    ];

    public function location()
    {
        return $this->belongsTo(Site::class);
    }

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function major()
    {
        return $this->belongsTo(Major::class);
    }

    public function getGraduationYearAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('project.date_format')) : null;
    }

    public function setGraduationYearAttribute($value)
    {
        $this->attributes['graduation_year'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getDateOfBirthAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('project.date_format')) : null;
    }

    public function setDateOfBirthAttribute($value)
    {
        $this->attributes['date_of_birth'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getDateOfHiringAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('project.date_format')) : null;
    }

    public function setDateOfHiringAttribute($value)
    {
        $this->attributes['date_of_hiring'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getMaritalStatusLabelAttribute($value)
    {
        return static::MARITAL_STATUS_RADIO[$this->marital_status] ?? null;
    }

    public function getGenderLabelAttribute($value)
    {
        return static::GENDER_RADIO[$this->gender] ?? null;
    }

    public function getReligionLabelAttribute($value)
    {
        return static::RELIGION_RADIO[$this->religion] ?? null;
    }

    public function getNationalityLabelAttribute($value)
    {
        return static::NATIONALITY_SELECT[$this->nationality] ?? null;
    }

    public function getIqamaExpiryDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('project.date_format')) : null;
    }

    public function setIqamaExpiryDateAttribute($value)
    {
        $this->attributes['iqama_expiry_date'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getPassportExpiryDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('project.date_format')) : null;
    }

    public function setPassportExpiryDateAttribute($value)
    {
        $this->attributes['passport_expiry_date'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getTypeOfHousingLabelAttribute($value)
    {
        return static::TYPE_OF_HOUSING_RADIO[$this->type_of_housing] ?? null;
    }

    public function getShoeSizeLabelAttribute($value)
    {
        return static::SHOE_SIZE_SELECT[$this->shoe_size] ?? null;
    }

    public function getWeightLabelAttribute($value)
    {
        return static::WEIGHT_SELECT[$this->weight] ?? null;
    }

    public function getHeightLabelAttribute($value)
    {
        return static::HEIGHT_SELECT[$this->height] ?? null;
    }

    public function getIsTheHusbandWifeLabelAttribute($value)
    {
        return static::IS_THE_HUSBAND_WIFE_RADIO[$this->is_the_husband_wife] ?? null;
    }

    public function getDoYouSufferFromChronicDiseasesMayGodNotLabelAttribute($value)
    {
        return static::DO_YOU_SUFFER_FROM_CHRONIC_DISEASES_MAY_GOD_NOT_RADIO[$this->do_you_suffer_from_chronic_diseases_may_god_not] ?? null;
    }

    public function getDoesAFamilyMemberSufferFromChronicDiseasesMayGodNotLabelAttribute($value)
    {
        return static::DOES_A_FAMILY_MEMBER_SUFFER_FROM_CHRONIC_DISEASES_MAY_GOD_NOT_RADIO[$this->does_a_family_member_suffer_from_chronic_diseases_may_god_not] ?? null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
