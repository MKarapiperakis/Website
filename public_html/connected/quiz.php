<?php
	session_start();

if(!isset($_SESSION["role"]))
	{ 
	    
        header("Location: ../login.php");
      
    }
    
  
   
	if ($_SESSION["role"] != "admin" && $_SESSION["role"] != "super-admin" && $_SESSION["role"] != "user" && $_SESSION["role"] != "moderator")
	{
		header("Location: ../login.php");
		 
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Quiz</title>
<link rel="stylesheet" href="../styles/test.css">
<link rel="stylesheet" href="../styles/quiz.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="../media/photos/f1icon.png" type="image/icon type">

<style>
.navbar a:hover{
    cursor: pointer;
}
.navbar2 a:hover{
    cursor: pointer;
}

.easy
{
    color: white;
    visibility : hidden

}

.easy p{
    color: red;
    font-size: 18px;
}


.easy input{
  color: red;
  font-size:18px;
  text-align:center;
  background: white;
  

}

.hard
{
    color: white;
    visibility : hidden

}

.hard p{
    color: red;
    font-size: 18px;
}


.hard input{
  color: red;
  font-size:18px;
  text-align:center;
  background: white;
  

}


h3
{
    color: red;
}

select
{
    border-radius: 40px;
    width: 70px;
   
}
</style>
</head>
<body>

<div class="navbar">											<!-- menu που εμφανίζεται μόνο σε Desktop -->
  <a href="index.php">ΑΡΧΙΚΗ</a>
  <a href="basics.php" >ΕΙΣΑΓΩΓΗ</a>
  <a href="more.php" >ΠΕΡΙΣΣΟΤΕΡΑ</a>
  <a href="quiz.php" style="background-color: #010f26;">QUIZ</a>
  
  <?php
  $var = $_SESSION["role"];
 echo " <a href= \"javascript:role_check('$var');\">ΡΥΘΜΙΣΕΙΣ</a>"
  
  ?>
  
  
  <a 

   <input type = "button" onclick = "end()">ΑΠΟΣΥΝΔΕΣΗ</a>
  
</div>



	
<div class="navbar2">		
	<div class = "dropdown">									<!-- menu που εμφανίζεται σε tablet και κινητά -->
		<button class="dropbtn"><img src="../media/photos/menu.png" align="center" alt="menu" width = 70px height = 50px></button>

		<div class="dropdown-content">
		  <a href="index.php"  >ΑΡΧΙΚΗ</a>
		  
		  <a href="basics.php">ΕΙΣΑΓΩΓΗ</a>
		  
		  <a href="more.php" >ΠΕΡΙΣΣΟΤΕΡΑ</a>
		  
		  <a href="quiz.php" style="background-color: #010f26;">QUIZ</a>
		  
		  <?php
  $var = $_SESSION["role"];
 echo " <a href= \"javascript:role_check('$var');\">ΡΥΘΜΙΣΕΙΣ</a>"
  
  ?>
  
  
  <a 

   <input type = "button" onclick = "end()">ΑΠΟΣΥΝΔΕΣΗ</a>
  
</div>
		 
		  
		</div>
	</div>  
</div>
		
		
<div class = "header" >
	<h1>Η ιστορία της
				
					<a href="index.php"><img src="../media/photos/logo.png" align="center" alt="F1" width = 100px height = 60px></a>	
	</h1>
	
</div>		
		


<div class="col-12 col-s-12" style="height:100px">
    &nbsp;
</div>	
<div class="col-12 col-s-12">
    <h3>Επίπεδο δυσκολίας</h3>
    <select name = "difficulty" onChange = "dif(this)">
    <option value="default">Default</option> 
    <option value="easy">Easy</option> 
    <option value="hard">Hard</option>
    
    
    </select>
</div>

	
<div class="main" id="main">
	<form name="quiz" id = "quiz">
	<!-- 1Η ΕΡΩΤΗΣΗ -->
	<div class="col-3 col-s-6" name = "question">
		
			 <p >Ποιο έτος ξεκίνησε επίσημα το πρωτάθλημα της Formula 1;</p>
				  <input  type="radio" id="1a" name="q1" value="1a">
				  1950<br>
				  <input  type="radio" id="1b" name="q1" value="1b">
				  1960<br>
				  <input type="radio" id="1c" name="q1" value="1c">
				  1970<br>
				  
				
	</div>
	
    <!-- 2Η ΕΡΩΤΗΣΗ -->
	<div class="col-3 col-s-6" name = "question">
		
			 <p>Ποιος είναι ο πιο πετυχημένος βρετανός πιλότος στην ιστορία του αθλήματος;</p>
				  <input  type="radio" id="2a" name="q2" value="2a">
				  Nigel Mansell<br>
				  <input  type="radio" id="2b" name="q2" value="2b">
				  Lewis Hamilton<br>
				  <input type="radio" id="2c" name="q2" value="2c">
				  Jackie Stewart<br>
			
	</div>
	
	<!-- 3Η ΕΡΩΤΗΣΗ -->
	<div class="col-3 col-s-6" name = "question">
		
			 <p>O Sebastian Vettel κέρδισε όλα του τα πρωταθλήματα με την ομάδα της Red Bull Racing.</p>
				  <input  type="radio" id="3a" name="q3" value="3a">
				  Σωστό<br>
				  <input  type="radio" id="3b" name="q3" value="3b">
				  Λάθος

		
	</div>
	
    <!-- 4Η ΕΡΩΤΗΣΗ -->
	<div class="col-3 col-s-6" name = "question">
		
			 <p >H Ferrari είναι η στατιστικά πιο πετυχημένη ομάδα.</p>
				  <input  type="radio" id="4a" name="q4" value="4a">
				  Σωστό<br>
				  <input  type="radio" id="4b" name="q4" value="4b">
				  Λάθος<br>

		
	</div>
	
	<div class = "col-12 col-s-12">
		&nbsp;
	</div>
	
    <!-- 5Η ΕΡΩΤΗΣΗ -->
	<div class="col-3 col-s-6" name = "question">
		
			 <p >O Sebastian Vettel είναι Έλληνας.</p>
				  <input  type="radio" id="5a" name="q5" value="5a">
				  Σωστό<br>
				  <input  type="radio" id="5b" name="q5" value="5b">
				  Λάθος

		
	</div>
	
	<!-- 6Η ΕΡΩΤΗΣΗ -->
	<div class="col-3 col-s-6" name = "question">
		
						
		 <p >Ποιοι οδηγοί έχουν ίδιο αριθμό πρωταθηλμάτων;</p>
			  <input  type="checkbox" id="6a" name="q6" value="6a">
			  Fernando Alosno<br>
			  <input  type="checkbox" id="6b" name="q6" value="6b">
			  Michael Schumacher<br>
			  <input type="checkbox" id="6c" name="q6" value="6c">
			  Lewis Hamilton<br>

		
	</div>
	
    <!-- 7Η ΕΡΩΤΗΣΗ -->
	<div class="col-3 col-s-12" name = "question">
		
			
			 <p >O <input  type="text" id="7" name="q7" value=""  maxlength="30" size = "10"> είναι ο πιο πετυχημένος Γερμανός πιλότος</p>			
		
	</div>
	
	<!-- 8Η ΕΡΩΤΗΣΗ -->
	<div class="col-3 col-s-12" name = "question">
		
			
			 <p>Η βρετανική ομάδα της <input  type="text" id="8" name="q8" value="" maxlength="10" size = "10"> κυριάρχησε την δεκαετία του 90.</p>		
		
	</div>
	
	<div class = "col-12 col-s-12">
		&nbsp;
	</div>
	
    <!-- 9Η ΕΡΩΤΗΣΗ -->
	<div class="col-3 col-s-12" name = "question">
		
			
			<p >O Ayrton Senna κέρδισε <input  type="text" id="9" name="q9" value="" maxlength="2" size = "3"> πρωταθλήματα.</p>
		    
	</div>
	
	<div class="col-12 col-s-12">
    	<p id = "default_results">Results: </p>
	</div>
	
	
	 <?php
	  $usr = $_SESSION["username"];
	echo "<div class=\"col-12 col-s-12\">";
			echo 	"<input type=\"submit\" class = \"btn_submit\" value=\"Submit\" onclick=\"results('$usr',event)\"></div> ";
	 
	?>
	
	</form>
	<div class = "col-12 col-s-12"  >
	<a href="insert.php" target="_blank" ><img src="../media/photos/add.png" align="center" alt="F1" width = 60px height = 60px ></a>
</div>
</div>
<div class="easy" id="ea" name = "ea">
   <form id = "eas" name = "eas">
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
            
           //single type
            
            $sql = "SELECT * FROM question_repos WHERE difficulty = 'easy' AND type='single' ORDER BY RAND();";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            $counter = 0;
            
           
            
            while($row = mysqli_fetch_array($result))
            {
                $r = rand(1,9);
                $r2 = $r%3;
                $counter++;
                if($counter >3)
                    break;
                echo "<div class = \"col-3 col-s-12\">
                
                 <p>$counter) $row[quest]</p>";
                 if($r2 == 0)
                 {
                    echo"<input  type=\"radio\" id=\"easya{$counter}\" name=\"q{$counter}\" value=\"easya{$counter}\">
				     $row[correct_ans]<br>
				     <input  type=\"radio\" id=\"easyb{$counter}\" name=\"q{$counter}\" value=\"easyb{$counter}\">
				     $row[ans1]<br>";
                 }
                 if($r2 != 0)
                 {
                     echo"<input  type=\"radio\" id=\"easyb{$counter}\" name=\"q{$counter}\" value=\"easyb{$counter}\">
				     $row[ans1]<br>
				     <input  type=\"radio\" id=\"easya{$counter}\" name=\"q{$counter}\" value=\"easya{$counter}\">
				     $row[correct_ans]<br>";
                 }
				 $a =  $row["ans1"];
				 $b =  $row["ans2"];
				 
				 if($a != $b)
				 {
				     echo "<input  type=\"radio\" id=\"easyc{$counter}\" name=\"q{$counter}\" value=\"easyc{$counter}\"> 
				     $row[ans2]<br>";
				 }
				 
				 echo "</div>";
                
            }
            echo " <div class=\"col-12 col-s-12\">&nbsp</div>";
                
            //multiple type
            
            $sql = "SELECT * FROM question_repos WHERE difficulty = 'easy' AND type='multiple' ORDER BY RAND();";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
           
            
           $counter--;
            
            while($row = mysqli_fetch_array($result))
            {
                
                $counter++;
                if($counter >4)
                    break;
                echo "<div class = \"col-3 col-s-6\">
                 <p>$counter) $row[quest]</p>
                 <input  type=\"checkbox\" id=\"easya{$counter}\" name=\"q{$counter}\" value=\"easya{$counter}\">
                 $row[correct_ans]<br>
                 <input  type=\"checkbox\" id=\"easyb{$counter}\" name=\"q{$counter}\" value=\"easyb{$counter}\">
                 $row[ans2]<br>
                  <input  type=\"checkbox\" id=\"easyc{$counter}\" name=\"q{$counter}\" value=\"easyc{$counter}\">
                 $row[ans1]<br>
                </div>";
            }
            
            
             $sql = "SELECT * FROM question_repos WHERE difficulty = 'easy' AND type='label' ORDER BY RAND();";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
           
            
           //label type
            
            while($row = mysqli_fetch_array($result))
            {
                
                $counter++;
                if($counter >5)
                    break;
                echo "<div class = \"col-3 col-s-12\">
                 <p>$counter) $row[quest]<input  type=\"text\" id=\"easyb{$counter}\" name=\"q{$counter}\" value=\"\"> </p>
                 
                
                </div>";
                 $ans = $row["correct_ans"];
                 $ans1 = $row["ans1"];
                 $ans2 = $row["ans2"];
            }
            
            
            echo "<div class=\"col-12 col-s-12\">";
            $usr = $_SESSION["username"];
            echo " <div class=\"col-12 col-s-12\">
                <p id = \"easy_results\">Results: </p>
                </div>";
			echo 	"<input type=\"submit\" class = \"btn_submit\" value=\"Submit\" onclick=\"easy_results('$usr',event,'$ans','$ans1','$ans2')\"></div> 
			";
    ?>
    
    </form>
    <div class = "col-12 col-s-12"  >
	<a href="insert.php" target="_blank" ><img src="../media/photos/add.png" align="center" alt="F1" width = 60px height = 60px ></a>
