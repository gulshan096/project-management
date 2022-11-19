<?php    $this->load->view('include/header'); ?>
<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-12">
					<h1><a href="#">Home</a> <i class="far fa-chevron-right"></i> Resources</h1>
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
							<form onsubmit="return dorequest('<?php echo base_url('admin/ResourceController/manageResource'); ?>','.dologinfrm','.dologinres');" method="POST" class="dologinfrm">
								
								<input  type="hidden" name="id"   value="<?php echo !empty($getOneResource['id'])?$getOneResource['id']:'';  ?>">
								<input type="hidden" class="form-control" value="<?php echo !empty($getOneResource['sq_number'])?$getOneResource['sq_number']:'';  ?>" placeholder="sq number" name="sq_number"/>
								<div class="row">
									<div class="col-md-4 col-12">
										<div class="input-group mb-4">
											<input type="text" class="form-control" name="resource_id" value="<?php echo !empty($getOneResource['resource_id'])?$getOneResource['resource_id']:'';  ?>" placeholder="Resource ID" required />
											<span class="placeholder">Resource ID</span>
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
                                                    					  
                                                    					     if($key == $getOneResource['status'])
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
											<span class="placeholder">Resource Status</span>
										</div>
									</div>
								</div>
								<div class="row">
									
									<div class="col-md-8 col-12">
										<div class="input-group mb-4">
											<input type="text" class="form-control" value="<?php echo !empty($getOneResource['res_description'])?$getOneResource['res_description']:'';  ?>" placeholder="Description" name="res_description" required />
											<span class="placeholder">Resource Description</span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-8 col-12">
										<div class="input-group mb-4">
											<textarea class="form-control" name="res_note" rows="3" placeholder="Add Note" style="resize:none;" required><?php echo !empty($getOneResource['res_note'])?$getOneResource['res_note']:'';  ?></textarea>
											<span class="placeholder">Resource Note</span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-8 col-12 text-center">
										<button type="submit" class="btn btn-primary pr-5 pl-5 mr-3"><?php echo !empty($getOneResource)?'Update':'Add';  ?></button>
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
										
										<th>Resource Id</th>
										<th>Description</th>
										<th>Notes</th>
										<th>Sq Number</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									
										if(!empty($getAllResource))
										{
										foreach ($getAllResource as $row)
										{
                                         
    
									?>
									<tr>
										
										<td><?php  echo !empty($row['resource_id'])?$row['resource_id']:''; ?></td>
										<td><?php  echo !empty($row['res_description'])?$row['res_description']:''; ?></td>
										<td><?php  echo !empty($row['res_note'])?$row['res_note']:''; ?></td>
										<td><?php  echo !empty($row['sq_number'])?$row['sq_number']:''; ?></td>
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
										<td><a href="<?php echo base_url('admin/edit_resources/').$row['id'];  ?>"><i class="far fa-pen-to-square text-primary"></i></a></td>
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
