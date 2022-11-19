<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class BreakController extends CI_Controller
		{	
		
			public function __construct()
			{
				parent::__construct();
				$this->load->model('auth/AccountModel');
				$this->AccountModel->checkadminlogin();
				$this->load->model('BreakModel');
				
				
			}
	
			public function break($id)
			{
			   if(!empty($id))
			   {
			      $data['getOneBreak'] = $this->BreakModel->getOneBreak($id);  
			   }
              $data['getAllBreaks'] = $this->BreakModel->getAllBreaks();
			  $this->load->view("admin/break",$data);
			} 

			public function add_break()
			{
		
				echo $this->BreakModel->add_break();
			}

			 
		}

?>