</div>
</div>

<div class="hard" id="ha" name = "ha">
   <form id = "har" name = "har">
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
            
           //single type
            
            $sql = "SELECT * FROM question_repos WHERE difficulty = 'hard' AND type='single' ORDER BY RAND();";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            $counter = 0;
            
           
            
            while($row = mysqli_fetch_array($result))
            {
                $r = rand(1,9);
                $r2 = $r%3;
                $counter++;
                if($counter >3)
                    break;
                echo "<div class = \"col-3 col-s-12\">
                
                 <p>$counter) $row[quest]</p>";
                 if($r2 == 0)
                 {
                    echo"<input  type=\"radio\" id=\"harda{$counter}\" name=\"q{$counter}\" value=\"harda{$counter}\">
				     $row[correct_ans]<br>
				     <input  type=\"radio\" id=\"hardb{$counter}\" name=\"q{$counter}\" value=\"hardb{$counter}\">
				     $row[ans1]<br>";
                 }
                 if($r2 != 0)
                 {
                     echo"<input  type=\"radio\" id=\"hardb{$counter}\" name=\"q{$counter}\" value=\"hardb{$counter}\">
				     $row[ans1]<br>
				     <input  type=\"radio\" id=\"harda{$counter}\" name=\"q{$counter}\" value=\"harda{$counter}\">
				     $row[correct_ans]<br>";
                 }
				 $a =  $row["ans1"];
				 $b =  $row["ans2"];
				 
				 if($a != $b)
				 {
				     echo "<input  type=\"radio\" id=\"hardc{$counter}\" name=\"q{$counter}\" value=\"hardc{$counter}\"> 
				     $row[ans2]<br>";
				 }
				 
				 echo "</div>";
                
            }
             echo " <div class=\"col-12 col-s-12\">&nbsp</div>";
            //multiple type
            
            $sql = "SELECT * FROM question_repos WHERE difficulty = 'hard' AND type='multiple' ORDER BY RAND();";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
           
            
           $counter--;
            
            while($row = mysqli_fetch_array($result))
            {
                
                $counter++;
                if($counter >4)
                    break;
                echo "<div class = \"col-3 col-s-6\">
                 <p>$counter) $row[quest]</p>
                 <input  type=\"checkbox\" id=\"harda{$counter}\" name=\"q{$counter}\" value=\"harda{$counter}\">
                 $row[correct_ans]<br>
                 <input  type=\"checkbox\" id=\"hardb{$counter}\" name=\"q{$counter}\" value=\"hardb{$counter}\">
                 $row[ans2]<br>
                  <input  type=\"checkbox\" id=\"hardc{$counter}\" name=\"q{$counter}\" value=\"hardc{$counter}\">
                 $row[ans1]<br>
                </div>";
            }
            
            
             $sql = "SELECT * FROM question_repos WHERE difficulty = 'hard' AND type='label' ORDER BY RAND();";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
           
            
           //label type
            $counter--;
            while($row = mysqli_fetch_array($result))
            {
                
                $counter++;
                if($counter >5)
                    break;
                echo "<div class = \"col-3 col-s-12\">
                 <p>$counter) $row[quest]<input  type=\"text\" id=\"hardb{$counter}\" name=\"q{$counter}\" value=\"\"> </p>
                 
                
                </div>";
                 $ans = $row["correct_ans"];
                 $ans1 = $row["ans1"];
                 $ans2 = $row["ans2"];
            }
            
            
            echo "<div class=\"col-12 col-s-12\">";
            $usr = $_SESSION["username"];
            
            echo " <div class=\"col-12 col-s-12\">
                <p id = \"hard_results\">Results: </p>
                </div>";
			echo 	"<input type=\"submit\" class = \"btn_submit\" value=\"Submit\" onclick=\"hard_results('$usr',event,'$ans','$ans1','$ans2')\"></div> 
			";
    ?>
    
    </form>
    <div class = "col-12 col-s-12"  >
	<a href="insert.php" target="_blank" ><img src="../media/photos/add.png" align="center" alt="F1" width = 60px height = 60px ></a>
