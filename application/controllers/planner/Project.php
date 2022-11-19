<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Project extends CI_Controller
		{	
		
			public function __construct()
			{
				parent::__construct();
				
				
				$this->load->model('auth/AccountModel');
				$this->AccountModel->checkplannerlogin();
				$this->load->model('planner/ProjectModel');
				
			}
	
			public function project()
			{
				   $data = array();
                   $data['all_project']  =  $this->ProjectModel->get_all_project(); 
			       $this->load->view("planner/project", $data);
			}

            public function editProject()
			{
				$id = $this->input->post('projectId');
				$data  =  $this->ProjectModel->get_one_project($id); 
				echo json_encode($data);
			}			


			public function manage_projetct()
			{
				echo $this->ProjectModel->manage_project();	
			}
			
			public function getProjectDoc()
			{
				$id = $this->input->post('projectId');
				$data =  $this->ProjectModel->getProjectDoc($id);
				
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
			
			public function getProjectDocs()
			{
				$id = $this->input->post('projectId');
				$data =  $this->ProjectModel->getProjectDoc($id);
				
				$output =  "<tr></tr>";
				foreach($data['images'] as $item)
				{
				   $output .="<tr><td><a href='../assets/attachment/project/$item' target='_blank'><i class='fad fa-2x fa-file-pdf text-primary'></i></a></td></tr>";
				}
				
				echo $output;
				
			}
				
				
		}

?>