<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class ResourceController extends CI_Controller
	{
		
			public function __construct()
			{
				parent::__construct();
				$this->load->model('ResourceModel');
				$this->load->model('auth/AccountModel');
				$this->AccountModel->checkadminlogin();
			}
	
			public function resources($id)
			{
			
			if(!empty($id))
			{
			
			$data['getOneResource']  =  $this->ResourceModel->getOneResource($id);
			}
				$data['getAllResource']  =  $this->ResourceModel->getAllResource();
			
			$this->load->view("admin/resources",$data);
			}

			public function manageResource()
			{

				echo $this->ResourceModel->manageResource();
			}
			
		}
?>