</div>
</div>





<div class = "col-12 col-s-12" style= "height:100px" >

&nbsp;
</div>



<div class = "col-12 col-s-12" style = "background-color: red;" align = center >
	<div class = "footer" >
		
		<h3 >
		
			Παπαβασιλόπουλος Ιωάννης &nbsp;			
			<a href = "mailto:dit18141@go.uop.gr"> dit18141@go.uop.gr </a>
			<br>
			Καραπιπεράκης Εμμανουήλ &nbsp;&nbsp;&nbsp;			
			<a href = "mailto:dit18075@go.uop.gr"> dit18075@go.uop.gr </a>
			<br>
			Παπαχρήστου Ιωάννης &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href = "mailto:dit18146@go.uop.gr"> dit18146@go.uop.gr </a>
			<br>
			&nbsp;
		</h3>
		
		<p>
			<a href="index.php">ΑΡΧΙΚΗ</a>
			<a href="basics.php">ΕΙΣΑΓΩΓΗ</a>
			<a href="more.php">ΠΕΡΙΣΣΟΤΕΡΑ</a>
			<a href="quiz.php">QUIZ</a>
			
		</p>
			
		<p>
			Copyright &copy;2021 | Also hosted at  <a  href ="https://websiteformula1.000webhostapp.com/" target = "_blank" style = "font-size: 15px;">here</a>
		</p>
		
		
	</div>
