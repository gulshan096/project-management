<?php
	Class UserModel extends CI_Model
	{
			function __construct()
			{
				parent::__construct();
				$this->load->library('session');
			}

         public function adduser()
			{
                 $sendarray = array();
                 // $employee = array();
				     $sendarray['status'] 	=	0;
				     $sendarray['message']	=	"Something went wrong, Please try again later.";
						
					  
					    $id =	$this->input->post('id');
                        
						$user['name']  = $this->input->post('name');
						$user['username']  = $this->input->post('username');
						$user['email']  = $this->input->post('email');
						$user['mobile']  = $this->input->post('mobile');
						$user['password']  = $this->input->post('password');
						$user['role_name']  = $this->input->post('role_name');
						$user['status']  = $this->input->post('status');
						$user['updatedBy']  = $this->session->userdata('role_id');
						
						$cpassword = $this->input->post('cpassword');
					

						if(!empty($user) || !empty($id) )
						{
                            
              
						   if($user['password'] == $cpassword)
						   {
							   
					
						       if (!empty($id)) 
    							{
    							    $user['id']  =  $id;
    							    // $user['updatedDate']  =   date("Y-m-d h:i:sa");
    							    $curl = curl_init();

        							  curl_setopt_array($curl, array(
        
        							  CURLOPT_URL => JAVE_API_PATH.'/user/update',
        							  CURLOPT_RETURNTRANSFER => true,
        							  CURLOPT_ENCODING => '',
        							  CURLOPT_MAXREDIRS => 10,
        							  CURLOPT_TIMEOUT => 0,
        							  CURLOPT_FOLLOWLOCATION => true,
        							  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        							  CURLOPT_CUSTOMREQUEST => 'PUT',
        							  CURLOPT_POSTFIELDS => json_encode($user),
        							  
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
    								// $user['createdDate']  =   date("Y-m-d h:i:sa");
    							     $curl = curl_init();

        							  curl_setopt_array($curl, array(
        
        							  CURLOPT_URL => JAVE_API_PATH.'/user/create',
        							  CURLOPT_RETURNTRANSFER => true,
        							  CURLOPT_ENCODING => '',
        							  CURLOPT_MAXREDIRS => 10,
        							  CURLOPT_TIMEOUT => 0,
        							  CURLOPT_FOLLOWLOCATION => true,
        							  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        							  CURLOPT_CUSTOMREQUEST => 'POST',
        							  CURLOPT_POSTFIELDS => json_encode($user),
        							  
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
												   $sendarray['redurl'] 	=	site_url("admin/user");
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
                          	        $sendarray['message']	=	'password are not matched';
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
		 
		 public function getAllUser()
		 {
			$curl = curl_init();

				curl_setopt_array($curl, array(
				  CURLOPT_URL => JAVE_API_PATH.'/user/getAllUsers',
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
				 $alluser =  $newres['data'];
				
				 return json_decode($alluser, true); 
		 }
		 
		 
		 public function getOneUser($id)
		 {
		       $opt_url =  JAVE_API_PATH.'/user/getOneUser?user_id='.$id;
	               
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
        
				$get_one_user =  $newres['data'];
				
				return json_decode($get_one_user, true); 
		 }
		 
		 
		public function getUserByRole()
		{

               $opt_url =  JAVE_API_PATH.'/user/getUserByRole?role_name=foreman';
	               
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
        
				$getUserByRole =  $newres['data'];
				
				return json_decode($getUserByRole, true); 

		} 
	
	}
		
?>