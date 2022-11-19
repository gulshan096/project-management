<?php
	Class WorkorderModel extends CI_Model
	{
			function __construct()
			{
				parent::__construct();
				$this->load->library('session');
			}

         public function manage_workorder()
			{
                     $sendarray = array();
                
				     $sendarray['status'] 	=	0;
				     $sendarray['message']	=	"Something went wrong, Please try again later.";
						
					    $id =	$this->input->post('id');
						$workorder  = $this->input->post();
						$old_doc = str_replace(' ', '', $this->input->post('old_doc'));
					    
						$workorder['updatedBy']  = $this->session->userdata('role_name');
						
						if(!empty($_FILES['doc']['name']))
						{
						    $filecount = count($_FILES['doc']['name']);
							for($i = 0; $i < $filecount; $i++)
							{
								$_FILES['file']['name']       = str_replace(' ', '', $_FILES['doc']['name'][$i]);
								$_FILES['file']['type']       = $_FILES['doc']['type'][$i];
								$_FILES['file']['tmp_name']   = $_FILES['doc']['tmp_name'][$i];
								$_FILES['file']['error']      = $_FILES['doc']['error'][$i];
								$_FILES['file']['size']       = $_FILES['doc']['size'][$i];
								
								$pathToUpload = 'assets/attachment/workorder';
										
								// File upload configuration
								$config['upload_path'] = $pathToUpload;
								$config['overwrite'] = TRUE;
								$config['allowed_types'] = '*';

								// Load and initialize upload library
								$this->load->library('upload', $config);
								$this->upload->initialize($config);

								// Upload file to server
								if($this->upload->do_upload('file'))
								{
								  // Uploaded file data
								  $imageData = $this->upload->data();
								  $document[$i]       =  $imageData['file_name'];
								  $workorder['images']  =  $document; 
								}   						 
							}   
						}
						else
						{
							$sendarray['status'] 	=	1;
				            $sendarray['message']	=	"Suceessfully inserted.";
						}
                        
						
						if(!empty($workorder) || !empty($id))
						{
							 						 
							if (!empty($id)) 
							{
							    if(!empty($workorder['images']) && !empty($old_doc))
								{
									$result     = array_merge($workorder['images'], $old_doc);
									$workorder['images']	=	array_merge(array_unique($result));	
								}
								elseif(!empty($old_doc))
								{
									$workorder['images'] = $old_doc;	
								}
								elseif(!empty($workorder['images']))
								{ 
									$workorder['images'] = $workorder['images'];  									
								}
								
								if($workorder['status'] == "unreleased")
								{
								  $workorder['status']  = 0;	
								}
								elseif($workorder['status'] == "released")
								{
									$workorder['status']  = 1;	
								}
								elseif($workorder['status'] == "cancel")
								{
									$workorder['status']  = 2;	
								}
								elseif($workorder['status'] == "closed")
								{
									$workorder['status']  = 3;	
								}
								
                                      $curl = curl_init();
									  curl_setopt_array($curl, array(
									  CURLOPT_URL => JAVE_API_PATH.'/workorder/update', 
									  CURLOPT_RETURNTRANSFER => true,
									  CURLOPT_ENCODING => '',
									  CURLOPT_MAXREDIRS => 10,
									  CURLOPT_TIMEOUT => 0,
									  CURLOPT_FOLLOWLOCATION => true,
									  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
									  CURLOPT_CUSTOMREQUEST => 'PUT',
									  CURLOPT_POSTFIELDS => json_encode($workorder),
									  
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
					              $workorder['status']  =   0;
                                  $curl = curl_init();
								  curl_setopt_array($curl, array( 
								  CURLOPT_URL => JAVE_API_PATH.'/workorder/create', 
								  CURLOPT_RETURNTRANSFER => true,
								  CURLOPT_ENCODING => '',
								  CURLOPT_MAXREDIRS => 10,
								  CURLOPT_TIMEOUT => 0,
								  CURLOPT_FOLLOWLOCATION => true,
								  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
								  CURLOPT_CUSTOMREQUEST => 'POST',
								  CURLOPT_POSTFIELDS => json_encode($workorder),
								  
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
										$sendarray['redurl'] 	    =	site_url("planner/work-order");
										$sendarray['data']  	    =   $newres;
										return json_encode($sendarray);
								   } 
                                    else
									{
										$newres['status']	    =	1;
										$newres['message']	    =	'successfully inserted';
										$sendarray['redurl'] 	    =	site_url("planner/work-order");
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

         public function get_all_workorder()
         {

				$curl = curl_init();

				  curl_setopt_array($curl, array(
				  CURLOPT_URL => JAVE_API_PATH.'/workorder/getAllWorkOrder',
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
				 $all_workorder =  $newres['data'];
				 return json_decode($all_workorder, true);

	    }
	    
	    public function get_one_workorder($id)
	    {
	        
	            $opt_url =  JAVE_API_PATH.'/workorder/getOneWorkOrder?work_order_id='.$id;
	               
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
		
		public function getWorkorderByProjectId($projectId)
		{
			   $opt_url =  JAVE_API_PATH.'/workorder/getWorkOrderByProjectId?project_id='.$projectId;
	               
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
        
				$getWorkorderByProjectId =  $newres['data'];
				
		        $data = json_decode($getWorkorderByProjectId , true);
		      
				$output = '<option value="">select</option>'; 
			  
			    foreach($data as $row)
			     {
				  $output .='<option value="'.$row['work_order_id'].'">'.$row['work_order_id'].'</option>'; 
			     } 
			
				return $output;
		}
		
		public function change_workorder_status($st)
		{
		
			$sendarray = array();

			$sendarray['status'] 	=	0;
			$sendarray['message']	=	"Something went wrong, Please try again later.";

			$work_order_id =	$this->input->post('work_order_id');
			
			$workorder = $this->input->post();
			$workorder['user_id'] = $this->session->userdata('id');
			
			if(!empty($workorder) || !empty($work_order_id))
			{
			if (!empty($work_order_id))
			{
			
				$curl = curl_init();
				curl_setopt_array($curl, array(

				CURLOPT_URL => JAVE_API_PATH.'/workorder/statusUpdate',
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => '',
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => 'PUT',
				CURLOPT_POSTFIELDS => json_encode($workorder),

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
				    $sendarray['redurl'] 	    =	site_url("superadmin/cancel/ca-work-order");
				}
				if($st == "close")
				{
				    $sendarray['redurl'] 	    =	site_url("superadmin/close/cl-work-order");	
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
				    $sendarray['redurl'] 	    =	site_url("superadmin/cancel/ca-work-order");
				}
				if($st == "close")
				{
				    $sendarray['redurl'] 	    =	site_url("superadmin/close/cl-work-order");	
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
		
		public function getWorkorderByWorkorderId($id)
		{   
		    
			    $opt_url =  JAVE_API_PATH.'/workorder/getWorkOrderByWorkOrderId?work_order_id='.$id;
	               
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
		
		public function getWorkorderDoc($id)
		{
			   
			   $opt_url =  JAVE_API_PATH.'/workorder/getOneWorkOrder?work_order_id='.$id;
	               
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
                $newres = json_decode($response, true);
				$array_data = json_decode($newres['data'], TRUE);
								
				return $array_data;
	    }
	}
	
?>
<?php




