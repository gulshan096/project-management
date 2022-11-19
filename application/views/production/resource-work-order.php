<?php    $this->load->view('include/header'); ?>
<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-12">
					<h1><a href="#">Home</a> <i class="far fa-chevron-right"></i> Resource Work Order</h1>
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
							<h3 class="card-title">All Resource Work Order</h3>
							<div class="card-tools">
								<div class="input-group">
									
								</div>
							</div>
						</div>
						<div class="card-body table-responsive">
							<table class="table table-hover text-nowrap" id="dataTable">
								<thead>
									<tr>
										<th>Resource ID</th>
										<th>Project ID</th>
										<th>Work Order Id</th>
										
										<th>Estimated Hours</th>
										<th>Required Quantity</th>
										<th>Quantity Measure </th>
										<th>Status</th>
										<th>Remark</th>
										<th>Forman ID</th>
										<th>Start Date</th>
										<th>End Date</th>
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
										<td><?php echo  !empty($row['resource_id'])?$row['resource_id']:''; ?></td>
										<td><?php echo  !empty($row['project_id'])?$row['project_id']:''; ?></td>
										<td><?php echo  !empty($row['work_order_id'])?$row['work_order_id']:''; ?></td>
										
										<td><?php echo  !empty($row['estimated_hour'])?$row['estimated_hour']:''; ?></td>
										<td><?php echo  !empty($row['required_quantity'])?$row['required_quantity']:''; ?></td>
										<td><?php echo  !empty($row['quantity_unit'])?$row['quantity_unit']:''; ?></td>
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
										<td><?php echo  !empty($row['remark'])?$row['remark']:''; ?></td>
										<td><?php echo  !empty($row['forman'])?$row['forman']:''; ?></td>
										
										<td><?php echo  !empty($row['startDate'])?$row['startDate']:''; ?></td>
										<td><?php echo  !empty($row['endDate'])?$row['endDate']:''; ?></td>
										
										<td>
										
										<button class="badge badge-pill badge-light manageResourceWorkOrder" data-id="<?php echo $row['id']; ?>" role="button" data-toggle="modal" data-target="#resourceWorkOrderModal"><i class="far fa-pen-to-square text-primary"></i></button>
										
										</td>
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
<div class="modal fade" id="resourceWorkOrderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Update Resource Work Order</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="card-body">
					<form onsubmit="return dorequest('<?php echo base_url('production/ResourceWorkOrder/manage_resource_workorder'); ?>','.dologinfrm','.dologinres');" method="POST" class="dologinfrm">
						
						<input type="hidden" name="id"  id="id">
						<div class="row">
							<div class="col-md-4 col-12">
								<div class="input-group mb-4">
									<input type="text" class="form-control" name="resource_id"  id="resource_id"   required readonly/>
									<span class="placeholder">Resource ID </span>
								</div>
							</div>
							<div class="col-md-4 col-12">
								<div class="input-group mb-4">
									<input type="text" class="form-control" name="project_id" id="project_id" required readonly/>
									<span class="placeholder">Project Id</span>
								</div>
							</div>
							<div class="col-md-4 col-12">
								<div class="input-group mb-4">
									<input type="text" class="form-control" name="work_order_id"  id="work_order_id"   required readonly/>
									<span class="placeholder">Work Order Id</span>
								</div>
							</div>
							
							
						</div>
						<div class="row">
							
							<div class="col-md-4 col-12">
								<div class="input-group mb-4">
									<input type="number" class="form-control" name="bench_mark_measure" id="bench_mark_measure" readonly    />
									<span class="placeholder">Bench Marks Measure</span>
								</div>
							</div>
							<div class="col-md-4 col-12">
								<div class="input-group mb-4">
									<input type="number" class="form-control" name="bench_mark_unit" id="bench_mark_unit" readonly  />
									<span class="placeholder">Bench Marks Unit</span>
								</div>
							</div>
							<div class="col-md-4 col-12">
								<div class="input-group mb-4">
									<input type="text" class="form-control" name="estimated_hour" id="estimated_hour" readonly />
									<span class="placeholder">Estimated Hours</span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-12">
								<div class="input-group mb-4">
									<input type="number" class="form-control" name="required_quantity" readonly id="required_quantity" />
									<span class="placeholder">Required Quantity</span>
								</div>
							</div>
							<div class="col-md-4 col-12">
								<div class="input-group mb-4">
									<input type="text" class="form-control" name="quantity_unit" id="quantity_unit" readonly/>
									<span class="placeholder">Unit Measure</span>
								</div>
							</div>
							<div class="col-md-4 col-12">
								<div class="input-group mb-4">
									<select class="custom-select" name="status" required>
										<option value=""> &nbsp; Status</option>
										<?php
										
										$status = array('1' => 'Released', '0' => 'unreleased');
										
										
										foreach($status as  $key => $value)
										{
										
										if($key == $get_resourceworkorder['status'] && isset($get_resourceworkorder))
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
									<span class="placeholder">Status</span>
								</div>
							</div>
							<div class="row">
								
								
								
							</div>
							<div class="col-md-4 col-12">
								<div class="input-group mb-4">
									<input type="text" readonly class="form-control" name="remark" id="remark"  placeholder=" remark" />
									<span class="placeholder">Remarks by planner</span>
								</div>
							</div>
							<div class="col-md-4 col-12">
								<div class="input-group mb-4">
									<input type="text" class="form-control start_date datepicker" id="startDate"  name="startDate" required />
									<span class="placeholder">Start Date</span>
								</div>
							</div>
							<div class="col-md-4 col-12">
								<div class="input-group mb-4">
									<input type="text" class="form-control end_date datepicker" id="endDate"  name="endDate" placeholder="end date"  required />
									<span class="placeholder">End Date</span>
								</div>
							</div>
						</div>
						<div class="row">
							
							<div class="col-md-4 col-12">
								<div class="input-group mb-4">
									<input type="text" readonly name="sq_no" id="sq_no"  class="form-control"/>
									<span class="placeholder">Sq Number</span>
								</div>
							</div>
							<div class="col-md-4 col-12">
								<div class="input-group mb-4">
									<select class="custom-select" name="forman" required>
									       <option value="">Select</option>

									                <?php

														    foreach($getUserByRole as  $value)
														    {
																if($value['role_name'] == $get_resourceworkorder['quantity_unit'] && !empty($get_resourceworkorder['quantity_unit']))
																{
													?>
													              <option value="<?php  echo $value['unit']; ?>" selected> <?php  echo $value['unit']; ?></option>
													<?php
													            }
													            else
													            {
													?>
													             <option value="<?php  echo $value['id']; ?>"> <?php  echo $value['name']; ?></option>
													<?php
													            }
													        }
																						
												    ?>
									</select>	
									<span class="placeholder">Forman</span>
								</div>
							</div>
							
							
						</div>
						<div class="dologinres my-2"></div>
						<div class="row modal-footer">
							<div class="col-12">
								<button type="submit" class="btn btn-primary pr-5 pl-5 mr-3">Update</button>
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							</div>
						</div>
						
						
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php    $this->load->view('include/footer'); ?>


<script>
$('.manageResourceWorkOrder').click(function(){
	
	var  resWorkOrderId = $(this).data('id')
	if(resWorkOrderId){
						$.ajax({
							type:'POST',
							url:'<?php echo base_url('production/ResourceWorkOrder/editResWorkOrder') ?>',
							data:{resWorkOrderId:resWorkOrderId},
							dataType:"json",
							success:function(data){
							
								$('#id').val(data.id);
								$('#project_id').val(data.project_id);
								$('#work_order_id').val(data.work_order_id);
								$('#description').val(data.description);
								$('#remark').val(data.remark);
								$('#status').val(data.status);
								$('.start_date').val(data.startDate);
								$('.end_date').val(data.endDate);
								$('#sq_no').val(data.sq_no);
								$('#quantity_unit').val(data.quantity_unit);
								$('#required_quantity').val(data.required_quantity);
								$('#estimated_hour').val(data.estimated_hour);
								$('#bench_mark_unit').val(data.bench_mark_unit);
								$('#bench_mark_measure').val(data.bench_mark_measure);
								$('#resource_id').val(data.resource_id);
							
							}
						});
					}
	
	
	
});
</script>