<?php
	Class AdminAccountModel extends CI_Model
	{
			function __construct()
			{
				parent::__construct();

				$this->load->library('session');
			}

			public function dousersregister()
			{
                 $sendarray = array();
				     $sendarray['status'] 	=	0;
				     $sendarray['message']	=	"Something went wrong, Please try again later.";
						
						
					   $name	=	$this->input->post('name');	
					   $email	=	$this->input->post('email');
                       $status	=	 1 ;					   
					   $mobile	=	$this->input->post('mobile');	
					   $role	=	 1 ;	
					   $username	=	$this->input->post('username');	
					   $password	=	$this->input->post('password');	


					 
						if(!empty($username) && !empty($password))
						{
							 
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
								   CURLOPT_POSTFIELDS => json_encode([

										'name' => $name, 
										'role_id' => $role, 
										'email' => $email, 
										'mobile' => $mobile,
										'username' => $username,
										'password' => $password,
										'status' => $status


									]),

								  CURLOPT_HTTPHEADER => array(
								    'Content-Type: application/json'
								  ),
								));

								$response = curl_exec($curl);

								curl_close($curl);
				           
				            $newres = json_decode($response , true);

				  
							 if(!empty($newres['status']))
							 {

							 
                           if(!empty($newres['status']))
                           {
                           $sendarray['status']	    =	1;
								   $sendarray['message']	=	$newres['message'];
								   $sendarray['redurl'] 	=	site_url("admin/login");
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
			
			
			

	}
		
?>
<?php




