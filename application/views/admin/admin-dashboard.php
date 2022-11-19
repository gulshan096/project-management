<?php    $this->load->view('include/header'); ?>
		
		<div class="content-wrapper">
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-12">
							<h1><a href="index.html">Home</a> <i class="far fa-chevron-right"></i> Dashboard</h1>
						</div>
					</div>
				</div>
			</section>
			
			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3 col-6 pr-md-3">
							<div class="small-box bg-primary">
								<div class="inner">
									<h3>Employees</h3>
									<p>200</p>
								</div>
								<a href="#" class="small-box-footer">More Info</a>
							</div>
						</div>
						<div class="col-lg-3 col-6 pr-md-3">
							<div class="small-box bg-success">
								<div class="inner">
									<h3>Present</h3>
									<p>180</p>
								</div>
								<a href="#" class="small-box-footer">More Info</a>
							</div>
						</div>
						<div class="col-lg-3 col-6 pr-md-3">
							<div class="small-box bg-danger">
								<div class="inner">
									<h3>Absent</h3>
									<p>20</p>
								</div>
								<a href="#" class="small-box-footer">More Info</a>
							</div>
						</div>
						<div class="col-lg-3 col-6">
							<div class="small-box bg-info">
								<div class="inner">
									<h3>Active</h3>
									<p>150</p>
								</div>
								<a href="#" class="small-box-footer">More Info</a>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-8 col-12 pr-md-3">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title mt-0">Employees Data</h3>
								</div>
								<div class="card-body">
									<canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-12 pl-md-3">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title mt-0">Employees Data</h3>
								</div>
								<div class="card-body">
									<canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-8 col-12 pr-md-3">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title mt-0">Today Absent &nbsp; <span class="badge badge-primary right">5</span></h3>
								</div>
								<div class="card-body table-responsive">
									<table class="table table-hover text-nowrap">
										<thead>
											<tr>
												<th>Employee ID</th>
												<th>Employee Name</th>
												<th>Leave Reason</th>
												<th>Status</th>
												<th>&nbsp;</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>ABC121</td>
												<td>Lorem Ipsum</td>
												<td>Sick Leave</td>
												<td><span class="btn-success btn-sm">Approved</span></td>
												<td><a href="#" class="btn btn-primary btn-sm">Details</a></td>
											</tr>
											<tr>
												<td>ABC122</td>
												<td>Lorem Ipsum</td>
												<td>Sick Leave</td>
												<td><span class="btn-success btn-sm">Approved</span></td>
												<td><a href="#" class="btn btn-primary btn-sm">Details</a></td>
											</tr>
											<tr>
												<td>ABC123</td>
												<td>Lorem Ipsum</td>
												<td>Sick Leave</td>
												<td><span class="btn-success btn-sm">Approved</span></td>
												<td><a href="#" class="btn btn-primary btn-sm">Details</a></td>
											</tr>
											<tr>
												<td>ABC124</td>
												<td>Lorem Ipsum</td>
												<td>Sick Leave</td>
												<td><span class="btn-success btn-sm">Approved</span></td>
												<td><a href="#" class="btn btn-primary btn-sm">Details</a></td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="card-footer clearfix text-center">
									<a href="#" class="btn btn-outline-secondary">See All</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-12 pl-md-3">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title mt-0">Notes</h3>
									<div class="card-tools">
										<div class="input-group">
											<a href="#"><i class="fas fa-circle-plus"></i> &nbsp; New</a>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="callout callout-info">
										<p>Lorem ipsum dolor sit amet, consectetur elit adipiscing. Donec non ante sem.</p>
										<a href="#"><i class="far fa-pen-to-square text-primary"></i></a>
										<a href="#"><i class="far fa-trash-can text-danger"></i></a>
									</div>
									<div class="callout callout-info">
										<p>Lorem ipsum dolor sit amet, consectetur elit adipiscing. Donec non ante sem.</p>
										<a href="#"><i class="far fa-pen-to-square text-primary"></i></a>
										<a href="#"><i class="far fa-trash-can text-danger"></i></a>
									</div>
									<div class="callout callout-info">
										<p>Lorem ipsum dolor sit amet, consectetur elit adipiscing. Donec non ante sem.</p>
										<a href="#"><i class="far fa-pen-to-square text-primary"></i></a>
										<a href="#"><i class="far fa-trash-can text-danger"></i></a>
									</div>
									<div class="callout callout-info">
										<p>Lorem ipsum dolor sit amet, consectetur elit adipiscing. Donec non ante sem.</p>
										<a href="#"><i class="far fa-pen-to-square text-primary"></i></a>
										<a href="#"><i class="far fa-trash-can text-danger"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		
		<?php    $this->load->view('include/footer'); ?>
		
	
	<script>
		$(function () {
			
			var areaChartData = {
				labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
				datasets: [
					{
						label: "Present Employee",
						backgroundColor: "#4DE396",
						borderColor: "#4DE39",
						pointRadius: false,
						pointColor: "#4DE39",
						pointStrokeColor: "#4DE39",
						pointHighlightFill: "#fff",
						pointHighlightStroke: "#4DE39",
						data: [290, 180, 190, 130, 250, 110, 190, 210, 270, 190, 80, 200],
					},
					{
						label: "Total Employee",
						backgroundColor: "#368EFA",
						borderColor: "#368EFA",
						pointRadius: false,
						pointColor: "#368EFA",
						pointStrokeColor: "#368EFA",
						pointHighlightFill: "#fff",
						pointHighlightStroke: "#368EFA",
						data: [300, 200, 250, 150, 300, 150, 200, 250, 300, 200, 100, 250],
					},
				],
			};
			
			//-------------
			//- DONUT CHART -
			//-------------
			// Get context with jQuery - using jQuery's .get() method.
			var donutChartCanvas = $("#donutChart").get(0).getContext("2d");
			var donutData = {
				labels: ["Present", "Absent", "Active", "Inactive"],
				datasets: [
					{
						data: [150, 50, 120, 30],
						backgroundColor: ["#FFCE00", "#368EFA", "#F44561", "#4DE396"],
					},
				],
			};
			var donutOptions = {
				maintainAspectRatio: false,
				responsive: true,
			};
			//Create pie or douhnut chart
			// You can switch between pie and douhnut using the method below.
			new Chart(donutChartCanvas, {
				type: "doughnut",
				data: donutData,
				options: donutOptions,
			});
			
			//-------------
			//- BAR CHART -
			//-------------
			var barChartCanvas = $("#barChart").get(0).getContext("2d");
			var barChartData = $.extend(true, {}, areaChartData);
			var temp0 = areaChartData.datasets[0];
			var temp1 = areaChartData.datasets[1];
			barChartData.datasets[0] = temp1;
			barChartData.datasets[1] = temp0;

			var barChartOptions = {
				responsive: true,
				maintainAspectRatio: false,
				datasetFill: false,
			};

			new Chart(barChartCanvas, {
				type: "bar",
				data: barChartData,
				options: barChartOptions,
			});

		});
	</script>
	
</body>
</html>