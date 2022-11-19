<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class ResourceWorkOrder extends CI_Controller
		{	
		
			public function __construct()
			{
				parent::__construct();

			    $this->load->model('auth/AccountModel');
				$this->AccountModel->checkplannerlogin();
				$this->load->model('planner/ResourceWorkOrderModel');
				$this->load->model('planner/WorkorderModel');
				$this->load->model('planner/ProjectModel');
				$this->load->model('MeasureModel');
				$this->load->model('ResourceModel');
				
				
			}
	
			public function resourceworkorder($id)
			{
			    
			  $data = array();

			
             if(!empty($id))
             {
              $data['get_resourceworkorder']  =  $this->ResourceWorkOrderModel->get_one_resourceworkorder($id);  
             }
              $data['all_resourceworkorder']  =  $this->ResourceWorkOrderModel->get_all_resourceworkorder();
              $data['all_project_id']  =  $this->ProjectModel->get_all_project();
			  
              $data['all_workorder']  =  $this->WorkorderModel->get_all_workorder();
              
              $data['getAllMeasure']  =  $this->MeasureModel->getAllMeasure();

              $data['getAllResource']  =  $this->ResourceModel->getAllResource();
              
                  
			  $this->load->view("planner/resource-work-order", $data);
			} 


			public function manage_resource_workorder()
			{

				echo $this->ResourceWorkOrderModel->manage_resource_workorder();
			}
			
			public function getWorkorderByProjectId()
			{
				$projectId = $this->input->post('projectId');
				$data =  $this->WorkorderModel->getWorkorderByProjectId($projectId);
				echo json_encode($data);
				
			}
			
			
			public function getWorkorderByWorkorderId()
			{
			     $work_order_id = $this->input->post('work_order_id');
				 $data =  $this->WorkorderModel->getWorkorderByWorkorderId($work_order_id);
							
				 echo json_encode($data);	

			}
			
			public function getResourceByResourceId()
			{
			     $resourceId = $this->input->post('resourceId');
				 $data =  $this->ResourceWorkOrderModel->getResourceByResourceId($resourceId);
							
				 echo json_encode($data);		
			}

			
		}

?>