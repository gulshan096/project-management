
<?php    $this->load->view('include/header'); ?>

	<div class="content-wrapper">
		<section class="content-header">
			<div class="container-fluid">
				<div class="row mb-2"> 
					<div class="col-sm-12">
						<h1>Home</h1>
					</div>
				</div>
			</div>
		</section>
		
		<section class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3 col-12 mr-5">
						<div class="info-box">
							<span class="info-box-icon"><i class="fad fa-user-group"></i></span>
							<div class="info-box-content">
								<a href="<?php  echo base_url('admin/employee'); ?>">Employees</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-12 mr-5">
						<div class="info-box">
							<span class="info-box-icon"><i class="fad fa-clipboard-list-check"></i></span>
							<div class="info-box-content">
								<a href="<?php echo base_url('admin/attendance'); ?>">Attendance</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-12">
						<div class="info-box">
							<span class="info-box-icon"><i class="fad fa-mug-hot"></i></span>
							<div class="info-box-content">
								<a href="<?php echo base_url('admin/break'); ?>">Break</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-12 mr-5">
						<div class="info-box">
							<span class="info-box-icon"><i class="fad fa-gears"></i></span>
							<div class="info-box-content">
								<a href="<?php echo base_url('admin/indirect-code'); ?>">Indirect Code</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-12 mr-5">
						<div class="info-box">
							<span class="info-box-icon"><i class="fad fa-user-gear"></i></span>
							<div class="info-box-content">
								<a href="<?php echo base_url('admin/resources'); ?>">Resources</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-12">
						<div class="info-box">
							<span class="info-box-icon"><i class="fad fa-user"></i></span>
							<div class="info-box-content">
								<a href="<?php echo base_url('admin/user'); ?>">Users</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	
	
	<?php    $this->load->view('include/footer'); ?>