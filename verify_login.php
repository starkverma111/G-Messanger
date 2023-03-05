 <?php  
 
 //importing config file  
 require 'config.php';
 
 // Turn off error reporting
error_reporting(0);
 
 // Start the session
session_start();
 
 $error = array();
 $log = array();
 
 // getting json data
 $data = json_decode(file_get_contents("php://input"));
 $email = mysqli_real_escape_string($link, $data->email);       
 $password = mysqli_real_escape_string($link, $data->password);    
 
	 if ($email != "" && $password != ""){

        $sql_query = "select * from register where email='$email' and password='$password'";
        $result = mysqli_query($link,$sql_query);
        $row = mysqli_fetch_array($result);

				$gid = $row['id'];
				$gemail = $row['email'];
				$gpw = $row['password'];


				if($gemail == $email && $gpw == $password ){
						                        
                            // Set session variables
								$_SESSION["loggedin"] = true;
								$_SESSION["id"] = $gid;
								$_SESSION["email"] = $gemail;
								$_SESSION["password"] = $gpw;
								
              // Redirect user to home page
                 $log['message'] = 'Yes';
					echo json_encode($log);
					
					
				}else{
					
					$error['message'] = 'Invalid username and password';
					echo json_encode($error);
				} 

    }else{
			
			$error['message'] = 'All Fields are required';
			echo json_encode($error);
	}
	
		   
 ?>  