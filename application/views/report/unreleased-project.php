<?php    $this->load->view('include/header'); ?>
		
		<div class="content-wrapper">
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-12">
							<h1><a href="<?php echo base_url('planner/home'); ?>">Home</a> <i class="far fa-chevron-right"></i> Unreleased </h1>
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
									<h3 class="card-title">All Project</h3>
									<div class="card-tools">
									</div>
								</div>
								<div class="card-body table-responsive">
									<table class="table table-hover text-nowrap" id="projectTbl">
										<thead>
											<tr>
												<th>Project ID</th>
												<th>Customer Name</th>
												<th>Description</th>
												<th>Status</th>
												<th>Start Date</th>
												<th>End Date</th>
												<th>Attachment</th>
											</tr>
										</thead>
										<tbody>
										<?php
										   if(!empty($unreleased_project))
										   {
											   foreach($unreleased_project as $row1)
											   {
										     ?>
											<tr>
												<td><?php echo !empty($row1['project_id'])?$row1['project_id']:''; ?></td>
												<td><?php echo !empty($row1['customer_name'])?$row1['customer_name']:''; ?></td>
												<td><?php echo !empty($row1['description'])?$row1['description']:''; ?></td>
												<td>
												    <?php 
						 
													  if($row1['status'] == 0)
													  {
														?>
                                                            <span class="badge badge-pill badge-info">unreleased</span>
														<?php 
													  }  
												    ?>
												</td>
												<td><?php echo !empty($row1['start_date'])?$row1['start_date']:''; ?></td>
												<td><?php echo !empty($row1['end_date'])?$row1['end_date']:''; ?></td>
												<td><a href="<?php echo !empty($row1['id'])?$row1['id']:'';  ?>"><i class="fad fa-2x fa-file-pdf text-primary"></i></a></td>
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
					
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">All Work Order</h3>
									<div class="card-tools">
										
									</div>
								</div>
								<div class="card-body table-responsive">
									<table class="table table-hover text-nowrap" id="workOrderTbl">
										<thead>
											<tr>
												<th>Project ID</th>
												<th>Work Order ID</th>
												<th>Description</th>
												<th>Status</th>
												<th>Start Date</th>
												<th>End Date</th>
												<th>Remark</th>
												<th>Attachment</th>
											</tr>
										</thead>
										<tbody>
										<?php
										   if(!empty($unreleased_work_order))
										   {
											   foreach($unreleased_work_order as $row2)
											   {
										     ?>
											<tr>
											    <td><?php echo !empty($row2['project_id'])?$row2['project_id']:'';  ?></td>
												<td><?php echo !empty($row2['work_order_id'])?$row2['work_order_id']:'';  ?></td>
    										    <td><?php echo !empty($row2['description'])?$row2['description']:'';  ?></td>
    											<td>
												<?php 
						 
													  if($row2['status'] == 0)
													  {
														?>
                                                            <span class="badge badge-pill badge-info">unreleased</span>
														<?php 
													  }  
												    ?>
												</td>
												<td><?php echo !empty($row2['start_date'])?$row2['start_date']:'';  ?></td>
    											<td><?php echo !empty($row2['end_date'])?$row2['end_date']:'';  ?></td>
    											<td><?php echo !empty($row2['remark'])?$row2['remark']:'';  ?></td>
												<td><a href="<?php echo !empty($row2['id'])?$row2['id']:'';  ?>"><i class="fad fa-2x fa-file-pdf text-primary"></i></a></td>	
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
					
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">All Resource Work Order</h3>
									<div class="card-tools">
										
									</div>
								</div>
								<div class="card-body table-responsive">
									<table class="table table-hover text-nowrap" id="resWrkOrdTbl">
										<thead>
											<tr>
											    <th>Resource ID</th>
												<th>Project ID</th>
												<th>Work Order ID</th>
												<th>Estimated Hours</th>
												<th>Required Quantity</th>
												<th>Quantity Unit</th>
												<th>Status</th>
												<th>Remark</th>
											</tr>
										</thead>
										<tbody>
											<?php
										   if(!empty($unreleased_resource_work_order))
										   {
											   foreach($unreleased_resource_work_order as $row3)
											   {
										     ?>
											<tr>
    												<td><?php echo  !empty($row3['resource_id'])?$row3['resource_id']:''; ?></td>
    												<td><?php echo  !empty($row3['resource_id'])?$row3['project_id']:''; ?></td>
    												<td><?php echo  !empty($row3['resource_id'])?$row3['work_order_id']:''; ?></td>
    												<td><?php echo  !empty($row3['resource_id'])?$row3['estimated_hour']:''; ?></td>
    												<td><?php echo  !empty($row3['resource_id'])?$row3['required_quantity']:''; ?></td>
    												<td><?php echo  !empty($row3['resource_id'])?$row3['quantity_unit']:''; ?></td>
    												<td>
													<?php 
						 
													  if($row3['status'] == 0)
													  {
														?>
                                                            <span class="badge badge-pill badge-info">unreleased</span>
														<?php 
													  }  
												    ?>
													</td>
                                                    <td><?php echo  !empty($row3['resource_id'])?$row3['remark']:''; ?></td>
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
		<?php    $this->load->view('include/footer'); ?>
		