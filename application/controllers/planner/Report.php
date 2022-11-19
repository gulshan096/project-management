<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Report extends CI_Controller
		{	
		
			public function __construct()
			{
				parent::__construct();

			
				$this->load->model('ReportModel');
				$this->load->model('auth/AccountModel');
				$this->AccountModel->checkplannerlogin();
			}
	
			

            public function unreleased()
			{
			  
			  $status = 0 ; 
			  $data = array();
              $data['unreleased_project'] =  $this->ReportModel->reportProject($status);
              $data['unreleased_work_order'] =  $this->ReportModel->reportWorkOrder($status);
              $data['unreleased_resource_work_order'] =  $this->ReportModel->reportResourceWorkOrder($status);			  
			  $this->load->view("report/unreleased-project",$data);
			  
			}
			public function released()
			{
				
				$status = 1 ; 	
			    $data = array();
                $data['released_project'] =  $this->ReportModel->reportProject($status);
                $data['released_work_order'] =  $this->ReportModel->reportWorkOrder($status); 
                $data['released_resource_work_order'] =  $this->ReportModel->reportResourceWorkOrder($status);
			  			  
			    $this->load->view("report/released-project",$data);
			  
			}
             public function cancel()
			{
			   
			    $status = 2 ; 	
			    $data = array();
                $data['closed_project'] =  $this->ReportModel->reportProject($status);
                $data['closed_work_order'] =  $this->ReportModel->reportWorkOrder($status); 
                $data['closed_resource_work_order'] =  $this->ReportModel->reportResourceWorkOrder($status); 
			    $this->load->view("report/cancel",$data);
			  
			} 
  
            public function closed()
			{
			   
			    $status = 3 ; 	
			    $data = array();
                $data['closed_project'] =  $this->ReportModel->reportProject($status);
                $data['closed_work_order'] =  $this->ReportModel->reportWorkOrder($status); 
                $data['closed_resource_work_order'] =  $this->ReportModel->reportResourceWorkOrder($status); 
			    $this->load->view("report/closed",$data);
			  
			} 	 
			
		}

?>