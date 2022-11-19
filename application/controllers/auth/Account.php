<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Account extends CI_Controller
		{	
		
			public function __construct()
			{
				parent::__construct();

				$this->load->model('auth/AccountModel');
			}
	
		    
		    public function login() 
			{
			
			  $this->load->view("auth/login");
			}

			
			public function douserlogin()
			{
			  
			  echo $this->AccountModel->douserlogin();
			
			}


            public function logout()
			{

				$this->session->sess_destroy();
				redirect("login");
			}


			
		}

?>