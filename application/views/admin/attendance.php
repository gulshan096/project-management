<?php    $this->load->view('include/header'); ?>
		
		<div class="content-wrapper">
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-12">
							<h1><a href="index.html">Home</a> <i class="far fa-chevron-right"></i> Attendance</h1>
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
									<h3 class="card-title mt-0">Add Attendance Type</h3>
								</div>
								<div class="card-body">
									<form action="" method="post">
										<div class="row">
											<div class="col-md-4 col-12">
												<div class="input-group mb-4">
													<input type="text" class="form-control" placeholder="Please enter the attendance name" />
													<span class="placeholder">Name</span>
												</div>
											</div>
											<div class="col-md-4 col-12">
												<div class="input-group mb-4">
													<select class="custom-select">
														<option value="" disabled selected>Please select attendance type</option>
														<option value="1">Absent</option>
														<option value="2">Accident</option>
														<option value="2">Present</option>
														<option value="2">Sick</option>
														<option value="2">Vacation</option>
														<option value="2">Suspended</option>
													</select>
													<span class="placeholder">Type</span>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-8 col-12 text-center">
												<button type="button" class="btn btn-primary pr-5 pl-5 mr-3">Add</button>
												<button type="button" class="btn btn-outline-secondary pr-5 pl-5">Cancel</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Attendance Type</h3>
									<div class="card-tools">
										<div class="input-group">
											<input type="text" name="table_search" class="form-control" placeholder="Search by name or type" />
											<div class="input-group-append">
												<button type="submit" class="btn btn-default">
													<i class="fas fa-search"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-3 col-12">
											<div class="callout callout-danger">
												<h5>Absent <span class="text-danger">Absent</span></h5>
												<a href="edit-attendance.html"><i class="far fa-pen-to-square text-primary"></i></a>
											</div>
										</div>
										<div class="col-md-3 col-12">
											<div class="callout callout-danger">
												<h5>Accident <span class="text-danger">Absent</span></h5>
												<a href="edit-attendance.html"><i class="far fa-pen-to-square text-primary"></i></a>
											</div>
										</div>
										<div class="col-md-3 col-12">
											<div class="callout callout-success">
												<h5>Present <span class="text-success">Present</span></h5>
												<a href="edit-attendance.html"><i class="far fa-pen-to-square text-primary"></i></a>
											</div>
										</div>
										<div class="col-md-3 col-12">
											<div class="callout callout-danger">
												<h5>Sick <span class="text-danger">Absent</span></h5>
												<a href="edit-attendance.html"><i class="far fa-pen-to-square text-primary"></i></a>
											</div>
										</div>
										<div class="col-md-3 col-12">
											<div class="callout callout-success">
												<h5>Present <span class="text-success">Present</span></h5>
												<a href="edit-attendance.html"><i class="far fa-pen-to-square text-primary"></i></a>
											</div>
										</div>
										<div class="col-md-3 col-12">
											<div class="callout callout-danger">
												<h5>Vacation <span class="text-danger">Absent</span></h5>
												<a href="edit-attendance.html"><i class="far fa-pen-to-square text-primary"></i></a>
											</div>
										</div>
										<div class="col-md-3 col-12">
											<div class="callout callout-danger">
												<h5>Suspended <span class="text-danger">Absent</span></h5>
												<a href="edit-attendance.html"><i class="far fa-pen-to-square text-primary"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		
		<?php    $this->load->view('include/footer'); ?>
		</body>
    </html>