</div>



<script>



function dif(obj){
    
    //alert(obj.options[obj.selectedIndex].value);
    d=obj.options[obj.selectedIndex].value;
    if(d!="default")
       document.getElementById("main").style.display = "none";
    if(d=="default")
       document.getElementById("main").style.display = "inline";
    if(d!="easy")
    {
        document.getElementById("ea").style.visibility = "hidden";
        document.getElementById("ea").style.display = "none";
    }
    if(d=="easy")
    {
        document.getElementById("ea").style.display = "inline";
         document.getElementById("ea").style.visibility = "visible";
    }
    if(d=="hard")
    {
         document.getElementById("ha").style.visibility = "visible";
    }
    if(d!="hard")
    {
         document.getElementById("ha").style.visibility = "hidden";
    }
    
     
	 
}


function easy_results(username,e,ans,ans1,ans2){
e.preventDefault(); 

count = 0;

q1 = document.eas.q1.value;
q2 = document.eas.q2.value;
q3 = document.eas.q3.value;
q4a = document.getElementById("easya4");
q4b = document.getElementById("easyb4");
q4c = document.getElementById("easyc4");
q5 = document.eas.q5.value;
   


if(q1 == "easya1")
    count++;
if(q2 == "easya2")
    count++;
if(q3 == "easya3")
    count++;
if(q4a.checked && q4c.checked && q4b.checked == false )
    count++;
if(q5 == ans || q5 == ans1 || q5 == ans2)    
    count++;

count = (count/5)*100;
count = Math.floor(count);
count = count + "%";
document.getElementById("easy_results").innerHTML = "Results: " + count;
var currentdate = new Date(); 
var datetime =  currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/" 
                + currentdate.getFullYear() + " @ "
                + currentdate.getHours() + ":"
                + currentdate.getMinutes() + ":" 
                + currentdate.getSeconds();
                
    var data = new FormData();
    
    
    data.append("u", username);
    data.append("r", count);
    data.append("d", datetime);
    data.append("dl", "easy");
    
    
    var xhr = new XMLHttpRequest();
    xhr.open('POST', "quiz_results.php");
    xhr.send(data);

document.getElementById("eas").reset();

 return false; 





}

