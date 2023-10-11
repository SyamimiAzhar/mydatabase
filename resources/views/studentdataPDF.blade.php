<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Student Data</h1>

<table id="customers">
  <tr>
    <th>Date</th>
    <th>Programme Type</th>
    <th>Initiative</th>
    <th>Subinitiative</th>
    <th>Name Programme/Certification</th>
    <th>Full Name</th>
    <th>ID Number</th>
    <th>Faculty</th>
    <th>Programme</th>
    <th>Contact No.</th>
    <th>Email</th>
    <th>Disability Type</th>
    <th>Address 1</th>
    <th>Address 2</th>
    <th>Postcode</th>
    <th>City</th>
    <th>State</th>
    <th>Education Level</th>
    <th>University</th>
    <th>Study Field</th>
    <th>Courses</th>
    <th>Household Income</th>
    <th>Business Name</th>
    <th>Business Address 1</th>
    <th>Business Address 2</th>
    <th>Business Postcode</th>
    <th>Business City</th>
    <th>Business State</th>
    <th>Job Address 1</th>
    <th>Job Address 2</th>
    <th>Job Postcode</th>
    <th>Job City</th>
    <th>Job State</th>
    <th>Job sector</th>
    <th>Application Status</th>
    <th>Salary</th>
    <th>Start Date</th>
    <th>End Date</th>
    <th>Date Termination</th>
    <th>Job Skill</th>
    <th>Job Contract</th>
    <th>Training Course Name</th>
    <th>Training Provider</th>
    <th>Training Facility</th>
    <th>Training Facility Address 1</th>
    <th>Training Facility Address 2</th>
    <th>Training Facility Postcode</th>
    <th>Training Facility City</th>
    <th>Training Facility State</th>
  </tr>
  @php
    $no=1;
  @endphp
  @foreach ($data as $row)
    <tr>
        <td>{{$row->date}}</td>
        <td>{{$row->programme_type}}</td>
        <td>{{$row->initiative}}</td>
        <td>{{$row->subinitiative}}</td>
        <td>{{$row->name_of_programmeOrCert}}</td>
        <td>{{$row->ind_name}}</td>
        <td>{{$row->ind_id_number}}</td>
        <td>{{$row->faculty}}</td>
        <td>{{$row->programme}}</td>
        <td>{{$row->ind_contact_no}}</td>
        <td>{{$row->ind_email}}</td>
        <td>{{$row->disability_type}}</td>
        <td>{{$row->ind_add_1}}</td>
        <td>{{$row->ind_add_2}}</td>
        <td>{{$row->ind_postcode}}</td>
        <td>{{$row->ind_city}}</td>
        <td>{{$row->ind_state}}</td>
        <td>{{$row->ind_education_lvl}}</td>
        <td>{{$row->ind_uni}}</td>
        <td>{{$row->study_field}}</td>
        <td>{{$row->courses}}</td>
        <td>{{$row->household_income}}</td>
        <td>{{$row->biz_name}}</td>
        <td>{{$row->biz_add_1}}</td>
        <td>{{$row->biz_add_2}}</td>
        <td>{{$row->biz_postcode}}</td>
        <td>{{$row->biz_city}}</td>
        <td>{{$row->biz_state}}</td>
        <td>{{$row->job_add_1}}</td>
        <td>{{$row->job_add_2}}</td>
        <td>{{$row->job_postcode}}</td>
        <td>{{$row->job_city}}</td>
        <td>{{$row->job_state}}</td>
        <td>{{$row->job_sector}}</td>
        <td>{{$row->application_status}}</td>
        <td>{{$row->salary}}</td>
        <td>{{$row->start_date}}</td>
        <td>{{$row->end_date}}</td>
        <td>{{$row->date_termination}}</td>
        <td>{{$row->job_skill}}</td>
        <td>{{$row->job_contract}}</td>
        <td>{{$row->training_course_name}}</td>
        <td>{{$row->training_provider}}</td>
        <td>{{$row->training_facility}}</td>
        <td>{{$row->training_facility_add_1}}</td>
        <td>{{$row->training_facility_add_2}}</td>
        <td>{{$row->training_facility_postcode}}</td>
        <td>{{$row->training_facility_city}}</td>
        <td>{{$row->training_facility_state}}</td>
    </tr>
  @endforeach
  
  
</table>

</body>
</html>