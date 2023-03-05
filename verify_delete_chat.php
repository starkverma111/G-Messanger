 <?php  
 //insert.php  
 require 'config.php';
 
 // Turn off error reporting
error_reporting(0);

 $error = array();
 $log = array();

 
 $data = json_decode(file_get_contents("php://input"));

 $admin_id = mysqli_real_escape_string($link, $data->admin_id);
 $frnd_id = mysqli_real_escape_string($link, $data->frnd_id);

 
 if(!empty($admin_id) && !empty($frnd_id) ){
				
				$query ="DELETE FROM allchat WHERE sender='$admin_id' && receiver='$frnd_id'";					
					
					if(mysqli_query($link, $query)){ 
						$log['message'] = 'Chat Deleted';
						echo json_encode($log);	
					}
	}	    
 ?>  