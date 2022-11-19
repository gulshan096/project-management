<?php    $this->load->view('include/header'); ?>
		
		<div class="content-wrapper">
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-12">
							<h1><a href="<?php echo base_url('superadmin/home'); ?>">Home</a> <i class="far fa-chevron-right"></i> <a href="<?php echo base_url('superadmin/close'); ?>">Close</a> <i class="far fa-chevron-right"></i> Resource</h1>
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
									<h3 class="card-title">All Resource</h3>
									<div class="card-tools">
										
									</div>
								</div>
								<div class="card-body table-responsive">
									<table class="table table-hover text-nowrap" id="dataTable">
										<thead>
											<tr>
												<th>Project ID</th>
												<th>Work Order ID</th>
												<th>Resource Work Order Id</th>
												<th>Status</th>
												<th>Start Date</th>
												<th>End Date</th>
												<th>Forman ID</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
										<?php   
										if(!empty($all_resourceworkorder) && isset($all_resourceworkorder))
										{
										foreach($all_resourceworkorder  as $row)
										{
										?>
											<tr>
												<td><?php echo  !empty($row['project_id'])?$row['project_id']:''; ?></td>
    											<td><?php echo  !empty($row['work_order_id'])?$row['work_order_id']:''; ?></td>
    											<td><?php echo  !empty($row['resource_id'])?$row['resource_id']:''; ?></td>
    										
    											<td>
												
												<?php
													  if($row['status']  == 0)
													  {
														    ?>
                                                              <span class="badge badge-pill badge-info">unreleased</span>
														    <?php
													  }
													  elseif($row['status'] == 1)
													  {
														    ?>
                                                              <span class="badge badge-pill badge-success">released</span>
														    <?php 
													  }
													  elseif($row['status'] == 2)
													  {
														    ?>
                                                              <span class="badge badge-pill badge-danger">cancel</span>
														    <?php  
													  }
													  elseif($row['status'] == 3)
													  {
														    ?>
                                                              <span class="badge badge-pill badge-warning">closed</span>
														    <?php 
													  }
												  
												?>
												</td>
												<td><?php echo  !empty($row['startDate'])?$row['startDate']:''; ?></td>
                                                <td><?php echo  !empty($row['endDate'])?$row['endDate']:''; ?></td>
                                                <td><?php echo  !empty($row['forman'])?$row['forman']:''; ?></td>
							
												<td><button class="btn btn-danger btn-sm  closeResource" data-id="<?php echo $row['id']; ?>" role="button" data-toggle="modal" data-target="#resourceModal">Close</button>  </td>
											</tr>
											
										 <?php
										    }
										    }
										    
										    ?>
										</tbody>
									</table>
								</div>
								<div class="card-footer clearfix">
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		
		<div class="modal fade" id="resourceModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title w-100 text-center" id="exampleModalLabel">Enter Passsword</h4>
					</div>
					<div class="modal-body">
						<form onsubmit="return dorequest('<?php echo base_url('superadmin/Closed/close_resources'); ?>','.dologinfrm','.dologinres');" method="POST" class="dologinfrm">
							<input type="hidden" id="resource_id" name="resource_id">
							<input type="hidden" value="3" name="status">
							<div class="form-group">
								<input type="password" required class="form-control text-center" name="user_password" id="recipient-name" placeholder="Please Enter High Security Password">
							</div>
							<div class="dologinres text-center"></div>
							<div class="modal-footer justify-content-center">
								
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Not Now</button>
								<button type="submit" class="btn btn-danger">OK</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<?php    $this->load->view('include/footer'); ?>
		
		
		
		<script>
		$('.closeResource').click(function()
		{
				var  resourceId = $(this).data('id')
				if(resourceId)
				{			
					$('#resource_id').val(resourceId);				
				}	
		});
		</script>