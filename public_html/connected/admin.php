<?php
	session_start();
	if(!isset($_SESSION["role"])){ //if login in session is not set
    header("Location: ../login.php");
}
	if ($_SESSION["role"] != "admin" && $_SESSION["role"] != "super-admin"  )
		header("Location: ../login.php");
	
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
<link rel="stylesheet" href="../styles/test.css">
<link rel="stylesheet" href="../styles/admin.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="../media/photos/f1icon.png" type="image/icon type">

<style>



table{
    font-size: 15px;
     border-collapse: collapse;
     
}
.navbar a:hover{
    cursor: pointer;
}

.navbar2 a:hover{
    cursor: pointer;
}

img {
  border-radius: 50%;
}

select{
	color: white;
	font-weight: bold;
	background-color: red;
	border-radius: 40px;
	border: 2px inset white;
}

input[type=button]{
    border-radius: 40px;
	border: 2px inset white;
}

input{
	color: white;
	font-weight: bold;
	background-color: red;
	border: none;
	text-align: center;
	
}
input[type=text] {
    width: 90%;
    height: 23px;
    border: 1px inset white;
   
}

input[type=image] {
    margin-top: 5px;
}


input:hover{
    cursor: pointer;
}



.text {
    color: red;
    font-size: 35px;
    line-height: 1.6;
    width: 100%;
    text-align: center;
   
    
}


.navbar a:hover{
    cursor: pointer;
}
.navbar2 a:hover{
    cursor: pointer;
}

h2{
    color: red;
}


.container{
    width: 100%;
    text-align: center;
    
}

p{
    color: white;
}

.error{
	font-size: 12px;
	margin-top: 5px;
	color: white;
	text-align: center;
	
	
}



</style>
</head>



<body>


<div class="navbar">											<!-- menu που εμφανίζεται μόνο σε Desktop -->
  <a href="index.php">ΑΡΧΙΚΗ</a>
  <a href="basics.php">ΕΙΣΑΓΩΓΗ</a>
  <a href="more.php">ΠΕΡΙΣΣΟΤΕΡΑ</a>
  <a href="quiz.php">QUIZ</a>
  
  <?php
  $var = $_SESSION["role"];
 echo " <a href= \"javascript:role_check('$var');\" style=\"background-color: #010f26;\">ΡΥΘΜΙΣΕΙΣ</a>"
  
  ?>
  
  
  <a 

   <input type = "button" onclick = "end()">ΑΠΟΣΥΝΔΕΣΗ</a>
  
</div>

<div class="navbar2">		
	<div class = "dropdown">									<!-- menu που εμφανίζεται σε tablet και κινητά -->
		<button class="dropbtn"><img src="../media/photos/menu.png" align="center" alt="menu" width = 70px height = 50px></button>

		<div class="dropdown-content">
		  <a href="index.php" >ΑΡΧΙΚΗ</a>
		  
		  <a href="basics.php">ΕΙΣΑΓΩΓΗ</a>
		  
		  <a href="more.php">ΠΕΡΙΣΣΟΤΕΡΑ</a>
		  
		  <a href="quiz.php">QUIZ</a>
		  
		  <?php
  $var = $_SESSION["role"];
 echo " <a href= \"javascript:role_check('$var');\" style=\"background-color: #010f26;\">ΡΥΘΜΙΣΕΙΣ</a>"
  
  ?>
  
  
  <a 

   <input type = "button" onclick = "end()">ΑΠΟΣΥΝΔΕΣΗ</a>
  
</div>
		 
		  
		</div>
	</div>  
</div>

<div class = "header" >
	<h1>Η ιστορία της 
				<a href="index.php"><img src="../media/photos/logo.png" align="center" alt="F1" width = 100px height = 60px style = "border-radius: 0%;"></a>
	</h1>
	
</div>

<div class = "box" >
	<label>
		<input type = "checkbox" id = "ld" name = "ld">
		<span></span>
		<i class = "indicator"></i>
	</label>
