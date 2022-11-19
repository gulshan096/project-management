<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class ResourceWorkOrder extends CI_Controller
		{	
		
			public function __construct()
			{
				parent::__construct();
				
                $this->load->model('auth/AccountModel');
				$this->AccountModel->checkproductionlogin();
				$this->load->model('planner/ResourceWorkOrderModel');
				$this->load->model('planner/WorkorderModel');
				$this->load->model('planner/ProjectModel');
				$this->load->model('production/ProResourceWorkOrderModel');
				$this->load->model('UserModel');

				
			}
	
			public function resourceworkorder()
			{
			 	  
			  $data = array();
              $data['all_resourceworkorder']  =  $this->ResourceWorkOrderModel->get_all_resourceworkorder();
              $data['all_project_id']         =  $this->ProjectModel->get_all_project();
              $data['all_workorder']          =  $this->WorkorderModel->get_all_workorder();
              $data['getUserByRole']          =  $this->UserModel->getUserByRole();
			  $this->load->view("production/resource-work-order",$data);
			} 

			public function manage_resource_workorder()
 			{
			    echo $this->ProResourceWorkOrderModel->manage_resource_workorder();
     		}
			
			public function editResWorkOrder()
			{
				$id = $this->input->post('resWorkOrderId');
				$data =  $this->ResourceWorkOrderModel->get_one_resourceworkorder($id);
				echo json_encode($data);
			
			}

		}

?>