<?php
	Class IndirectCodeModel extends CI_Model
	{
			function __construct()
			{
				parent::__construct();
				$this->load->library('session');
			}

         public function add_indirect_code()
			{
                 $sendarray = array();
                 // $employee = array();
				     $sendarray['status'] 	=	0;
				     $sendarray['message']	=	"Something went wrong, Please try again later.";
						
					     $id =	$this->input->post('id');


					    $indirectcode =  $this->input->post();
					   
						$indirectcode['updatedBy']  = $this->input->post('updatedBy');
					   	

						if(!empty($indirectcode) || !empty($id))
						{
							if (!empty($id)) 
							{
							  $curl = curl_init();

							  curl_setopt_array($curl, array(
							
							  CURLOPT_URL => JAVE_API_PATH.'/indirectcode/update',
							  CURLOPT_RETURNTRANSFER => true,
							  CURLOPT_ENCODING => '',
							  CURLOPT_MAXREDIRS => 10,
							  CURLOPT_TIMEOUT => 0,
							  CURLOPT_FOLLOWLOCATION => true,
							  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
							  CURLOPT_CUSTOMREQUEST => 'PUT',
							  CURLOPT_POSTFIELDS => json_encode($indirectcode),
							  
							  CURLOPT_HTTPHEADER => array(
							    'Content-Type: application/json'
							  ),
							));

							$response = curl_exec($curl);

							curl_close($curl);
							
							}
							else
							{
							    
							  $curl = curl_init();

							  curl_setopt_array($curl, array(
							
							  CURLOPT_URL => JAVE_API_PATH.'/indirectcode/create',
							  CURLOPT_RETURNTRANSFER => true,
							  CURLOPT_ENCODING => '',
							  CURLOPT_MAXREDIRS => 10,
							  CURLOPT_TIMEOUT => 0,
							  CURLOPT_FOLLOWLOCATION => true,
							  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
							  CURLOPT_CUSTOMREQUEST => 'POST',
							  CURLOPT_POSTFIELDS => json_encode($indirectcode),
							  
							  CURLOPT_HTTPHEADER => array(
							    'Content-Type: application/json'
							  ),
							));

							$response = curl_exec($curl);

							curl_close($curl);
							
							}
							
				            $newres = json_decode($response , true);

							 if(!empty($newres['status']))
							 {
                              
                           if(!empty($newres['status']))
                           {
                            
                         
		                        $sendarray['status']	    =	1;
								$sendarray['message']	    =	$newres['message'];
								$sendarray['redurl'] 	    =	site_url("admin/indirect-code");
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
         
         public function getAllIndirectCodes()
         {
             $curl = curl_init();

				curl_setopt_array($curl, array(
				  CURLOPT_URL => JAVE_API_PATH.'/indirectcode/getAllIndirectCodes',
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
				 $getAllIndirectCodes =  $newres['data'];
			
				 return json_decode($getAllIndirectCodes, true); 
         }
         
         public function  getOneIndirectCodes($id)
         {
            
                $opt_url =  JAVE_API_PATH.'/indirectcode/getOneIndirectCode?indirect_code_id='.$id;
	               
               
	               
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