function hard_results(username,e,ans,ans1,ans2){
e.preventDefault(); 

count = 0;

q1 = document.har.q1.value;
q2 = document.har.q2.value;
q3 = document.har.q3.value;
q4a = document.getElementById("harda4");
q4b = document.getElementById("hardb4");
q4c = document.getElementById("hardc4");
q5 = document.har.q5.value;
   


if(q1 == "harda1")
    count++;
if(q2 == "harda2")
    count++;
if(q3 == "harda3")
    count++;
if(q4a.checked && q4c.checked && q4b.checked == false )
    count++;
if(q5 == ans || q5 == ans1 || q5 == ans2)    
    count++;

count = (count/5)*100;
count = Math.floor(count);
count = count + "%";

document.getElementById("hard_results").innerHTML = "Results: " + count;
var currentdate = new Date(); 
var datetime =  currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/" 
                + currentdate.getFullYear() + " @ "
                + currentdate.getHours() + ":"
                + currentdate.getMinutes() + ":" 
                + currentdate.getSeconds();
                
    var data = new FormData();
    
    
    data.append("u", username);
    data.append("r", count);
    data.append("d", datetime);
    data.append("dl", "hard");
    
    
    var xhr = new XMLHttpRequest();
    xhr.open('POST', "quiz_results.php");
    xhr.send(data);

document.getElementById("har").reset();

 return false; 

}

