<?php    $this->load->view('include/header'); ?>
<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-12">
					<h1><a href="index.html">Home</a> <i class="far fa-chevron-right"></i> Employees</h1>
				</div>
			</div>
		</div>
	</section>
	
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Add Employee</h3> 
						</div>
						<div class="card-body">
							<form onsubmit="return dorequest('<?php echo base_url('admin/Employee/addemployee'); ?>','.dologinfrm','.dologinres');" method="POST" class="dologinfrm">
								
								<input type="hidden" name="updatedBy" value="<?php echo $this->session->userdata('role'); ?>">
								<input  type="hidden" name="id"   value="<?php echo !empty($getOneEmployee['id'])?$getOneEmployee['id']:'';  ?>">
								
								<div class="row">
									<div class="col-md-4 col-12">
										<div class="input-group mb-4">
											<input type="text" class="form-control" value="<?php echo !empty($getOneEmployee['employee_id'])?$getOneEmployee['employee_id']:'';  ?>"   name="employee_id" placeholder="Employee ID" required />
										</div>
									</div>
									<div class="col-md-4 col-12">
										<div class="input-group mb-4">
											<input type="email" class="form-control" value="<?php echo !empty($getOneEmployee['image_path'])?$getOneEmployee['image_path']:'';  ?>"   name="image_path" placeholder="Employee Email" required />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-12">
										<div class="input-group mb-4">
											<input type="text" class="form-control" value="<?php echo !empty($getOneEmployee['first_name'])?$getOneEmployee['first_name']:'';  ?>"   name="first_name" placeholder="First Name" required />
										</div>
									</div>
									<div class="col-md-4 col-12">
										<div class="input-group mb-4">
											<input type="text" class="form-control" value="<?php echo !empty($getOneEmployee['last_name'])?$getOneEmployee['last_name']:'';  ?>" name="last_name" placeholder="Last Name" required />
										</div>
									</div>
								</div>
								<div class="row">
								    <div class="col-md-4 col-12">
										<div class="input-group mb-4">
											<input type="text" class="form-control" value="<?php echo !empty($getOneEmployee['designation_id'])?$getOneEmployee['designation_id']:'';  ?>" name="designation_id" placeholder="Designation" required />
										</div>
									</div>
									<div class="col-md-4 col-12">
										<div class="input-group mb-4">
											<select class="custom-select" name="gender" required>
												<option value=""selected>Gender</option>
												<?php
														
												$gender = array('male', 'female');
														
												
												foreach($gender as  $value)
												{
												if(!empty($getOneEmployee))
												{
												if($value == $getOneEmployee['gender'])
												{
												?>
												<option value="<?php  echo $value; ?>" selected> <?php  echo $value; ?></option>
												<?php
												}
												
												}
												else
												{
												?>
												<option value="<?php  echo $value; ?>"> <?php  echo $value; ?></option>
												<?php
												}
												}
												
																					
												?>
											</select>
										</div>
									</div>
									
								</div>
								<div class="row">
									
									<div class="col-md-4 col-12">
										<div class="input-group mb-4">
											<input type="text"  name="mobile" class="form-control" value="<?php echo !empty($getOneEmployee['mobile'])?$getOneEmployee['mobile']:'';  ?>" placeholder="Mobile" required>
										</div>
									</div>
									<div class="col-md-4 col-12">
										<div class="input-group mb-4">
											<select class="custom-select selectpicker" name="status" required>
												<option value="" disabled selected=""> &nbsp; Status</option>
												<?php
												
													                $status = array('1' => 'active', '0' => 'inactive');
                                                    														
                                                    				    
                                                    				    foreach($status as  $key => $value)
                                                    					{
                                                    					  
                                                    					     if($key == $getOneEmployee['status'])
                                                    					     {
                                                    					       ?>
                                                    					           <option value="<?php  echo $key; ?>" selected> <?php  echo $value; ?></option>
                                                    					       <?php
                                                    					     }
                                                    					     
                                                    					  
                                                    					   else
                                                    					     {
                                                    					         ?>
                                                    					        <option value="<?php  echo $key; ?>"> <?php  echo $value; ?></option>
                                                    					        <?php
                                                    					     }
                                                    					}
												
																					
												?>
											</select>
										</div>
									</div>
								</div>
								<!-- <div class="row">
									
								</div> -->
								<div class="row">
									<div class="col-12">
										
										<button type="submit" class="btn btn-primary pr-5 pl-5 mr-3"><?php  echo !empty($getOneEmployee['id'])?'Update':'Add'; ?></button>
										<button type="button" class="btn btn-outline-secondary pr-5 pl-5">Cancel</button>
									</div>
								</div>
								<div class="dologinres"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">All Employees</h3>
							<div class="card-tools">
								<div class="input-group">
									
								</div>
							</div>
						</div>
						<div class="card-body table-responsive">
							<table class="table table-hover text-nowrap" id="dataTable"> 
								<thead>
									<tr>
										
										<th>Employee ID</th>
										<!-- <th>Image</th> -->
										<th>Employee Name</th>
										<th>Email</th>
										<th>Designation</th>
										<th>Mobile</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
										
										if(!empty($getAllEmployee))
										{
										foreach ($getAllEmployee as $row)
										{
									?>
									<tr>
										
										<td><?php echo !empty($row['employee_id'])?$row['employee_id']:''; ?></td>
										<!-- <td><img src="../dist/img/dummy-avatar1.jpg" class="w-25 rounded-circle" alt="" /></td> -->
										<td><?php echo !empty($row['first_name'])?$row['first_name'].' '.$row['last_name']:''; ?></td>
										<td><?php echo !empty($row['image_path'])?$row['image_path']:''; ?></td>
										<td><?php echo !empty($row['designation_id'])?$row['designation_id']:''; ?></td>
										<td><?php echo !empty($row['mobile'])?$row['mobile']:''; ?></td>
										<td>
											<?php 
                                               if($row['status']  == '1')
                                               {
                                                 ?>
                                                     <button type="button" class="btn btn-success">active</button>
                                                 <?php
                                               }
                                               elseif($row['status']  == '0')
                                               {
                                                  ?>
                                                    <button type="button" class="btn btn-danger" >inactive</button>
                                                  <?php
                                               }

										    



										     ?>
											
										</td>
										<td><a href="<?php echo base_url('admin/employee_edit/').$row['id'];  ?>"><i class="far fa-pen-to-square text-primary"></i></a></td>
									</tr>
									<?php
									
									}
									
									}
									?>
								</tbody>
							</table>
						</div>
						<div class="card-footer clearfix">
							<ul class="pagination m-0">
								<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php    $this->load->view('include/footer'); ?>