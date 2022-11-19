<?php
	Class EmployeeModel extends CI_Model 
	{
			function __construct()
			{
				parent::__construct();
				$this->load->library('session');
			}

         public function addEmployee()
			{
                     $sendarray = array();
                     $employee = array();
				     $sendarray['status'] 	=	0;
				     $sendarray['message']	=	"Something went wrong, Please try again later.";
					 
						$employee['first_name']  = $this->input->post('first_name');
						$employee['employee_id']  = $this->input->post('employee_id');
						$employee['address']  = $this->input->post('address');
						$employee['image_path']  = $this->input->post('image_path');
						$employee['last_name']  = $this->input->post('last_name');
						$employee['gender']  = $this->input->post('gender');
						$employee['designation_id']  = $this->input->post('designation_id');
						$employee['mobile']  = $this->input->post('mobile');
						$employee['status']  = $this->input->post('status');
						
						$employee['updatedBy']  = $this->input->post('updatedBy');
						
						
					    $id = $this->input->post('id');        
						if(!empty($employee) || !empty($id))
						{
                            if(!empty($id))
                            {
                            	$employee['id'] =  $id;
                                $employee['updated_date']  = date('Y-m-d H:i:s');
                                      $curl = curl_init();
									  curl_setopt_array($curl, array(
									  CURLOPT_URL => JAVE_API_PATH.'/employee/update',
									  CURLOPT_RETURNTRANSFER => true,
									  CURLOPT_ENCODING => '',
									  CURLOPT_MAXREDIRS => 10,
									  CURLOPT_TIMEOUT => 0,
									  CURLOPT_FOLLOWLOCATION => true,
									  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
									  CURLOPT_CUSTOMREQUEST => 'PUT',
									  CURLOPT_POSTFIELDS =>json_encode($employee),
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
								
                                     $employee['created_date']  = date('Y-m-d H:i:s');
						             $curl = curl_init();

									  curl_setopt_array($curl, array(
									  CURLOPT_URL => JAVE_API_PATH.'/employee/create',
									  CURLOPT_RETURNTRANSFER => true,
									  CURLOPT_ENCODING => '',
									  CURLOPT_MAXREDIRS => 10,
									  CURLOPT_TIMEOUT => 0,
									  CURLOPT_FOLLOWLOCATION => true,
									  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
									  CURLOPT_CUSTOMREQUEST => 'POST',
									  CURLOPT_POSTFIELDS => json_encode($employee),
									  
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
									   $sendarray['message']	=	$newres['message'];
									   $sendarray['redurl'] 	=	site_url("admin/employee");
									   $sendarray['data']  	    =   $newres;
									   return json_encode($sendarray);
	                           }
		                           
							 }
							 else
							 {
								 	$sendarray['message']	=	$newres['message'];
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
         
         public function getAllEmployee()
		 {
			$curl = curl_init();

				curl_setopt_array($curl, array(
				  CURLOPT_URL => JAVE_API_PATH.'/employee/getAllEmployees',
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
				 $allemployee =  $newres['data'];
				 return json_decode($allemployee, true); 
		 }
		     
		 
		 public function getOneEmployee($id)
		 {
		   			
			    $opt_url =  JAVE_API_PATH.'/employee/getOneEmployee?employee_id='.$id;  
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
	
	}
		
		
?>