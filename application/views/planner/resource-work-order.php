<?php    $this->load->view('include/header'); ?>
		
		<div class="content-wrapper">
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-12">
							<h1><a href="index.html">Home</a> <i class="far fa-chevron-right"></i> Resource Work Order   </h1>
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
									<h3 class="card-title mt-0"><?php echo !empty($get_resourceworkorder['id'])?'Update Resource Work Order':'Add Resource Work Order'; ?></h3>
								</div>
								<div class="card-body">
									<form onsubmit="return dorequest('<?php echo base_url('planner/ResourceWorkOrder/manage_resource_workorder'); ?>','.dologinfrm','.dologinres');" method="POST" class="dologinfrm">
    						
    								<input type="hidden" name="id" value="<?php echo !empty($get_resourceworkorder)?$get_resourceworkorder['id']:""; ?>">
										<div class="row">
										    
											<div class="col-md-4 col-12">
												<div class="input-group mb-4">
													<select class="custom-select" name="project_id" id="projectId" required>
													    <option value ="">Select</option>
													    <?php 
													    if(!empty($all_project_id))
													    {
													        
													    foreach($all_project_id as $item)
													    {
															if($item['project_id'] == $get_resourceworkorder['project_id']  && isset($get_resourceworkorder))
															  {
																?>
																  
																	<option value="<?php  echo $item['project_id']; ?>" selected><?php  echo $item['project_id']; ?></option>
																<?php
															  }
															  else
															  {	  
																?>
																	<option value="<?php echo $item['project_id']; ?>" ><?php echo $item['project_id']; ?></option>
																<?php
															  }
													    }
													    
													    }
													    ?>
														
													</select>
													<span class="placeholder">Project Id</span>
												</div>
											</div>
											<div class="col-md-4 col-12">
												<div class="input-group mb-4">
												    
												    <select class="custom-select" name="work_order_id" id="work_order_id" required>
													<?php 
                                                                if(!empty($get_resourceworkorder['work_order_id']))
																{
																 ?>
																	  <option selected value="<?php echo $get_resourceworkorder['work_order_id']; ?>"> <?php echo $get_resourceworkorder['work_order_id']; ?> </option>
                                                                 <?php  
															    }
																else
																{
																	?>
																	   <option value ="">Select</option>
																	<?php
															    }
															?>
													    
													</select>
													<span class="placeholder">Work Order Id</span>
												</div>
											</div>
											<div class="col-md-4 col-12">
												<div class="input-group mb-4">
													<select class="custom-select" name="resource_id" id="resourceId"   required>
													    <option value ="">Select</option>
													     <?php

														    foreach($getAllResource as  $value)
														    {
																if($value['resource_id'] == $get_resourceworkorder['resource_id'] && !empty($get_resourceworkorder['resource_id']))
																{
													?>
													              <option value="<?php  echo $value['resource_id']; ?>" selected> <?php  echo $value['resource_id']; ?></option>
													<?php
													            }
													            else
													            {
													?>
													             <option value="<?php  echo $value['resource_id']; ?>"> <?php  echo $value['resource_id']; ?></option>
													<?php
													            }
													        }
																						
												    ?>
											
													</select>
													<span class="placeholder">Resource ID </span>
												</div>
											</div>
											
										</div>
										<div class="row">
										
											<div class="col-md-4 col-12">
												<div class="input-group mb-4">
													<input type="number" class="form-control" value="<?php echo !empty($get_resourceworkorder['bench_mark_measure'])?$get_resourceworkorder['bench_mark_measure']:''; ?>" name="bench_mark_measure" required/>
													<span class="placeholder">Bench Marks Measure</span>
												</div>
											</div>
											<div class="col-md-4 col-12">
												<div class="input-group mb-4">
													<input type="number" class="form-control" value="<?php echo !empty($get_resourceworkorder['bench_mark_unit'])?$get_resourceworkorder['bench_mark_unit']:''; ?>" name="bench_mark_unit" required/>
													<span class="placeholder">Bench Marks Unit</span>
												</div>
											</div>
											<div class="col-md-4 col-12">
												<div class="input-group mb-4">
													<input type="text" class="form-control" value="<?php echo !empty($get_resourceworkorder['estimated_hour'])?$get_resourceworkorder['estimated_hour']:''; ?>" name="estimated_hour" placeholder="HH:MM"  required/>
													<span class="placeholder">Estimated Hours</span>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4 col-12">
												<div class="input-group mb-4">
													<input type="number" class="form-control" value="<?php echo !empty($get_resourceworkorder['required_quantity'])?$get_resourceworkorder['required_quantity']:''; ?>" name="required_quantity" required/>
													<span class="placeholder">Required Quantity</span>
												</div>
											</div>
											<div class="col-md-4 col-12">
												<div class="input-group mb-4">
													<select class="custom-select" name="quantity_unit">
													    <option value ="">Select</option>
													
													<?php
															foreach($getAllMeasure as  $value)
														    {
																if($value['unit'] == $get_resourceworkorder['quantity_unit'] && !empty($get_resourceworkorder['quantity_unit']))
																{
													?>
													              <option value="<?php  echo $value['unit']; ?>" selected> <?php  echo $value['unit']; ?></option>
													<?php
													            }
													            else
													            {
													?>
													             <option value="<?php  echo $value['unit']; ?>"> <?php  echo $value['unit']; ?></option>
													<?php
													            }
													        }
																						
													?>
													
													    
													
													</select>
													<span class="placeholder">Unit Measure</span>
												</div>
											</div>
											<div class="col-md-4 col-12">
												<div class="input-group mb-4">
													<input type="text" class="form-control" value="<?php  echo !empty($get_resourceworkorder['status'] = 0)?'unreleased':'unreleased'; ?>"  readonly required>
													<span class="placeholder">Status</span>
												</div>
										</div>
										<div class="row">
											
											
											
											</div>
											<div class="col-md-4 col-12">
												<div class="input-group mb-4">
													<input type="text" class="form-control" value="<?php echo !empty($get_resourceworkorder['remark'])?$get_resourceworkorder['remark']:''; ?>" name="remark" placeholder=" remark" required/>
													<span class="placeholder">Remarks by Planner</span>
												</div>
											</div>
											<div class="col-md-4 col-12">
        										<div class="input-group mb-4">
        											<input type="text" class="form-control datepicker" id="start_date" value="<?php echo !empty($get_resourceworkorder['startDate'])?$get_resourceworkorder['startDate']:''; ?>" name="startDate"     required />
        											<span class="placeholder">Start Date</span>
        										</div>
        									</div>
        									<div class="col-md-4 col-12">
        										<div class="input-group mb-4">
        											<input type="text" class="form-control datepicker" id="end_date" value="<?php echo !empty($get_resourceworkorder['endDate'])?$get_resourceworkorder['endDate']:''; ?>" name="endDate"  required />
        											<span class="placeholder">End Date</span>
        										</div>
        									</div>
										</div>
										<div class="row">
											
											<div class="col-md-4 col-12">
												<div class="input-group mb-4">
													<input id="sq_number" type="text" value="<?php echo !empty($get_resourceworkorder['sqNumber'])?$get_resourceworkorder['sqNumber']:''; ?>" class="form-control"  name="sqNumber"   required/>
													<span class="placeholder">Sq Number</span>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-12">
												<button type="submit" class="btn btn-primary pr-5 pl-5 mr-3"><?php echo !empty($get_resourceworkorder['id'])?'Update':'Add'; ?></button>
												<button type="button" class="btn btn-outline-secondary pr-5 pl-5">Cancel</button>
											</div>
										</div>
										<div class="dologinres my-2"></div>
									</form>
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
										<div class="input-group">
											
										</div>
									</div>
								</div>
								<div class="card-body table-responsive">
									<table class="table table-hover text-nowrap" id="dataTable">
										<thead>
											<tr>
												<th>Project ID</th>
												<th>Work Order Id</th>
										        <th>Resource ID</th>
												<th>Estimated Hours</th>
												<th>Required Quantity</th>
												<th>Unit Measure </th>
												<th>Status</th>
												<th>Remark</th>
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
    												
    												<td><?php echo  !empty($row['project_id'])?$row['project_id']:''; ?></td>
    												<td><?php echo  !empty($row['work_order_id'])?$row['work_order_id']:''; ?></td>
												    <td><?php echo  !empty($row['resource_id'])?$row['resource_id']:''; ?></td>
													
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
    				
    												<td><?php echo  !empty($row['startDate'])?$row['startDate']:''; ?></td>
    												<td><?php echo  !empty($row['endDate'])?$row['endDate']:''; ?></td>
    												<td><a href="<?php echo base_url('planner/resource-work-order/').$row['id']; ?>"><i class="far fa-pen-to-square text-primary"></i></a></td>
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
	
	
	<script>
	$('#projectId').change(function(){
		
		var  projectId = $(this).val();
		if(projectId){
			
			$.ajax({
			type:'POST',
			url:'<?php echo base_url('planner/ResourceWorkOrder/getWorkorderByProjectId') ?>',
			data:{projectId:projectId},
			dataType:"json",
			success:function(data){
								
				$('#work_order_id').html(data);

			}
		});
		}	
	});
	</script>
	
	<script>
	$('#work_order_id').change(function(){
		
		var  work_order_id = $(this).val();
		if(work_order_id){
			 
			$.ajax({
			type:'POST',
			url:'<?php echo base_url('planner/ResourceWorkOrder/getWorkorderByWorkorderId') ?>',
			data:{work_order_id:work_order_id},
			dataType:"json",
			success:function(data){
			
				$('#start_date').val(data.start_date);
				$('#end_date').val(data.end_date);
			}
		});
		}	
	});
	</script>
	
	<script>
	$('#resourceId').change(function(){
		
		var  resourceId = $(this).val();
		if(resourceId){
			 
			$.ajax({
			type:'POST',
			url:'<?php echo base_url('planner/ResourceWorkOrder/getResourceByResourceId') ?>',
			data:{resourceId:resourceId},
			dataType:"json",
			success:function(data){
			
				$('#sq_number').val(data.sq_number);
				;
			}
		});
		}	
	});
	</script>