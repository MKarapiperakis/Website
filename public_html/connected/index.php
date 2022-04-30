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
<title> Η Ιστορία της Formula 1</title>
<link rel="stylesheet" href="../styles/test.css">
<link rel="stylesheet" href="../styles/firstpage.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="../media/photos/f1icon.png" type="image/icon type">

<style>
.navbar a:hover{
    cursor: pointer;
}
.navbar2 a:hover{
    cursor: pointer;
}
</style>
</head>
<body>



<div class="navbar">											<!-- menu που εμφανίζεται μόνο σε Desktop -->
  <a class = "currentlink" href="index.php" style="background-color: #010f26;">ΑΡΧΙΚΗ</a>
  <a href="basics.php">ΕΙΣΑΓΩΓΗ</a>
  <a href="more.php">ΠΕΡΙΣΣΟΤΕΡΑ</a>
  <a href="quiz.php">QUIZ</a>
  
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
		  <a href="index.php" style="background-color: #010f26;" >ΑΡΧΙΚΗ</a>
		  
		  <a href="basics.php">ΕΙΣΑΓΩΓΗ</a>
		  
		  <a href="more.php">ΠΕΡΙΣΣΟΤΕΡΑ</a>
		  
		  <a href="quiz.php">QUIZ</a>
		  
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
<div class = "box" >
		<label>
			<input type = "checkbox" id = "ld" name = "ld">
			<span></span>
			<i class = "indicator"></i>
		</label>
	</div>
<div class = "main">	
<div class = "col-12 col-s-12" style = "height: 25px;">
	&nbsp;
</div>
<div class = "col-12 col-s-12" style = "border-top: 2px solid black;">
		
	<p name = "color" style = "text-align: center"> Σκοπός της παρούσας ιστοσελίδας είναι η παρουσίαση της ιστορίας της κορωνίδας του μηχανοκίνητου αθλητισμού.</p>	
	<p  name = "color" style = "text-align: center"> Χρησιμοποιείστε την παραπάνω μπάρα για να πλοηγηθείτε στον ιστότοπο.</p>
		
</div>		


<div class = "col-12 col-s-12">
	<img src="../media/photos/2021.jpg" width = "100%">
</div>

</div>

<div class = "col-12 col-s-12" style= "height:100px">
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
			Copyright &copy;2021 | Also hosted  <a  href ="https://websiteformula1.000webhostapp.com/" target = "_blank" style = "font-size: 15px;">here</a>
		</p>
		
		
	</div>
</div>

<script>

const checkbox = document.getElementById('ld')

checkbox.addEventListener('change', (event) => {
  if (event.currentTarget.checked) {
      document.body.style.backgroundColor = "white";
	  for(let i = 0; i < document.getElementsByName("color").length;i++)
		document.getElementsByName("color")[i].style.color = "red";	  
  } else {
    document.body.style.backgroundColor = "black";
	for(let i = 0; i < document.getElementsByName("color").length;i++)
		document.getElementsByName("color")[i].style.color = "#ccc";
  }
})
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
