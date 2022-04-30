<?php
 $servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database  = "new";
try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully"; 
    }
    catch(PDOException $e) {    
        echo "Connection failed: " . $e->getMessage();
        }
	
		$n1 = $_POST["n"];
		
		


$query ="DELETE FROM Users WHERE username = '$n1';";
    if ($conn->query($query) == TRUE) {
		echo "Success";}
$query2 ="DELETE FROM quiz_stats WHERE username = '$n1';";
    if ($conn->query($query2) == TRUE) {
		echo "Success";}
    


?>