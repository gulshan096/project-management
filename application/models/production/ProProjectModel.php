<?php
	Class ProProjectModel extends CI_Model
	{
			function __construct()
			{
				parent::__construct();
				$this->load->library('session');
			}

            public function manage_project()
			{
                 $sendarray = array();
                 
				     $sendarray['status'] 	=	0;
				     $sendarray['message']	=	"Something went wrong, Please try again later.";
					
					    $id =	$this->input->post('id');
						$project = $this->input->post();
						
						$project['updatedBy']  = $this->session->userdata('role_name');
						$old_doc = str_replace(' ', '', $this->input->post('old_doc')); 
				
					
					    
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
								
								$pathToUpload = 'assets/attachment/project';
										
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
								  $project['images']  =  $document; 
								}   						 
							}   
						}
                        else
						{
							$sendarray['status'] 	=	1;
				            $sendarray['message']	=	"Suceessfully inserted.";
						}
					
						if(!empty($project) || !empty($id))
						{
							
							if (!empty($id)) 
							{
							
								if(!empty($project['images']) && !empty($old_doc))
								{
									$result     = array_merge($project['images'], $old_doc);
									$project['images']	=	array_merge(array_unique($result));	
								}
								elseif(!empty($old_doc))
								{
									$project['images'] = $old_doc;	
								}
								elseif(!empty($project['images']))
								{ 
									$project['images'] = $project['images'];  									
								}
                                     $curl = curl_init();

									  curl_setopt_array($curl, array(
									
									  CURLOPT_URL => JAVE_API_PATH.'/project/update', 
									  CURLOPT_RETURNTRANSFER => true,
									  CURLOPT_ENCODING => '',
									  CURLOPT_MAXREDIRS => 10,
									  CURLOPT_TIMEOUT => 0,
									  CURLOPT_FOLLOWLOCATION => true,
									  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
									  CURLOPT_CUSTOMREQUEST => 'PUT',
									  CURLOPT_POSTFIELDS => json_encode($project),
									  
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
									$sendarray['redurl'] 	    =	site_url("production/project");
									$sendarray['data']  	    =   $newres;
									return json_encode($sendarray);
							   }
							   else
							   {
								    $newres['status']	    =	1;
									$newres['message']	    =	'successfully inserted';
									$sendarray['redurl'] 	    =	site_url("production/project");
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



         public function get_all_project()
         {

				  $curl = curl_init();
				  curl_setopt_array($curl, array(
				  CURLOPT_URL => JAVE_API_PATH.'/project/getAllProject',
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
				 $allproject =  $newres['data'];
				 return json_decode($allproject, true);
	    }

	    public function get_one_project($id)
	    {
			    
	            $opt_url =  JAVE_API_PATH.'/project/getOneProject?project_id='.$id;  
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
		
		public function getProjectDoc($id)
		{
			 
			   $opt_url =  JAVE_API_PATH.'/project/getOneProject?project_id='.$id;
	               
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
				
			    $output =  "<tr></tr>";

				foreach($array_data['images'] as $item)
				{
				   
				   $output .="<tr><input type='hidden' name='old-doc[]' value='$item'><td><a href='../assets/attachment/project/$item' target='_blank'><i class='fad fa-2x fa-file-pdf text-primary'></i></a></td><td><a href='javascript:void(0)' id='rm'><i class='fa text-danger fa-times-circle fa-2x'></i></a></td></tr>";
				}				
				return $output;
				
				
		}
	
	}
		
		
?>




