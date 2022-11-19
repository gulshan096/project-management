    <?php    $this->load->view('include/header'); ?>
		
		<div class="content-wrapper">
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-12">
							<h1><a href="<?php echo base_url('superadmin/home'); ?>">Home</a> <i class="far fa-chevron-right"></i> Close</h1>
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
									<a href="<?php echo base_url('superadmin/close/cl-project') ?>">Project</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-12 mr-5">
							<div class="info-box">
								<span class="info-box-icon"><i class="fad fa-album-collection"></i></span>
								<div class="info-box-content">
									<a href="<?php echo base_url('superadmin/close/cl-work-order') ?>">Work Order</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-12">
							<div class="info-box">
								<span class="info-box-icon"><i class="fad fa-screwdriver-wrench"></i></span>
								<div class="info-box-content">
									<a href="<?php echo base_url('superadmin/close/cl-resource') ?>">Resource</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	<?php    $this->load->view('include/footer'); ?>	
		