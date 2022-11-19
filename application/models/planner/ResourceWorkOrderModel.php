<?php
	Class ResourceWorkOrderModel extends CI_Model
	{
			function __construct()
			{
				parent::__construct();
				$this->load->library('session');
			}

            public function manage_resource_workorder()
			{
				$sendarray = array();

				$sendarray['status'] 	=	0;
				$sendarray['message']	=	"Something went wrong, Please try again later.";

				$id =	$this->input->post('id');
				$resourceworkorder  = $this->input->post();
				$resourceworkorder['status']      =  0 ;
				$resourceworkorder['updatedBy']  = $this->session->userdata('role_name');


				if(!empty($resourceworkorder) || !empty($id))
				{

					if (!empty($id))
					{
						
						$curl = curl_init();
						curl_setopt_array($curl, array(
						CURLOPT_URL => JAVE_API_PATH.'/resource/update',
						CURLOPT_RETURNTRANSFER => true,
						CURLOPT_ENCODING => '',
						CURLOPT_MAXREDIRS => 10,
						CURLOPT_TIMEOUT => 0,
						CURLOPT_FOLLOWLOCATION => true,
						CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
						CURLOPT_CUSTOMREQUEST => 'PUT',
						CURLOPT_POSTFIELDS => json_encode($resourceworkorder),

						CURLOPT_HTTPHEADER => array(
						'Content-Type: application/json'
						),
						));
						$response = curl_exec($curl);
						curl_close($curl);

						$newres = json_decode($response , true);

					}
					else
					{

						$curl = curl_init();
						curl_setopt_array($curl, array(

						CURLOPT_URL => JAVE_API_PATH.'/resource/create',
						CURLOPT_RETURNTRANSFER => true,
						CURLOPT_ENCODING => '',
						CURLOPT_MAXREDIRS => 10,
						CURLOPT_TIMEOUT => 0,
						CURLOPT_FOLLOWLOCATION => true,
						CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
						CURLOPT_CUSTOMREQUEST => 'POST',
						CURLOPT_POSTFIELDS => json_encode($resourceworkorder),

						CURLOPT_HTTPHEADER => array(
						'Content-Type: application/json'
						),
						));
						$response = curl_exec($curl);
						curl_close($curl);

						$newres = json_decode($response , true);
					}

					if(!empty($newres))
					{

						if(!empty($newres['status']))
						{

							$sendarray['status']	    =	1;
							$sendarray['message']	    =	$newres['message'];
							$sendarray['redurl'] 	    =	site_url("planner/resource-work-order");
							$sendarray['data']  	    =   $newres;
							return json_encode($sendarray);
						}
						else
						{
							$newres['status']	    =	1;
							$newres['message']	    =	'successfully inserted';
							$sendarray['redurl'] 	    =	site_url("planner/resource-work-order");
							$sendarray['data']  	    =   $newres;
							return json_encode($sendarray);
						}
					}

				}
				else
				{
					$sendarray['message']	=	"All Fields are required.";
					return json_encode($sendarray);
				}
				return json_encode($sendarray);
			}

			 public function get_all_resourceworkorder()
			 {

					$curl = curl_init();

					curl_setopt_array($curl, array(
					  CURLOPT_URL => JAVE_API_PATH.'/resource/getAllResource',
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
					 $get_all_resourceworkorder =  $newres['data'];
					 return json_decode($get_all_resourceworkorder, true);
			}
	    
			public function get_one_resourceworkorder($id)
			{
				
					$opt_url =  JAVE_API_PATH.'/resource/getOneResource?Resource_id='.$id;
						 
					$curl = curl_init();
					curl_setopt_array($curl, array(
					CURLOPT_URL => $opt_url,
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
					$get_workorder =  $newres['data'];
					return json_decode($get_workorder, true);
					 
					
			}
		
			public function getResourceByResourceId($id)
			{   
				
				
					$opt_url =  JAVE_API_PATH.'/resourceAdmin/getResourceByResourceId?resource_id='.$id; 
					$curl = curl_init();
					curl_setopt_array($curl, array(
					CURLOPT_URL => $opt_url,
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
					$get_one_project =  $newres['data'];
					return json_decode($get_one_project, true);
					
			}
		
			public function change_resourceworkorder_status($st)
			{
			
				
				$sendarray = array();

				$sendarray['status'] 	=	0;
				$sendarray['message']	=	"Something went wrong, Please try again later.";

				$resource_id =	$this->input->post('resource_id');
				
				$resourceworkorder = $this->input->post();
				$resourceworkorder['user_id'] = $this->session->userdata('id');
				
			
				
				if(!empty($resourceworkorder) || !empty($resource_id))
				{
				if (!empty($resource_id))
				{
					
					$curl = curl_init();
					curl_setopt_array($curl, array(

					CURLOPT_URL => JAVE_API_PATH.'/resource/statusUpdate',
					CURLOPT_RETURNTRANSFER => true,
					CURLOPT_ENCODING => '',
					CURLOPT_MAXREDIRS => 10,
					CURLOPT_TIMEOUT => 0,
					CURLOPT_FOLLOWLOCATION => true,
					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					CURLOPT_CUSTOMREQUEST => 'PUT',
					CURLOPT_POSTFIELDS => json_encode($resourceworkorder),

					CURLOPT_HTTPHEADER => array(
					'Content-Type: application/json'
					),
					));
					$response = curl_exec($curl);
					curl_close($curl);
					$newres = json_decode($response , true);
						
				}
				
			
				if(!empty($newres['status']))
				{

				if(!empty($newres['status']))
				{
					$sendarray['status']	    =	1;
					$sendarray['message']	    =	$newres['message'];
					
					
					if($st == "cancel")
					{
						$sendarray['redurl'] 	    =	site_url("superadmin/cancel/ca-resource");	
					}
					if($st == "close")
					{
						$sendarray['redurl'] 	    =	site_url("superadmin/close/cl-resource");	
					}
					
					$sendarray['data']  	    =   $newres;

					return json_encode($sendarray);
				}

				}
				else
				{
					$sendarray['message']	=	$newres['message'];
					if($st == "cancel")
					{
						$sendarray['redurl'] 	    =	site_url("superadmin/cancel/ca-resource");	
					}
					if($st == "close")
					{
						$sendarray['redurl'] 	    =	site_url("superadmin/close/cl-resource");	
					}
					return json_encode($sendarray);
				}
				}
				else
				{
					$sendarray['message']	=	"All Fields are required.";
					return json_encode($sendarray);
				}
				return json_encode($sendarray);
			}
	    
	}
	
?>




