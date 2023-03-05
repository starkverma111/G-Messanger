<?php 
// Database connection file..
require "config.php";

 // Turn off error reporting
error_reporting(0);

 $error = array();
 $log = array();
 
 $data = json_decode(file_get_contents("php://input"));
 
 $admin_id = mysqli_real_escape_string($link, $data->admin_id);
 $frnd_id = mysqli_real_escape_string($link, $data->frnd_id);
 $amess = mysqli_real_escape_string($link, $data->amess); 
			
	  
if($admin_id!="" && $frnd_id!=""){
	
	
	$query = "INSERT INTO `friend`( `sender`, `receiver`, `follow`) VALUES ('$admin_id', '$frnd_id', '$amess')";

			if (mysqli_query($link, $query)) {
				 $log['message'] = 'insert dataaaa';
					echo json_encode($log);
			} 
			else {
				$error['message'] = 'not insert';
					echo json_encode($error);
			}

}else{	
		$error['message'] = 'all field required';
					echo json_encode($error);
}
?>
