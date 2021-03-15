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
    <div class="content">
        <div class="container-fluid">
        <div class="col-lg-9 mt-2 mb-5">
						<form action="<?php echo base_url();?>home/save_account_info" method="post" class="mb-5">
						<?php
									if($this->session->flashdata('user_success')){
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
														<span><?php echo $this->session->flashdata('user_success'); ?></span>
													</div>
												</div>
											</div>
										</div>
										<?php
									}
								?>
							<div class="row">
								<div class="col-sm-12">
									<label class="cat-title all-caps">Personal Info</label>
								</div>
								
								<div class="col-sm-6">
									<div class="form-group">
										<label>Email<sup class="text-danger">*</sup></label>
										<input type="text" class="form-control" placeholder="" name="email" readonly value="<?php echo $user_details['email']; ?>">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>First Name <sup class="text-danger">*</sup></label>
										<input type="text" class="form-control" placeholder="" name="firstname" required value="<?php echo $user_details['firstname']; ?>">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Middle Name <sup class="text-danger">*</sup></label>
										<input type="text" class="form-control" placeholder="" name="middlename" required value="<?php echo $user_details['middlename']; ?>">
									</div>
								</div>
								
								<div class="col-sm-6">
									<div class="form-group">
										<label>Last Name <sup class="text-danger">*</sup></label>
										<input type="text" class="form-control" placeholder="" name="lastname" required value="<?php echo $user_details['lastname']; ?>">
									</div>
								</div>
								
								<div class="col-sm-6">
									<div class="form-group">
										<label>Sex <sup class="text-danger">*</sup></label>
										<select class="form-control" name="gender" required>
											<option selected disabled></option>
											<option value="Male" <?php echo $user_details['gender'] == "Male" ? "selected" : ""; ?>>Male</option>
											<option value="Female" <?php echo $user_details['gender'] == "Female" ? "selected" : ""; ?>>Female</option>
										</select>
									</div>
								</div>
								
								<div class="col-sm-6">
									<div class="form-group">
										<label>Birthdate <sup class="text-danger">*</sup></label>
										<input onfocus="(this.type='date')" onblur="(this.type='text')"  class="form-control" placeholder="" name="birthdate" required value="<?php echo $user_details['birthdate']; ?>">
									</div>
								</div>
								
								<div class="col-sm-6">
									<div class="form-group">
										<label>Phone <sup class="text-danger">*</sup></label>
										<input type="text" class="form-control" placeholder="" name="phone" required value="<?php echo $user_details['phone']; ?>">
									</div>
									
									<button type="submit" class="btn btn-flat btn-success">Save Changes</button>
								</div>
							</div>
						</form>

						<form method="post" action="<?php echo base_url(); ?>home/change_password">
								<?php
									if($this->session->flashdata('password_error')){
										?>
										<div class="row">
											<div class="col-lg-12">
												<div class="alert card bg-danger">
													<div class="card-header p-0">
														<h3 class="card-title"><i class="fas fa-exclamation-triangle"></i> Alert</h3>

														<div class="card-tools">
															<button type="button" class="btn btn-tool" data-dismiss="alert" aria-hidden="true">
																<i class="fas fa-times"></i>
															</button>
														</div>
													</div>
													<div class="card-body p-0">
														<span><?php echo $this->session->flashdata('password_error'); ?></span>
													</div>
												</div>
											</div>
										</div>
										<?php
									}
									if($this->session->flashdata('password_success')){
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
														<span><?php echo $this->session->flashdata('password_success'); ?></span>
													</div>
												</div>
											</div>
										</div>
										<?php
									}
								?>
							<div class="row">
								<div class="col-sm-12">
									<label class="cat-title all-caps">Password Change</label>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Current password</label>
										<input type="password" class="form-control" placeholder="" required name="current_password">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>New password</label>
										<input type="password" class="form-control" placeholder="" required name="new_password">
									</div>
								</div>
								
								<div class="col-sm-6">
									<div class="form-group">
										<label>Confirm new password</label>
										<input type="password" class="form-control" placeholder="" required name="confirm_password">
									</div>
									<button type="submit" class="btn btn-flat btn-success">Save Changes</button>
								</div>
							</div>
						</form>
              
					</div>
				
        </div>
    </div>
</div>
