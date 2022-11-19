<?php
if($this->session->userdata('role_name') == 'admin')
{
?>

<aside class="main-sidebar sidebar-light-primary " id="leftCol">
	<a href="<?php echo base_url('admin/home'); ?>" class="brand-link">
		<img src="<?php echo base_url(); ?>assets/dist/img/logo.png" alt="" />
	</a>
	
	<div class="sidebar">
		<div class="user-panel mt-3 pb-3 mb-4 text-center">
			<div class="image">
				<img src="<?php echo base_url(); ?>assets/dist/img/dummy-avatar2.jpg" class="img-circle" alt="" />
			</div>
			<div class="info">
				<p class="d-block text-bold mb-1"><?php echo $this->session->userdata('name'); ?></p>
				<p class="d-block mb-0"><?php echo $this->session->userdata('role_name'); ?></p>
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
				<li class="nav-item menu-open">
					<a href="<?php  echo base_url('admin/home'); ?>" class="nav-link <?php echo !empty($this->uri->segment(2) == 'home')?'text-primary':'text-dark';  ?>">
						<i class="nav-icon far fa-home"></i>
						<p>Home</p>
					</a>
				</li>
				
				<li class="nav-item">
					<a href="<?php echo base_url('admin/measures'); ?>" class="nav-link <?php echo !empty($this->uri->segment(2) == 'measures')?'text-primary':'text-dark';?>">
						<i class="nav-icon far fa-user-group"></i>
						<p>Measures</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url('admin/employee'); ?>" class="nav-link <?php echo !empty($this->uri->segment(2) == 'employee')?'text-primary':'text-dark';?>">
						<i class="nav-icon far fa-user-group"></i>
						<p>Employees</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php  echo base_url('admin/attendance'); ?>" class="nav-link <?php echo !empty($this->uri->segment(2) == 'attendance')?'text-primary':'text-dark';?>">
						<i class="nav-icon far fa-clipboard-list-check"></i>
						<p>Attendance</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php  echo base_url('admin/break'); ?>" class="nav-link <?php echo !empty($this->uri->segment(2) == 'break')?'text-primary':'text-dark';?>">
						<i class="nav-icon far fa-mug-hot"></i>
						<p>Break</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php  echo base_url('admin/indirect-code'); ?>" class="nav-link <?php echo !empty($this->uri->segment(2) == 'indirect-code')?'text-primary':'text-dark';?>">
						<i class="nav-icon far fa-gears"></i>
						<p>Indirect Code</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php  echo base_url('admin/resources'); ?>" class="nav-link <?php echo !empty($this->uri->segment(2) == 'resources')?'text-primary':'text-dark';?>">
						<i class="nav-icon far fa-user-gear"></i>
						<p>Resources</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url('admin/user'); ?>" class="nav-link <?php echo !empty($this->uri->segment(2) == 'user')?'text-primary':'text-dark';?>">
						<i class="nav-icon far fa-user"></i>
						<p>Users</p>
					</a>
				</li>
				<li class="nav-item mt-2">
					<a href="<?php  echo base_url('auth/logout'); ?>" class="nav-link active">
						<i class="nav-icon far fa-arrow-right-from-bracket text-white"></i>
						<p>Logout</p>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</aside>
<?php
}


