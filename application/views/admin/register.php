<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Registration - Lefebvre Engineering FZC</title>
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/dist/img/favicon.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/FontAwesom6Pro/css/all.min.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/sweetalert/sweetalert.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.css" />
</head>

<body class="hold-transition sidebar-mini">
	<section class="login-page">
		<div class="login-box">
			<div class="card card-outline card-primary">
				<div class="card-header text-center">
					<img src="<?php echo base_url(); ?>assets/dist/img/logo.png" alt="" />
				</div>
				<div class="card-body">
					<p class="login-box-msg"><b>Welcome!</b><br />Sign up to continue</p>

					<form onsubmit="return dorequest(' <?php echo base_url('admin/account/dousersregister'); ?> ','.doregisterfrm','.doregisterres');" method="POST" class="doregisterfrm">
					     
					     <div class="input-group mb-4">
							<input type="text" class="form-control" name="name"  />
							<span class="placeholder">Name</span>
						</div>
						<div class="input-group mb-4">
							<input type="email" class="form-control" name="email" />
							<span class="placeholder">Email</span>
						</div>
						<div class="input-group mb-4">
							<input type="text" class="form-control" name="mobile"  />
							<span class="placeholder">Mobile</span>
						</div>
						<div class="input-group mb-4">
							<select class="form-control" name="role">
								<option value=""></option>
								<option value="admin">Admin</option>
								<option value="2">Production</option>
								<option value="3">Planner</option>
							</select>
							<!-- <input type="text" class="form-control" name="role" /> -->
							<span class="placeholder">Role</span>
						</div>
						<div class="input-group mb-4">
							<input type="text" class="form-control" name="username"  />
							<span class="placeholder">Username</span>
						</div>
						<div class="input-group mb-4">
							<input type="password" class="form-control" name="password" />
							<span class="placeholder">Password</span>
						</div>
						
						<div class="row">
							
							<div class="col-12">
								<div class="doregisterres"></div>
								<button type="submit" class="btn btn-primary btn-block">Sign Up</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	
	<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/sweetalert/sweetalert.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/sweetalert/sweetalert.init.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/chart.js/Chart.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>

	<script src="<?php echo base_url(); ?>assets/user.js"></script>
	
</body>
</html>