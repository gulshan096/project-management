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
					<h1><a href="<?php echo base_url('production/home'); ?>">Home</a> <i class="far fa-chevron-right"></i> Project</h1>
				</div>
			</div>
		</div>
	</section>
	<p id="images"><p/>
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
							<table class="table table-hover text-nowrap" id="dataTable">
								<thead>
									<tr>
									
										<th>Project ID</th>
										<th>Description</th>
										<th>Status</th>
										<th>Remark </th>
										<th>Start Date</th>
										<th>End Date</th>
										<th>Customer Name</th>
										<th>Attachment</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									
									if(!empty($all_project))
									{
									foreach ($all_project as $row)
									{
									?>
									<tr>
									
										<td><?php  echo !empty($row['project_id'])?$row['project_id']:""; ?></td>
										<td><?php  echo !empty($row['description'])?$row['description']:''; ?></td>
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
										<td><?php  echo !empty($row['production_remark'])?$row['production_remark']:''; ?></td>
										<td><?php  echo !empty($row['start_date'])?date('d-M-Y', strtotime($row['start_date'])):''; ?></td>
										<td><?php  echo !empty($row['end_date'])?date('d-M-Y', strtotime($row['end_date'])):''; ?></td>
										<td><?php  echo !empty($row['customer_name'])?$row['customer_name']:''; ?></td>
										<td>
										   <button class="badge badge-pill badge-light viewProjectDoc" data-id="<?php echo $row['id']; ?>" role="button" data-toggle="modal" data-target="#projectDocModal"><i class="fad fa-2x fa-file-pdf text-primary"></i></button>
										</td>
										<td>
                                           <button class="badge badge-pill badge-light manageProperty" data-id="<?php echo $row['id']; ?>" role="button" data-toggle="modal" data-target="#projectModal"><i class="far fa-pen-to-square text-primary"></i></button>
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
				<h5 class="modal-title" id="exampleModalLongTitle">Update Project</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="card-body">
					<form onsubmit="return dorequest('<?php echo base_url('production/project/manage_projetct'); ?>','.dologinfrm','.dologinres');" method="POST" class="dologinfrm">
						<input type="hidden" name="id"   id="id">
						<div class="row">
							<div class="col-md-6 col-12">
								<div class="input-group mb-4">
									<input type="text" class="form-control" name="project_id"  id="project_id" readonly />
									<span class="placeholder">Project ID</span>
								</div>
							</div>
							<div class="col-md-6 col-12">
								<div class="input-group mb-4">
									<input type="text" class="form-control" name="customer_name" id="customer_name" readonly />
									<span class="placeholder">Customer Name</span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-12">
								<div class="input-group mb-4">
									<textarea class="form-control" rows="1" name="description" id="description"  style="resize:none;"required readonly></textarea>
									<span class="placeholder">Description</span>
								</div>
							</div>
						</div>
						<div class="row">
						    <div class="col-md-6 col-12">
								<div class="input-group mb-4">
									<select class="custom-select" name="status" required>
										<option value="" > Select </option>
										<?php
													
                                                $status = array('1'=>'released','0' => 'unreleased');
										
												foreach($status as  $key => $value)
															{
													if($key == $get_one_project['status'] && isset($get_one_project))
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
							<div class="col-md-6 col-12">
								<div class="input-group mb-4">
									<input type="text" class="form-control datepicker" id="startDate" name="start_date" required />
									<span class="placeholder">Start Date</span>
								</div>
							</div>
						</div>
						<div class="row">
						    <div class="col-md-6 col-12">
								<div class="input-group mb-4">
									<input type="text" class="form-control datepicker" id="endDate" name="end_date"   required />
									<span class="placeholder">End Date</span>
								</div>
							</div>
							<div class="col-md-6 col-12">
								<div class="input-group mb-4">
									<input type="text" class="form-control planner_remark" readonly />
									<span class="placeholder">Remarks by Planner</span>
								</div>
							</div>
						</div>
						<div class="row">
						    <div class="col-md-6 col-12">
								<div class="input-group mb-4">
									<input type="text" class="form-control" id="production_remark" name="production_remark"/>
									<span class="placeholder">Remarks by Production</span>
								</div>
							</div>	
						</div>
						<div class="row">
						    <div class="col-md-6 col-12">
								<div class="input-group mb-5">
									<label><span class="placeholder">Attach Project by Production </span></label>
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
						<div class="dologinres"></div>
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
<div class="modal fade" id="projectDocModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Project Attachments</h5>
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
										<tbody  class="projectDoc">
				 	                        <tr class=""></tr>
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
$('.manageProperty').click(function(){

    var  projectId = $(this).data('id')
	if(projectId){
	$.ajax({
	type:'POST',
	url:'<?php echo base_url('production/project/editProject') ?>',
	data:{projectId:projectId},
	dataType:"json",
	success:function(data){

	$('#id').val(data.id);
	$('#project_id').val(data.project_id);
	$('#customer_name').val(data.customer_name);
	$('#description').val(data.description);
	$('#status').val(data.status);
	$('.planner_remark').val(data.planner_remark);
	$('#startDate').val(data.start_date);
	$('#endDate').val(data.end_date);
	$('#production_remark').val(data.production_remark);
	
	}
	});
}

});
</script>

<script>
    
$('.manageProperty').click(function(){

    var  projectId = $(this).data('id')
	if(projectId){
		
		
	$.ajax({
	type:'POST',
	url:'<?php echo base_url('production/project/getProjectDoc') ?>',
	data:{projectId:projectId},
	success:function(data){

	  $('#mr').html(data);
	
	}
	});
  }

});
</script>
<script>
$('.viewProjectDoc').click(function(){
	var  projectId = $(this).data('id')
	
	if(projectId){
	
	$.ajax({
	type:'POST',
	url:'<?php echo base_url('production/project/getProjectDocs') ?>',
	data:{projectId:projectId},
	success:function(data){

	  $('.projectDoc').html(data);
	
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

    <script>
		  $( function() {
			$( ".datepicker" ).datepicker({
			
			  dateFormat: 'dd-mm-yy',
			  todayHighlight:'TRUE',
			  autoclose: true,
			  minDate: new Date()	
				
			});
		  });
	</script>