elseif($this->session->userdata('role_name') == "planner")
{
?>
<aside class="main-sidebar sidebar-light-primary">
	<a href="<?php echo base_url('planner/home'); ?>" class="brand-link">
		<img src="<?php echo base_url(); ?>assets/dist/img/logo.png" alt="" />
	</a>
	
	<div class="sidebar">
		<div class="user-panel mt-3 pb-3 mb-4 text-center">
			<div class="image">
				<img src="<?php echo base_url(); ?>assets/dist/img/dummy-avatar3.jpg" class="img-circle" alt="" />
			</div>
			<div class="info">
				<p class="d-block text-bold mb-1"><?php echo $this->session->userdata('name'); ?></p>
				<p class="d-block mb-0"><?php echo $this->session->userdata('role_name'); ?></p>
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
				<li class="nav-item menu-open">
					<a href="<?php  echo base_url('planner/home'); ?>" class="nav-link <?php echo !empty($this->uri->segment(2) == 'home')?'text-primary':'text-dark'; ?>">
						<i class="nav-icon far fa-home"></i>
						<p>Home</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php  echo base_url('planner/project'); ?>" class="nav-link <?php echo !empty($this->uri->segment(2) == 'project')?'text-primary':''; ?>">
						<i class="nav-icon far fa-folder-gear"></i>
						<p>Project</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php  echo base_url('planner/work-order'); ?>" class="nav-link <?php echo !empty($this->uri->segment(2) == 'work-order')?'text-primary':''; ?>">
						<i class="nav-icon far fa-album-collection"></i>
						<p>Work Order</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url('planner/resource-work-order'); ?>" class="nav-link  <?php echo !empty($this->uri->segment(2) == 'resource-work-order')?'text-primary':'';  ?>">
						<i class="nav-icon far fa-screwdriver-wrench"></i>
						<p>Resource Work Order</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url('planner/closed-project'); ?>" class="nav-link <?php echo !empty($this->uri->segment(2) == 'closed-project')?'text-primary':'';  ?>">
						<i class="nav-icon far fa-folder-minus"></i>
						<p>Closed </p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url('planner/unreleased-project'); ?>" class="nav-link <?php echo !empty($this->uri->segment(2) == 'unreleased-project')?'text-primary':'';  ?>">
						<i class="nav-icon far fa-gear"></i>
						<p>Unreleased</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url('planner/released-project'); ?>" class="nav-link <?php echo !empty($this->uri->segment(2) == 'released-project')?'text-primary':'';  ?>">
						<i class="nav-icon far fa-folder-arrow-up"></i>
						<p>Released</p>
					</a>
				</li>
				<li class="nav-item mt-2">
					<a href="<?php   echo base_url('auth/logout'); ?>" class="nav-link active">
						<i class="nav-icon far fa-arrow-right-from-bracket text-white"></i>
						<p>Logout</p>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</aside>
<?php
}
elseif($this->session->userdata('role_name') == "production")
{
?>
<aside class="main-sidebar sidebar-light-primary">
	<a href="<?php echo base_url('production/home'); ?>" class="brand-link">
		<img src="<?php echo base_url(); ?>assets/dist/img/logo.png" alt="" />
	</a>
	
	<div class="sidebar">
		<div class="user-panel mt-3 pb-3 mb-4 text-center">
			<div class="image">
				<img src="<?php echo base_url(); ?>assets/dist/img/dummy-avatar4.jpg" class="img-circle" alt="" />
			</div>
			<div class="info">
				<p class="d-block text-bold mb-1"><?php echo $this->session->userdata('name'); ?></p>
				<p class="d-block mb-0"><?php echo $this->session->userdata('role_name'); ?></p>
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
				<li class="nav-item menu-open">
					<a href="<?php echo base_url('production/home');  ?>" class="nav-link <?php echo !empty($this->uri->segment(2) == 'home')?'text-primary':'text-dark';  ?>">
						<i class="nav-icon far fa-home"></i>
						<p>Home</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url('production/project');  ?>" class="nav-link <?php echo !empty($this->uri->segment(2) == 'project')?'text-primary':'';  ?>">
						<i class="nav-icon far fa-folder-gear"></i>
						<p>Project</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url('production/work-order');  ?>" class="nav-link <?php echo !empty($this->uri->segment(2) == 'work-order')?'text-primary':'';  ?>">
						<i class="nav-icon far fa-album-collection"></i>
						<p>Work Order</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php  echo base_url('production/resource-work-order'); ?>" class="nav-link <?php echo !empty($this->uri->segment(2) == 'resource-work-order')?'text-primary':'';  ?>">
						<i class="nav-icon far fa-screwdriver-wrench"></i>
						<p>Resource Work Order</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url('production/closed-project'); ?>" class="nav-link <?php echo !empty($this->uri->segment(2) == 'closed-project')?'text-primary':'';  ?>">
						<i class="nav-icon far fa-folder-minus"></i>
						<p>Closed </p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url('production/unreleased-project'); ?>" class="nav-link <?php echo !empty($this->uri->segment(2) == 'unreleased-project')?'text-primary':'';  ?>">
						<i class="nav-icon far fa-gear"></i>
						<p>Unreleased</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url('production/released-project'); ?>" class="nav-link <?php echo !empty($this->uri->segment(2) == 'released-project')?'text-primary':'';  ?>">
						<i class="nav-icon far fa-folder-arrow-up"></i>
						<p>Released</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon far fa-calendar-clock"></i>
						<p>Schedule</p>
					</a>
				</li>
				<li class="nav-item mt-2">
					<a href="<?php   echo base_url('production/logout'); ?>" class="nav-link active">
						<i class="nav-icon far fa-arrow-right-from-bracket text-white"></i>
						<p>Logout</p>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</aside>
<?php
}
elseif($this->session->userdata('role_name') == "superadmin")
{
?>
<aside class="main-sidebar sidebar-light-primary">
	<a href="<?php echo base_url('superadmin/home'); ?>" class="brand-link">
		<img src="<?php echo base_url(); ?>assets/dist/img/logo.png" alt="" />
	</a>
	
	<div class="sidebar">
		<div class="user-panel mt-3 pb-3 mb-4 text-center">
			<div class="image">
				<img src="<?php echo base_url(); ?>assets/dist/img/dummy-avatar1.jpg" class="img-circle" alt="" />
			</div>
			<div class="info">
				<p class="d-block text-bold mb-1"><?php echo $this->session->userdata('name'); ?></p>
				<p class="d-block mb-0"><?php echo $this->session->userdata('role_name'); ?></p>
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
				<li class="nav-item menu-open">
					<a href="<?php echo base_url('superadmin/home');  ?>" class="nav-link <?php echo !empty($this->uri->segment(2) == 'home')?'text-primary ':'text-dark';  ?>">
						<i class="nav-icon far fa-home"></i>
						<p>Home</p>
					</a>
				</li>
				<li class="nav-item ">
					<a href="#" class="nav-link">
						<i class="nav-icon far fa-clipboard-list"></i>
						<p>Cancel <i class="right far fa-angle-left"></i></p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item <?php echo !empty($this->uri->segment(2) == 'cancel ')?'text-primary active':'';  ?>">
							<a href="<?php echo base_url('superadmin/cancel/ca-project'); ?>" class="nav-link <?php echo !empty($this->uri->segment(3) == 'ca-project active')?'active text-primary':'';  ?>">
								<i class="nav-icon far fa-folder-gear"></i>
								<p>Project</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('superadmin/cancel/ca-work-order'); ?>" class="nav-link <?php echo !empty($this->uri->segment(3) == 'ca-work-order')?'active text-primary':'';  ?>">
								<i class="nav-icon far fa-album-collection"></i>
								<p>Work Order</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('superadmin/cancel/ca-resource'); ?>" class="nav-link <?php echo !empty($this->uri->segment(3) == 'ca-resource')?'active text-primary':'';  ?>">
								<i class="nav-icon far fa-screwdriver-wrench"></i>
								<p>Resource</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon far fa-folder-minus"></i>
						<p>Close <i class="right far fa-angle-left"></i></p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo base_url('superadmin/close/cl-project'); ?>" class="nav-link <?php echo !empty($this->uri->segment(2) == 'cl-project')?'text-primary':'';  ?>">
								<i class="nav-icon far fa-folder-gear"></i>
								<p>Project</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('superadmin/close/cl-work-order'); ?>" class="nav-link <?php echo !empty($this->uri->segment(2) == 'cl-work-order')?'text-primary':'';  ?>">
								<i class="nav-icon far fa-album-collection"></i>
								<p>Work Order</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('superadmin/close/cl-resource'); ?>" class="nav-link <?php echo !empty($this->uri->segment(2) == 'cl-resource')?'text-primary':'';  ?>">
								<i class="nav-icon far fa-screwdriver-wrench"></i>
								<p>Resource</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon far fa-id-card"></i>
						<p>Labour Card Maintenance</p>
					</a>
				</li>
				<li class="nav-item mt-2">
					<a href="<?php   echo base_url('auth/logout'); ?>" class="nav-link active">
						<i class="nav-icon far fa-arrow-right-from-bracket text-white"></i>
						<p>Logout</p>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</aside>
<?php
}
?>