</div>
<main>

<div class="col-12 col-s-12" >
        &nbsp;
    </div>
    <div class = "text"  >
        <?php
        $usr = $_SESSION["username"];
        echo "<h3>$usr</h3>"; 
       ?>
    </div>
     
    <!-- CHANGE PROFIL PHOTO -->
    
    <div class="col-12 col-s-12">
       <div class = "container">
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
            
            $usr = $_SESSION["username"];
            $sql = "SELECT * FROM Users WHERE username = '$usr'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
             
            echo "<h2>Profile Picture</h2>";
           
            echo"<br><br><input type = \"file\" name =\"fileupload\" id = \"fileupload\" accept=\"image\/\*\">";
            echo "<h3><img src = ../" . $row['profpic'] . " width = 100px; height = 100px;></h3> 
            
            <input type=\"image\" src=\"../media/photos/edit2.png\" name=\"submit\" width=\"60\" height=\"50\" style = \"background: none;\" onclick=\"pic_change('$usr')\">";
             
            //echo"<input type = \"file\" name =\"fileupload\" id = \"fileupload\" accept=\"image\/\*\">";
           // echo"<h2>Username</h2>";
            //echo "<h2>" . $row['username'] . "</h2>";
        ?>
        
       

       


    </div> 
    </div>
     
     <div class="col-12 col-s-12">
        &nbsp;
     </div>
      <div class="col-2 col-s-2">
        &nbsp;
     </div>
     <!-- CHANGE NAME -->
     
      <div class="col-4 col-s-4">
       <div class = "container" algin: center>
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
            
            $usr = $_SESSION["username"];
            
            $sql = "SELECT * FROM Users WHERE username = '$usr'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
           $name =  $row['name'];
           
            echo"<h2>Name</h2>";
             
          echo"<p name = \"color\"> <input type = \"text\" maxlength =\"15\"value = $name id = \"nm\"</p>";
          
           echo "<br><br><input type=\"image\" src=\"../media/photos/edit2.png\" name=\"submit\" width=\"60\" height=\"50\" style = \"background: none;\" onclick=\"name_change('$usr')\">";
          echo "<div class = \"error\" id = \"name\" name = \"color\"></div>"
        ?>
    
    </div> 
    </div>
    
    <!-- CHANGE SURNAME -->
    <div class="col-4 col-s-4">
       <div class = "container">
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
            
            $usr = $_SESSION["username"];
            
            $sql = "SELECT * FROM Users WHERE username = '$usr'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
           $surname =  $row['surname'];
           
            echo"<h2>Surname</h2>";
          echo"<p name = \"color\"> <input type = \"text\" maxlength =\"25\"value = $surname id = \"snm\"</p>";
         
           echo "<br><br><input type=\"image\" src=\"../media/photos/edit2.png\" name=\"submit\" width=\"60\" height=\"50\" style = \"background: none;\" onclick=\"surname_change('$usr')\">";
           echo "<div class = \"error\" id = \"surname\" name = \"color\"></div>"
        ?>
    
    </div> 
    </div>
    
    <div class="col-12 col-s-12">
        &nbsp;
     </div>
      <div class="col-2 col-s-2">
        &nbsp;
     </div>
     
     <!-- CHANGE EMAIL -->
    <div class="col-4 col-s-4">
       <div class = "container">
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
            
            $usr = $_SESSION["username"];
            
            $sql = "SELECT * FROM Users WHERE username = '$usr'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
           $email =  $row['email'];
           
            echo"<h2>Email</h2>";
          echo"<p name = \"color\"> <input type = \"text\" maxlength =\"28\" value = $email id = \"em\"</p>";
         
           echo "<br><br><input type=\"image\" src=\"../media/photos/edit2.png\" name=\"submit\" width=\"60\" height=\"50\" style = \"background: none;\" onclick=\"email_change('$usr')\">";
           echo " <div class = \"error\" id = \"email\" name = \"color\"></div>"
        ?>
    
    </div> 
    </div>
    
    
     <!-- PASSWORD -->
    <div class="col-4 col-s-4">
       <div class = "container">
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
            
            $usr = $_SESSION["username"];
            
            $sql = "SELECT * FROM Users WHERE username = '$usr'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
           $password =  $row['password'];
           
            echo"<h2>Password</h2>";
          echo"<p name = \"color\"> <input type = \"text\" maxlength =\"20\" value = $password id = \"pass\"</p>";
         
           echo "<br><br><input type=\"image\" src=\"../media/photos/edit2.png\" name=\"submit\" width=\"60\" height=\"50\" style = \"background: none;\" onclick=\"password_change('$usr')\">";
           echo"<div class = \"error\" id = \"password\" name = \"color\"></div>"
        ?>
    
    </div> 
    </div>
    
    <div class="col-12 col-s-12">
        &nbsp;
    </div>
    <div class="col-2 col-s-2">
        &nbsp;
     </div>
     <!-- DATE OF BIRTH -->
    <div class="col-4 col-s-4">
       <div class = "container">
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
            
            $usr = $_SESSION["username"];
            
            $sql = "SELECT * FROM Users WHERE username = '$usr'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
           $dob =  $row['dob'];
            echo"<h2>Date of birth</h2>";
           
            echo"<p name = \"color\" id = \"date\">$dob </p>";
           echo "
            <select size = \"1\" name = \"day\" id =\"day\">
            
			<option selected value = \"0\"> Hμέρα
			<option value = \"1\"> 1
			<option value = \"2\" > 2
			<option value = \"3\" > 3
			<option value = \"4\" > 4
			<option value = \"5\" > 5
			<option value = \"6\" > 6
			<option value = \"7\" > 7
			<option value = \"8\" > 8
			<option value = \"9\" > 9
			<option value = \"10\" > 10
			<option value = \"11\" > 11
			<option value = \"12\" > 12
			<option value = \"13\" > 13
			<option value = \"14\" > 14
			<option value = \"15\" > 15
			<option value = \"16\" > 16
			<option value = \"17\" > 17
			<option value = \"18\" > 18
			<option value = \"19\" > 19
			<option value = \"20\" > 20
			<option value = \"21\" > 21
			<option value = \"22\" > 22
			<option value = \"23\" > 23
			<option value = \"24\" > 24
			<option value = \"25\" > 25
			<option value = \"26\" > 26
			<option value = \"27\" > 27
			<option value = \"28\" > 28
			<option value = \"29\" > 29
			<option value = \"30\" > 30
			<option value = \"31\" > 31
			</select>
			
			<select size = \"1\" name = \"month\" id =\"month\" ;>
			<option selected value = \"0\"> Μήνας
			<option  value = \"1\"> Ιαν
			<option  value = \"2\"> Φεβ
			<option  value = \"3\"> Μαρ
			<option  value = \"4\"> Απρ
			<option  value = \"5\"> Μαι
			<option  value = \"6\"> Ιουν
			<option  value = \"7\"> Ιουλ	
			<option  value = \"8\"> Αυγ
			<option  value = \"9\"> Σεπ
			<option  value = \"10\"> Οκτ
			<option  value = \"11\"> Νοεμ
			<option  value = \"12\"> Δεκ
			</select>
			
			<select size = \"1\" name = \"year\" id =\"year\" ;>
			<option selected value = \"0\"> Έτος
			<option value = \"1970\" > 1970
			<option value = \"1971\" > 1971
			<option value = \"1972\" > 1972
			<option value = \"1973\" > 1973
			<option value = \"1974\" > 1974
			<option value = \"1975\" > 1975
			<option value = \"1976\" > 1976
			<option value = \"1977\" > 1977
			<option value = \"1978\" > 1978
			<option value = \"1979\" > 1979
			<option value = \"1980\" > 1980
			<option value = \"1981\" > 1981
			<option value = \"1982\" > 1982
			<option value = \"1983\" > 1983
			<option value = \"1984\" > 1984
			<option value = \"1985\" > 1985
			<option value = \"1986\" > 1986
			<option value = \"1987\" > 1987
			<option value = \"1988\" > 1988
			<option value = \"1989\" > 1989
			<option value = \"1990\" > 1990
			<option value = \"1991\" > 1991
			<option value = \"1992\" > 1992
			<option value = \"1993\" > 1993
			<option value = \"1994\" > 1994
			<option value = \"1995\" > 1995
			<option value = \"1996\" > 1996
			<option value = \"1997\" > 1997
			<option value = \"1998\" > 1998
			<option value = \"1999\" > 1999
			<option value = \"2000\" > 2000
			<option value = \"2001\" > 2001
			<option value = \"2002\" > 2002
			<option value = \"2003\" > 2003
			<option value = \"2004\" > 2004
			<option value = \"2005\" > 2005
			<option value = \"2006\" > 2006
			<option value = \"2007\" > 2007
			<option value = \"2008\" > 2008
			<option value = \"2009\" > 2009
			<option value = \"2010\" > 2010
			</select>
			
			<br>
			";
         
           echo "<br><br><input type=\"image\" src=\"../media/photos/edit2.png\" name=\"submit\" width=\"60\" height=\"50\" style = \"background: none;\" onclick=\"dob_change('$usr')\">";
           echo "<div class = \"error\" id = \"dateob\" name = \"color\"></div>"
        ?>
    
    </div> 
    </div>
      
    <!-- GENDER -->
    <div class="col-4 col-s-4">
       <div class = "container">
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
            
            $usr = $_SESSION["username"];
            
            $sql = "SELECT * FROM Users WHERE username = '$usr'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
           $gender =  $row['gender'];
           
            echo"<h2>Gender</h2>";
             echo"<p name = \"color\" id = \"gen\">$gender </p>";
         
            echo "
            <select size = \"1\" name = \"gender\" id =\"gender\" ;>
             <option selected value = \"0\" > Αλλαγή
            <option value = \"Άνδρας\" > Άνδρας
			<option value = \"Γυναίκα\" > Γυναίκα
			</select><br>
            ";
         
           echo "<br><br><input type=\"image\" src=\"../media/photos/edit2.png\" name=\"submit\" width=\"60\" height=\"50\" style = \"background: none;\" onclick=\"gender_change('$usr')\">";
         echo " <div class = \"error\" id = \"gender2\" name = \"color\"></div>"
        ?>
    
    </div> 
    </div>
    <div class="col-12 col-s-12" style = "height: 50px;">
        &nbsp;
    </div>
       
 
     <div class="col-12 col-s-12" style="text-align: center;" >
         <h2 >ADMIN PANEL </h2>
        
        
    </div>
    
    
    <div class="col-12 col-s-12" style="overflow-x:auto;">
    
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
        
        $sql = "SELECT * FROM Users";
        $result = mysqli_query($conn, $sql);
        
        echo "<table border='1' > 
        <tr>
		<th name = \"color\">profil_pic</th>
		<th name = \"color\">username</th>
        <th name = \"color\">name</th>
        <th name = \"color\">surname</th>
        <th name = \"color\">email</th>
        <th name = \"color\">password</th>
        <th name = \"color\">dob</th>
        <th name = \"color\">gender</th>
		<th name = \"color\">role</th>
		<th name = \"color\">Change_role</th>
		<th name = \"color\">Delete</th>
        </tr>";
        
         while($row = mysqli_fetch_array($result))
        {
        echo "<tr>";
        echo "<td ><img src = ../" . $row['profpic'] . " width = 100px; height = 100px;></td>";
        echo "<td name = \"color\">" . $row['username'] . "</td>";
        echo "<td name = \"color\">" . $row['name'] . "</td>";
        echo "<td name = \"color\">" . $row['surname'] . "</td>";
        echo "<td name = \"color\">" . $row['email'] . "</td>";
        echo "<td name = \"color\">" . $row['password'] . "</td>";
        echo "<td name = \"color\">" . $row['dob'] . "</td>";
        echo "<td name = \"color\">" . $row['gender'] . "</td>";
        echo "<td name = \"color\">" . $row['role'] . "</td>";
		$var1 = $row['username'];
		$var2 = $row['role'];
		
        echo " <td> 
		
        <select name = \"level\" onChange = \"results(this,'$var1','$var2')\">
        <option value=\"user\">Change</option> 
        <option value=\"admin\">Admin</option> 
        <option value=\"moderator\">Moderator</option>
        <option value=\"user\">User</option>
		
        </select>
		
		
		
    </td>";
	
	echo " <td> 
		
        <input style = \"width: 90px\" type = \"button\" value = \"delete\" onclick=\"del('$var1','$var2')\">
		
		
		
    </td>";
	
        echo "</tr>";
        }
        echo "</table>";
        
        mysqli_close($conn);
    ?>

    </div>
    
    
     <div class="col-12 col-s-12" style="text-align: center;height = 100px;" >
         <h2 >QUIZ RESULTS </h2>
        
        
    </div>
    
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
        $usr = $_SESSION["username"];
        $sql = "SELECT * FROM quiz_stats WHERE username='$usr'";
        $result = mysqli_query($conn, $sql);
        

        echo "<table border='1' > 
        <tr>
        <th name = \"color\">difficulty level</th>
		<th name = \"color\">time</th>
        <th name = \"color\">results</th>
      
        </tr>";
        
         while($row = mysqli_fetch_array($result))
        {
        echo "<tr>";
        echo "<td name = \"color\">" . $row['difficulty'] . "</td>";
        echo "<td name = \"color\">" . $row['time'] . "</td>";
        echo "<td name = \"color\">" . $row['results'] . "</td>";
        echo "</tr>";
        }
        echo "</table>";
        
        mysqli_close($conn);
    ?>
    
     <!-- DELETE - CHANGE - INSERT TO REPOSITORY -->
     <div class="col-12 col-s-12" style="text-align: center;height = 100px;" >
         <h2 >QUESTIONS </h2>
        
        
    </div>
    
    <div class="col-12 col-s-12" style="overflow-x:auto;">
        
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
        $usr = $_SESSION["username"];
        $sql = "SELECT * FROM Temp_Questions";
        $result = mysqli_query($conn, $sql);
        

        echo "<table border='1' > 
        <tr>
        <th name = \"color\">Question</th>
		<th name = \"color\">Type</th>
        <th name = \"color\">Correct answer</th>
        <th name = \"color\">Wrong answer</th>
        <th name = \"color\">Wrong answer</th>
        <th name = \"color\">Difficulty level</th>
        <th name = \"color\">Decline</th>
        <th name = \"color\">Change</th>
        <th name = \"color\">Accept</th>
        </tr>";
        
        $counter = 0;
         while($row = mysqli_fetch_array($result))
        {
        $counter++;
        echo "<tr>";
        
        echo "<td > <input type = \"text\" name = \"color\" maxlength =\"200\"value = '$row[quest]' style = \"background: none; border: none \" id =  \"quest{$counter}\"></td>";
        echo "<td > <input type = \"text\" name = \"color\" maxlength =\"15\"value = '$row[type]' style = \"background: none; border: none \"id = \"type{$counter}\"></td>";
        echo "<td > <input type = \"text\" name = \"color\" maxlength =\"50\"value = '$row[correct_ans]' style = \"background: none; border: none \"id = \"correct{$counter}\"></td>";
        echo "<td > <input type = \"text\" name = \"color\" maxlength =\"50\"value = '$row[ans1]' style = \"background: none; border: none \" id =  \"ans1{$counter}\"></td>";
        echo "<td > <input type = \"text\" name = \"color\" maxlength =\"50\"value = '$row[ans2]' style = \"background: none; border: none \" id =  \"ans2{$counter}\"></td>";
       echo "<td> <input type = \"text\"   name = \"color\" maxlength =\"50\"value = '$row[difficulty]' style = \"background: none; border: none \" id =  \"diff{$counter}\"></td>";
        $id = $row['id'];
        echo " <td name = \"color\"> <input style = \"width: 90px\" type = \"button\" value = \"Decline\" onclick=\"delete_quest('$id')\"> </td>";
        echo " <td name = \"color\"> <input style = \"width: 90px\" type = \"button\" value = \"Change\" onclick=\"change_quest('$id','$counter')\"> </td>";
        echo " <td name = \"color\"> <input style = \"width: 90px\" type = \"button\" value = \"Accept\" onclick=\"insert_quest('$id','$counter')\"> </td>";
		
		
		
   
        echo "</tr>";
        }
        echo "</table>";
        
        mysqli_close($conn);
    ?>
    </div>
    
     <!-- QUIZ REPOSITORY -->
     <div class="col-12 col-s-12" style="text-align: center;height = 100px;" >
         <h2 >REPOSITORY </h2>
        
        
    </div>
     <div class="col-12 col-s-12" style="overflow-x:auto;">
        
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
        $usr = $_SESSION["username"];
        $sql = "SELECT * FROM question_repos";
        $result = mysqli_query($conn, $sql);
        

        echo "<table border='1' > 
        <tr>
        <th name = \"color\">Question</th>
		<th name = \"color\">Type</th>
        <th name = \"color\">Correct answer</th>
        <th name = \"color\">Wrong answer</th>
        <th name = \"color\">Wrong answer</th>
        <th name = \"color\">Difficulty level</th>
        <th name = \"color\">Delete</th>
        </tr>";
        
        $counter = 0;
         while($row = mysqli_fetch_array($result))
        {
        $counter++;
        echo "<tr>";
        
       
       
       echo "<td name = \"color\">" . $row['quest'] . "</td>";
       echo "<td name = \"color\">" . $row['type'] . "</td>";
       echo "<td name = \"color\">" . $row['correct_ans'] . "</td>";
       echo "<td name = \"color\">" . $row['ans1'] . "</td>";
       echo "<td name = \"color\">" . $row['ans2'] . "</td>";
       echo "<td name = \"color\">" . $row['difficulty'] . "</td>";
       $id = $row['id'];
	   echo " <td name = \"color\"> <input style = \"width: 90px\" type = \"button\" value = \"Delete\" onclick=\"delete_repository('$id')\"> </td>";
		
		
   
        echo "</tr>";
        }
        echo "</table>";
        
        mysqli_close($conn);
    ?>
    </div>
    
    <div class="col-12 col-s-12" style = "height: 50px;">
        &nbsp;
    </div>
     
