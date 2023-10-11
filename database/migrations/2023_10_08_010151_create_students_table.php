<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            
            $table->date('date');
            $table->enum('programme_type',['JobPlacement','IncomeCreation', 'Others']);
            $table->string('initiative');
            $table->string('subinitiative');
            $table->string('name_of_programmeOrCert');
            $table->string('ind_name');
            $table->string('ind_id_number');
            $table->string('faculty');
            $table->string('programme');
            $table->string('ind_contact_no',13);
            $table->string('ind_email');
            $table->string('disability_type');
            $table->string('ind_add_1');
            $table->string('ind_add_2');
            $table->string('ind_postcode');
            $table->string('ind_city');
            $table->string('ind_state');
            $table->string('ind_education_lvl');
            $table->string('ind_uni');
            $table->string('study_field');
            $table->string('courses');
            $table->decimal('household_income');
            $table->string('biz_name');
            $table->string('biz_add_1');
            $table->string('biz_add_2');
            $table->string('biz_postcode');
            $table->string('biz_city');
            $table->string('biz_state');
            $table->string('job_add_1');
            $table->string('job_add_2');
            $table->string('job_postcode');
            $table->string('job_city');
            $table->string('job_state');
            $table->string('job_sector');
            $table->string('application_status');
            $table->integer('salary');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('date_termination');
            $table->string('job_skill');
            $table->string('job_contract');
            $table->string('training_course_name');
            $table->string('training_provider');
            $table->string('training_facility');
            $table->string('training_facility_add_1');
            $table->string('training_facility_add_2');
            $table->string('training_facility_postcode');
            $table->string('training_facility_city');
            $table->string('training_facility_state');
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
