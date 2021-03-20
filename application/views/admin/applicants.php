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
            <div class="row mb-2">
                <div class="col-sm-12">
                    <a href="<?php echo base_url(); ?>home/add_applicant" class="btn btn-flat btn-info">Add Applicant</a>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-12">
                <div class=" table-responsive">
                <table id="employees" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Position Applied</th>
                    <th>Application Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach($apps as $app){
                    ?>
                    <tr>
                        <td><a href="<?php echo base_url()."home/applicant_details/".base64_encode(base64_encode($app['id']));?>"><?php echo $app['name'];?></a></td>
                        <td><?php echo $app['sex'] == "F" ? "Female" : "Male";?></td>
                        <td><?php echo $app['position'];?></td>
                        <td><?php echo $app['application_date'];?></td>
                        <td>
                            <?php
                                if($app['status'] == "H"){  $type = "success"; $text = "HIRED"; }
                                else if($app['status'] == "P"){  $type = "warning"; $text = "PENDING"; }
                                else if($app['status'] == "R"){  $type = "danger"; $text = "REJECTED"; }
                                $badge = "<span class='right badge badge-".$type."'>".$text."</span>";
                                echo $badge
                            ?>
                        </td>
                        <td>
                        <a href="<?php echo base_url().'home/edit_applicant/'.(base64_encode(base64_encode($app['id']))); ?>" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-flat btn-success btn-sm"><i class="fa fa-edit"></i></a>
                        <!-- <a href="<?php echo base_url().'home/edit_employee/'.(base64_encode(base64_encode($app['id']))); ?>" data-toggle="tooltip" data-placement="top" title="Archive" class="btn btn-flat btn-danger btn-sm"><i class="fa fa-file-archive"></i></a> -->
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                  <!-- <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Employee Type</th>
                    <th>Leave Credits</th>
                    <th>Date Hired</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </tfoot> -->
                </table>
              </div>
                </div>
            </div>
        </div>
    </div>
</div>
