	<footer class="main-footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-12">
					<div class="text-center text-sm-left">Lefebvre Engineering FZC &copy; 2022 - All Rights Reserved.</div>
				</div>
				<div class="col-md-6 col-12">
					<div class="text-center text-sm-right">Design & Developed by &nbsp;<a href="https://www.sjain.io/" target="_blank" rel="nofollow"><img src="<?php echo base_url(); ?>assets/dist/img/sjain-logo-blue.png" style="width:40px;" alt="Sjain Ventures" /></a></div>
				</div>
			</div>
		</div>
	</footer>
	</div>


	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

	<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>

	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/sweetalert/sweetalert.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/sweetalert/sweetalert.init.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/chart.js/Chart.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/user.js"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/1.1.1/js/bootstrap-multiselect.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

	<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js" ></script>
	<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" ></script>
	<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" ></script>
	<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js" ></script>

	<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>




	    <script>
		  $( function() {
			$( ".datepicker" ).datepicker({
			
			  dateFormat: 'dd-mm-yy',
			  todayHighlight:'TRUE',
			  autoclose: true,
			  minDate: new Date()	
				
			});
		  });
	    </script>

		<script type="text/javascript">	
		$('input').attr('autocomplete','off');	
		</script>


		<script>
			$('.scrollup').on("click",function(){
				 $('html, body').animate({scrollTop:0}, 'fast');
			});
		</script>


		<script>

			$(document).ready(function() {
				$('#dataTable').DataTable( {
					dom: 'Bfrtip',
					buttons: [
						'copy', 'csv', 'excel', 'pdf', 'print'
					],
					columnDefs: [
					{"className": "dt-center", "targets": "_all"}
				  ],
				} );
			} );
		</script>

		<script>
		$('document').ready(function(){
			
			$('#projectTbl').DataTable({
			  dom: 'Bfrtip',
			  buttons: [
					'copy', 'csv', 'excel', 'pdf', 'print'
			],	
			 "columnDefs": [
				{"className": "dt-center", "targets": "_all"}
			  ],
				
			});
				  
		}); 
       </script>
	   <script>
		$('document').ready(function(){
			
			$('#workOrderTbl').DataTable({
			
				dom: 'Bfrtip',
				buttons: [
					'copy', 'csv', 'excel', 'pdf', 'print'
				],			
			    "columnDefs": [
				    {"className": "dt-center", "targets": "_all"}
			    ],
				
			});
				  
		}); 
       </script>
	   <script>
		$('document').ready(function(){
			
			$('#resWrkOrdTbl').DataTable({
			
                dom: 'Bfrtip',
				buttons: [
					'copy', 'csv', 'excel', 'pdf', 'print'
				],			
			 "columnDefs": [
				{"className": "dt-center", "targets": "_all"}
			  ],
				
			});
				  
		}); 
       </script>







