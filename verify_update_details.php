 <?php  
 //insert.php  
 require 'config.php';
 
 // Turn off error reporting
error_reporting(0);

 $error = array();
 $log = array();

 
 $data = json_decode(file_get_contents("php://input"));
 
 $fnamee = mysqli_real_escape_string($link, $data->fnamee);
 $lnamee = mysqli_real_escape_string($link, $data->lnamee); 
 $email = mysqli_real_escape_string($link, $data->email);
 $ck_password = mysqli_real_escape_string($link, $data->ck_password);

 
 if(!empty($fnamee) && !empty($lnamee) && !empty($email) && !empty($ck_password) ){
		
		
		$qu ="SELECT password FROM register WHERE email = '$email'";	
		$res = mysqli_query($link, $qu);

		
		$row = mysqli_fetch_array($res);
		$g_pass = $row['password'];
		
		
		 	if( $g_pass == $ck_password ){
				
				$query ="UPDATE register
				SET fname = '$fnamee', lname = '$lnamee' WHERE email = '$email' ";					
					
					if(mysqli_query($link, $query)){ 
						$log['message'] = 'Details Update Successfully';
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