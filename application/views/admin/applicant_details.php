<style>


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
            <form action="<?php echo base_url();?>home/save_applicant_changes" method="post" class="mb-5">
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
                    <div class="col-sm-6">
                        <label class="cat-title all-caps"><span class="fa fa-user"></span> PERSONAL INFORMATION</label>
                        <table class="my-3">
                            <tr>
                                <td> <strong>NAME:</strong> </td>
                                <td><?php echo strtoupper($applicant['firstname']." ".$applicant['middlename']." ".$applicant['lastname']); ?></td>
                            </tr>
                            
                            <tr>
                                <td><strong>GENDER:</strong></td>
                                <td><?php echo $applicant['sex'] == "M" ? "MALE" : "FEMALE"; ?></td>
                            </tr>

                            
                            <tr>
                                <td><strong>BIRTHDATE:</strong></td>
                                <td><?php $birthdate = date_create($applicant['birthdate']); echo date_format($birthdate,"M d Y"); ?></td>
                            </tr>
                        </table>
                        
                    </div>

                    <div class="col-sm-6">
                        <label class="cat-title all-caps"><span class="fa fa-user"></span> APPLICATION DETAILS</label>
                        <table class="my-3">
                            <tr>
                                <td> <strong>POSITION APPLIED:</strong> </td>
                                <td><?php echo strtoupper($applicant['position']); ?></td>
                            </tr>
                            
                            <tr>
                                <td><strong>DATE OF APPLICATION:</strong></td>
                                <td><?php $birthdate = date_create($applicant['application_date']); echo date_format($birthdate,"M d Y"); ?></td>
                            </tr>

                            
                            <tr>
                                <td><strong>APPLICATION STATUS:</strong></td>
                                <td>
                                    <?php
                                        if($applicant['status'] == "H"){  $type = "success"; $text = "HIRED"; }
                                        else if($applicant['status'] == "P"){  $type = "warning"; $text = "PENDING"; }
                                        else if($applicant['status'] == "R"){  $type = "danger"; $text = "REJECTED"; }
                                        $badge = "<span class='right badge badge-".$type."'>".$text."</span>";
                                        echo $badge
                                    ?>
                                </td>
                            </tr>
                        </table>
                        
                        <a href="<?php echo base_url().$applicant['pds_path']; ?>" class="btn btn-flat btn-info" target="_blank"> View PDS</a>
                        <a href="<?php echo base_url().$applicant['saln_path']; ?>" class="btn btn-flat btn-info" target="_blank"> View SALN</a>
                    </div>

                    
                    <div class="col-sm-12 mt-3">
                        <a href="<?php echo base_url(); ?>home/applicants" class="btn btn-flat btn-outline-danger">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
