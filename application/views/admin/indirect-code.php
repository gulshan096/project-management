<?php    $this->load->view('include/header'); ?>

<div class="content-wrapper">
	<section class="content-header"> 
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-12">
					<h1><a href="index.html">Home</a> <i class="far fa-chevron-right"></i> Indirect Code</h1>
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
							<h3 class="card-title mt-0"> <?php  echo !empty($getOneIndirectCodes)?'Update':'Add'; ?> Indirect Code</h3>
						</div>
						<div class="card-body">
							<form onsubmit="return dorequest('<?php echo base_url('admin/indirectcode/add_indirect_code'); ?>','.dologinfrm','.dologinres');" method="POST" class="dologinfrm">
								<input type="hidden" name="updatedBy" value="<?php echo $this->session->userdata('role'); ?>">
                                <input type="hidden" name="id"  value="<?php  echo !empty($getOneIndirectCodes['id'])?$getOneIndirectCodes['id']:''; ?>" >
								<div class="row">
									<div class="col-md-4 col-12">
										<div class="input-group mb-4"> 
											<input type="text" class="form-control" value="<?php  echo !empty($getOneIndirectCodes['name'])?$getOneIndirectCodes['name']:''; ?>" name="name" placeholder="Please enter name" required />
											<span class="placeholder">Name</span>
										</div>
									</div>
									<div class="col-md-4 col-12">
										<div class="input-group mb-4">
											<input type="text" class="form-control" value="<?php  echo !empty($getOneIndirectCodes['description'])?$getOneIndirectCodes['description']:''; ?>" name="description" placeholder="Please enter the GL Description"  required />
											<span class="placeholder">Description</span>
										</div>
									</div>
									<div class="col-md-4 col-12">
										
										<select class="custom-select selectpicker" name="status" required>
											<option value="" selected=""> Status</option>
											<?php
												
													                $status = array('1' => 'active', '0' => 'inactive');
                                                    														
                                                    				    
                                                    				    foreach($status as  $key => $value)
                                                    					{
                                                    					  
                                                    					     if($key == $getOneIndirectCodes['status'])
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
								<div class="row">
									<div class="col-md-8 col-12 text-center">
										<button type="submit" class="btn btn-primary pr-5 pl-5 mr-3"><?php  echo !empty($getOneIndirectCodes)?'Update':'Insert'; ?></button>
										<button type="button" class="btn btn-outline-secondary pr-5 pl-5">Cancel</button>
										<div class="dologinres my-3"></div>
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
							<h3 class="card-title">Indirect Code</h3>
							<div class="card-tools">
								<div class="input-group">
									
								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="row">
							    <?php
							    if(!empty($getAllIndirectCodes))
							    {
							        foreach($getAllIndirectCodes as $row)
							        {
							        	
							        ?>
							        <div class="col-md-4 col-12">
									    <div class="callout callout-primary" >
									       <span><h5><?php echo $row['name'] ?></h5></span>
										   
										   <p><?php echo $row['description'] ?></p>
										   <a href="<?php  echo base_url('admin/edit_indirect_code/').$row['id']; ?>"><i class="far fa-pen-to-square text-primary"></i></a>
										   
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

<script>
	$('document').ready(function(){
		
		$('#dataTable').DataTable({
			
		"columnDefs": [
	{"className": "dt-center", "targets": "_all"}
	],
			
		});
			
	});
</script>