<?php

 //insert.php  
 require 'config.php';
 
 //session.php 
 session_start();
$email= $_SESSION["email"];
 
 // Turn off error reporting
error_reporting(0);

 $error = array();
 $log = array();


// upload file using move_uploaded_file function in php
//$status = mysqli_real_escape_string($link, $data->status);
	
	if (!empty($_FILES['file']['name'])) {

		$fileName = $_FILES['file']['name'];		
		$fileExt = explode('.', $fileName);
		$fileActExt = strtolower(end($fileExt));
		$allowImg = array('png','jpeg','jpg');
		$fileNew = rand() . "." . $fileActExt;  // rand function create the rand number 
		$filePath = 'uploads/'.$fileNew; 

		if (in_array($fileActExt, $allowImg)) {
		    if ($_FILES['file']['size'] > 0  && $_FILES['file']['error']==0) {  
				
						if (move_uploaded_file($_FILES['file']['tmp_name'], $filePath)) {
									$query = "UPDATE register SET pic='$filePath' WHERE email='$email'";
									mysqli_query($link,$query) or die(mysqli_error($link));
							
								/*	$log['message'] = $filePath;
									echo json_encode($log); */
									
									$log['message'] = "Upload Successfully";
									echo json_encode($log);
							
							}else{
									$error['message'] = 'File is not uploaded try again';
									echo json_encode($error);
							}	
		    }else{
		    	 
					$error['message'] = 'Unable to upload physical file';
					echo json_encode($error);
		    }
		}else{	
		    
			$error['message'] = 'This type of image is not allow';
			echo json_encode($error);
		}
	}

?>