 <?php  
 //insert.php  
 require 'config.php';
 
 // Turn off error reporting
error_reporting(0);

 $error = array();
 $log = array();
 
 $data = json_decode(file_get_contents("php://input"));
 
 $fname = mysqli_real_escape_string($link, $data->fname);       
 $lname = mysqli_real_escape_string($link, $data->lname);
 $email = mysqli_real_escape_string($link, $data->email);
 $password = mysqli_real_escape_string($link, $data->password);
 $repassword = mysqli_real_escape_string($link, $data->repassword);

$pic = "assets/images/google_profile.jpg";
$status = "Hey i am new user"; 

 
 	if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password) && !empty($repassword) ){
		
		 	if( $password == $repassword ){

		
					if ($email != ""){

					$sql_query = "select count(*) as cntUser from register where email='$email'";
					$result = mysqli_query($link,$sql_query);
					$row = mysqli_fetch_array($result);

							$count = $row['cntUser'];
								if($count > 0){
									$error['message'] = 'Email already exists';
									echo json_encode($error);
								}
								else{
											$query = "INSERT INTO register(fname, lname, email, password, pic, status ) VALUES ('$fname', '$lname', '$email', '$password', '$pic' ,'$status')";  
												  if(mysqli_query($link, $query))  
												  {  
													$log['message'] = 'Register Successfully';
													echo json_encode($log);
							
												  } 			
									}
									
					}
			}else{
				$error['message'] = 'Password not match';
				echo json_encode($error);
			}		
		
	}else{
			$error['message'] = 'All Fields are required';
			echo json_encode($error);
	}	 
 
      
 ?>  