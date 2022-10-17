<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeIsTable extends Migration
{
    public function up()
    {
        Schema::create('employee_is', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('sap');
            $table->string('name');
            $table->string('company');
            $table->string('section');
            $table->float('sap_number', 15, 1);
            $table->string('job_title');
            $table->date('graduation_year');
            $table->date('date_of_birth');
            $table->date('date_of_hiring');
            $table->float('phone_number', 15, 2);
            $table->string('e_mail')->nullable();
            $table->string('address_inside_the_kingdom');
            $table->string('region_in_ksa');
            $table->string('city');
            $table->float('national_address', 15, 2)->nullable();
            $table->string('address_outside_the_kingdom');
            $table->string('region_out_ksa');
            $table->string('city_out_ksa');
            $table->string('nearest_landmark');
            $table->string('airport_home');
            $table->string('marital_status');
            $table->string('gender');
            $table->string('religion');
            $table->string('nationality');
            $table->integer('identity_number');
            $table->string('occupation_in_iqama');
            $table->integer('passport_number');
            $table->date('iqama_expiry_date');
            $table->date('passport_expiry_date');
            $table->string('is_there_any_other_private_work');
            $table->string('the_job');
            $table->integer('the_average_monthly_salary');
            $table->integer('duration_of_time_to_reach_work_minutes');
            $table->string('type_of_housing');
            $table->string('transportation_of_moving_to_the_company');
            $table->string('shoe_size');
            $table->string('weight');
            $table->string('height');
            $table->string('in_emergency_cases_we_can_contact');
            $table->string('relevancy');
            $table->integer('phone_number_emergency');
            $table->string('husband_wife_name')->nullable();
            $table->integer('average_monthly_income');
            $table->string('is_the_husband_wife');
            $table->string('job')->nullable();
            $table->string('work_site')->nullable();
            $table->string('do_you_suffer_from_chronic_diseases_may_god_not');
            $table->string('diseases')->nullable();
            $table->string('does_a_family_member_suffer_from_chronic_diseases_may_god_not');
            $table->string('family_diseases')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
