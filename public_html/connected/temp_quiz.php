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
	
    	$n1 = $_POST["n1"];
    	$n2 = $_POST["n2"];
    	$n3 = $_POST["n3"];
    	$n4 = $_POST["n4"];
    	$n5 = $_POST["n5"];
    	$n6 = $_POST["n6"];
        

		


$query ="INSERT INTO Temp_Questions(quest, type, correct_ans, ans1, ans2, difficulty  ) VALUES ('$n1','$n6', '$n2', '$n3', '$n4', '$n5' );";
    if ($conn->query($query) == TRUE) {
    echo "Success";}
    


?>