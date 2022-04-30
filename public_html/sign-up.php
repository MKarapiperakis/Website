<!DOCTYPE html>
<html>

<head>
<title>Δημιουργία Λογαριασμού</title>
<link rel="stylesheet" href="styles/test.css">
<link rel="stylesheet" href="styles/login.css">
<link rel="icon" href="media/photos/f1icon.png" type="image/icon type">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>


.error{
	font-size: 13px;
	margin-top: 5px;
	
}


</style>

</head>
<body>

<div class="navbar">
  <a href="index.html">ΑΡΧΙΚΗ</a>
  <a href="basics.html">ΕΙΣΑΓΩΓΗ</a>
  <a href="more.html">ΠΕΡΙΣΣΟΤΕΡΑ</a>
  <a href="quiz.html">QUIZ</a>
  <a href="sign-up.php" style="background-color: #010f26;">ΕΓΓΡΑΦΗ</a>
  <a href="login.php">ΕΙΣΟΔΟΣ</a>
</div>

<div class="navbar2">		
	<div class = "dropdown">									<!-- menu που εμφανίζεται σε tablet και κινητά -->
		<button class="dropbtn"><img src="media/photos/menu.png" align="center" alt="menu" width = 70px height = 50px></button>

		<div class="dropdown-content">
		  <a href="index.html"  >ΑΡΧΙΚΗ</a>
		  
		  <a href="basics.html" >ΕΙΣΑΓΩΓΗ</a>
		  
		  <a href="more.html" >ΠΕΡΙΣΣΟΤΕΡΑ</a>
		  
		  <a href="quiz.html" >QUIZ</a>
		  
		  <a href="sign-up.php" style="background-color: #010f26;">ΕΓΓΡΑΦΗ</a>
		  
		  <a href="login.php">ΕΙΣΟΔΟΣ</a>
		  
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
		
	</div>
	<div class = "col-6 col-s-6">
	
	<div class="login-box" >
	<form>
		<h1>Sign-Up</h1>
		
		<div class="voidbox" >
			<div class = "avatar">		
				<img src="media/photos/avatar_male.png" alt="Avatar" class="avatar">
				
			</div>		
		</div>
		
			
		<div class="voidbox" >
			Αλλαγή φωτογραφίας προφίλ: <input type = "file" name ="fileupload" id = "fileupload" accept="image/*">
			
	</form>	
	</div>
