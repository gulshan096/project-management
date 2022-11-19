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
								<span class="info-box-icon"><i class="fad fa-folder-gear"></i></span>
								<div class="info-box-content">
									<a href="<?php  echo base_url('planner/project'); ?>">Project</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-12 mr-5">
							<div class="info-box">
								<span class="info-box-icon"><i class="fad fa-album-collection"></i></span>
								<div class="info-box-content">
									<a href="<?php  echo base_url('planner/work-order'); ?>">Work Order</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-12">
							<div class="info-box">
								<span class="info-box-icon"><i class="fad fa-screwdriver-wrench"></i></span>
								<div class="info-box-content">
									<a href="<?php echo base_url('planner/resource-work-order'); ?>">Resource Work Order</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 col-12 mr-5">
							<div class="info-box">
								<span class="info-box-icon"><i class="fad fa-folder-minus"></i></span>
								<div class="info-box-content">
									<a href="<?php echo base_url('planner/closed-project'); ?>">Closed Project</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-12 mr-5">
							<div class="info-box">
								<span class="info-box-icon"><i class="fad fa-gear"></i></span>
								<div class="info-box-content">
									<a href="<?php echo base_url('planner/unreleased-project'); ?>">Unreleased Project</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-12">
							<div class="info-box">
								<span class="info-box-icon"><i class="fad fa-folder-arrow-up"></i></span>
								<div class="info-box-content">
									<a href="<?php echo base_url('planner/released-project'); ?>">Released Projects</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		
		<?php    $this->load->view('include/footer'); ?>