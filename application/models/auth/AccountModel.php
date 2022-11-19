<?php
	Class AccountModel extends CI_Model
	{
			function __construct()
			{
				parent::__construct();
				$this->load->library('session');
			}
			

			public function checkadminlogin()
			{
                $checklogin = $this->session->userdata();

					
					if(!empty($checklogin['id'])  && !empty($checklogin['status'])  &&  $checklogin['role_name'] == 'admin')
					{
						return true;	
					}
					

					    return redirect("login");
					    exit(0);
					    return false;	
			}

			public function checkplannerlogin()
			{
				$checklogin = $this->session->userdata();
					
					if(!empty($checklogin['id'])  && !empty($checklogin['status']) && $checklogin['role_name'] == 'planner' )
					{
						return true;	
					}
						return redirect("login");
					    exit(0);
						return false;
			}

			public function checkproductionlogin()
			{
			      $checklogin = $this->session->userdata();
					
					if(!empty($checklogin['id'])  && !empty($checklogin['status']) && $checklogin['role_name']  == 'production')
					{
						return true;	
					}
					
						return redirect("login");
					    exit(0);
						return false;	
				
			}

			public function checksuperadminlogin()
			{
				    $checklogin = $this->session->userdata();
					
					if(!empty($checklogin['id'])  && !empty($checklogin['status']) && $checklogin['role_name'] == 'superadmin')
					{
						return true;	
					}
						return redirect("login");
					    exit(0);
						return false;	
			}
				
			
	            public function douserlogin()
				{
	                    $sendarray = array();
						$sendarray['status'] 	=	0;
						$sendarray['message']	=	"Something went wrong, Please try again later.";
						
						
						$username	=	$this->input->post('username');
						$password	=	$this->input->post('password');

						if(!empty($username) && !empty($password))
						{
							
							$curl = curl_init();
							curl_setopt_array($curl, array(
							
							CURLOPT_URL => JAVE_API_PATH.'/user/login',
							CURLOPT_RETURNTRANSFER => true,
							CURLOPT_ENCODING => '',
							CURLOPT_MAXREDIRS => 10,
							CURLOPT_TIMEOUT => 0,
							CURLOPT_FOLLOWLOCATION => true,
							CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
							CURLOPT_CUSTOMREQUEST => 'POST',
							CURLOPT_POSTFIELDS => json_encode(['username' => $username, 'password' => $password]),
							
							CURLOPT_HTTPHEADER => array(
							'Content-Type: application/json'
							),
							));
							$response = curl_exec($curl);
							curl_close($curl);
				
				            $newres = json_decode($response , true);

                            
						
							if(!empty($newres['status']))
							{
                                $udata =  $newres['data'];
							    $userdata = json_decode($udata, true);


								if(!empty($userdata) && $userdata['role_name'] == 'planner')
								{

						
									$this->session->set_userdata($userdata);
									$sendarray['status']	    =	1;
									$sendarray['message']	    =	$newres['message'];
									$sendarray['redurl'] 	    =	site_url("planner/home");
									$sendarray['data']  	    =   $newres;

									return json_encode($sendarray);
								}
								elseif(!empty($userdata) && $userdata['role_name'] == 'production')
								{
                                    $this->session->set_userdata($userdata);
									$sendarray['status']	    =	1;
									$sendarray['message']	    =	$newres['message'];
									$sendarray['redurl'] 	    =	site_url("production/home");
									$sendarray['data']  	    =   $newres;

									return json_encode($sendarray);
								}
								elseif(!empty($userdata) && $userdata['role_name'] == 'superadmin')
								{
                                    $this->session->set_userdata($userdata);
									$sendarray['status']	    =	1;
									$sendarray['message']	    =	$newres['message'];
									$sendarray['redurl'] 	    =	site_url("superadmin/home");
									$sendarray['data']  	    =   $newres;

									return json_encode($sendarray);
								}
								elseif(!empty($userdata) && $userdata['role_name'] == 'admin')
								{
                                    $this->session->set_userdata($userdata);
									$sendarray['status']	    =	1;
									$sendarray['message']	    =	$newres['message'];
									$sendarray['redurl'] 	    =	site_url("admin/home");
									$sendarray['data']  	    =   $newres;

									return json_encode($sendarray);
								}
								else
								{
									$sendarray['message']	    =	"we not find any user.";
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
