<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToEmployeeIsTable extends Migration
{
    public function up()
    {
        Schema::table('employee_is', function (Blueprint $table) {
            $table->unsignedBigInteger('location_id')->nullable();
            $table->foreign('location_id', 'location_fk_7471184')->references('id')->on('sites');
            $table->unsignedBigInteger('sector_id')->nullable();
            $table->foreign('sector_id', 'sector_fk_7471185')->references('id')->on('sectors');
            $table->unsignedBigInteger('department_id')->nullable();
            $table->foreign('department_id', 'department_fk_7471186')->references('id')->on('departments');
            $table->unsignedBigInteger('grade_id')->nullable();
            $table->foreign('grade_id', 'grade_fk_7471187')->references('id')->on('grades');
            $table->unsignedBigInteger('major_id')->nullable();
            $table->foreign('major_id', 'major_fk_7471191')->references('id')->on('majors');
        });
    }
}
