<?php
	Class BreakModel extends CI_Model
	{
			function __construct()
			{
				parent::__construct();
				$this->load->library('session');
			}

         public function add_break()
			{
                 $sendarray = array();
                 
				     $sendarray['status'] 	=	0;
				     $sendarray['message']	=	"Something went wrong, Please try again later.";
						

					    $id =	$this->input->post('id');

					    
						$break['name']  = $this->input->post('name');
						$break['start_time']  = $this->input->post('start_time');
						$break['description']  = $this->input->post('description');
						$break['end_time']  = $this->input->post('end_time');
						$break['status']  = $this->input->post('status');
						$break['updatedBy']  = $this->input->post('updatedBy');
					


					 

						if(!empty($break) || !empty($id))
						{
							
							if (!empty($id)) 
							{
								     $break['id']  =  $id;
                                     $curl = curl_init();

									  curl_setopt_array($curl, array(
									
									  CURLOPT_URL => JAVE_API_PATH.'/break/update', 
									  CURLOPT_RETURNTRANSFER => true,
									  CURLOPT_ENCODING => '',
									  CURLOPT_MAXREDIRS => 10,
									  CURLOPT_TIMEOUT => 0,
									  CURLOPT_FOLLOWLOCATION => true,
									  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
									  CURLOPT_CUSTOMREQUEST => 'PUT',
									  CURLOPT_POSTFIELDS => json_encode($break),
									  
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
								
								  CURLOPT_URL => JAVE_API_PATH.'/break/create', 
								  CURLOPT_RETURNTRANSFER => true,
								  CURLOPT_ENCODING => '',
								  CURLOPT_MAXREDIRS => 10,
								  CURLOPT_TIMEOUT => 0,
								  CURLOPT_FOLLOWLOCATION => true,
								  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
								  CURLOPT_CUSTOMREQUEST => 'POST',
								  CURLOPT_POSTFIELDS => json_encode($break),
								  
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
								$sendarray['redurl'] 	    =	site_url("admin/break");
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
            
            public function getAllBreaks()
    		 {
    			    $curl = curl_init();
    
    				curl_setopt_array($curl, array(
    				  CURLOPT_URL => JAVE_API_PATH.'/break/getAllBreaks',
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
    		 
    		 public function getOneBreak($id)
    		 {
    		       $opt_url =  JAVE_API_PATH.'/break/getOneBreak?break_id='.$id;
	               
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
    	
	
	}
		
		
?>




