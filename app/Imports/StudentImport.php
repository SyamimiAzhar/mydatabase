<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'date' => $row[1],
            'programme_type' => $row[2],
            'initiative' => $row[3],
            'subinitiative' => $row[4],
            'name_of_programmeOrCert' => $row[5],
            'ind_name' => $row[6],
            'ind_id_number' => $row[7],
            'faculty' => $row[8],
            'programme' => $row[9],
            'ind_contact_no' => $row[10],
            'ind_email' => $row[11],
            'disability_type' => $row[12],
            'ind_add_1' => $row[13],
            'ind_add_2' => $row[14],
            'ind_postcode' => $row[15],
            'ind_city' => $row[16],
            'ind_state' => $row[17],
            'ind_education_lvl' => $row[18],
            'ind_uni' => $row[19],
            'study_field' => $row[20],
            'courses' => $row[21],
            'household_income' => $row[22],
            'biz_name' => $row[23],
            'biz_add_1' => $row[24],
            'biz_add_2' => $row[25],
            'biz_postcode' => $row[26],
            'biz_city' => $row[27],
            'biz_state' => $row[28],
            'job_add_1' => $row[29],
            'job_add_2' => $row[30],
            'job_postcode' => $row[31],
            'job_city' => $row[32],
            'job_state' => $row[33],
            'job_sector' => $row[34],
            'application_status' => $row[35],
            'salary' => $row[36],
            'start_date' => $row[37],
            'end_date' => $row[38],
            'date_termination' => $row[39],
            'job_skill' => $row[40],
            'job_contract' => $row[41],
            'training_course_name' => $row[42],
            'training_provider' => $row[43],
            'training_facility' => $row[44],
            'training_facility_add_1' => $row[45],
            'training_facility_add_2' => $row[46],
            'training_facility_postcode' => $row[47],
            'training_facility_city' => $row[48],
            'training_facility_state' => $row[49]
        ]);
    }
}
