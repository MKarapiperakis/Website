<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname  = "new";

$conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
             
            }
	
		$n1 = $_POST["u"];
		
		



$select = mysqli_query($conn, "SELECT * FROM Users WHERE username = '$n1';");

if(mysqli_num_rows($select)) {
   $msg = "true";
   print $msg;
}
else{
	$msg = "false";
	print $msg;
}


?>