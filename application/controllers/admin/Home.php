<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends CI_Controller
		{	
		
			public function __construct()
			{
				parent::__construct();

				$this->load->model('auth/AccountModel');
				$this->AccountModel->checkadminlogin();
			}
	
			public function index()
			{
				
			  $this->load->view("admin/home");
			} 

			public function attendance()
			{
				
			  $this->load->view("admin/attendance");
			}

			
			public function vendor()
			{
				
			  $this->load->view("admin/index");
			} 
		}

?>