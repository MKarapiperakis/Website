<!DOCTYPE html>
<html>
<head>
<title>Σύνδεση</title>
<link rel="stylesheet" href="styles/test.css">
<link rel="stylesheet" href="styles/login.css">
<link rel="icon" href="media/photos/f1icon.png" type="image/icon type">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

.textbox input{


background: url(media/photos/user.png) no-repeat scroll 7px 7px ; 
background-size: 23px 23px;
background-position: 0% 3px;
padding-left:25px;
}


</style>
</head>
<body>

<div class="navbar">
  <a href="index.html">ΑΡΧΙΚΗ</a>
  <a href="basics.html">ΕΙΣΑΓΩΓΗ</a>
  <a href="more.html">ΠΕΡΙΣΣΟΤΕΡΑ</a>
  <a href="quiz.html">QUIZ</a>
  <a href="sign-up.php">ΕΓΓΡΑΦΗ</a>
  <a href="login.php" style="background-color: #010f26;">ΕΙΣΟΔΟΣ</a>
</div>

<div class="navbar2">		
	<div class = "dropdown">									<!-- menu που εμφανίζεται σε tablet και κινητά -->
		<button class="dropbtn"><img src="media/photos/menu.png" align="center" alt="menu" width = 70px height = 50px></button>

		<div class="dropdown-content">
		  <a href="index.html"  >ΑΡΧΙΚΗ</a>
		  
		  <a href="basics.html" >ΕΙΣΑΓΩΓΗ</a>
		  
		  <a href="more.html" >ΠΕΡΙΣΣΟΤΕΡΑ</a>
		  
		  <a href="quiz.html" >QUIZ</a>
		  
		  <a href="sign-up.php" >ΕΓΓΡΑΦΗ</a>
		  
		  <a href="login.php" style="background-color: #010f26;">ΕΙΣΟΔΟΣ</a>
		  
		</div>
	</div>  
</div>
		
		
	
<div class = "header" >
	<h1>Η ιστορία της
				
					<a href="index.html"><img src="media/photos/logo.png" align="center" alt="F1" width = 100px height = 60px></a>	
	</h1>
	
</div>  
 
  
<div class="main">
	<div class = "col-5 col-s-4">
		&nbsp
			<!--	<a href="password.html " target = "_blank" ><h2>Ξεχάσατε τον κωδικό πρόσβασης;</h2></a>	-->
	</div>
	<div class = "col-6 col-s-6">
	<form action = "connected/login_check.php" method = "post">
	<div class="login-box"  >
		<h1>Login</h1>
		<div class="textbox" >
			<input type="text" placeholder="Όνομα Χρήστη:" name = "username"  >
		</div>

		<div class="textbox"> 
			<input type="password" placeholder="Κωδικός Πρόσβασης:" name = "password" style = "background: url(media/photos/password.png) no-repeat scroll 7px 7px; background-size: 24px 24px; background-position: 0% 3px;">
		</div>
	  
		
		<input type="submit" class="btn" value="Σύνδεση">
	</form>
		
	  
	 
	</div>
	</div>
</div>

  
<div class = "col-12 col-s-12" style= "height:400px">
&nbsp;
</div>


<div class = "col-12 col-s-12" style = "background-color: red;" align = center >
	<div class = "footer">
		
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
			<a href="index.html">ΑΡΧΙΚΗ</a>
			<a href="basics.html">ΕΙΣΑΓΩΓΗ</a>
			<a href="more.html">ΠΕΡΙΣΣΟΤΕΡΑ</a>
			<a href="quiz.html">QUIZ</a>
			<a href="sign-up.php">ΕΓΓΡΑΦΗ</a>
			<a href="login.php">ΕΙΣΟΔΟΣ</a>
			
		</p>
			
		<p>
			Copyright &copy;2021 | Also hosted  <a  href ="https://websiteformula1.000webhostapp.com/" target = "_blank" style = "font-size: 15px;">here</a>
		</p>
		
		
	</div>
</div>

</body>
</html>
