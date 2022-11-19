<?php    $this->load->view('include/header'); ?>
<style>
.ms{
	font-size: 20px;
	border:1px solid black;
	padding: 10px;
}
.dt{
	border: none;
    outline: none;
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
							<h3 class="card-title mt-0"><?php echo !empty($get_workorder)?'Update Work Order':'Add Work Order'; ?></h3>
						</div>
						
						<div class="card-body">
							<form onsubmit="return dorequest('<?php echo base_url('planner/workorder/manage_workorder'); ?>','.dologinfrm','.dologinres');" method="POST" class="dologinfrm">
								<input type="hidden" name="id" id="id">
								<div class="row">
									<div class="col-md-4 col-12">
										<div class="input-group mb-4">
											<select class="custom-select" name="project_id" required id="project_id">
												<option value ="">Select</option>
												<?php
												if(!empty($all_project_id))
												{
													foreach($all_project_id as $item)
													{
														if($item['project_id'] == $get_workorder['project_id']  && isset($get_workorder))
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
											<input type="text" name="work_order_id" id="work_order_id" class="form-control"  placeholder="ABB001-BAA001" <?php echo !empty($get_workorder['work_order_id'])?'readonly':''; ?> / >
											<span class="placeholder">Work Order Id</span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-8 col-12">
										<div class="input-group mb-4">
											<textarea class="form-control" rows="1" id="description" name="description"  style="resize:none;" required></textarea>
											<span class="placeholder">Work Order Description</span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-12">
										<div class="input-group mb-4">
											<input type="text" id="status" class="form-control" placeholder="unreleased" name="status" readonly required>
											<span class="placeholder">Status</span>
										</div>
									</div>
									<div class="col-md-4 col-12">
										<div class="input-group mb-4">
											<input type="text" class="form-control datepicker" id="startDate" name="start_date"    required />
											<span class="placeholder">Start Date</span>
										</div>
									</div>
								</div>
								<div class="row">
								    <div class="col-md-4 col-12">
										<div class="input-group mb-4">
											<input type="text" class="form-control datepicker" id="endDate" name="end_date"    required />
											<span class="placeholder">End Date</span>
										</div>
									</div>
									<div class="col-md-4 col-12">
										<div class="input-group mb-4">
											<input type="text" class="form-control" name="planner_remark" id="remark" required />
											<span class="placeholder">Remarks by Planner</span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-12">
										<div class="input-group mb-5">
											<label><span class="placeholder">Attach Workorder File</span></label>
                                            <table class="table ">
												<thead >
													<tr class="text-center">
														
														<th class="" colspan="">Attachment</th>
														<th class="" colspan="">Preview</th>
														<th><a href="javascript:void(0)" class=""  id="add"><i class="fa text-success fa-plus-circle fa-2x"></i></a></th>
													</tr>
												</thead>
												<tbody id="mr">
												
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<button type="submit" class="btn btn-primary pr-5 pl-5 mr-3"><?php echo !empty($get_workorder['id'])?'Update ':'Add '; ?></button>
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
										<th>Project ID</th>
										<th>Work Order ID</th>
										<th>Workoeder Description</th>
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
										<td><?php  echo !empty($row['project_id'])?$row['project_id']:'';  ?></td>
										<td><?php  echo !empty($row['work_order_id'])?$row['work_order_id']:'';  ?></td>
										<td><?php  echo !empty($row['description'])?$row['description']:'';  ?></td>
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
										<td><?php  echo !empty($row['remark'])?$row['remark']:'';  ?></td>
										<td><?php  echo date('d-M-Y', strtotime($row['start_date'])); ?></td>
										<td><?php  echo date('d-M-Y', strtotime($row['end_date'])); ?></td>
										<td>
										  <button class="badge badge-pill badge-light workorderDoc" data-id="<?php echo $row['id']; ?>" role="button" data-toggle="modal" data-target="#projectModal"><i class="fad fa-2x fa-file-pdf text-primary"></i></button>                                            
										</td>
										<td>
										  <button class="badge badge-pill badge-light manageWorkOrder scrollup" data-id="<?php echo $row['id']; ?>" role="button"><i class="far fa-pen-to-square text-primary"></i></button>
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

<div class="modal fade" id="projectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
$(document).ready(function () {

        $("#project_id").change(function () {
			
            var project_id =   $("#project_id").val();
			$('#work_order_id').val(project_id+'-'); 
			
        });
    });
</script>

<script>
 $("#fileUploader").change(function(){
				
	$("#upImg").css("display", "none");
	
 });

</script>

<script>
    
$('.workorderDoc').click(function(){

    var  workorderId = $(this).data('id')
	if(workorderId){
		
	$.ajax({
	type:'POST',
	url:'<?php echo base_url('planner/Workorder/getWorkorderDocs') ?>',
	data:{workorderId:workorderId},
	success:function(data){

	  $('.workorderDoc').html(data);
	
	}
	});
}

});
</script>

<script>
$('.manageWorkOrder').click(function(){
	
	var  workOrderId = $(this).data('id')
	if(workOrderId)
	{
	
			$.ajax({
			type:'POST',
			url:'<?php echo base_url('planner/workorder/editWorkOrder') ?>',
			data:{workOrderId:workOrderId},
			dataType:"json",
			success:function(data)
			{			
				$('#id').val(data.id);
				$('#project_id').val(data.project_id);
				$('#work_order_id').val(data.work_order_id);
				$('#description').val(data.description);
				$('#remark').val(data.planner_remark);
				// $('#status').val(data.status);
				$('#startDate').val(data.start_date);
				$('#endDate').val(data.end_date);
				
				var status =  data.status;
				var ur  = "unreleased";
				var r   = "released";
				var ca   = "cancel";
				var cl  = "closed";
				if(status == 0)
				{
					$('#status').val(ur);
				}
				elseif(status == 1){
					$('#status').val(r);
				}
				elseif(status == 2){
					$('#status').val(ca);
				}
				elseif(status == 3){
					$('#status').val(cl);
				}
			}
		});
	}	
});
</script>
<script> 
$('.manageWorkOrder').click(function(){

    var  workorderId = $(this).data('id')
	if(workorderId)
	{
		$.ajax({
		type:'POST',
		url:'<?php echo base_url('planner/workorder/getWorkorderDoc') ?>',
		data:{workorderId:workorderId},
		success:function(result)
		{
		  $('#mr').html(result);
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