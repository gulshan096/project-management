<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Admin - Lefebvre Engineering FZC</title>
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
						<span class="d-none d-md-inline">Admin</span>
						<img src="../dist/img/dummy-avatar2.jpg" class="user-image img-circle" alt="" />
					</a>
					<ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<li class="user-header bg-primary">
							<img src="../dist/img/dummy-avatar2.jpg" class="img-circle" alt="" />
							<p>Lorem Ipsum <small>Admin</small></p>
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
						<img src="../dist/img/dummy-avatar2.jpg" class="img-circle" alt="" />
					</div>
					<div class="info">
						<p class="d-block text-bold mb-1">Lorem Ipsum</p>
						<p class="d-block mb-0">Admin</p>
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
							<a href="#" class="nav-link">
								<i class="nav-icon far fa-display-code"></i>
								<p>Dashboard <i class="right far fa-angle-left"></i></p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="admin-dashboard.html" class="nav-link">
										<i class="nav-icon far fa-square-poll-vertical"></i>
										<p>Admin Dashboard</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="nav-icon far fa-chart-column"></i>
										<p>Employee Dashboard</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="employees.html" class="nav-link">
								<i class="nav-icon far fa-user-group"></i>
								<p>Employees</p>
							</a>
						</li>
						<li class="nav-item menu-open">
							<a href="attendance.html" class="nav-link">
								<i class="nav-icon far fa-clipboard-list-check"></i>
								<p>Attendance</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="break.html" class="nav-link">
								<i class="nav-icon far fa-mug-hot"></i>
								<p>Break</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="indirect-code.html" class="nav-link">
								<i class="nav-icon far fa-gears"></i>
								<p>Indirect Code</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="resources.html" class="nav-link">
								<i class="nav-icon far fa-user-gear"></i>
								<p>Resources</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="users.html" class="nav-link">
								<i class="nav-icon far fa-user"></i>
								<p>Users</p>
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
							<h1><a href="index.html">Home</a> <i class="far fa-chevron-right"></i> <a href="attendance.html">Attendance</a> <i class="far fa-chevron-right"></i> Edit Attendance</h1>
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
									<h3 class="card-title mt-0">Update Attendance Type</h3>
								</div>
								<div class="card-body">
									<form action="" method="post">
										<div class="row">
											<div class="col-md-4 col-12">
												<div class="input-group mb-4">
													<input type="text" class="form-control" placeholder="Absent" />
													<span class="placeholder">Name</span>
												</div>
											</div>
											<div class="col-md-4 col-12">
												<div class="input-group mb-4">
													<select class="custom-select">
														<option value="" disabled>Please select attendance type</option>
														<option value="1">Absent</option>
														<option value="2">Accident</option>
														<option value="2">Present</option>
														<option value="2">Sick</option>
														<option value="2" selected>Vacation</option>
														<option value="2">Suspended</option>
													</select>
													<span class="placeholder">Type</span>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-8 col-12 text-center">
												<button type="button" class="btn btn-primary pr-5 pl-5 mr-3 sweet-attendance">Update</button>
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
	<script src="../plugins/chart.js/Chart.min.js"></script>
	<script src="../dist/js/adminlte.min.js"></script>
	
</body>
</html>