</main>


<script>

const checkbox = document.getElementById('ld')

checkbox.addEventListener('change', (event) => {
  if (event.currentTarget.checked) {
      document.body.style.backgroundColor = "white";
	  for(let i = 0; i < document.getElementsByName("color").length;i++)
		document.getElementsByName("color")[i].style.color = "black";	  
  } else {
    document.body.style.backgroundColor = "black";
	for(let i = 0; i < document.getElementsByName("color").length;i++)
		document.getElementsByName("color")[i].style.color = "white";
  }
})

function delete_quest(id)
{
   
    var data = new FormData();
    data.append("i",id);
    var xhr = new XMLHttpRequest();
    xhr.open('POST', "delete_question.php");
    xhr.send(data);
	
}

function delete_repository(id)
{
   //alert(id);
    var data = new FormData();
    data.append("i",id);
    var xhr = new XMLHttpRequest();
    xhr.open('POST', "delete_repository.php");
    xhr.send(data);
	
}

function change_quest(id,counter)
{
   var n ="quest".concat(counter)
   var n2 ="type".concat(counter)
   var n3 ="correct".concat(counter)
   var n4 ="ans1".concat(counter)
   var n5 ="ans2".concat(counter)
   var n6 ="diff".concat(counter)
    
    var question = document.getElementById(n).value;
    var type = document.getElementById(n2).value;
    var correct_ans = document.getElementById(n3).value;
    var wrong_ans = document.getElementById(n4).value;
    var wrong_ans2 = document.getElementById(n5).value;
    var dif = document.getElementById(n6).value;
    
    
    //alert("\nquestion: " + question + "\ntype: " + type + "\ncorrect answer: "+correct_ans + "\nwrong answer: " + wrong_ans + "\nwrong answer 2: " + wrong_ans2 + "\ndifficulty: " + dif);
  
	var data = new FormData();
	data.append("i",id);
    data.append("q",question);
    data.append("t",type);
    data.append("ca",correct_ans);
    data.append("wa",wrong_ans);
    data.append("wa2",wrong_ans2);
    data.append("d",dif);
    
    var xhr = new XMLHttpRequest();
    xhr.open('POST', "change_question.php");
    xhr.send(data);
}

