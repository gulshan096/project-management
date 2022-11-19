<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Super Admin - Lefebvre Engineering FZC</title>
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
						<span class="d-none d-md-inline">Super Admin</span>
						<img src="../dist/img/dummy-avatar1.jpg" class="user-image img-circle" alt="" />
					</a>
					<ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<li class="user-header bg-primary">
							<img src="../dist/img/dummy-avatar1.jpg" class="img-circle" alt="" />
							<p>Lorem Ipsum <small>Super Admin</small></p>
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
						<img src="../dist/img/dummy-avatar1.jpg" class="img-circle" alt="" />
					</div>
					<div class="info">
						<p class="d-block text-bold mb-1">Lorem Ipsum</p>
						<p class="d-block mb-0">Super Admin</p>
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
							<a href="cancel.html" class="nav-link">
								<i class="nav-icon far fa-clipboard-list"></i>
								<p>Cancel <i class="right far fa-angle-left"></i></p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="can-project.html" class="nav-link">
										<i class="nav-icon far fa-folder-gear"></i>
										<p>Project</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="can-work-order.html" class="nav-link">
										<i class="nav-icon far fa-album-collection"></i>
										<p>Work Order</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="can-resource.html" class="nav-link">
										<i class="nav-icon far fa-screwdriver-wrench"></i>
										<p>Resource</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="close.html" class="nav-link">
								<i class="nav-icon far fa-folder-minus"></i>
								<p>Close <i class="right far fa-angle-left"></i></p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="cls-project.html" class="nav-link">
										<i class="nav-icon far fa-folder-gear"></i>
										<p>Project</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="cls-work-order.html" class="nav-link">
										<i class="nav-icon far fa-album-collection"></i>
										<p>Work Order</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="cls-resource.html" class="nav-link">
										<i class="nav-icon far fa-screwdriver-wrench"></i>
										<p>Resource</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item menu-open">
							<a href="labour-card-maintenance.html" class="nav-link">
								<i class="nav-icon far fa-id-card"></i>
								<p>Labour Card Maintenance</p>
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
							<h1><a href="index.html">Home</a> <i class="far fa-chevron-right"></i> Labour Card Maintenance</h1>
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
									<h3 class="card-title mt-0">Update Labour Ticket</h3>
								</div>
								<div class="card-body">
									<form action="" method="post">
										<div class="row">
											<div class="col-md-4 col-12">
												<div class="input-group mb-4">
													<input type="text" class="form-control" placeholder="Lorem Ipsum" />
													<span class="placeholder">Name</span>
												</div>
											</div>
											<div class="col-md-4 col-12">
												<div class="input-group mb-4">
													<select class="custom-select">
														<option value="" disabled>Select Labour Designation</option>
														<option value="1">Designation 1</option>
														<option value="2">Designation 2</option>
														<option value="3" selected>Designation 3</option>
														<option value="4">Designation 4</option>
														<option value="5">Designation 5</option>
													</select>
													<span class="placeholder">Designation</span>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4 col-12">
												<div class="input-group mb-4">
													<input type="text" class="form-control" placeholder="ABC123" />
													<span class="placeholder">Labour Id</span>
												</div>
											</div>
											<div class="col-md-4 col-12">
												<div class="input-group mb-4">
													<select class="custom-select">
														<option value="" disabled>Select Labour Ticket Type</option>
														<option value="1" selected>Ticket Type 1</option>
														<option value="2">Ticket Type 2</option>
														<option value="3">Ticket Type 3</option>
														<option value="4">Ticket Type 4</option>
														<option value="5">Ticket Type 5</option>
													</select>
													<span class="placeholder">Labour Ticket Type</span>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4 col-12">
												<div class="input-group mb-4">
													<input type="time" value="09:00" class="form-control" />
													<span class="placeholder">Shift Start Time</span>
												</div>
											</div>
											<div class="col-md-4 col-12">
												<div class="input-group mb-4">
													<input type="time" value="21:00" class="form-control" />
													<span class="placeholder">Shift End Time</span>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4 col-12">
												<div class="input-group mb-5">
													<input type="file" class="form-control img-up" id="files" />
													<span class="placeholder">Update Image</span>
													<label class="img-label" for="files">Change Image</label>
												</div>
											</div>
											<div class="col-md-4 col-12"></div>
										</div>
										<div class="row">
											<div class="col-12">
												<button type="button" class="btn btn-primary pr-5 pl-5 mr-3 sweet-labour-card">Update</button>
												<button type="button" class="btn btn-outline-secondary pr-5 pl-5">Cancel</button>
											</div>
										</div>
									</form>
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
	<script src="../dist/js/adminlte.min.js"></script>
	
</body>
</html>