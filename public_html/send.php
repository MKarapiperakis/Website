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
		$n2 = $_POST["s"];
		$n3 = $_POST["u"];
		$n4 = $_POST["e"];
		$n5 = $_POST["p"];
		$n6 = $_POST["d"];
		$n7 = $_POST["m"];
		$n8 = $_POST["y"];
		$n9 = $_POST["g"];
		
		/* Get the name of the uploaded file */
$filename = $_FILES['file']['name'];

/* Choose where to save the uploaded file */
$location = "upload/".$filename;

/* Save the uploaded file to the local filesystem */
if ( move_uploaded_file($_FILES['file']['tmp_name'], $location) ) { 
  echo 'Success'; 
} else { 
  echo 'Failure'; 
}

$file="upload/". $filename;
if($file == "upload/")
	$file = "upload/default.png";
$query ="INSERT INTO Users(profpic, name, surname, username, email, password, dob, gender, role) VALUES ('$file', '$n1', '$n2', '$n3', '$n4', '$n5', '$n8-$n7-$n6', '$n9', 'user');";
    if ($conn->query($query) == TRUE) {
    echo "Success";}
    


?>