<form name = "forma" id = "forma">
		<div class="textbox"  >
			Όνομα: <input type="text" name="name" id = "name_length" maxlength="15">
			<div class = "error" id = "name"> <br></div> 
		</div>
		<div class="textbox"  >
			Επώνυμο: <input type="text" name="surname" id = "surname_length" maxlength="20">
			<div class = "error" id = "surname"> <br></div> 
		</div>
		<div class="textbox" >
			Όνομα Χρήστη: <input type="text" name="username" id = "username_length" maxlength="13">
			<div class = "error" id = "username"> <br></div> 
		</div>
		<div class="textbox"  >
			Email: <input type = "text" name="email" id = "email_color" maxlength="20">	
			<div class = "error" id = "email"> <br></div> 
		</div>

		<div class="textbox" > 
			Κωδικός Πρόσβασης: <input type="password" name="pass" id = "password_color" maxlength="15">
			<div class = "error" id = "pass"> <br></div> 				
		</div>
		
		<div class="textbox" > 
			Επιβεβαίωση Κωδικού: <input type="password" name="cpass" id = "cpassword_color">
			<div class = "error" id = "cpass"> <br></div> 
		</div>
	  
		<div class="voidbox"> 
				Ημερομηνία Γέννησης: 
				<br>
			
			<select size = "1" name = "day" id ="day" ;>
			<option selected value = "0"> Hμέρα
			<option value = "1"> 1
			<option value = "2" > 2
			<option value = "3" > 3
			<option value = "4" > 4
			<option value = "5" > 5
			<option value = "6" > 6
			<option value = "7" > 7
			<option value = "8" > 8
			<option value = "9" > 9
			<option value = "10" > 10
			<option value = "11" > 11
			<option value = "12" > 12
			<option value = "13" > 13
			<option value = "14" > 14
			<option value = "15" > 15
			<option value = "16" > 16
			<option value = "17" > 17
			<option value = "18" > 18
			<option value = "19" > 19
			<option value = "20" > 20
			<option value = "21" > 21
			<option value = "22" > 22
			<option value = "23" > 23
			<option value = "24" > 24
			<option value = "25" > 25
			<option value = "26" > 26
			<option value = "27" > 27
			<option value = "28" > 28
			<option value = "29" > 29
			<option value = "30" > 30
			<option value = "30" > 31
			</select>
			
			
			<select size = "1" name = "month" id ="month" ;>
			<option selected value = "0"> Μήνας
			<option  value = "1"> Ιαν
			<option  value = "2"> Φεβ
			<option  value = "3"> Μαρ
			<option  value = "4"> Απρ
			<option  value = "5"> Μαι
			<option  value = "6"> Ιουν
			<option  value = "7"> Ιουλ	
			<option  value = "8"> Αυγ
			<option  value = "9"> Σεπ
			<option  value = "10"> Οκτ
			<option  value = "11"> Νοεμ
			<option  value = "12"> Δεκ
			</select>
			
			<select size = "1" name = "year" id ="year" ;>
			<option selected value = "0"> Έτος
			<option value = "1970" > 1970
			<option value = "1971" > 1971
			<option value = "1972" > 1972
			<option value = "1973" > 1973
			<option value = "1974" > 1974
			<option value = "1975" > 1975
			<option value = "1976" > 1976
			<option value = "1977" > 1977
			<option value = "1978" > 1978
			<option value = "1979" > 1979
			<option value = "1980" > 1980
			<option value = "1981" > 1981
			<option value = "1982" > 1982
			<option value = "1983" > 1983
			<option value = "1984" > 1984
			<option value = "1985" > 1985
			<option value = "1986" > 1986
			<option value = "1987" > 1987
			<option value = "1988" > 1988
			<option value = "1989" > 1989
			<option value = "1990" > 1990
			<option value = "1991" > 1991
			<option value = "1992" > 1992
			<option value = "1993" > 1993
			<option value = "1994" > 1994
			<option value = "1995" > 1995
			<option value = "1996" > 1996
			<option value = "1997" > 1997
			<option value = "1998" > 1998
			<option value = "1999" > 1999
			<option value = "2000" > 2000
			<option value = "2001" > 2001
			<option value = "2002" > 2002
			<option value = "2003" > 2003
			<option value = "2004" > 2004
			<option value = "2005" > 2005
			<option value = "2006" > 2006
			<option value = "2007" > 2007
			<option value = "2008" > 2008
			<option value = "2009" > 2009
			<option value = "2010" > 2010
			</select>
			<div class = "error" id = "date"> <br></div>
		</div>
		
		
		Φύλο:<br>
		<input type="radio" id="male" name="gender" value="Άνδρας" checked>
		Άνδρας<br>
		<input type="radio" id="female" name="gender" value="Γυναίκα">
		Γυναίκα<br>
		
		
		<div class="textbox"> 
			<a href="login.php">Ήδη Εγγεγραμμένος;</a>
		</div>
		
		<!--<button type="submit" class="btn" name="sub" value="Δημιουργία Λογαριασμού" onclick="results()</button> -->
		<input type="submit" class = "btn" name="sub" value="Δημιουργία Λογαριασμού" onclick="results(event)">
	  
	 
	</div>
	</form>
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
<script>

function results(e){
flag = 0;
e.preventDefault(); 
name = document.forma.name.value;
surname = document.forma.surname.value;
username = document.forma.username.value;
email = document.forma.email.value;
password = document.forma.pass.value;
cpassword = document.forma.cpass.value;
day = document.forma.day.value;
month = document.forma.month.value;
year = document.forma.year.value;
gender = document.forma.gender.value;



if(name.length == 0)
{
	document.getElementById("name").innerHTML = "Empty Field";
	document.getElementById("name_length").style = "border: 2px inset red;background: url(media/photos/wrong.png) no-repeat scroll 7px 7px; background-size: 24px 24px; background-position: 100% 3px;";
}
else
{
	flag++;
	document.getElementById("name").innerHTML = " ";
	document.getElementById("name_length").style = "border: 2px inset white;background: url(media/photos/green.png) no-repeat scroll 7px 7px; background-size: 24px 24px; background-position: 100% 3px;";
}

if(surname.length == 0)
{
	document.getElementById("surname").innerHTML = "Empty Field";
	document.getElementById("surname_length").style = "border: 2px inset red;background: url(media/photos/wrong.png) no-repeat scroll 7px 7px; background-size: 25px 24px; background-position: 100% 3px;";
}
else
{
	flag++;
	document.getElementById("surname").innerHTML = " ";
	document.getElementById("surname_length").style = "border: 2px inset white;background: url(media/photos/green.png) no-repeat scroll 7px 7px; background-size: 24px 24px; background-position: 100% 3px;";
}

if(username.length == 0)
{
	document.getElementById("username").innerHTML = "Empty Field";
	document.getElementById("username_length").style = "border: 2px inset red;background: url(media/photos/wrong.png) no-repeat scroll 7px 7px; background-size: 25px 24px; background-position: 100% 3px;";
}
else
{
	flag++;
	document.getElementById("username").innerHTML = " ";
	document.getElementById("username_length").style ="border: 2px inset white;background: url(media/photos/green.png) no-repeat scroll 7px 7px; background-size: 24px 24px; background-position: 100% 3px;";
}
if(password.length < 8)
{
	document.getElementById("pass").innerHTML = "Password must contain at least 8 characters";
	document.getElementById("password_color").style = "border: 2px inset red;background: url(media/photos/wrong.png) no-repeat scroll 7px 7px; background-size: 25px 24px; background-position: 100% 3px;";
}
else
{
	flag++;
	document.getElementById("pass").innerHTML = " ";
	document.getElementById("password_color").style = "border: 2px inset white;background: url(media/photos/green.png) no-repeat scroll 7px 7px; background-size: 24px 24px; background-position: 100% 3px;";
}
if(password == cpassword)
{
	document.getElementById("cpassword_color").style = "border: 2px inset white;background: url(media/photos/green.png) no-repeat scroll 7px 7px; background-size: 24px 24px; background-position: 100% 3px;";
	document.getElementById("cpass").innerHTML = " ";
	flag ++;
}
else
{
	document.getElementById("cpassword_color").style = "border: 2px inset red;background: url(media/photos/wrong.png) no-repeat scroll 7px 7px; background-size: 25px 24px; background-position: 100% 3px;";
	document.getElementById("cpass").innerHTML = "passwords don't match";
}	

if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email))
{
	flag++;
	document.getElementById("email_color").style = "border: 2px inset white;background: url(media/photos/green.png) no-repeat scroll 7px 7px; background-size: 24px 24px; background-position: 100% 3px;";
	document.getElementById("email").innerHTML = " ";
}
 else
 {	 
	document.getElementById("email_color").style = "border: 2px inset red;background: url(media/photos/wrong.png) no-repeat scroll 7px 7px; background-size: 25px 24px; background-position: 100% 3px;";
	document.getElementById("email").innerHTML = "Invalid email";
 }		
