<?php    $this->load->view('include/header'); ?>

<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-12">
					<h1><a href="index.html">Home</a> <i class="far fa-chevron-right"></i> Break</h1>
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
							<h3 class="card-title mt-0"><?php echo !empty($getOneBreak)?'Update':'Add'; ?> Break</h3>
						</div>
						<div class="card-body">
							<form onsubmit="return dorequest('<?php echo base_url('admin/BreakController/add_break'); ?>','.dologinfrm','.dologinres');" method="POST" class="dologinfrm">

								<input type="hidden" name="updatedBy" value="<?php echo $this->session->userdata('role'); ?>">
                                <input type="hidden" name="id"  value="<?php echo !empty($getOneBreak)?$getOneBreak['id']:''; ?>"  >
								<div class="row">
									<div class="col-md-6 col-12">
										<div class="input-group mb-4">
											<input type="text" class="form-control" value="<?php echo !empty($getOneBreak)?$getOneBreak['name']:''; ?>" name="name" placeholder=" break type Lunch , Dinner , Breakfast" required />
											<span class="placeholder">Name</span>
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="input-group mb-4">
											<input type="text" class="form-control" value="<?php echo !empty($getOneBreak['description'])?$getOneBreak['description']:''; ?>" name="description" placeholder=" " required />
											<span class="placeholder">Description</span></span>
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="input-group mb-4">
											<input type="text" class="form-control" value="<?php echo !empty($getOneBreak)?$getOneBreak['start_time']:''; ?>" name="start_time" placeholder="Please select the break start time" onfocus="(this.type='time')"  required />
											<span class="placeholder">Start Time</span>
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="input-group mb-4">
											<input type="text" class="form-control" value="<?php echo !empty($getOneBreak)?$getOneBreak['end_time']:''; ?>" name="end_time" placeholder="Please select the break end time" onfocus="(this.type='time')"  required />
											<span class="placeholder">End Time</span>
										</div>
									</div>
									<div class="col-md-6 col-12">
										
										<select class="custom-select selectpicker" name="status" required>
											<option value="" selected=""> &nbsp; Status</option>
											<?php
												
													                $status = array('1' => 'active', '0' => 'inactive');
                                                    														
                                                    				    
                                                    				    foreach($status as  $key => $value)
                                                    					{
                                                    					  
                                                    					     if($key == $getOneBreak['status'])
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
								<div class="row mt-5">
									<div class="col-12 text-center">
										<button type="submit" class="btn btn-primary pr-5 pl-5 mr-3"><?php echo !empty($getOneBreak)?'Update':'Add'; ?>  Break</button>
										<button type="button" class="btn btn-outline-secondary pr-5 pl-5">Cancel</button>
									</div>
								</div>
								<div class="dologinres my-3"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Break</h3>
							<div class="card-tools">
								<div class="input-group">
									
								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="row">
							    
							    <?php 
							    if(!empty($getAllBreaks))
							    {
							        foreach($getAllBreaks as $row)
							        {
							            ?>
							            
							           
								<div class="col-md-6 col-12">
									<div class="callout callout-info d-block">
										<div class="row align-items-center mb-5">
											<div class="col-md-6 col-12">
												<h5><?php echo !empty($row['name'])?$row['name']:'';  ?></h5>
											</div>
											<div class="col-md-6 col-12 text-right">
												<div class="custom-control custom-switch custom-switch-on-success">
													<input type="checkbox" class="custom-control-input" id="customSwitch1">
													<label class="custom-control-label" for="customSwitch1"></label>
												</div>
											</div>
										</div>
										<div class="row align-items-center mb-1">
											<div class="col-md-5 col-12">
												<div class="input-group">
													<input type="text" class="form-control" readonly value="<?php echo !empty($row['start_time'])?$row['start_time']:'';  ?>" placeholder="Start Time" onfocus="(this.type='time')" />
													<span class="placeholder">Start Time</span>
												</div>
											</div>
											<div class="col-md-5 col-12">
												<div class="input-group">
													<input type="text" class="form-control" readonly value="<?php echo !empty($row['end_time'])?$row['end_time']:'';  ?>" placeholder="End Time" onfocus="(this.type='time')" />
													<span class="placeholder">End Time</span>
												</div>
											</div>
											<div class="col-md-2 col-12 text-right">
												<a href="<?php echo base_url('admin/edit_break/').$row['id']; ?>"><i class="far fa-pen-to-square text-primary"></i></a>
											</div>
										</div>
									</div>
								</div>
								 <?php
							        }
							    }
							    
							    ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<?php    $this->load->view('include/footer'); ?>