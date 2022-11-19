<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class User extends CI_Controller
		{	
		
			public function __construct()
			{
				parent::__construct();
				$this->load->model('auth/AccountModel');
				$this->AccountModel->checkadminlogin();
				$this->load->model('UserModel');
				
				
			}
	
			public function user($id)
			{
			    
				$data = array();
				
				if(!empty($id))
				{
				    $data['getOneUser'] =  $this->UserModel->getOneUser($id);
				}
	            $data['getAllUser'] =  $this->UserModel->getAllUser();
			    $this->load->view("admin/users", $data);
			} 

			public function adduser()
			{
				
				echo $this->UserModel->adduser();
			}
			
			

			 
		}

?>