function insert_quest(id,counter)
{
   var n ="quest".concat(counter)
   var n2 ="type".concat(counter)
   var n3 ="correct".concat(counter)
   var n4 ="ans1".concat(counter)
   var n5 ="ans2".concat(counter)
   var n6 ="diff".concat(counter)
    
    var question = document.getElementById(n).value;
    var type = document.getElementById(n2).value;
    var correct_ans = document.getElementById(n3).value;
    var wrong_ans = document.getElementById(n4).value;
    var wrong_ans2 = document.getElementById(n5).value;
    var dif = document.getElementById(n6).value;
    
    
    //alert("\nquestion: " + question + "\ntype: " + type + "\ncorrect answer: "+correct_ans + "\nwrong answer: " + wrong_ans + "\nwrong answer 2: " + wrong_ans2 + "\ndifficulty: " + dif);
  
	var data = new FormData();
	data.append("i",id);
    data.append("q",question);
    data.append("t",type);
    data.append("ca",correct_ans);
    data.append("wa",wrong_ans);
    data.append("wa2",wrong_ans2);
    data.append("d",dif);
    
    var xhr = new XMLHttpRequest();
    xhr.open('POST', "insert_question.php");
    xhr.send(data);
}

function results(obj,username,role){
	 if(role == "super-admin")
	    alert("You can't change the role of a super-admin");
	 else
	 {
         var data = new FormData();
         data.append("n",username);
         data.append("n2",obj.options[obj.selectedIndex].value);
         var xhr = new XMLHttpRequest();
         xhr.open('POST', "change.php");
         xhr.send(data);
         
	 }
	 
}

