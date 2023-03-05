 <?php  
//Database 
require "config.php"; 

// Initialize the session & getting value
session_start();
$email = $_SESSION["email"];

// Initialize array for send output
 $output = array();
 
// Query to fetch all register 

 $query = "SELECT * FROM register WHERE NOT email = '$email'";  
 $result = mysqli_query($link, $query);  
   
      while($row = mysqli_fetch_array($result))  
      {  
           $output[] = $row;  
      }  
      echo json_encode($output);  
  
?>