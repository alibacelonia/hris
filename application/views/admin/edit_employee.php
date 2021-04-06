
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
        
            <!-- <div class="row">
                <div class="col-lg-12">
                    <?php echo json_encode($employee['awards'], JSON_PRETTY_PRINT);?>
                </div>
            </div> -->
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
            <form action="<?php echo base_url();?>home/save_changes" method="post" enctype="multipart/form-data">
                <?php
                    if($this->session->flashdata('message')){
                        ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert card bg-success">
                                    <div class="card-header p-0">
                                        <h3 class="card-title"><i class="fas fa-check-circle"></i> Alert</h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-dismiss="alert" aria-hidden="true">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <span><?php echo $this->session->flashdata('message'); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                ?>
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
                                        <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>First Name <sup class="text-danger">*</sup></label>
                                                    <input type="text" class="form-control" placeholder="" name="firstname" required value="<?php echo $employee['firstname']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Middle Name <sup class="text-danger">*</sup></label>
                                                    <input type="text" class="form-control" placeholder="" name="middlename" required value="<?php echo $employee['middlename']; ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Last Name <sup class="text-danger">*</sup></label>
                                                    <input type="text" class="form-control" placeholder="" name="lastname" required value="<?php echo $employee['lastname']; ?>">
                                                </div>
                                            </div>
                                            

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Gender <sup class="text-danger">*</sup></label>
                                                    <select class="form-control" name="sex" required>
                                                        <option selected disabled></option>
                                                        <option value="M" <?php echo $employee['sex'] == "M" ? "selected" : ""; ?>>Male</option>
                                                        <option value="F" <?php echo $employee['sex'] == "F" ? "selected" : ""; ?>>Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Birthdate <sup class="text-danger">*</sup></label>
                                                    <input onfocus="(this.type='date')" onblur="(this.type='text')"  class="form-control" placeholder="" name="birthdate" required value="<?php echo $employee['birthdate']; ?>">
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
                                                    <input type="text" class="form-control" placeholder="Saint Louis College" name="elem_school"  value="<?php echo $employee['elem_school'];?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label>From<sup class="text-danger"></sup></label>
                                                    <input type="number" class="form-control" placeholder="Year" name="elem_from"  value="<?php echo $employee['elem_from'];?>">
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label>To<sup class="text-danger"></sup></label>
                                                    <input type="number" class="form-control" placeholder="Year" name="elem_to"  value="<?php echo $employee['elem_to'];?>">
                                                </div>
                                            </div>

                                            
                                            <div class="col-sm-12">
                                                <label class="cat-title all-caps">HIGH SCHOOL</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-group">
                                                    <label>Name of School<sup class="text-danger"></sup></label>
                                                    <input type="text" class="form-control" placeholder="Saint Louis College" name="hs_school"  value="<?php echo $employee['hs_school'];?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label>From<sup class="text-danger"></sup></label>
                                                    <input type="number" class="form-control" placeholder="Year" name="hs_from"  value="<?php echo $employee['hs_from'];?>">
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label>To<sup class="text-danger"></sup></label>
                                                    <input type="number" class="form-control" placeholder="Year" name="hs_to"  value="<?php echo $employee['hs_to'];?>">
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <label class="cat-title all-caps">COLLEGE</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Name of School<sup class="text-danger"></sup></label>
                                                    <input type="text" class="form-control" placeholder="Saint Louis College" name="college_school"  value="<?php echo $employee['college_school'];?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Course<sup class="text-danger"></sup></label>
                                                    <input type="text" class="form-control" placeholder="BS in Inforamation Tectnology" name="college_course"  value="<?php echo $employee['college_course'];?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label>From<sup class="text-danger"></sup></label>
                                                    <input type="number" class="form-control" placeholder="Year" name="college_from"  value="<?php echo $employee['college_from'];?>"">
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label>To<sup class="text-danger"></sup></label>
                                                    <input type="number" class="form-control" placeholder="Year" name="college_to"  value="<?php echo $employee['college_to'];?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="employment" role="tabpanel" aria-labelledby="employment-tab">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Position<sup class="text-danger">*</sup></label>
                                                    <input type="text" class="form-control" placeholder="" name="position" required value="<?php echo $employee['position']; ?>">
                                                    <input type="hidden" class="form-control" placeholder="" name="flag" required value="1">
                                                    <input type="hidden" class="form-control" placeholder="" name="id" required value="<?php echo base64_encode(base64_encode($id)); ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Date Hired/Appointed <sup class="text-danger">*</sup></label>
                                                    <input onfocus="(this.type='date')" onblur="(this.type='text')"  class="form-control" placeholder="" name="date_hired" required value="<?php echo $employee['date_hired']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Employee Type <sup class="text-danger">*</sup></label>
                                                    <select class="form-control" name="employee_type" required>
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
                                                    <label>Employee Status <sup class="text-danger">*</sup></label>
                                                    <select class="form-control" name="status" required>
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
                                                    <label>Leave Credits as of<sup class="text-danger">*</sup></label>
                                                    <input type="number" <?php /**echo $employee['employee_type'] == "COS" || $employee['employee_type'] == "JO" ? "readonly" : "";**/ ?> class="form-control" placeholder="" name="leave_credits" required value="<?php echo $employee['leave_credits']; ?>">
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Salary<sup class="text-danger">*</sup></label>
                                                    <input type="number" class="form-control" placeholder="" name="salary" required value="<?php echo $employee['salary']; ?>">
                                                </div>
                                            </div>

                                            
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Remarks <sup class="text-danger">*</sup></label>
                                                    <input class="form-control" placeholder="" name="remarks" required value="<?php echo $employee['remarks']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="workhistory" role="tabpanel" aria-labelledby="workhistory-tab">
                                        <div class="col-sm-12 mb-3">
                                            <button type="button" class="btn btn-flat btn-primary btn-add-workhistory">Add Work History</button>
                                        </div>

                                        <div class="col-sm-12" id="list_of_workhistory">
                                            <input type="hidden" name="workhistory_counter" id="workhistory_counter" value="<?php echo count($employee['workhistory']); ?>">
                                            <?php
                                                $workhistory_counter = 1;
                                                foreach($employee['workhistory'] as $workhistory){
                                            ?>
                                                <div class="row mb-3">
                                                    <input type="hidden" id="we_id<?php echo $workhistory_counter; ?>" name="we_id<?php echo $workhistory_counter; ?>" value="<?php echo $workhistory['id']; ?>">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Company/Agency <sup class="text-danger"></sup></label>
                                                            <input type="text" class="form-control" placeholder="" name="we_agency<?php echo $workhistory_counter; ?>" value="<?php echo $workhistory['agency']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Position <sup class="text-danger"></sup></label>
                                                            <input type="text" class="form-control" placeholder="" name="we_position<?php echo $workhistory_counter; ?>" value="<?php echo $workhistory['position']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>From <sup class="text-danger"></sup></label>
                                                            <input onfocus="(this.type='date')" onblur="(this.type='text')"  class="form-control" placeholder="" name="we_from<?php echo $workhistory_counter; ?>" value="<?php echo $workhistory['from']; ?>">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>To <sup class="text-danger"></sup></label>
                                                            <input onfocus="(this.type='date')" onblur="(this.type='text')"  class="form-control" placeholder="" name="we_to<?php echo $workhistory_counter; ?>" value="<?php echo $workhistory['to']; ?>">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>Salary <sup class="text-danger"></sup></label>
                                                            <input type="text" class="form-control" placeholder="" name="we_salary<?php echo $workhistory_counter; ?>" value="<?php echo $workhistory['salary']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <div class="form-group">
                                                        <label style="visibility:hidden;">Remove</label>
                                                        <button type="button" class="btn btn-flat btn-danger btn-block" onclick="removeWorkHistory(this,<?php echo $workhistory_counter; ?>)">Remove</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                                $workhistory_counter++;
                                                }
                                                if(count($employee['workhistory']) == 0){
                                                    echo "<span class='no_workhistory'>No Work History Yet.</span>";
                                                }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="awards" role="tabpanel" aria-labelledby="awards-tab">
                                        <div class="col-sm-12 mb-3">
                                            <button type="button" class="btn btn-flat btn-primary btn-add-award">Add Award</button>
                                        </div>

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
                                                            <input type="text" class="form-control" placeholder="" name="award_name<?php echo $award_counter; ?>" value="<?php echo $award['name']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Description <sup class="text-danger"></sup></label>
                                                            <input type="text" class="form-control" placeholder="" name="award_description<?php echo $award_counter; ?>" value="<?php echo $award['description']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <label>Date <sup class="text-danger"></sup></label>
                                                            <input onfocus="(this.type='date')" onblur="(this.type='text')"  class="form-control" placeholder="" name="award_date<?php echo $award_counter; ?>" value="<?php echo $award['date']; ?>">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-1">
                                                        <div class="form-group">
                                                        <label style="visibility:hidden;">Remove</label>
                                                        <button type="button" class="btn btn-flat btn-danger" onclick="removeAward(this,<?php echo $award_counter; ?>)">Remove</button>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Related Documents <sup class="text-danger"></sup></label>
                                                            <input type="file" multiple name="related_documents<?php echo $award_counter; ?>[]">
                                                        </div>
                                                        <div class="row" id="related_document_list">
                                                            <?php
                                                                foreach($award["related_documents"] as $file){
                                                            ?>
                                                                <div class="btn-group mr-1 rd<?php echo $file['id']; ?>">
                                                                    <a class="btn btn-warning" href="<?php echo base_url().$file['path']; ?>" target="_blank"><?php echo $file['name']; ?></a>
                                                                    <button type="button" class="btn btn-warning" onclick="removeRelatedDocuments(<?php echo $file['id']; ?>,'<?php echo $file['path']; ?>')"><span class="fa fa-times"></span></button>
                                                                </div>
                                                            <?php
                                                                }
                                                            ?>
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
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a href="<?php echo base_url(); ?>home/employees" class="btn btn-outline-danger">Cancel</a>
                                            <button type="submit" class="btn btn-flat btn-success">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="row mb-5">
                <div class="col-12">
                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="files-tab" data-toggle="pill" href="#files" role="tab" aria-controls="files" aria-selected="true">File Attachments</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-four-tabContent">
                                <div class="tab-pane fade active show" id="files" role="tabpanel" aria-labelledby="files-tab">
                                    <div class="row">
                                        <div class="col-sm-6 mb-4">
                                            <div class="form-group pds-change-section">
                                                <label>Personal Data Sheet (PDS) <sup class="text-danger">*</sup></label><br/>
                                                <button class="btn btn-flat btn-info btn-view-pds" onclick="viewPDS('<?php echo $employee['pds_path']; ?>','<?php echo base_url().$employee['pds_path']; ?>');"> View PDS</a>
                                                <button class="btn btn-flat btn-success btn-change-pds">Upload PDS</button>
                                            </div>
                                            <form method="post" action="<?php echo base_url(); ?>home/upload_employee_pds" enctype="multipart/form-data" class="form-for-pds" style="display:none;">
                                                <div class="form-group">
                                                    <label>Personal Data Sheet (PDS) <sup class="text-danger">*</sup></label>
                                                    <div class="custom-file">
                                                        <input type="file" name="pds" class="custom-file-input" id="pds" accept=".xls,.xlsx,.pdf,.png,.jpg">
                                                        <label class="custom-file-label" for="pds">Choose file</label>
                                                    </div>
                                                </div>
                                                
                                                <input type="hidden" name="uid" value="<?php echo base64_encode(base64_encode($employee['id'])); ?>">
                                                <span class="btn btn-flat btn-danger btn-cancel-pds">Cancel</span>
                                                <button type="submit" class="btn btn-flat btn-success btn-for-pds" disabled>Upload File</button>
                                            </form>
                                        </div>
                                        <div class="col-sm-6 mb-4">
                                        
                                            <div class="form-group saln-change-section">
                                                <label>Statement of Assets, Liabilities and Net Worth (SALN) <sup class="text-danger">*</sup></label><br/>
                                                <button class="btn btn-flat btn-info btn-view-saln" onclick="viewSALN('<?php echo $employee['saln_path']; ?>','<?php echo base_url().$employee['saln_path']; ?>');"> View SALN</a>
                                                <button type="submit" class="btn btn-flat btn-success btn-change-saln">Upload SALN</button>
                                            </div>
                                            <form  method="post"  action="<?php echo base_url(); ?>home/upload_saln" enctype="multipart/form-data" class="form-for-saln" style="display:none;">
                                                <div class="form-group">

                                                <label>Statement of Assets, Liabilities and Net Worth (SALN) <sup class="text-danger">*</sup></label><br/>
                                                    <div class="custom-file">
                                                        <input type="file" name="saln" class="custom-file-input" id="saln" accept=".xls,.xlsx,.pdf,.png,.jpg">
                                                        <label class="custom-file-label" for="saln">Choose file</label>
                                                    </div>
                                                </div>
                                                
                                                <input type="hidden" name="uid" value="<?php echo base64_encode(base64_encode($employee['id'])); ?>">
                                                <span class="btn btn-flat btn-danger btn-cancel-saln">Cancel</span>
                                                <button type="submit" class="btn btn-flat btn-success btn-for-saln" disabled>Upload File</button>
                                            </form>
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
</div>