function del(username,role)
{
    if(role == "super-admin")
	    alert("You can't delete a super-admin");
	 else
	 {
        var data = new FormData();
        data.append("n",username);
        var xhr = new XMLHttpRequest();
        xhr.open('POST', "delete.php");
        xhr.send(data);
	 }
	
}

function end()
{
	window.location.href = "sessionend.php";
}
function pic_change(username)
{
   
    
	var data = new FormData();
	
	data.append("file", fileupload.files[0]);
	data.append("u", username)
	
	var xhr = new XMLHttpRequest();
    xhr.open('POST', "../photo_update.php");
	xhr.send(data);
	

     return false;
}

function name_change(username)
{
   
   var name = document.getElementById("nm").value;
   
if(name.length == 0 )
{
	document.getElementById("name").innerHTML = "Name field can't be empty";

}
else
{
    if(name.indexOf(' ') >= 0)
        	document.getElementById("name").innerHTML = "White Space is not allowed";
    else
    {
	var data = new FormData();
	document.getElementById("name").innerHTML = "";
	
	data.append("u", username);
	data.append("n", name);
	
	var xhr = new XMLHttpRequest();
    xhr.open('POST', "name_update.php");
	xhr.send(data);
	
	
     return false; 
    }
}
}

function surname_change(username)
{
   
var name = document.getElementById("snm").value;

if(name.length == 0 )
{
	document.getElementById("surname").innerHTML = "Surname field can't be empty";

}
else
{
    if(name.indexOf(' ') >= 0)
        	document.getElementById("surname").innerHTML = "White Space is not allowed";
    else
    {
	var data = new FormData();
		document.getElementById("surname").innerHTML = "";
	
	data.append("u", username);
	data.append("s", name);
	
	var xhr = new XMLHttpRequest();
    xhr.open('POST', "surname_update.php");
	xhr.send(data);
	
	
     return false; 
    }
}
}

