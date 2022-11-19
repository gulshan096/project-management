<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Employee extends CI_Controller
		{	
		
			public function __construct()
			{
				parent::__construct();
				$this->load->model('auth/AccountModel');
				$this->AccountModel->checkadminlogin();
				$this->load->model('EmployeeModel');
				
				
			}
	 
			public function employee($id)
			{
			    if(!empty($id))
				{
				    $data['getOneEmployee'] =  $this->EmployeeModel->getOneEmployee($id);
				}
			    $data['getAllEmployee'] =  $this->EmployeeModel->getAllEmployee();
			    
			    $this->load->view("admin/employees",$data);
			} 

			public function addemployee()
			{
				
				echo $this->EmployeeModel->addEmployee();
			}

			 
		}

?>