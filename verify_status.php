 <?php  
 //insert.php  
 require 'config.php';
 
 // Turn off error reporting
error_reporting(0);

 $error = array();
 $log = array();

 
 $data = json_decode(file_get_contents("php://input"));

 $email = mysqli_real_escape_string($link, $data->email);
 $status = mysqli_real_escape_string($link, $data->status);

 
 if(!empty($email) && !empty($status) ){
				
				$query ="UPDATE register
				SET status = '$status' WHERE email = '$email' ";					
					
					if(mysqli_query($link, $query)){ 
						$log['message'] = 'Status Updated';
						echo json_encode($log);	
					}
	}
	else{
			$error['message'] = 'All Fields are required';
			echo json_encode($error);
	}	    
 ?>  