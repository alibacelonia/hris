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
                    <div class="col-sm-6">
                        <label class="cat-title all-caps"><span class="fa fa-user"></span> PERSONAL INFORMATION</label>
                        <table class="my-3">
                            <tr>
                                <td> <strong>NAME:</strong> </td>
                                <td><?php echo strtoupper($employee['firstname']." ".$employee['middlename']." ".$employee['lastname']); ?></td>
                            </tr>
                            
                            <tr>
                                <td><strong>GENDER:</strong></td>
                                <td><?php echo $employee['sex'] == "M" ? "MALE" : "FEMALE"; ?></td>
                            </tr>

                            
                            <tr>
                                <td><strong>BIRTHDATE:</strong></td>
                                <td><?php $birthdate = date_create($employee['birthdate']); echo date_format($birthdate,"M d Y"); ?></td>
                            </tr>
                        </table>
                        
                        <label class="cat-title all-caps"><span class="fa fa-book"></span> EDUCATIONAL BACKGROUND   </label>
                        <table class="my-2">
                            <tr>
                                <td colspan="2"> <strong>ELEMENTARY</strong> </td>
                            </tr>
                            <tr>
                                <td> <strong>SCHOOL:</strong> </td>
                                <td><?php echo strtoupper($employee['elem_school']); ?></td>
                            </tr>
                            
                            <tr>
                                <td><strong>FROM:</strong></td>
                                <td><?php $birthdate = date_create($employee['elem_from']); echo date_format($birthdate,"M d Y"); ?></td>
                            </tr>

                            
                            <tr>
                                <td><strong>TO:</strong></td>
                                <td><?php $birthdate = date_create($employee['elem_to']); echo date_format($birthdate,"M d Y"); ?></td>
                            </tr>
                        </table>
                        <table class="my-2">
                            <tr>
                                <td colspan="2"> <strong>HIGH SCHOOL</strong> </td>
                            </tr>
                            <tr>
                                <td> <strong>SCHOOL:</strong> </td>
                                <td><?php echo strtoupper($employee['hs_school']); ?></td>
                            </tr>
                            
                            <tr>
                                <td><strong>FROM:</strong></td>
                                <td><?php $birthdate = date_create($employee['hs_from']); echo date_format($birthdate,"M d Y"); ?></td>
                            </tr>

                            
                            <tr>
                                <td><strong>TO:</strong></td>
                                <td><?php $birthdate = date_create($employee['hs_to']); echo date_format($birthdate,"M d Y"); ?></td>
                            </tr>
                        </table>
                        
                        <table class="my-2">
                            <tr>
                                <td colspan="2"> <strong>COLLEGE</strong> </td>
                            </tr>
                            <tr>
                                <td> <strong>SCHOOL:</strong> </td>
                                <td><?php echo strtoupper($employee['college_school']); ?></td>
                            </tr>

                            <tr>
                                <td> <strong>SCHOOL:</strong> </td>
                                <td><?php echo strtoupper($employee['college_course']); ?></td>
                            </tr>
                            
                            <tr>
                                <td><strong>FROM:</strong></td>
                                <td><?php $birthdate = date_create($employee['college_from']); echo date_format($birthdate,"M d Y"); ?></td>
                            </tr>

                            
                            <tr>
                                <td><strong>TO:</strong></td>
                                <td><?php $birthdate = date_create($employee['college_to']); echo date_format($birthdate,"M d Y"); ?></td>
                            </tr>
                        </table>
                    </div>
                    
                    <div class="col-sm-6">
                        <label class="cat-title all-caps"><span class="fa fa-briefcase"></span> EMPLOYMENT INFORMATION</label>
                        <table class="my-3">
                            <tr>
                                <td> <strong>POSITION:</strong> </td>
                                <td><?php echo strtoupper($employee['position']); ?></td>
                            </tr>
                            <tr>
                                <td><strong>EMPLOYEE TYPE:</strong></td>
                                <td><?php
                                if($employee['employee_type'] == "COS"){  $type = "info"; $text = "Contract of Service"; }
                                else if($employee['employee_type'] == "JO"){  $type = "info"; $text = "Job Order"; }
                                else if($employee['employee_type'] == "CASUAL"){  $type = "info"; $text = "Casual"; }
                                else if($employee['employee_type'] == "REGULAR"){  $type = "info"; $text = "Regular"; }
                                $badge = "<span class='right badge badge-".$type."'>".$text."</span>";
                                echo $badge
                            ?></td>
                            </tr>
                            <tr>
                                <td><strong>DATE HIRED/APPOINTED:</strong></td>
                                <td><?php $birthdate = date_create($employee['birthdate']); echo date_format($birthdate,"M d Y"); ?></td>
                            </tr>
                            <tr>
                                <td><strong>EMPLOYEE STATUS:</strong></td>
                                <td>
                                    <?php
                                        if($employee['status'] == "A"){  $type = "success"; $text = "ACTIVE"; }
                                        else if($employee['status'] == "RT"){  $type = "danger"; $text = "RETIRED"; }
                                        else if($employee['status'] == "RS"){  $type = "danger"; $text = "RESIGNED"; }
                                        else if($employee['status'] == "ENDO"){  $type = "danger"; $text = "END OF CONTRACT"; }
                                        $badge = "<span class='right badge badge-".$type."'>".$text."</span>";
                                        echo $badge
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>LEAVE CREDITS:</strong></td>
                                <td><?php $birthdate = date_create($employee['date_updated']); echo $employee['leave_credits']." as of ".date_format($birthdate,"M d Y"); ?></td>
                            </tr>
                            <tr>
                                <td><strong>MONTHLY SALARY:</strong></td>
                                <td><?php echo "P".$employee['salary'] ;?></td>
                            </tr>
                        </table>

                        <label class="cat-title all-caps"><span class="fa fa-briefcase"></span> WORK HISTORY</label>
                        <?php
                            if($employee['we_agency1'] != ""){
                        ?>
                            <table class="my-2">
                                <tr>
                                    <td> <strong>AGENCY:</strong> </td>
                                    <td><?php echo strtoupper($employee['we_agency1']); ?></td>
                                </tr>
                                <tr>
                                    <td> <strong>POSITION:</strong> </td>
                                    <td><?php echo strtoupper($employee['we_position1']); ?></td>
                                </tr>
                                <tr>
                                    <td><strong>FROM:</strong></td>
                                    <td><?php $birthdate = date_create($employee['we_from1']); echo date_format($birthdate,"M d Y"); ?></td>
                                </tr>
                                <tr>
                                    <td><strong>TO:</strong></td>
                                    <td><?php $birthdate = date_create($employee['we_to1']); echo date_format($birthdate,"M d Y"); ?></td>
                                </tr>
                                <tr>
                                    <td><strong>MONTHLY SALARY:</strong></td>
                                    <td><?php echo "P".$employee['we_salary1'] ;?></td>
                                </tr>
                            </table>
                        <?php
                            }
                            if($employee['we_agency2'] != ""){
                        ?>
                            <hr>
                            <table class="my-2">
                                <tr>
                                    <td> <strong>AGENCY:</strong> </td>
                                    <td><?php echo strtoupper($employee['we_agency2']); ?></td>
                                </tr>
                                <tr>
                                    <td> <strong>POSITION:</strong> </td>
                                    <td><?php echo strtoupper($employee['we_position2']); ?></td>
                                </tr>
                                <tr>
                                    <td><strong>FROM:</strong></td>
                                    <td><?php $birthdate = date_create($employee['we_from2']); echo date_format($birthdate,"M d Y"); ?></td>
                                </tr>
                                <tr>
                                    <td><strong>TO:</strong></td>
                                    <td><?php $birthdate = date_create($employee['we_to2']); echo date_format($birthdate,"M d Y"); ?></td>
                                </tr>
                                <tr>
                                    <td><strong>MONTHLY SALARY:</strong></td>
                                    <td><?php echo "P".$employee['we_salary2'] ;?></td>
                                </tr>
                            </table>
                        <?php
                            }
                            if($employee['we_agency3'] != ""){
                        ?>
                            <hr>
                            <table class="my-2">
                                <tr>
                                    <td> <strong>AGENCY:</strong> </td>
                                    <td><?php echo strtoupper($employee['we_agency3']); ?></td>
                                </tr>
                                <tr>
                                    <td> <strong>POSITION:</strong> </td>
                                    <td><?php echo strtoupper($employee['we_position3']); ?></td>
                                </tr>
                                <tr>
                                    <td><strong>FROM:</strong></td>
                                    <td><?php $birthdate = date_create($employee['we_from3']); echo date_format($birthdate,"M d Y"); ?></td>
                                </tr>
                                <tr>
                                    <td><strong>TO:</strong></td>
                                    <td><?php $birthdate = date_create($employee['we_to3']); echo date_format($birthdate,"M d Y"); ?></td>
                                </tr>
                                <tr>
                                    <td><strong>MONTHLY SALARY:</strong></td>
                                    <td><?php echo "P".$employee['we_salary3'] ;?></td>
                                </tr>
                            </table>
                        <?php
                            }
                            if($employee['we_agency4'] != ""){
                        ?>
                            <hr>
                            <table class="my-2">
                                <tr>
                                    <td> <strong>AGENCY:</strong> </td>
                                    <td><?php echo strtoupper($employee['we_agency4']); ?></td>
                                </tr>
                                <tr>
                                    <td> <strong>POSITION:</strong> </td>
                                    <td><?php echo strtoupper($employee['we_position4']); ?></td>
                                </tr>
                                <tr>
                                    <td><strong>FROM:</strong></td>
                                    <td><?php $birthdate = date_create($employee['we_from4']); echo date_format($birthdate,"M d Y"); ?></td>
                                </tr>
                                <tr>
                                    <td><strong>TO:</strong></td>
                                    <td><?php $birthdate = date_create($employee['we_to4']); echo date_format($birthdate,"M d Y"); ?></td>
                                </tr>
                                <tr>
                                    <td><strong>MONTHLY SALARY:</strong></td>
                                    <td><?php echo "P".$employee['we_salary4'] ;?></td>
                                </tr>
                            </table>
                        <?php
                            }
                        ?>
                    </div>

                    
                    <div class="col-sm-12 mt-3">
                        <a href="<?php echo base_url(); ?>home/employees" class="btn btn-flat btn-outline-danger">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
