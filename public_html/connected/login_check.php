<?php

session_start();

  $servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database  = "new";
try {
        $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
       
    }
    catch(PDOException $e) {    
        echo "Connection failed: " . $e->getMessage();
        }
	
		$n1 = $_POST["username"];
		$n2 = $_POST["password"];
		
		
		
$query ="SELECT username,password FROM users WHERE username = '$n1' AND password = '$n2';";
    if ($conn->query($query) == TRUE) {
    echo "Success";}
    
$sql = "SELECT * FROM Users WHERE username = '$n1' AND password = '$n2' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);



$_SESSION["username"] = $n1;
$_SESSION["role"] = $row['role'];
header("Location: index.php");
?>