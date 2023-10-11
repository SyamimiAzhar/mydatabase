<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>SHOW STUDENT DATA</title>
  </head>
  <body>
    <h1 class="text-center mb-4">Student Data</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/updatedata/{{$data->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Date</label>
                            <input type="date" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->date}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Programme Type</label>
                            <select class="custom-select" name="programme_type">
                                <option selected>{{$data->programme_type}}</option>
                                <option value="JobPlacement">Job Placement</option>
                                <option value="IncomeCreation">Income Creation</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Initiative Name</label>
                            <input type="text" name="initiative" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->initiative}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Subinitiative Name</label>
                            <input type="text" name="subinitiative" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->subinitiative}}">
                            <small id="emailHelp" class="form-text text-muted">Optional</small>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Name of Programme / Certification</label>
                            <input type="text" name="name_of_programmeOrCert" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->name_of_programmeOrCert}}">
                            <small id="emailHelp" class="form-text text-muted">Can insert more than one</small>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Full Name</label>
                            <input type="text" name="ind_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->ind_name}}">
                            <small id="emailHelp" class="form-text text-muted">Please fill in your fullname in capital letter</small>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">ID Number</label>
                            <input type="text" name="ind_id_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->ind_id_number}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Faculty</label>
                            <input type="text" name="faculty" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->faculty}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Programme</label>
                            <input type="text" name="programme" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->programme}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Contact Number</label>
                            <input type="text" name="ind_contact_no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->ind_contact_no}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" name="ind_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->ind_email}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Disability Type</label>
                            <input type="text" name="disability_type" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->disability_type}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Address 1</label>
                            <input type="text" name="ind_add_1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->ind_add_1}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Address 2</label>
                            <input type="text" name="ind_add_2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->ind_add_2}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Postcode</label>
                            <input type="char" name="ind_postcode" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->ind_postcode}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">City</label>
                            <input type="text" name="ind_city" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->ind_city}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">State</label>
                            <input type="text" name="ind_state" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->ind_state}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Education Level</label>
                            <input type="text" name="ind_education_lvl" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->ind_education_lvl}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">University</label>
                            <input type="text" name="ind_uni" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->ind_uni}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Study Field</label>
                            <input type="text" name="study_field" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->study_field}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Courses</label>
                            <input type="text" name="courses" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->courses}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Household Income (MYR)</label>
                            <input type="text" name="household_income" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->household_income}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Business Name</label>
                            <input type="text" name="biz_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->biz_name}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Business Address 1</label>
                            <input type="text" name="biz_add_1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->biz_add_1}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Business Address 2</label>
                            <input type="text" name="biz_add_2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->biz_add_2}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Business Postcode</label>
                            <input type="text" name="biz_postcode" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->biz_postcode}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Business City</label>
                            <input type="text" name="biz_city" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->biz_city}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Business State</label>
                            <input type="text" name="biz_state" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->biz_state}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Job Addres 1</label>
                            <input type="text" name="job_add_1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->job_add_1}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Job Addres 2</label>
                            <input type="text" name="job_add_2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->job_add_2}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Job Postcode</label>
                            <input type="text" name="job_postcode" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->job_postcode}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Job City</label>
                            <input type="text" name="job_city" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->job_city}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Job State</label>
                            <input type="text" name="job_state" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->job_state}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Job Sector</label>
                            <input type="text" name="job_sector" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->job_sector}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Application Status</label>
                            <input type="text" name="application_status" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->application_status}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Salary (MYR)</label>
                            <input type="number" name="salary" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->salary}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Start Date</label>
                            <input type="date" name="start_date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->start_date}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">End Date</label>
                            <input type="date" name="end_date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->end_date}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Date of Termination</label>
                            <input type="date" name="date_termination" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->date_termination}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Job Skill</label>
                            <input type="text" name="job_skill" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->job_skill}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Job Contract Type</label>
                            <input type="text" name="job_contract" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->job_contract}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Training Course Name</label>
                            <input type="text" name="training_course_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->training_course_name}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Training Provider</label>
                            <input type="text" name="training_provider" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->training_provider}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Training Facility</label>
                            <input type="text" name="training_facility" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->training_facility}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Training Facility Address 1</label>
                            <input type="text" name="training_facility_add_1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->training_facility_add_1}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Training Facility Address 2</label>
                            <input type="text" name="training_facility_add_2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->training_facility_add_2}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Training Facility Postcode</label>
                            <input type="text" name="training_facility_postcode" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->training_facility_postcode}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Training Facility City</label>
                            <input type="text" name="training_facility_city" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->training_facility_city}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Training Facility State</label>
                            <input type="text" name="training_facility_state" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->training_facility_state}}">
                        </div>
                                        
                        <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>