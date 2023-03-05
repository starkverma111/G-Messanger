<?php

/* Getting file name */
$filename = $_FILES['file']['name'];

/* Location */
$location = 'uploads/';

$response = array();
/* Upload file */
if(move_uploaded_file($_FILES['file']['tmp_name'],$location.$filename)){
   $response['name'] = $filename; 
} else{
   $response['name'] = "File not uploaded.";
}
echo json_encode($response);
exit;

?>