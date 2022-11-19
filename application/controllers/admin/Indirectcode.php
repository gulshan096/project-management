<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Indirectcode extends CI_Controller
		{	
		
			public function __construct()
			{
				parent::__construct();
				$this->load->model('auth/AccountModel');
				$this->AccountModel->checkadminlogin();
				$this->load->model('IndirectCodeModel');
				
				
			}
	
			public function indirectcode($id)
			{
			  
			  if(!empty($id))
			  {
			       
			       $data['getOneIndirectCodes']  =  $this->IndirectCodeModel->getOneIndirectCodes($id);
			  }
			  $data['getAllIndirectCodes']  =  $this->IndirectCodeModel->getAllIndirectCodes();	
			  
			  $this->load->view("admin/indirect-code",$data);
			} 

			public function add_indirect_code()
			{
			
				echo $this->IndirectCodeModel->add_indirect_code();
			}

			 
		}

?>