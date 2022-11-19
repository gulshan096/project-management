<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Account extends CI_Controller
		{	
		
			public function __construct()
			{
				parent::__construct();

				$this->load->model('AdminAccountModel');
			}
	
			public function register()
			{
			
			  $this->load->view("admin/register");
			}

			public function dousersregister()
			{
				echo $this->AdminAccountModel->dousersregister();
			}

            
			
			
	
		}

?>