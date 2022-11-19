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
					<h1><a href="<?php echo base_url('planner/home'); ?>">Home</a> <i class="far fa-chevron-right"></i> Project</h1>
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
							<h3 class="card-title mt-0"><?php echo !empty($get_one_project['id'])?'Update Project':'Add Project'; ?></h3>
						</div>
						<div class="card-body">
							<form onsubmit="return dorequest('<?php echo base_url('planner/project/manage_projetct'); ?>','.dologinfrm','.dologinres');" method="POST" class="dologinfrm">
								<input type="hidden" name="id" id="id">
								<div class="row">
									<div class="col-md-4 col-12">
										<div class="input-group mb-4">
											<input type="text" class="form-control" id="project_id" name="project_id"  placeholder="ABC001"  required />
											<span class="placeholder">Project ID</span>
										</div>
									</div>
									<div class="col-md-4 col-12">
										<div class="input-group mb-4">
											<input type="text" id="customer_name" class="form-control" name="customer_name"  placeholder="" required>
											<span class="placeholder">Customer Name</span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-8 col-12">
										<div class="input-group mb-4">
											<textarea class="form-control" id="description" rows="1" name="description" placeholder="" style="resize:none;" required></textarea>
											<span class="placeholder">Project Description</span>
										</div>
									</div>
								</div>
								<div class="row">
								    <div class="col-md-4 col-12">
										<div class="input-group mb-4">
											<input type="text" class="form-control" id="status" name="status" placeholder="unreleased"   readonly required>
											<span class="placeholder">Status</span>
										</div>
									</div>
									<div class="col-md-4 col-12">   
										<div class="input-group mb-4">
											<input type="text" class="form-control datepicker" id="startDate" name="start_date"  placeholder=""  required />
											<span class="placeholder">Start Date</span>
										</div>
									</div>
								</div>
								<div class="row">
								    <div class="col-md-4 col-12">
										<div class="input-group mb-4">
											<input type="text" class="form-control datepicker" id="endDate" name="end_date"  placeholder=""  required />
											<span class="placeholder">End Date</span>
										</div>
									</div>
									<div class="col-md-4 col-12">
										<div class="input-group mb-4">
											<input type="text" id="planner_remark" class="form-control" name="planner_remark"  placeholder="" />
											<span class="placeholder">Remarks by Planner</span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-12">
										<div class="input-group mb-5">
											<label><span class="placeholder">Attach Project File</span></label>
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
									   <button type="submit" class="btn btn-primary pr-5 pl-5 mr-3"><?php echo !empty($get_one_project['id'])?'Update Project':'Add Project'; ?></button>
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
							<h3 class="card-title">All Project</h3>
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
										<th>Customer Name</th>
										<th>Project Description</th>
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
									
									if(!empty($all_project))
									{
									foreach ($all_project as $row)
									{
									?>
									<tr>
										<td><?php  echo !empty($row['project_id'])?$row['project_id']:""; ?></td>
										<td><?php  echo !empty($row['customer_name'])?$row['customer_name']:''; ?></td>
										<td><?php  echo !empty($row['description'])?$row['description']:""; ?></td>
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
										<td><?php  echo !empty($row['planner_remark'])?$row['planner_remark']:""; ?></td>
										<td><?php  echo !empty($row['start_date'])?date('d-M-Y', strtotime($row['start_date'])):''; ?></td>
										<td><?php  echo !empty($row['end_date'])?date('d-M-Y', strtotime($row['end_date'])):''; ?></td>
										<td>
										  <button class="badge badge-pill badge-light manageDoc" data-id="<?php echo $row['id']; ?>" role="button" data-toggle="modal" data-target="#projectModal"><i class="fad fa-2x fa-file-pdf text-primary"></i></button>                                            
										</td>
										<td>
										  <button class="badge badge-pill badge-light manageProperty scrollup" data-id="<?php echo $row['id']; ?>" role="button"><i class="far fa-pen-to-square text-primary"></i></button>
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
    
$('.manageDoc').click(function(){

    var  projectId = $(this).data('id')
	if(projectId){
		
	$.ajax({
	type:'POST',
	url:'<?php echo base_url('planner/project/getProjectDocs') ?>',
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
				'<td style="display:none; visibility:none;" class="target" colspan=""><input  type="file" id="doc_'+index+'" class="form-control " name="doc[]" onchange="getImage(this.value,'+index+');"></td>'+
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

$('.manageProperty').click(function(){
	
    var  projectId = $(this).data('id')
	if(projectId){
	$.ajax({
	type:'POST',
	url:'<?php echo base_url('planner/project/editProject') ?>',
	data:{projectId:projectId},
	dataType:"json",
	success:function(data){

	$('#id').val(data.id);
	$('#project_id').val(data.project_id);
	$('#customer_name').val(data.customer_name);
	$('#description').val(data.description);
	
	$('#planner_remark').val(data.planner_remark);
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

$('.manageProperty').click(function(){
	
   var  projectId = $(this).data('id')
	if(projectId){
		
	$.ajax({
	type:'POST',
	url:'<?php echo base_url('planner/project/getProjectDoc') ?>',
	data:{projectId:projectId},
	success:function(data){

	  $('#mr').html(data);
	  $('#mr').length();
	}
	});
	}
});
</script>





