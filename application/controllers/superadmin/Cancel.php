<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Cancel extends CI_Controller
		{	
		
			public function __construct()
			{
				parent::__construct();
                $this->load->model('auth/AccountModel');
				$this->AccountModel->checksuperadminlogin();
				
				$this->load->model('planner/ProjectModel');
				$this->load->model('planner/WorkorderModel');
				$this->load->model('planner/ResourceWorkOrderModel');
		        
				
			}
			
			public function cancel()
			{
			  $this->load->view("superadmin/cancel");
			}
	
			public function cancelProject()
			{
			  $data = array();
		      $data['all_project']  =  $this->ProjectModel->get_all_project(); 
			  $this->load->view("superadmin/can-project",$data);
			}
            
            public function cancelWorkOrder()
			{
			  $data = array();	
			  $data['all_workorder']  =  $this->WorkorderModel->get_all_workorder();
			  $this->load->view("superadmin/can-work-order",$data);
			}

            public function cancelResource()
			{
			  $data = array();
              $data['all_resourceworkorder']  =  $this->ResourceWorkOrderModel->get_all_resourceworkorder();	
			  $this->load->view("superadmin/can-resource",$data);
			  
			} 
			
			
			public function cancel_project()
			{
				$st = "cancel";
			    echo $this->ProjectModel->change_project_status($st);	
			}
			
			public function cancel_workorder()
			{
				$st = "cancel";
			    echo $this->WorkorderModel->change_workorder_status($st);	
			}
			
			public function cancel_resources()
			{
				$st = "cancel";
			    echo $this->ResourceWorkOrderModel->change_resourceworkorder_status($st);	
			}

		}

?>