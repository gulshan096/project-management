	<?php    $this->load->view('include/header'); ?>
		<div class="content-wrapper">
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-12">
							<h1><a href="/">Home</a> <i class="far fa-chevron-right"></i> Users</h1>
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
									<h3 class="card-title mt-0">User Details</h3>
								</div>
								<div class="card-body">
									<form onsubmit="return dorequest('<?php echo base_url('admin/user/adduser'); ?>','.dologinfrm','.dologinres');" method="POST" class="dologinfrm">
										<input type="hidden" name="updatedBy" value="<?php echo $this->session->userdata('role'); ?>">
                                       <input type="hidden"  name="id" value="<?php echo !empty($getOneUser['id'])?$getOneUser['id']:''; ?>">
										<div class="row">
											<div class="col-md-4 col-12">
												<div class="input-group mb-4">
													<input type="text" class="form-control" value="<?php echo !empty($getOneUser['name'])?$getOneUser['name']:'';  ?>" name="name" placeholder="Name" required/>
												</div>
											</div>
											<div class="col-md-4 col-12">
												<div class="input-group mb-4">
													<input type="text" class="form-control" value="<?php echo !empty($getOneUser['username'])?$getOneUser['username']:'';  ?>" name="username" placeholder="User Name" required/>
												</div>
											</div>
											<div class="col-md-4 col-12">
												<div class="input-group mb-4">
													<input type="text" class="form-control" value="<?php echo !empty($getOneUser['email'])?$getOneUser['email']:'';  ?>" name="email" placeholder="Email" required/>
												</div>
											</div>
											
											
										</div>
										<div class="row">
										    <div class="col-md-4 col-12">
												<div class="input-group mb-4">
													<input type="text" class="form-control" value="<?php echo !empty($getOneUser['password'])?$getOneUser['password']:'';  ?>" name="password" placeholder="Password" required/>
												</div>
											</div>
											<div class="col-md-4 col-12">
												<div class="input-group mb-4">
													<input type="text" class="form-control" value="<?php echo !empty($getOneUser['password'])?$getOneUser['password']:'';  ?>" name="cpassword" placeholder="Re-Enter Password" required/>
												</div>
											</div>
											<div class="col-md-4 col-12">
												<div class="input-group mb-4">
												
													<select class="custom-select" name="role_name" required>
														<option value="" >select role</option>

											

														<?php
												
													                
													              $role = array('admin' => 'admin', 'planner' => 'planner','production' => 'production', 'superadmin' => 'super admin','foreman' => 'foreman');
                                                    														
                                                    				    
                                                    				    foreach($role as  $key => $value)
                                                    					{
                                                    					  
                                                    					     if($key == $getOneUser['role_name'])
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
											<div class="col-md-4 col-12">
												<div class="input-group mb-4">
													<select class="custom-select selectpicker" name="status" required>
														<option value=""> &nbsp; Status</option>
														
														<?php   
														  
                                                    			       $status = array('1' => 'Active', '0' => 'In active');
                                                    														
                                                    				    
                                                    				    foreach($status as  $key => $value)
                                                    					{
                                                    					
                                                    					     if($key == $getOneUser['status'])
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
										<div class="dologinres"></div>
										<div class="row">
											<div class="col-12 text-center">
												<button type="submit" class="btn btn-primary pr-5 pl-5 mr-3"><?php echo !empty($getOneUser)?'Update':'Add';  ?>User</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">All Users</h3>
									<!--<div class="card-tools">-->
									<!--	<div class="input-group">-->
									<!--		<input type="text" name="table_search" class="form-control" placeholder="Search" />-->
									<!--		<div class="input-group-append">-->
									<!--			<button type="submit" class="btn btn-default">-->
									<!--				<i class="fas fa-search"></i>-->
									<!--			</button>-->
									<!--		</div>-->
									<!--		<button type="submit" class="btn btn-primary rounded-circle ml-4">-->
									<!--			&nbsp;<i class="far fa-arrow-rotate-right"></i>&nbsp;-->
									<!--		</button>-->
									<!--	</div>-->
									<!--</div>-->
								</div>
								<div class="card-body">
								    <table id="dataTable" class="table table-hover text-nowrap text-center " id="dataTable">
        								<thead>
        									<tr>
        									
        										<th>Name</th>
        										<th>Username</th>
        										<th>Email</th>
        										<th>Role</th>
        										<th>Status</th>
        										<!--<th>Added</th>-->
        										<!--<th>Updated</th>-->
        										<th>Action</th>
        									</tr>
        								</thead>
        								<tbody class="" style="">
        									<?php
        									
        									if(!empty($getAllUser))
        									{
        									foreach ($getAllUser as $row)
        									{
        									?>
        									<tr>
        									
        										<td><?php  echo !empty($row['name'])?$row['name']:''; ?></td>
        										<td><?php  echo !empty($row['username'])?$row['username']:''; ?></td>
        							
        										<td><?php  echo !empty($row['email'])?$row['email']:''; ?></td>
        										
        										
        										<td>
        										    <?php  
                                                      if(!empty($row['role_name']))
                                                      {
                                                          if($row['role_name'] == 'admin')
        												{ 
        											     echo "Admin"; 
        											    }
        												elseif($row['role_name'] == 'planner' )
        												{ 
        												echo "Planner"; 
        												}
        												elseif($row['role_name'] == 'production' )
        												{ 
        												echo "Production"; 
        												}
        												elseif($row['role_name'] == 'superadmin' )
        												{ 
        												echo "Super admin";
        												}
        												elseif($row['role_name'] == 'foreman' )
        												{ 
        												echo "Foreman"; 
                                                        }
                                                      }
                                                      else
                                                      {

                                                      }	
        												
        											?>
        										</td>
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
        									
        										<!--<td><?php  echo !empty($row['createdDate'])?$row['createdDate']:''; ?></td>-->
        										<!--<td><?php  echo !empty($row['updatedDate'])?$row['updatedDate']:''; ?></td>-->
        										<td><a href="<?php  echo base_url('admin/user_edit/').$row['id']; ?>"><i class="far fa-pen-to-square text-primary"></i></a></td>
        									</tr>
        									<?php
        									
        									}
        									
        									}
        									?>
        									
        								</tbody>
        							</table>
								</div>
								<!--<div class="card-footer clearfix">-->
								<!--	<ul class="pagination m-0">-->
								<!--		<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>-->
								<!--		<li class="page-item active"><a class="page-link" href="#">1</a></li>-->
								<!--		<li class="page-item"><a class="page-link" href="#">2</a></li>-->
								<!--		<li class="page-item"><a class="page-link" href="#">3</a></li>-->
								<!--		<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>-->
								<!--	</ul>-->
								<!--</div>-->
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		
		<?php    $this->load->view('include/footer'); ?>