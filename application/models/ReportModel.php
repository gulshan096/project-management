<?php
	Class ReportModel extends CI_Model
	{
			function __construct()
			{
				parent::__construct();
				$this->load->library('session');
			}

        public function reportProject($status)
		{
		
		      $curl = curl_init();
			  curl_setopt_array($curl, array(
			  CURLOPT_URL => JAVE_API_PATH.'/project/getProjectByStatus?project_status='.$status,
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => '',
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => 'GET',
			));

			$response = curl_exec($curl);
                
                curl_close($curl);
                $newres = json_decode($response , true);
				$unreleased =  $newres['data'];
				return json_decode($unreleased, true);
		}

        public function reportWorkOrder($status)
		{
		
		      $curl = curl_init();
			  curl_setopt_array($curl, array(
			  CURLOPT_URL => JAVE_API_PATH.'/workorder/getWorkOrderByStatus?work_order_status='.$status,
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => '',
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => 'GET',
			));

			$response = curl_exec($curl);
                
                curl_close($curl);
                $newres = json_decode($response , true);
				$unreleased =  $newres['data'];
				return json_decode($unreleased, true);
		}
        
        public function reportResourceWorkOrder($status)
		{
		
		      $curl = curl_init();
			  curl_setopt_array($curl, array(
			  CURLOPT_URL => JAVE_API_PATH.'/resource/getResourceByStatus?Resource_status='.$status,
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => '',
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => 'GET',
			));

			$response = curl_exec($curl);
                
                curl_close($curl);
                $newres = json_decode($response , true);
				$unreleased =  $newres['data'];
				return json_decode($unreleased, true);
		}		
     		
	}
		
		
?>




