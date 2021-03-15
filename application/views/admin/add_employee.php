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
                    <div class="col-sm-12">
                        <label class="cat-title all-caps">PERSONAL INFORMATION</label>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>First Name <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control" placeholder="" name="firstname" required value="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Middle Name <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control" placeholder="" name="middlename" required value="">
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Last Name <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control" placeholder="" name="lastname" required value="">
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
                            <input onfocus="(this.type='date')" onblur="(this.type='text')"  class="form-control" placeholder="" name="birthdate" required value="">
                        </div>
                    </div>

                    <div class="col-sm-12 mt-3 mb-1">
                        <label class="cat-title all-caps">EDUCATIONAL BACKGROUND</label>
                    </div>
                    <div class="col-sm-12">
                        <label class="cat-title all-caps">Elementary</label>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label>Name of School<sup class="text-danger"></sup></label>
                            <input type="text" class="form-control" placeholder="Saint Louis College" name="elem_school"  value="">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>From<sup class="text-danger"></sup></label>
                            <input type="number" class="form-control" placeholder="Year" name="elem_from"  value="">
                        </div>
                    </div>
                    
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>To<sup class="text-danger"></sup></label>
                            <input type="number" class="form-control" placeholder="Year" name="elem_to"  value="">
                        </div>
                    </div>

                    
                    <div class="col-sm-12">
                        <label class="cat-title all-caps">High School</label>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label>Name of School<sup class="text-danger"></sup></label>
                            <input type="text" class="form-control" placeholder="Saint Louis College" name="hs_school"  value="">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>From<sup class="text-danger"></sup></label>
                            <input type="number" class="form-control" placeholder="Year" name="hs_from"  value="">
                        </div>
                    </div>
                    
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>To<sup class="text-danger"></sup></label>
                            <input type="number" class="form-control" placeholder="Year" name="hs_to"  value="">
                        </div>
                    </div>
                    
                    

                    <div class="col-sm-12">
                        <label class="cat-title all-caps">College</label>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Name of School<sup class="text-danger"></sup></label>
                            <input type="text" class="form-control" placeholder="Saint Louis College" name="college_school"  value="">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Course<sup class="text-danger"></sup></label>
                            <input type="text" class="form-control" placeholder="BS in Inforamation Tectnology" name="college_course"  value="">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>From<sup class="text-danger"></sup></label>
                            <input type="number" class="form-control" placeholder="Year" name="college_from"  value="">
                        </div>
                    </div>
                    
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>To<sup class="text-danger"></sup></label>
                            <input type="number" class="form-control" placeholder="Year" name="college_to"  value="">
                        </div>
                    </div>

                    <div class="col-sm-12 mt-3 mb-1">
                        <label class="cat-title all-caps">EMPLOYMENT INFORMATION</label>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Position<sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control" placeholder="" name="position" required value="">
                            <input type="hidden" class="form-control" placeholder="" name="flag" required value="0">
                            <input type="hidden" class="form-control" placeholder="" name="id" required value="">
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Date Hired/Appointed<sup class="text-danger">*</sup></label>
                            <input onfocus="(this.type='date')" onblur="(this.type='text')"  class="form-control" placeholder="" name="date_hired" required value="">
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
                                <option value="A" >Active</option>
                                <option value="RT" >Retired</option>
                                <option value="RS" >Resigned</option>
                                <option value="ENDO" >End of Contract</option>
                                <!-- <option value="AWOL" <?php echo $employee['status'] == "AWOL" ? "selected" : ""; ?>>Absent without leave</option> -->
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Leave Credits <sup class="text-danger">*</sup></label>
                            <input type="number" class="form-control" placeholder="" name="leave_credits" required value="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Gross Monthly Salary <sup class="text-danger">*</sup></label>
                            <input type="number" class="form-control" placeholder="" name="salary" required value="">
                        </div>
                    </div>
                    
                    
                    <div class="col-sm-12 mt-3 mb-1">
                        <label class="cat-title all-caps">WORK HISTORY</label>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Company/Agency<sup class="text-danger"></sup></label>
                            <input type="text" class="form-control" placeholder="Department of the Interior and Local Government" name="we_agency1"  value="">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>Position<sup class="text-danger"></sup></label>
                            <input type="text" class="form-control" placeholder="Year" name="we_position1"  value="">
                        </div>
                    </div>
                    
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>From<sup class="text-danger"></sup></label>
                            <input type="date" class="form-control" placeholder="month/year" name="we_from1"  value="">
                        </div>
                    </div>

                    
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>To<sup class="text-danger"></sup></label>
                            <input type="date" class="form-control" placeholder="" name="we_to1"  value="">
                        </div>
                    </div>

                    
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>Monthly Salary<sup class="text-danger"></sup></label>
                            <input type="number" class="form-control" placeholder="" name="we_salary1"  value="">
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Company/Agency<sup class="text-danger"></sup></label>
                            <input type="text" class="form-control" placeholder="Department of the Interior and Local Government" name="we_agency2"  value="">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>Position<sup class="text-danger"></sup></label>
                            <input type="text" class="form-control" placeholder="Year" name="we_position2"  value="">
                        </div>
                    </div>
                    
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>From<sup class="text-danger"></sup></label>
                            <input type="date" class="form-control" placeholder="month/year" name="we_from2"  value="">
                        </div>
                    </div>

                    
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>To<sup class="text-danger"></sup></label>
                            <input type="date" class="form-control" placeholder="" name="we_to2"  value="">
                        </div>
                    </div>

                    
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>Monthly Salary<sup class="text-danger"></sup></label>
                            <input type="number" class="form-control" placeholder="" name="we_salary2"  value="">
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Company/Agency<sup class="text-danger"></sup></label>
                            <input type="text" class="form-control" placeholder="Department of the Interior and Local Government" name="we_agency3"  value="">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>Position<sup class="text-danger"></sup></label>
                            <input type="text" class="form-control" placeholder="Year" name="we_position3"  value="">
                        </div>
                    </div>
                    
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>From<sup class="text-danger"></sup></label>
                            <input type="date" class="form-control" placeholder="month/year" name="we_from3"  value="">
                        </div>
                    </div>

                    
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>To<sup class="text-danger"></sup></label>
                            <input type="date" class="form-control" placeholder="" name="we_to3"  value="">
                        </div>
                    </div>

                    
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>Monthly Salary<sup class="text-danger"></sup></label>
                            <input type="number" class="form-control" placeholder="" name="we_salary3"  value="">
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Company/Agency<sup class="text-danger"></sup></label>
                            <input type="text" class="form-control" placeholder="Department of the Interior and Local Government" name="we_agency4"  value="">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>Position<sup class="text-danger"></sup></label>
                            <input type="text" class="form-control" placeholder="Year" name="we_position4"  value="">
                        </div>
                    </div>
                    
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>From<sup class="text-danger"></sup></label>
                            <input type="date" class="form-control" placeholder="month/year" name="we_from4"  value="">
                        </div>
                    </div>

                    
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>To<sup class="text-danger"></sup></label>
                            <input type="date" class="form-control" placeholder="" name="we_to4"  value="">
                        </div>
                    </div>

                    
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>Monthly Salary<sup class="text-danger"></sup></label>
                            <input type="number" class="form-control" placeholder="" name="we_salary4"  value="">
                        </div>
                    </div>

                    

                    <div class="col-sm-12">
                    
                        <a href="<?php echo base_url(); ?>home/employees" class="btn btn-outline-danger">Cancel</a>
                        <button type="submit" class="btn btn-flat btn-success">Save Changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