function results(username,e){
e.preventDefault(); 
q1 = document.quiz.q1.value;
q2 = document.quiz.q2.value;
q3 = document.quiz.q3.value;
q4 = document.quiz.q4.value;
q5 = document.quiz.q5.value;
q6a = document.getElementById("6a");
q6b = document.getElementById("6b");
q6c = document.getElementById("6c");
q7 = document.quiz.q7.value;
q8 = document.quiz.q8.value;
q9 = document.quiz.q9.value;


size = document.getElementsByName("question").length;

count = 0;

if(q1 == "1a")
{
    count++;
    
}
if(q2 == "2b")
{
    count++;
}

if(q3 == "3a")
{
    count++;
}

if(q4 == "4a")
{
    count++;
}
if(q5 == "5b")
{
    count++;
}

if(q6b.checked && q6c.checked && q6a.checked == false){
    count++;
}


if(q7 == "Schumacher" || q7 == "schumacher" || q7 == "Michael Schumacher" || q7 == "michael schumacher")
{
    count++;
}

if(q8 == "Williams" || q8 == "williams" || q8 == "Γουίλιαμς")
{
    count++;
 
}
if(q9 == "3" || q9 == "03")
{
    count++;
}


var currentdate = new Date(); 
var datetime =  currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/" 
                + currentdate.getFullYear() + " @ "
                + currentdate.getHours() + ":"
                + currentdate.getMinutes() + ":" 
                + currentdate.getSeconds();
count = (count/size)*100;
count = Math.floor(count);
count = count + "%";

document.getElementById("default_results").innerHTML = "Results: " + count;
var data = new FormData();


data.append("u", username);
data.append("r", count);
data.append("d", datetime);
data.append("dl", "none");


var xhr = new XMLHttpRequest();
xhr.open('POST', "quiz_results.php");
xhr.send(data);

document.getElementById("quiz").reset();
 return false; 


}

function end()
{
   
	
	window.location.href = "sessionend.php";
}

function role_check(role)
{
    if(role == 'admin')
    {
        window.location.href = "admin.php";
    }
    else if(role == 'moderator')
    {
         window.location.href = "moderator.php";
    }
    else if(role == 'super-admin')
    {
        window.location.href = "admin.php";
    }
    else if(role == 'user')
    {
         window.location.href = "user.php";
    }
}
</script>


</body>
</html>
