<?php
include("action.php");

echo "Welcome! This is your wallet balance";

$connect = mysqli_connect("localhost", "root", "jbrag42669", "testdb");


$query = "  
      SELECT balance FROM wallet  
      WHERE username = 'Joel'        
      ";

      $result = mysqli_query($connect, $query);  

      if ($result !== false) {
    	$value = mysqli_fetch_field($result);
    	}


      echo " ";	
      echo 50000;
?>
<html>
      <a href="kart.php">Click here to shop ! </a>
</html>






