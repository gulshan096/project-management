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
						<span class="d-none d-md-inline"><?php echo $this->session->userdata('role'); ?> </span>
						<img src="<?php echo base_url(); ?>assets/dist/img/dummy-avatar2.jpg" class="user-image img-circle" alt="" />
					</a>
					<ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<li class="user-header bg-primary">
							<img src="<?php echo base_url(); ?>assets/dist/img/dummy-avatar2.jpg" class="img-circle" alt="" />
							<p><?php echo $this->session->userdata('username'); ?><small><?php echo $this->session->userdata('role'); ?></small></p>
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
							<a href="<?php  echo base_url('auth/logout'); ?>" class="btn btn-default btn-flat float-right">Sign out</a>
						</li>
					</ul>
				</li>
			</ul>
		</nav>