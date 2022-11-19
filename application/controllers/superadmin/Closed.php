<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Closed extends CI_Controller
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
			public function close()
			{	
			  $this->load->view("superadmin/close");
			}
	
			public function closeProject()
			{
			  $data = array();
		      $data['all_project']  =  $this->ProjectModel->get_all_project(); 		
			  $this->load->view("superadmin/cls-project",$data);
			}
            
            public function closeWorkOrder()
			{
			  $data = array();	
			  $data['all_workorder']  =  $this->WorkorderModel->get_all_workorder();	
			  $this->load->view("superadmin/cls-work-order",$data);
			}

            public function closeResource()
			{
			  $data = array();
              $data['all_resourceworkorder']  =  $this->ResourceWorkOrderModel->get_all_resourceworkorder();			
			  $this->load->view("superadmin/cls-resource",$data);
			  
			}

            public function close_project()
			{
				$st = "close";
			    echo $this->ProjectModel->change_project_status($st);	
			}
			
			public function close_workorder()
			{
				$st = "close";
			    echo $this->WorkorderModel->change_workorder_status($st);	
			}
			
			public function close_resources()
			{
				$st = "close";
			    echo $this->ResourceWorkOrderModel->change_resourceworkorder_status($st);	
			}			

		}

?>