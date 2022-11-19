<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class MeasuresController extends CI_Controller
	{
		
			public function __construct()
			{
				parent::__construct();
			
			    $this->load->model('auth/AccountModel');
				$this->AccountModel->checkadminlogin();
				$this->load->model('MeasureModel');	
			}
	
			public function measure($id)
			{
			
			if(!empty($id))
			{
			
			$data['getOneMeasure']  =  $this->MeasureModel->getOneMeasure($id);
			}
				$data['getAllMeasure']  =  $this->MeasureModel->getAllMeasure();
			
			$this->load->view("admin/measure",$data);
			}

			public function manageMeasure()
			{

				echo $this->MeasureModel->manageMeasure();
			}
			
		}
?>