function email_change(username)
{
    var email = document.getElementById("em").value;
   
   if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email))
   {
        document.getElementById("email").innerHTML = "";
       var email = document.getElementById("em").value;
   
	var data = new FormData();
	
	
	data.append("u", username);
	data.append("e", email);
	
	var xhr = new XMLHttpRequest();
    xhr.open('POST', "email_update.php");
	xhr.send(data);
	
	
     return false; 
   }
   else
   {
   
     document.getElementById("email").innerHTML = "Invalid Email";
   }
}

function password_change(username)
{
   
   var password = document.getElementById("pass").value;
   if(password.length == 0 )
    {
    	document.getElementById("password").innerHTML = "Password field can't be empty";
    
    }
    else
    {
        if(password.indexOf(' ') >= 0)
        	document.getElementById("password").innerHTML = "White Space is not allowed";
        else
        {
        var data = new FormData();
        document.getElementById("password").innerHTML = "";
        
        data.append("u", username);
        data.append("p", password);
        
        var xhr = new XMLHttpRequest();
        xhr.open('POST', "password_update.php");
        xhr.send(data);
        
        
         return false; 
        }
    }
}

function dob_change(username)
{
   
   var day = document.getElementById("day").value;
   var month = document.getElementById("month").value;
   var year = document.getElementById("year").value;
   
   if(month == 0 || day == 0 || year == 0)
   {
       document.getElementById("dateob").innerHTML = "Invalid date of birth";
   }
   else
   {
       document.getElementById("dateob").innerHTML = "";
   if(month < 10 & day < 10)
        document.getElementById("date").innerHTML = year + "-0" + month + "-0" + day;
   else  if(day < 10)
        document.getElementById("date").innerHTML = year + "-" + month + "-0" + day;
    else if(month < 10)
        document.getElementById("date").innerHTML = year + "-0" + month + "-" + day;
    else
        document.getElementById("date").innerHTML = year + "-" + month + "-" + day;
	var data = new FormData();
	
	
	data.append("u", username);
	data.append("d", day);
	data.append("m", month);
	data.append("y", year);
	
	var xhr = new XMLHttpRequest();
    xhr.open('POST', "dob_update.php");
	xhr.send(data);
	
	
     return false; 
   }
}

function gender_change(username)
{
   
   var gender = document.getElementById("gender").value;
   if(gender == 0)
   {
       	document.getElementById("gender2").innerHTML = "Invalid gender";
   }
   else
   {
       document.getElementById("gender2").innerHTML = "";
	var data = new FormData();
	
	
	data.append("u", username);
	data.append("g", gender);
	
	var xhr = new XMLHttpRequest();
    xhr.open('POST', "gender_update.php");
	xhr.send(data);
	
	document.getElementById("gen").innerHTML = gender;
     return false; 
   }
}
</script>
</body
</hmtl>
	