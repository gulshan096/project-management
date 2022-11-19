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
								<span class="info-box-icon"><i class="fad fa-clipboard-list"></i></span>
								<div class="info-box-content">
									<a href="<?php echo base_url('superadmin/cancel') ?>">Cancel</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-12 mr-5">
							<div class="info-box">
								<span class="info-box-icon"><i class="fad fa-folder-minus"></i></span>
								<div class="info-box-content">
									<a href="<?php echo base_url('superadmin/close') ?>">Close</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-12">
							<div class="info-box">
								<span class="info-box-icon"><i class="fad fa-id-card"></i></span>
								<div class="info-box-content">
									<a href="#">Labour Card Maintenance</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		
		<?php    $this->load->view('include/footer'); ?>