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
                    <a href="<?php echo base_url(); ?>home/add_employee" class="btn btn-flat btn-info">Add Employee</a>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-12">
                <div class=" table-responsive">
                <table id="employees" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Employee Type</th>
                    <th>Leave Credits</th>
                    <th>Date Hired</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach($emps as $emp){
                    ?>
                    <tr>
                        <td><?php echo $emp['name'];?></td>
                        <td><?php echo $emp['position'];?></td>
                        <td><?php echo $emp['type'];?></td>
                        <td><?php echo $emp['credits'];?></td>
                        <td><?php echo $emp['date_hired'];?></td>
                        <td><?php echo $emp['status'];?></td>
                        <td>
                        <a href="<?php echo base_url().'home/edit_employee/'.(base64_encode(base64_encode($emp['id']))); ?>" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-flat btn-success btn-sm"><i class="fa fa-edit"></i></a>
                        <!-- <a href="<?php echo base_url().'home/edit_employee/'.(base64_encode(base64_encode($emp['id']))); ?>" data-toggle="tooltip" data-placement="top" title="Archive" class="btn btn-flat btn-danger btn-sm"><i class="fa fa-file-archive"></i></a> -->
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
