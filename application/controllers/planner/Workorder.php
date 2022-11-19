<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Workorder extends CI_Controller
		{	
		
			public function __construct()
			{
				parent::__construct();
			    $this->load->model('auth/AccountModel');
				$this->AccountModel->checkplannerlogin();
				$this->load->model('planner/WorkorderModel');
				$this->load->model('planner/ProjectModel');
				$this->load->model('planner/ResourceWorkOrderModel');
				
			}
	
			public function workOrder($id)
			{
			    $data = array();
                $data['all_workorder']  =  $this->WorkorderModel->get_all_workorder();
                $data['all_project_id']  =  $this->ProjectModel->get_all_project();  
			    $this->load->view("planner/work-order", $data);
			} 
			
			public function editWorkOrder()
			{
				$id = $this->input->post('workOrderId');
				$data  =  $this->WorkorderModel->get_one_workorder($id); 
				echo json_encode($data);
			}
			
			public function manage_workorder()
			{
				echo $this->WorkorderModel->manage_workorder();
			}
			
			public function getWorkorderDoc()
			{
				$id = $this->input->post('workorderId');
				$data =  $this->WorkorderModel->getWorkorderDoc($id);				
				$output =  "<tr></tr>";
               
			    $index = 0;
				foreach($data['images'] as $item)
				{
				   $index++;
				   $output .="<tr>".
				   
				   "<td class='' colspan=''><label for='doc_".$index."'><i class='fa fa-plus ms'></i></label></td>".
				   "<td style='display:none; visibility:none;' class='target' colspan='' ><input  type='file' id='doc_".$index."' class='form-control' name='doc[]' onchange='getImage(this.value,".$index.");'></td>".
				   "<td class='' colspan=''><textarea style='border:none; outline:none;' id='display_image_".$index."' name='old_doc[]' readonly>$item</textarea></td>".
				   "<td><a href='javascript:void(0)' class='' id='rm'><i class='fa text-danger fa-times-circle fa-2x'></i></a></td>".
				   "</tr>";
				}
				
				echo $output;
			}

			public function getWorkorderDocs()
			{
				$id = $this->input->post('workorderId');
				$data =  $this->WorkorderModel->getWorkorderDoc($id);
				
				$output =  "<tr></tr>";
				foreach($data['images'] as $item)
				{
				   $output .="<tr><td><a href='../assets/attachment/workorder/$item' target='_blank'><i class='fad fa-2x fa-file-pdf text-primary'></i></a></td></tr>";
				}
				
				echo $output;
				
			}
		}

?>