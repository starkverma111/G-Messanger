 <?php  
//Database 
require "config.php"; 

// Initialize the session
session_start();

$email = $_SESSION["email"];

// Initialize the array
 $output = array();

// Query to get admin data
 $query = "SELECT * FROM register  WHERE email='$email'";  
 $result = mysqli_query($link, $query);  
   
      while($row = mysqli_fetch_array($result))  
      {  
           $output[] = $row;  
      }  
      echo json_encode($output);  
  
 ?>