<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Production - Lefebvre Engineering FZC</title>
	<link rel="shortcut icon" type="image/png" href="../dist/img/favicon.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
	<link rel="stylesheet" href="../plugins/FontAwesom6Pro/css/all.min.css" />
	<link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
	<link rel="stylesheet" href="../plugins/sweetalert/sweetalert.css" />
	<link rel="stylesheet" href="../dist/css/adminlte.css" />
</head>

<body class="hold-transition sidebar-mini">
	<div class="wrapper">
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="far fa-bars text-secondary"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="index.html" class="nav-link">Home</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="#" class="nav-link">Contact</a>
				</li>
			</ul>
			
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" data-widget="navbar-search" href="#" role="button">
						<i class="far fa-search"></i>
					</a>
					<div class="navbar-search-block">
						<form class="form-inline">
							<div class="input-group input-group-sm">
								<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" />
								<div class="input-group-append">
									<button class="btn btn-navbar" type="submit">
										<i class="fas fa-search"></i>
									</button>
									<button class="btn btn-navbar" type="button" data-widget="navbar-search">
										<i class="fas fa-times"></i>
									</button>
								</div>
							</div>
						</form>
					</div>
				</li>
				
				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="far fa-bell"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<span class="dropdown-item dropdown-header">15 Notifications</span>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-envelope mr-2"></i> 4 new messages
							<span class="float-right text-muted text-sm">3 mins</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-users mr-2"></i> 8 friend requests
							<span class="float-right text-muted text-sm">12 hours</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-file mr-2"></i> 3 new reports
							<span class="float-right text-muted text-sm">2 days</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
					</div>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" data-widget="fullscreen" role="button">
						<i class="far fa-expand"></i>
					</a>
				</li>
				
				<li class="nav-item dropdown user-menu">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
						<span class="d-none d-md-inline">Production</span>
						<img src="../dist/img/dummy-avatar4.jpg" class="user-image img-circle" alt="" />
					</a>
					<ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<li class="user-header bg-primary">
							<img src="../dist/img/dummy-avatar4.jpg" class="img-circle" alt="" />
							<p>Lorem Ipsum <small>Production</small></p>
						</li>
						<li class="user-body">
							<div class="row">
								<div class="col-12 text-center">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris elementum bibendum neque pellentesque dictum.</p>
								</div>
							</div>
						</li>
						<li class="user-footer">
							<a href="#" class="btn btn-default btn-flat">Profile</a>
							<a href="login.html" class="btn btn-default btn-flat float-right">Sign out</a>
						</li>
					</ul>
				</li>
			</ul>
		</nav>
		
		<aside class="main-sidebar sidebar-light-primary">
			<a href="index.html" class="brand-link">
				<img src="../dist/img/logo.png" alt="" />
			</a>
			
			<div class="sidebar">
				<div class="user-panel mt-3 pb-3 mb-4 text-center">
					<div class="image">
						<img src="../dist/img/dummy-avatar4.jpg" class="img-circle" alt="" />
					</div>
					<div class="info">
						<p class="d-block text-bold mb-1">Lorem Ipsum</p>
						<p class="d-block mb-0">Production</p>
					</div>
				</div>
				
				<div class="form-inline">
					<div class="input-group" data-widget="sidebar-search">
						<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" />
						<div class="input-group-append">
							<button class="btn btn-sidebar">
								<i class="far fa-search fa-fw"></i>
							</button>
						</div>
					</div>
				</div>
				
				<nav class="mt-4">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<li class="nav-item">
							<a href="index.html" class="nav-link">
								<i class="nav-icon far fa-home"></i>
								<p>Home</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="project.html" class="nav-link">
								<i class="nav-icon far fa-folder-gear"></i>
								<p>Project</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="work-order.html" class="nav-link">
								<i class="nav-icon far fa-album-collection"></i>
								<p>Work Order</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="resource-work-order.html" class="nav-link">
								<i class="nav-icon far fa-screwdriver-wrench"></i>
								<p>Resource Work Order</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="closed-project.html" class="nav-link">
								<i class="nav-icon far fa-folder-minus"></i>
								<p>Closed Project</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="unreleased-project.html" class="nav-link">
								<i class="nav-icon far fa-gear"></i>
								<p>Unreleased Project</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="released-project.html" class="nav-link">
								<i class="nav-icon far fa-folder-arrow-up"></i>
								<p>Released Projects</p>
							</a>
						</li>
						<li class="nav-item menu-open">
							<a href="schedule.html" class="nav-link">
								<i class="nav-icon far fa-calendar-clock"></i>
								<p>Schedule</p>
							</a>
						</li>
						<li class="nav-item mt-2">
							<a href="login.html" class="nav-link active">
								<i class="nav-icon far fa-arrow-right-from-bracket text-white"></i>
								<p>Logout</p>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</aside>
		
		<div class="content-wrapper">
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-12">
							<h1><a href="index.html">Home</a> <i class="far fa-chevron-right"></i> Schedule</h1>
						</div>
					</div>
				</div>
			</section>
			
			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3 col-6 pr-md-3">
							<div class="small-box bg-success">
								<div class="inner">
									<h3>Total Active Employees</h3>
									<p>200</p>
								</div>
								<a href="#" class="small-box-footer">More Info</a>
							</div>
						</div>
						<div class="col-lg-3 col-6 pr-md-3">
							<div class="small-box bg-white">
								<div class="inner">
									<h3>Designation</h3>
									<div class="input-group mt-2">
										<select class="custom-select">
											<option value="0" disabled selected>Select Designation</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-6 pr-md-3">
							<div class="small-box bg-primary">
								<div class="inner">
									<h3>Welder</h3>
									<p>30</p>
								</div>
								<a class="small-box-footer">&nbsp;</a>
							</div>
						</div>
						<div class="col-lg-3 col-6">
							&nbsp;
						</div>
					</div>
					
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title mt-0">Attendance</h3>
								</div>
								<div class="card-body">
									<form action="" method="post" class="mb-3">
										<div class="row">
											<div class="col-md-11 col-12">
												<div class="row">
													<div class="col-md-6 col-12">
														<p><b>Choose Dates</b></p>
													</div>
													<div class="col-md-3 col-12">
														<p><b>Status</b></p>
													</div>
													<div class="col-md-3 col-12">
														<p><b>Trade</b></p>
													</div>
												</div>
												<div class="row">
													<div class="col-md-3 col-12">
														<div class="input-group mb-4">
															<input type="date" value="2022-01-01" class="form-control" />
														</div>
													</div>
													<div class="col-md-3 col-12">
														<div class="input-group mb-4">
															<input type="date" value="2022-01-01" class="form-control" />
														</div>
													</div>
													<div class="col-md-3 col-12">
														<div class="input-group mb-4">
															<select class="custom-select">
																<option value="1" selected>Present</option>
																<option value="2">Absent</option>
															</select>
														</div>
													</div>
													<div class="col-md-3 col-12">
														<div class="input-group mb-4">
															<select class="custom-select">
																<option value="1" selected>Welder</option>
																<option value="2">Welder 1</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-1 col-12">
												<div class="row">
													<div class="col-12">
														<p>&nbsp;</p>
													</div>
												</div>
												<div class="row">
													<div class="col-12 text-right">
														<button type="button" class="btn btn-primary pr-4 pl-4">Search</button>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="card-body table-responsive">
									<table class="table table-hover text-nowrap">
										<thead>
											<tr>
												<th>Date</th>
												<th>Employee ID</th>
												<th>Image</th>
												<th>Employee Name</th>
												<th>Designation</th>
												<th>Mobile</th>
												<th>Status</th>
												<th>Project ID</th>
												<th>Resource ID</th>
												<th>Work Order ID</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>01-01-2022</td>
												<td>ABC121</td>
												<td><img src="../dist/img/dummy-avatar2.jpg" class="w-25 rounded-circle" alt="" /></td>
												<td>Lorem Ipsum</td>
												<td>Dolor</td>
												<td>+971 95 45 50 29</td>
												<td>
													<button class="btn btn-success btn-sm sweet-status iac1">Present</button>
													<button class="btn btn-danger btn-sm sweet-status iac1 d-none">Absent</button>
												</td>
												<td>ABC121</td>
												<td>111</td>
												<td>XYZ121</td>
											</tr>
											<tr>
												<td>01-01-2022</td>
												<td>ABC122</td>
												<td><img src="../dist/img/dummy-avatar2.jpg" class="w-25 rounded-circle" alt="" /></td>
												<td>Lorem Ipsum</td>
												<td>Dolor</td>
												<td>+971 95 45 50 29</td>
												<td>
													<button class="btn btn-success btn-sm sweet-status iac2">Present</button>
													<button class="btn btn-danger btn-sm sweet-status iac2 d-none">Absent</button>
												</td>
												<td>ABC122</td>
												<td>222</td>
												<td>XYZ122</td>
											</tr>
											<tr>
												<td>01-01-2022</td>
												<td>ABC123</td>
												<td><img src="../dist/img/dummy-avatar2.jpg" class="w-25 rounded-circle" alt="" /></td>
												<td>Lorem Ipsum</td>
												<td>Dolor</td>
												<td>+971 95 45 50 29</td>
												<td>
													<button class="btn btn-success btn-sm sweet-status iac3">Present</button>
													<button class="btn btn-danger btn-sm sweet-status iac3 d-none">Absent</button>
												</td>
												<td>ABC123</td>
												<td>333</td>
												<td>XYZ123</td>
											</tr>
											<tr>
												<td>01-01-2022</td>
												<td>ABC124</td>
												<td><img src="../dist/img/dummy-avatar2.jpg" class="w-25 rounded-circle" alt="" /></td>
												<td>Lorem Ipsum</td>
												<td>Dolor</td>
												<td>+971 95 45 50 29</td>
												<td>
													<button class="btn btn-success btn-sm sweet-status iac4 d-none">Present</button>
													<button class="btn btn-danger btn-sm sweet-status iac4">Absent</button>
												</td>
												<td>ABC124</td>
												<td>444</td>
												<td>XYZ124</td>
											</tr>
											<tr>
												<td>01-01-2022</td>
												<td>ABC125</td>
												<td><img src="../dist/img/dummy-avatar2.jpg" class="w-25 rounded-circle" alt="" /></td>
												<td>Lorem Ipsum</td>
												<td>Dolor</td>
												<td>+971 95 45 50 29</td>
												<td>
													<button class="btn btn-success btn-sm sweet-status iac5">Present</button>
													<button class="btn btn-danger btn-sm sweet-status iac5 d-none">Absent</button>
												</td>
												<td>ABC125</td>
												<td>555</td>
												<td>XYZ125</td>
											</tr>
											<tr>
												<td>01-01-2022</td>
												<td>ABC126</td>
												<td><img src="../dist/img/dummy-avatar2.jpg" class="w-25 rounded-circle" alt="" /></td>
												<td>Lorem Ipsum</td>
												<td>Dolor</td>
												<td>+971 95 45 50 29</td>
												<td>
													<button class="btn btn-success btn-sm sweet-status iac6">Present</button>
													<button class="btn btn-danger btn-sm sweet-status iac6 d-none">Absent</button>
												</td>
												<td>ABC126</td>
												<td>666</td>
												<td>XYZ126</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="card-footer clearfix text-center">
									<button type="button" class="btn btn-primary pr-5 pl-5">See All</button>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title mt-0">Cell Report</h3>
								</div>
								<div class="card-body">
									<form action="" method="post" class="mb-3">
										<div class="row">
											<div class="col-md-11 col-12">
												<div class="row">
													<div class="col-md-4 col-12">
														<p><b>Foreman</b></p>
													</div>
													<div class="col-md-8 col-12">
														<p><b>Choose Dates</b></p>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4 col-12">
														<div class="input-group mb-4">
															<select class="custom-select">
																<option value="1" disabled selected>Select Foreman</option>
																<option value="2">Foreman 1</option>
																<option value="2">Foreman 2</option>
																<option value="2">Foreman 3</option>
															</select>
														</div>
													</div>
													<div class="col-md-4 col-12">
														<div class="input-group mb-4">
															<input type="date" value="2022-01-01" class="form-control" />
														</div>
													</div>
													<div class="col-md-4 col-12">
														<div class="input-group mb-4">
															<input type="date" value="2022-01-01" class="form-control" />
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-1 col-12">
												<div class="row">
													<div class="col-12">
														<p>&nbsp;</p>
													</div>
												</div>
												<div class="row">
													<div class="col-12 text-right">
														<button type="button" class="btn btn-primary pr-4 pl-4">Search</button>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="card-body table-responsive">
									<table class="table table-hover text-nowrap">
										<thead>
											<tr>
												<th>Date</th>
												<th>Employee ID</th>
												<th>Image</th>
												<th>Employee Name</th>
												<th>Designation</th>
												<th>Mobile</th>
												<th>Status</th>
												<th>Project ID</th>
												<th>Resource ID</th>
												<th>Work Order ID</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>01-01-2022</td>
												<td>ABC121</td>
												<td><img src="../dist/img/dummy-avatar2.jpg" class="w-25 rounded-circle" alt="" /></td>
												<td>Lorem Ipsum</td>
												<td>Dolor</td>
												<td>+971 95 45 50 29</td>
												<td>
													<button class="btn btn-success btn-sm sweet-status iac1">Present</button>
													<button class="btn btn-danger btn-sm sweet-status iac1 d-none">Absent</button>
												</td>
												<td>ABC121</td>
												<td>111</td>
												<td>XYZ121</td>
											</tr>
											<tr>
												<td>01-01-2022</td>
												<td>ABC122</td>
												<td><img src="../dist/img/dummy-avatar2.jpg" class="w-25 rounded-circle" alt="" /></td>
												<td>Lorem Ipsum</td>
												<td>Dolor</td>
												<td>+971 95 45 50 29</td>
												<td>
													<button class="btn btn-success btn-sm sweet-status iac2">Present</button>
													<button class="btn btn-danger btn-sm sweet-status iac2 d-none">Absent</button>
												</td>
												<td>ABC122</td>
												<td>222</td>
												<td>XYZ122</td>
											</tr>
											<tr>
												<td>01-01-2022</td>
												<td>ABC123</td>
												<td><img src="../dist/img/dummy-avatar2.jpg" class="w-25 rounded-circle" alt="" /></td>
												<td>Lorem Ipsum</td>
												<td>Dolor</td>
												<td>+971 95 45 50 29</td>
												<td>
													<button class="btn btn-success btn-sm sweet-status iac3">Present</button>
													<button class="btn btn-danger btn-sm sweet-status iac3 d-none">Absent</button>
												</td>
												<td>ABC123</td>
												<td>333</td>
												<td>XYZ123</td>
											</tr>
											<tr>
												<td>01-01-2022</td>
												<td>ABC124</td>
												<td><img src="../dist/img/dummy-avatar2.jpg" class="w-25 rounded-circle" alt="" /></td>
												<td>Lorem Ipsum</td>
												<td>Dolor</td>
												<td>+971 95 45 50 29</td>
												<td>
													<button class="btn btn-success btn-sm sweet-status iac4 d-none">Present</button>
													<button class="btn btn-danger btn-sm sweet-status iac4">Absent</button>
												</td>
												<td>ABC124</td>
												<td>444</td>
												<td>XYZ124</td>
											</tr>
											<tr>
												<td>01-01-2022</td>
												<td>ABC125</td>
												<td><img src="../dist/img/dummy-avatar2.jpg" class="w-25 rounded-circle" alt="" /></td>
												<td>Lorem Ipsum</td>
												<td>Dolor</td>
												<td>+971 95 45 50 29</td>
												<td>
													<button class="btn btn-success btn-sm sweet-status iac5">Present</button>
													<button class="btn btn-danger btn-sm sweet-status iac5 d-none">Absent</button>
												</td>
												<td>ABC125</td>
												<td>555</td>
												<td>XYZ125</td>
											</tr>
											<tr>
												<td>01-01-2022</td>
												<td>ABC126</td>
												<td><img src="../dist/img/dummy-avatar2.jpg" class="w-25 rounded-circle" alt="" /></td>
												<td>Lorem Ipsum</td>
												<td>Dolor</td>
												<td>+971 95 45 50 29</td>
												<td>
													<button class="btn btn-success btn-sm sweet-status iac6">Present</button>
													<button class="btn btn-danger btn-sm sweet-status iac6 d-none">Absent</button>
												</td>
												<td>ABC126</td>
												<td>666</td>
												<td>XYZ126</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="card-footer clearfix text-center">
									<button type="button" class="btn btn-primary pr-5 pl-5">See All</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		
		<footer class="main-footer">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-12">
						<div class="text-center text-sm-left">Lefebvre Engineering FZC &copy; 2022 - All Rights Reserved.</div>
					</div>
					<div class="col-md-6 col-12">
						<div class="text-center text-sm-right">Design & Developed by &nbsp;<a href="https://www.sjain.io/" target="_blank" rel="nofollow"><img src="../dist/img/sjain-logo-blue.png" style="width:40px;" alt="Sjain Ventures" /></a></div>
					</div>
				</div>
			</div>
		</footer>
		
	</div>
	
	<script src="../plugins/jquery/jquery.min.js"></script>
	<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../plugins/sweetalert/sweetalert.min.js"></script>
	<script src="../plugins/sweetalert/sweetalert.init.js"></script>
	<script src="../plugins/chart.js/Chart.min.js"></script>
	<script src="../dist/js/adminlte.min.js"></script>
	
</body>
</html>