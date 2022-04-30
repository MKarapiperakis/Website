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
	
    	$n1 = $_POST["u"];
		$n2 = $_POST["r"];
		$n3 = $_POST["d"];
        $n4 = $_POST["dl"];


		


$query ="INSERT INTO quiz_stats(username, time, results, difficulty) VALUES ('$n1', '$n3', '$n2','$n4');";
    if ($conn->query($query) == TRUE) {
		echo "New record created successfully";}
    



//$pass = true;
//echo $pass ? "ok" : "ERROR" ;
?>