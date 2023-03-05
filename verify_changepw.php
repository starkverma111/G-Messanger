 <?php  
 //insert.php  
 require 'config.php';
 
 // Turn off error reporting
error_reporting(0);

 $error = array();
 $log = array();
 
 $data = json_decode(file_get_contents("php://input"));
 
 $email = mysqli_real_escape_string($link, $data->email);
 $npassword = mysqli_real_escape_string($link, $data->npassword);
 $vpassword = mysqli_real_escape_string($link, $data->vpassword); 
 
 	if(!empty($email) && !empty($npassword) && !empty($vpassword) ){
		
		 	if( $npassword == $vpassword ){
				
				$query ="UPDATE register
				SET password = '$npassword' WHERE email = '$email' ";					
					
					if(mysqli_query($link, $query)){ 
						$log['message'] = 'Change Password Successfully';
						echo json_encode($log);
							
					}			
			}		
			else{
				$error['message'] = 'Password not match';
				echo json_encode($error);
			}		
		
	}
	else{
			$error['message'] = 'All Fields are required';
			echo json_encode($error);
	}	    
 ?>  