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
            <form action="<?php echo base_url();?>home/save_changes_applicant" method="post" class="mb-5">
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
                            <input type="text" class="form-control" placeholder="" name="firstname" required value="<?php echo $applicant['firstname']; ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Middle Name <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control" placeholder="" name="middlename" required value="<?php echo $applicant['middlename']; ?>">
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Last Name <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control" placeholder="" name="lastname" required value="<?php echo $applicant['lastname']; ?>">
                        </div>
                    </div>
                    

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Gender <sup class="text-danger">*</sup></label>
                            <select class="form-control" name="sex" required>
                                <option selected disabled></option>
                                <option value="M" <?php echo $applicant['sex'] == "M" ? "selected" : ""; ?>>Male</option>
                                <option value="F" <?php echo $applicant['sex'] == "F" ? "selected" : ""; ?>>Female</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Birthdate <sup class="text-danger">*</sup></label>
                            <input onfocus="(this.type='date')" onblur="(this.type='text')"  class="form-control" placeholder="" name="birthdate" required value="<?php echo $applicant['birthdate']; ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Position Applied<sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control" placeholder="" name="position" required value="<?php echo $applicant['position']; ?>">
                            <input type="hidden" class="form-control" placeholder="" name="flag" required value="1">
                            <input type="hidden" class="form-control" placeholder="" name="id" required value="<?php echo base64_encode(base64_encode($id)); ?>">
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Date of Application <sup class="text-danger">*</sup></label>
                            <input onfocus="(this.type='date')" onblur="(this.type='text')"  class="form-control" placeholder="" name="application_date" required value="<?php echo $applicant['application_date']; ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Status <sup class="text-danger">*</sup></label>
                            <select class="form-control" name="status" required>
                                <option selected disabled></option>
                                <option value="P" <?php echo $applicant['status'] == "P" ? "selected" : ""; ?>>Pending</option>
                                <option value="H" <?php echo $applicant['status'] == "H" ? "selected" : ""; ?>>Hire</option>
                                <option value="R" <?php echo $applicant['status'] == "R" ? "selected" : ""; ?>>Reject</option>
                                <!-- <option value="AWOL" <?php echo $applicant['status'] == "AWOL" ? "selected" : ""; ?>>Absent without leave</option> -->
                            </select>
                        </div>
                        
                        <a href="<?php echo base_url(); ?>home/employees" class="btn btn-outline-danger">Cancel</a>
                        <button type="submit" class="btn btn-flat btn-success">Save Changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
