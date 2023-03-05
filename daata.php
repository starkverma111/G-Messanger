<?php
	include 'config.php';
	
	$sql = "SELECT * FROM allchat";
	$result = $link->query($sql);
	
      while($row = mysqli_fetch_array($result))  
      {  
           $output[] = $row;  
      }  
      echo json_encode($output); 
?>