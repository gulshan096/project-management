<?php    $this->load->view('include/header'); ?>
<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-12">
					<h1><a href="#">Home</a> <i class="far fa-chevron-right"></i> Measure</h1>
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
							
						</div>
						<div class="card-body">
							<form onsubmit="return dorequest('<?php echo base_url('admin/MeasuresController/manageMeasure'); ?>','.dologinfrm','.dologinres');" method="POST" class="dologinfrm">
								<input type="hidden" name="updatedBy" value="<?php echo $this->session->userdata('role'); ?>">
								<input  type="hidden" name="id"   value="<?php echo !empty($getOneMeasure['id'])?$getOneMeasure['id']:'';  ?>">
								<div class="row">
								    <div class="col-md-4 col-12">
										<div class="input-group mb-4">
											<input type="text" class="form-control" value="<?php echo !empty($getOneMeasure['unit'])?$getOneMeasure['unit']:'';  ?>" placeholder="Enter Unit" name="unit" required />
											<span class="placeholder">Unit Measures</span>
										</div>
									</div>
									<div class="col-md-4 col-12">
										<div class="input-group mb-4">
											<select class="custom-select selectpicker" name="status" required>
												<option value="">Select Status</option>
												<?php
												
													                $status = array('1' => 'active', '0' => 'inactive');
                                                    														
                                                    				    
                                                    				    foreach($status as  $key => $value)
                                                    					{
                                                    					  
                                                    					     if($key == $getOneMeasure['status'])
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
											<span class="placeholder">Unit Status</span>
										</div>
									</div>
								</div>
								
								
								<div class="row">
									<div class="col-md-8 col-12 text-center">
										<button type="submit" class="btn btn-primary pr-5 pl-5 mr-3"><?php echo !empty($getOneMeasure)?'Update':'Add';  ?></button>
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
							<h3 class="card-title">All Resources</h3>
							<div class="card-tools">
								
							</div>
						</div>
						<div class="card-body table-responsive">
							<table class="table table-hover text-nowrap" id="dataTable">
								<thead>
									<tr>
										
										<th>Id</th>
										<th>Unit Measure</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									
										if(!empty($getAllMeasure))
										{
										foreach ($getAllMeasure as $row)
										{
                                         
    
									?>
									<tr>
										
										<td><?php  echo !empty($row['id'])?$row['id']:''; ?></td>
										<td><?php  echo !empty($row['unit'])?$row['unit']:''; ?></td>
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
										<td><a href="<?php echo base_url('admin/edit_measures/').$row['id'];  ?>"><i class="far fa-pen-to-square text-primary"></i></a></td>
									</tr>
									<?php
									}
									}
									?>
								</tbody>
							</table>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php    $this->load->view('include/footer'); ?>
