<style>


fieldset {
    margin: 8px;
    border: 1px solid silver;
    padding: 8px;    
    border-radius: 4px;
}
legend{
    padding: 2px;    
}

</style>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo $title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?php echo $title; ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content-header">
        <div class="container-fluid">
            
        <div class="row">
                    <div class="col-12">
                        <div class="card card-primary card-outline card-outline-tabs">
                            <div class="card-header p-0 border-bottom-0">
                                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="personal-tab" data-toggle="pill" href="#personal" role="tab" aria-controls="personal" aria-selected="true">Personal Information</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="educational-tab" data-toggle="pill" href="#educational" role="tab" aria-controls="educational" aria-selected="false">Educational Background</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="employment-tab" data-toggle="pill" href="#employment" role="tab" aria-controls="employment" aria-selected="false">Employment Information</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="workhistory-tab" data-toggle="pill" href="#workhistory" role="tab" aria-controls="workhistory" aria-selected="false">Work History</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="awadrs-tab" data-toggle="pill" href="#awards" role="tab" aria-controls="awards" aria-selected="false">Awards & Achievements</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-four-tabContent">
                                    <div class="tab-pane fade active show" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                                        <div class="row">
                                        <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control" placeholder="No data." name="firstname" readonly value="<?php echo $employee['firstname']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Middle Name</label>
                                                    <input type="text" class="form-control" placeholder="No data." name="middlename" readonly value="<?php echo $employee['middlename']; ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control" placeholder="No data." name="lastname" readonly value="<?php echo $employee['lastname']; ?>">
                                                </div>
                                            </div>
                                            

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Gender</label>
                                                    <input type="text" class="form-control" placeholder="No data." name="lastname" readonly value="<?php echo $employee['sex'] == "M" ? "Male" : "Female"; ?>">
                                                    
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Birthdate</label>
                                                    <input class="form-control" placeholder="No data." name="birthdate" readonly value="<?php $birthdate=date_create($employee['birthdate']); echo date_format($birthdate,"F d, Y"); ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="educational" role="tabpanel" aria-labelledby="educational-tab">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label class="cat-title all-caps">ELEMENTARY</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-group">
                                                    <label>Name of School<sup class="text-danger"></sup></label>
                                                    <input type="text" class="form-control" placeholder="No data." name="elem_school"  value="<?php echo $employee['elem_school'];?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label>From<sup class="text-danger"></sup></label>
                                                    <input type="number" class="form-control" placeholder="No data." name="elem_from"  value="<?php echo $employee['elem_from'];?>" readonly>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label>To<sup class="text-danger"></sup></label>
                                                    <input type="number" class="form-control" placeholder="No data." name="elem_to"  value="<?php echo $employee['elem_to'];?>" readonly>
                                                </div>
                                            </div>

                                            
                                            <div class="col-sm-12">
                                                <label class="cat-title all-caps">HIGH SCHOOL</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-group">
                                                    <label>Name of School<sup class="text-danger"></sup></label>
                                                    <input type="text" class="form-control" placeholder="No data." name="hs_school"  value="<?php echo $employee['hs_school'];?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label>From<sup class="text-danger"></sup></label>
                                                    <input type="number" class="form-control" placeholder="No data." name="hs_from"  value="<?php echo $employee['hs_from'];?>" readonly>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label>To<sup class="text-danger"></sup></label>
                                                    <input type="number" class="form-control" placeholder="No data." name="hs_to"  value="<?php echo $employee['hs_to'];?>" readonly>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <label class="cat-title all-caps">COLLEGE</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Name of School<sup class="text-danger"></sup></label>
                                                    <input type="text" class="form-control" placeholder="No data." name="college_school"  value="<?php echo $employee['college_school'];?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Course<sup class="text-danger"></sup></label>
                                                    <input type="text" class="form-control" placeholder="No data." name="college_course"  value="<?php echo $employee['college_course'];?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label>From<sup class="text-danger"></sup></label>
                                                    <input type="number" class="form-control" placeholder="No data." name="college_from"  value="<?php echo $employee['college_from'];?>" readonly>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label>To<sup class="text-danger"></sup></label>
                                                    <input type="number" class="form-control" placeholder="No data." name="college_to"  value="<?php echo $employee['college_to'];?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="employment" role="tabpanel" aria-labelledby="employment-tab">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Position</label>
                                                    <input type="text" class="form-control" placeholder="No data." name="position" readonly value="<?php echo $employee['position']; ?>">
                                                    <input type="hidden" class="form-control" placeholder="No data." name="flag" readonly value="1">
                                                    <input type="hidden" class="form-control" placeholder="No data." name="id" readonly value="<?php echo base64_encode(base64_encode($id)); ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Date Hired/Appointed</label>
                                                    <input class="form-control" placeholder="No data." name="date_hired" readonly value="<?php $date_hired=date_create($employee['date_hired']); echo date_format($date_hired,"F d, Y"); ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Employee Type</label>
                                                    <select class="form-control" name="employee_type" disabled>
                                                        <option selected disabled></option>
                                                        <option value="COS" <?php echo $employee['employee_type'] == "COS" ? "selected" : ""; ?>>Contract of Service</option>
                                                        <option value="JO" <?php echo $employee['employee_type'] == "JO" ? "selected" : ""; ?>>Job Order</option>
                                                        <option value="CASUAL" <?php echo $employee['employee_type'] == "CASUAL" ? "selected" : ""; ?>>Casual</option>
                                                        <option value="REGULAR" <?php echo $employee['employee_type'] == "REGULAR" ? "selected" : ""; ?>>Regular</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Employee Status</label>
                                                    <select class="form-control" name="status" disabled>
                                                        <option selected disabled></option>
                                                        <option value="A" <?php echo $employee['status'] == "A" ? "selected" : ""; ?>>Active</option>
                                                        <option value="RT" <?php echo $employee['status'] == "RT" ? "selected" : ""; ?>>Retired</option>
                                                        <option value="RS" <?php echo $employee['status'] == "RS" ? "selected" : ""; ?>>Resigned</option>
                                                        <option value="ENDO" <?php echo $employee['status'] == "ENDO" ? "selected" : ""; ?>>End of Contract</option>
                                                        <!-- <option value="AWOL" <?php echo $employee['status'] == "AWOL" ? "selected" : ""; ?>>Absent without leave</option> -->
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Leave Credits as of <?php $date_updated=date_create($employee['date_updated']); echo date_format($date_updated,"F d, Y"); ?></label>
                                                    <input type="number" <?php /**echo $employee['employee_type'] == "COS" || $employee['employee_type'] == "JO" ? "readonly" : "";**/ ?> class="form-control" placeholder="No data." name="leave_credits" readonly value="<?php echo $employee['leave_credits']; ?>">
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Salary</label>
                                                    <input type="number" class="form-control" placeholder="No data." name="salary" readonly value="<?php echo $employee['salary']; ?>">
                                                </div>
                                            </div>

                                            
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Remarks</label>
                                                    <input class="form-control" placeholder="No data." name="remarks" readonly value="<?php echo $employee['remarks']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="workhistory" role="tabpanel" aria-labelledby="workhistory-tab">

                                           <div class="row">
                                            <?php
                                                $workhistory_counter = 1;
                                                foreach($employee['workhistory'] as $workhistory){
                                            ?>
                                            <div class="col-sm-6">
                                                <table class="table table-sm table-striped">
                                                    <tbody>
                                                        <tr>
                                                            <td><strong>Company / Agency:</strong> </td>
                                                            <td><?php echo $workhistory['agency']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Position:</strong> </td>
                                                            <td><?php echo $workhistory['position']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>From:</strong> </td>
                                                            <td><?php $from=date_create($workhistory['from']); echo date_format($from,"F d, Y"); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>To:</strong> </td>
                                                            <td><?php $to=date_create($workhistory['to']); echo date_format($to,"F d, Y"); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Monthly Salary:</strong> </td>
                                                            <td>Php <?php echo $workhistory['salary']; ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <?php
                                                $workhistory_counter++;
                                                }
                                                if(count($employee['workhistory']) == 0){
                                                    echo "<div class='col-12'><span class='no_workhistory'>No Work History Yet.</span></div>";
                                                }
                                            ?>
                                            </div>
                                    </div>
                                    <div class="tab-pane fade" id="awards" role="tabpanel" aria-labelledby="awards-tab">
                                        
                                        <div class="col-sm-12" id="list_of_awards">
                                            <input type="hidden" name="award_counter" id="award_counter" value="<?php echo count($employee['awards']); ?>">
                                            <?php
                                                $award_counter = 1;
                                                foreach($employee['awards'] as $award){
                                            ?>
                                                <div class="row">
                                                    <input type="hidden" id="award_id<?php echo $award_counter; ?>" name="award_id<?php echo $award_counter; ?>" value="<?php echo $award['id']; ?>">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>Name <sup class="text-danger"></sup></label>
                                                            <input type="text" class="form-control" placeholder="No data." name="award_name<?php echo $award_counter; ?>" value="<?php echo $award['name']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Description <sup class="text-danger"></sup></label>
                                                            <input type="text" class="form-control" placeholder="No data." name="award_description<?php echo $award_counter; ?>" value="<?php echo $award['description']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <label>Date <sup class="text-danger"></sup></label>
                                                            <input onfocus="(this.type='date')" onblur="(this.type='text')"  class="form-control" placeholder="No data." name="award_date<?php echo $award_counter; ?>" value="<?php echo $award['date']; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                                $award_counter++;
                                                }
                                                if(count($employee['awards']) == 0){
                                                    echo "<span class='no_awards'>No Awards & Achievements Yet.</span>";
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
