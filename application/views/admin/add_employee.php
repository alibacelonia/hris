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
            <form action="<?php echo base_url();?>home/save_changes" method="post" class="mb-5">
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
                                                    <input type="text" class="form-control" placeholder="" name="firstname" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Middle Name <sup class="text-danger">*</sup></label>
                                                    <input type="text" class="form-control" placeholder="" name="middlename" required>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Last Name <sup class="text-danger">*</sup></label>
                                                    <input type="text" class="form-control" placeholder="" name="lastname" required>
                                                </div>
                                            </div>
                                            

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Gender <sup class="text-danger">*</sup></label>
                                                    <select class="form-control" name="sex" required>
                                                        <option selected disabled></option>
                                                        <option value="M">Male</option>
                                                        <option value="F">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Birthdate <sup class="text-danger">*</sup></label>
                                                    <input onfocus="(this.type='date')" onblur="(this.type='text')"  class="form-control" placeholder="" name="birthdate" required>
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
                                                    <input type="text" class="form-control" placeholder="Saint Louis College" name="elem_school">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label>From<sup class="text-danger"></sup></label>
                                                    <input type="number" class="form-control" placeholder="Year" name="elem_from">
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label>To<sup class="text-danger"></sup></label>
                                                    <input type="number" class="form-control" placeholder="Year" name="elem_to">
                                                </div>
                                            </div>

                                            
                                            <div class="col-sm-12">
                                                <label class="cat-title all-caps">HIGH SCHOOL</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-group">
                                                    <label>Name of School<sup class="text-danger"></sup></label>
                                                    <input type="text" class="form-control" placeholder="Saint Louis College" name="hs_school">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label>From<sup class="text-danger"></sup></label>
                                                    <input type="number" class="form-control" placeholder="Year" name="hs_from">
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label>To<sup class="text-danger"></sup></label>
                                                    <input type="number" class="form-control" placeholder="Year" name="hs_to">
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <label class="cat-title all-caps">COLLEGE</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Name of School<sup class="text-danger"></sup></label>
                                                    <input type="text" class="form-control" placeholder="Saint Louis College" name="college_school">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Course<sup class="text-danger"></sup></label>
                                                    <input type="text" class="form-control" placeholder="BS in Inforamation Tectnology" name="college_course">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label>From<sup class="text-danger"></sup></label>
                                                    <input type="number" class="form-control" placeholder="Year" name="college_from">
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label>To<sup class="text-danger"></sup></label>
                                                    <input type="number" class="form-control" placeholder="Year" name="college_to">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="employment" role="tabpanel" aria-labelledby="employment-tab">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Position<sup class="text-danger">*</sup></label>
                                                    <input type="text" class="form-control" placeholder="" name="position" required>
                                                    <input type="hidden" class="form-control" placeholder="" name="flag" required value="0">
                                                    <input type="hidden" class="form-control" placeholder="" name="id" required value="">
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Date Hired/Appointed <sup class="text-danger">*</sup></label>
                                                    <input onfocus="(this.type='date')" onblur="(this.type='text')"  class="form-control" placeholder="" name="date_hired" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Employee Type <sup class="text-danger">*</sup></label>
                                                    <select class="form-control" name="employee_type" required>
                                                        <option selected disabled></option>
                                                        <option value="COS">Contract of Service</option>
                                                        <option value="JO">Job Order</option>
                                                        <option value="CASUAL">Casual</option>
                                                        <option value="REGULAR">Regular</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Employee Status <sup class="text-danger">*</sup></label>
                                                    <select class="form-control" name="status" required>
                                                        <option selected disabled></option>
                                                        <option value="A">Active</option>
                                                        <option value="RT">Retired</option>
                                                        <option value="RS">Resigned</option>
                                                        <option value="ENDO">End of Contract</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Leave Credits as of<sup class="text-danger">*</sup></label>
                                                    <input type="number" class="form-control" placeholder="" name="leave_credits" required>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Salary<sup class="text-danger">*</sup></label>
                                                    <input type="number" class="form-control" placeholder="" name="salary" required>
                                                </div>
                                            </div>

                                            
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Remarks <sup class="text-danger">*</sup></label>
                                                    <input class="form-control" placeholder="" name="remarks" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="workhistory" role="tabpanel" aria-labelledby="workhistory-tab">
                                        <div class="col-sm-12 mb-3">
                                            <button type="button" class="btn btn-flat btn-primary btn-add-workhistory">Add Work History</button>
                                        </div>

                                        <div class="col-sm-12" id="list_of_workhistory">
                                            <input type="hidden" name="workhistory_counter" id="workhistory_counter" value="0">
                                            <span class='no_workhistory'>No Work History Yet.</span>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="awards" role="tabpanel" aria-labelledby="awards-tab">
                                        <div class="col-sm-12 mb-3">
                                            <button type="button" class="btn btn-flat btn-primary btn-add-award">Add Award</button>
                                        </div>

                                        <div class="col-sm-12" id="list_of_awards">
                                            <input type="hidden" name="award_counter" id="award_counter" value="0">
                                            <span class='no_awards'>No Awards & Achievements Yet.</span>
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
        </div>
    </div>
</div>