if((day > 28 && month == 2) || (day == 0) || (month == 0) || (year == 0))
{
	document.getElementById("date").innerHTML = "Invalid date";
	
}
else
{
	document.getElementById("date").innerHTML = " ";
	flag++;
}

if(flag == 7)
{
	
	var d = new FormData();
	var f = false;
	
	d.append("u",username);
	
	
	var xhr2 = new XMLHttpRequest();
		
	xhr2.onreadystatechange = function () {
			if(this.readyState == 4 && this.status == 200)
			{
				f = this.responseText;
				
				if(f == "false")
				{
					document.getElementById("name_length").style = "border: 2px inset white;outline: none;background: none;color: #ff2500;font-size: 15px;width: 100%;float: left;margin: 0 0px;padding: 5px 0px 5px 0px;";
					document.getElementById("surname_length").style = "border: 2px inset white;outline: none;background: none;color: #ff2500;font-size: 15px;width: 100%;float: left;margin: 0 0px;padding: 5px 0px 5px 0px;";
					document.getElementById("username_length").style = "border: 2px inset white;outline: none;background: none;color: #ff2500;font-size: 15px;width: 100%;float: left;margin: 0 0px;padding: 5px 0px 5px 0px;";
					document.getElementById("password_color").style = "border: 2px inset white;outline: none;background: none;color: #ff2500;font-size: 15px;width: 100%;float: left;margin: 0 0px;padding: 5px 0px 5px 0px;";
					document.getElementById("cpassword_color").style = "border: 2px inset white;outline: none;background: none;color: #ff2500;font-size: 15px;width: 100%;float: left;margin: 0 0px;padding: 5px 0px 5px 0px;";
					document.getElementById("email_color").style = "border: 2px inset white;outline: none;background: none;color: #ff2500;font-size: 15px;width: 100%;float: left;margin: 0 0px;padding: 5px 0px 5px 0px;";
						  
					document.getElementById("forma").reset();
					alert("Success");
					var data = new FormData();

					data.append("file", fileupload.files[0]);
					data.append("n",name);
					data.append("s",surname);
					data.append("u",username);
					data.append("e",email);
					data.append("p",password);
					data.append("d",day);
					data.append("m",month);
					data.append("y",year);
					data.append("g",gender);

					var xhr = new XMLHttpRequest();
					xhr.open('POST', "send.php");
					xhr.send(data);


					return false;
				}
				else{
					
					document.getElementById("username").innerHTML = "Username already exists";
					document.getElementById("username_length").style = "border: 2px inset red;background: url(media/photos/wrong.png) no-repeat scroll 7px 7px; background-size: 25px 24px; background-position: 100% 3px;";
				}
				
			}
			
	};
	
    xhr2.open('POST', "username_check.php", true);
	xhr2.send(d);
	
	
	
	
}
else
{
	 
	 event.preventDefault();		//για να μην γινει reset η φορμα μετα το submit αν δεν σταλθουν δεδομενα
}


}


 
</script>


</body>
</html>
