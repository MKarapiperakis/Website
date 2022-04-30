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
	
    	$n1 = $_POST["i"];
		$n2 = $_POST["q"];
        $n3 = $_POST["t"];
        $n4 = $_POST["ca"];
        $n5 = $_POST["wa"];
		$n6 = $_POST["wa2"];
        $n7 = $_POST["d"];
        


		

$query ="INSERT INTO question_repos(quest, type, correct_ans, ans1, ans2, difficulty  ) VALUES ('$n2','$n3', '$n4', '$n5', '$n6', '$n7' );";
    if ($conn->query($query) == TRUE) {
		echo "Success";}
    


?>