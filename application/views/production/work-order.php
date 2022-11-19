<?php    $this->load->view('include/header'); ?>
<style>
.ms{
	font-size: 20px;
	border:1px solid black;
	padding: 10px;
}
</style>
<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-12">
					<h1><a href="#">Home</a> <i class="far fa-chevron-right"></i> Work Order</h1>
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
							<h3 class="card-title">All Work Order</h3>
							<div class="card-tools">
								<div class="input-group">
									
								</div>
							</div>
						</div>
						<div class="card-body table-responsive">
							<table class="table table-hover text-nowrap" id="dataTable">
								<thead>
									<tr>
										<!--<th>Project ID</th>-->
										<th>Project ID</th>
										<th>Work Order ID</th>
										<th>Description</th>
										<th>Status</th>
										<th>Remark</th>
										<th>Start Date</th>
										<th>End Date</th>
										<th>Attachment</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									
									if(!empty($all_workorder))
									{
									
									foreach($all_workorder as $row)
									{
									
									?>
									
									<tr>
										<!--<td></td>-->
										<td><?php echo !empty($row['project_id'])?$row['project_id']:'';  ?></td>
										<td><?php echo !empty($row['work_order_id'])?$row['work_order_id']:'';  ?></td>
										
										<td><?php echo !empty($row['description'])?$row['description']:'';  ?></td>
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
										<td><?php echo !empty($row['remark'])?$row['remark']:'';  ?></td>
										<td><?php echo !empty($row['start_date'])?$row['start_date']:'';  ?></td>
										<td><?php echo !empty($row['end_date'])?$row['end_date']:'';  ?></td>
										<td>
										   <button class="badge badge-pill badge-light viewWorkorderDoc" data-id="<?php echo $row['id']; ?>" role="button" data-toggle="modal" data-target="#workOrderDocModal"><i class="fad fa-2x fa-file-pdf text-primary"></i></button>
										</td>
										<td>
	                                       <button class="badge badge-pill badge-light manageWorkOrder" data-id="<?php echo $row['id']; ?>" role="button" data-toggle="modal" data-target="#workOrderModal"><i class="far fa-pen-to-square text-primary"></i></button>
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

<div class="modal fade" id="workOrderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Update Work Order</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="card-body">
					<form onsubmit="return dorequest('<?php echo base_url('production/workorder/update_manage_workorder'); ?>','.dologinfrm','.dologinres');" method="POST" class="dologinfrm">
						
						<input type="hidden" name="id"  id="id">
						<div class="row">
							<div class="col-md-4 col-12">
								<div class="input-group mb-4">
									<input type="text" class="form-control" name="project_id"  id="project_id"  required readonly />
									
									<span class="placeholder">Project Id</span>
								</div>
							</div>
							<div class="col-md-4 col-12">
								<div class="input-group mb-4">
									<input type="text" class="form-control" name="work_order_id" id="work_order_id"  required readonly  />
									<span class="placeholder">Work Order Id</span>
								</div>
							</div>
							<div class="col-md-4 col-12">
								<div class="input-group mb-4">
									<input type="text" class="form-control start_date datepicker" name="start_date" id="startDate"  readonly  required />
									<span class="placeholder">Start Date</span>
								</div>
							</div>
							<div class="col-md-4 col-12">
								<div class="input-group mb-4">
									<input type="text" class="form-control end_date datepicker" name="end_date" id="endDate" required />
									<span class="placeholder">End Date</span>
								</div>
							</div>
							
							<div class="col-md-4 col-12">
								<div class="input-group mb-4">
									<textarea class="form-control" rows="1" name="description" id="description"  style="resize:none;" readonly required></textarea>
									<span class="placeholder">Description</span>
								</div>
							</div>
							<div class="col-md-4 col-12">
								<div class="input-group mb-4" >
									<select class="custom-select" required name="status"/>
										<option value="" > Select </option>
										<?php
													
												$status = array('1'=>'released','0' => 'unreleased');
										
												foreach($status as  $key => $value)
												{
													if($key = $get_workorder['status'] && !empty($get_workorder['status']))
													{
													?>
													<option value="<?php  echo $key; ?>" selected> <?php  echo $value; ?></option>
													<?php
													}
									
													?>
													<option value="<?php  echo $key; ?>"> <?php  echo $value; ?></option>
													<?php
												
												}
																			
										?>
										
									</select>
									<span class="placeholder">Status</span>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-4 col-12">
								<div class="input-group mb-4">
									<input type="text" readonly class="form-control" id="remark" name="planner_remark" required />
									<span class="placeholder">Remarks by planner</span>
								</div>
							</div>
							<div class="col-md-4 col-12">
								<div class="input-group mb-4">
									<input type="text" readonly class="form-control"  name="production_remark" required />
									<span class="placeholder">Remarks by peoduction</span>
								</div>
							</div>
						</div>	
						<div class="row">
						    <div class="col-md-6 col-12">
								<div class="input-group mb-5">
									<label><span class="placeholder">Attach Workorder by Production </span></label>
                                    <table class="table ">
										<thead >
											<tr class="text-center">
												
												<th class="" colspan="">Attachment</th>
												<th class="" colspan="">Preview</th>
												<th><a href="javascript:void(0)" class=""  id="add"><i class="fa text-success fa-plus-circle fa-2x"></i></a></th>
											</tr>
										</thead>
										<tbody id="mr" class="wo_doc">
													
										</tbody>
									</table>
								</div>
							</div>
						</div>
						
						<div class="dologinres my-3"></div>

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

<div class="modal fade" id="workOrderDocModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Work order Attachments</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="card-body">
					
					
						<div class="row">
						    <div class="col-md-8 col-12">
								<div class="input-group mb-5">
								
                                    <table class="table ">
										<thead >
											<tr class="">
												<th class="text-center " colspan="">Attachments by Planner</th>
											</tr>
										</thead>
										<tbody  class="workorderDoc">
										    	
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="dologinres"></div>
						<div class="row modal-footer">
							<div class="col-12">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php    $this->load->view('include/footer'); ?>



<script>
$('.manageWorkOrder').click(function(){
	
	var  workOrderId = $(this).data('id')
	if(workOrderId)
	{
			$.ajax({
			type:'POST',
			url:'<?php echo base_url('production/workorder/editWorkOrder') ?>',
			data:{workOrderId:workOrderId},
			dataType:"json",
			success:function(data)
			{			
				$('#id').val(data.id);
				$('#project_id').val(data.project_id);
				$('#work_order_id').val(data.work_order_id);
				$('#description').val(data.description);
				$('#remark').val(data.remark);
				$('#status').val(data.status);
				$('.start_date').val(data.start_date);
				$('.end_date').val(data.end_date);
			}
		});
	}
	
	
	
});
</script>
<script>
    
$('.manageWorkOrder').click(function(){

    var  workorderId = $(this).data('id')
	if(workorderId){
		
		
	$.ajax({
	type:'POST',
	url:'<?php echo base_url('production/workorder/getWorkorderDoc') ?>',
	data:{workorderId:workorderId},
	success:function(result){
		
	  $('.wo_doc').html(result);
	}
	});
}

});
</script>
<script>
$('.viewWorkorderDoc').click(function(){
	
    var  workorderId = $(this).data('id')
	if(workorderId){
	$.ajax({
	type:'POST',
	url:'<?php echo base_url('production/workorder/getWorkorderDocs') ?>',
	data:{workorderId:workorderId},
	success:function(result){
		
	  $('.workorderDoc').html(result);
	}
	});	
	}
});
</script>

<script>
var index= 3;

		$(document).ready(function(){
			$("#add").click(function(){
				index++;
			var tr = '<tr class="text-center">'+
				
                '<td class="" colspan=""><label for="doc_'+index+'"><i class="fa fa-plus ms" "></i></label></td>'+			
				'<td style="display:none; visibility:hidden;" class="target" colspan=""><input  type="file" id="doc_'+index+'" class="form-control " name="doc[]" onchange="getImage(this.value,'+index+');"></td>'+
				'<td class="" colspan=""><textarea class="dt" id="display_image_'+index+'" readonly></textarea></td>'+	
				'<td><a href="javascript:void(0)" class="" id="rm"><i class="fa text-danger fa-times-circle fa-2x"></i></a></td>'+
					
				'</tr>'
				$("#mr").append(tr);
				});
				$('#mr').on('click','#rm', function(){
					
				$(this).parent().parent().remove();
				});
		});
</script>
<script>
    function getImage(imagename,forinde)
	{
		var newimg=imagename.replace(/^.*\\/,"");
		$("#display_image_"+forinde).html(newimg);
	}		
</script>