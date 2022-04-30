<?php
	session_start();

if(!isset($_SESSION["role"]))
	{ 
	    
        header("Location: /login.php");
      
    }
    
  
   
	if ($_SESSION["role"] != "admin" && $_SESSION["role"] != "super-admin" && $_SESSION["role"] != "user" && $_SESSION["role"] != "moderator")
	{
		header("Location: /login.php");
		 
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Βασικές Πληροφορίες</title>
<link rel="stylesheet" href="../styles/test.css">
<link rel="stylesheet" href="../styles/basics.css">
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
  <a href="index.php">ΑΡΧΙΚΗ</a>
  <a href="basics.php" style="background-color: #010f26;">ΕΙΣΑΓΩΓΗ</a>
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
		  <a href="index.php"  >ΑΡΧΙΚΗ</a>
		  
		  <a href="basics.php" style="background-color: #010f26;">ΕΙΣΑΓΩΓΗ</a>
		  
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
	
<div class="main">
    <div class = "col-12 col-s-12" style = "height: 25px;">
	&nbsp;
    </div>
	<div class = "col-12 col-s-12" style = "border-top: 2px solid black;">
		<h1   > Τι είναι η φόρμουλα 1; </h1>
	</div>
	
	<div class = "col-6 col-s-12">

		<p name = "color"> 
			Η Φόρμουλα 1  (αγγλικά: FIA Formula One World Championship ή Formula 1 και F1) είναι πρωτάθλημα αγώνων αυτοκινήτου. 
			To Formula αναφέρεται σε ένα σύνολο κανονισμών που πρέπει απαρεγκλίτως να τηρούνται από τις ομάδες και τα αυτοκίνητα που λαμβάνουν μέρος σε κάθε αγώνα.
			Υπαρχουν 20 οδηγοί οι οποίοι προσπαθούν να διεκδικήσουν μια θέση στο παγκόσμιο πρωτάθλημα της Φόρμουλα 1. Για αυτοκίνητα μικρoτερων δυνατοτήτων υπάρχουν 
			τα πρωταθλήματα F2 (αντικατέστησε τη Φόρμουλα 3000 το 2005, Formula GP2 το 2017) και F3, τα οποία θεωρούνται "προθάλαμοι" στην πορεία των νέων οδηγών προς τη Φόρμουλα 1.
			Την ευθύνη της διοργανώσεως των αγώνων φέρει η Διεθνής Ομοσπονδία Αυτοκινήτου (FIA).		
		</p>	
		<p name = "color">
			Το 1950 η Διεθνής Ομοσπονδία Αυτοκινήτου (Fédération Internationale de l'Automobile), αποφάσισε να διοργανώσει το πρώτο Παγκόσμιο Πρωτάθλημα Οδηγών με κανόνες της Φόρμουλα 1. 
			Δημιουργήθηκε με την συνένωση επτά ανεξαρτήτων αγώνων ταχύτητος ήτοι έξι στην Ευρώπη, συν το Ράλι Ιντιανάπολις 500 στις Η.Π.Α.. Ο πρώτος αγώνας έγινε στην πίστα του Σίλβερστόουν, 
			στην Μεγάλη Βρετανία, στις 13 Μαΐου και νικητής ήταν ο Τζουζέπε Φαρίνα (Emilio Giuseppe "Nino" Farina) με την ομάδα της Άλφα Ρομέο, που τελικώς κατέκτησε και το πρώτο Πρωτάθλημα Κατασκευαστών.
		</p>		
		<p name = "color">
			Αν και αρχικώς είχαν κέντρο την Ευρώπη, οι αγώνες, που λέγονται Γκραν Πρι (Grand Prix, γαλλικά = μεγάλο βραβείο), γίνονται πλέον σε πολλές χώρες ανά τον κόσμο.
			Διάσημες διαδρομές (πίστες) είναι αυτή στην Μόντσα στην Ιταλία, το γκραν πρι του Μονακό και αυτό του Σίλβερστοουν στην Μεγάλη Βρετανία. Η Φόρμουλα 1 είναι το ακριβότερο σπορ
			στον κόσμο, τόσο όσον αφορά τις επενδύσεις που πρέπει να διενεργήσουν οι ομάδες σε τεχνολογία και οδηγούς, όσο και τα εισιτήρια των θεατών. Τα εισιτήρια για κάθε αγώνα είναι από αρκετά έως πολύ ακριβά (
			ενδεικτικά το 2008 η χαμηλότερη τιμή εισιτηρίου για όλο το διήμερο του αγώνα έχει καθοριστεί στα 300 δολάρια, με την ακριβότερη στα 3000 δολάρια), και μόνον όσοι έχουν την οικονομική ευχέρεια για συχνά - και 
			μακρινά - ταξίδια μπορούν να παρακολουθήσουν περισσότερους από έναν αγώνες το χρόνο.
		</p>		
		<p name = "color">
			Στη Φόρμουλα 1 συμμετέχουν αρκετές γνωστές ομάδες - κατασκευαστές αυτοκινήτων, όπως η Φερράρι, η Ρενώ, η Μακλάρεν, η Μερτσέντες. Οι πιο διάσημοι οδηγοί των τελευταίων ετών στην F1 είναι ο Μίχαελ Σουμάχερ και 
			ο Λιούις Χάμιλτον οι οποίοι έχουν κατακτήσει 7 πρωταθλήματα οδηγών. Άλλοι γνωστοί σύγχρονοι οδηγοί είναι οι Μίκα Χάκινεν, Κίμι Ραϊκόνεν, Φερνάντο Αλόνσο, Τζένσον Μπάτον και Ζακ Βιλνέβ. Οδηγοί που επίσης έγραψαν ιστορία 
			στο άθλημα ήταν ο Άιρτον Σένα, Σεμπάστιαν Φέττελ, Αλαίν Προστ, Νάιτζελ Μάνσελ, Τζάκι Στιούαρτ, Νέλσον Πικέ, Νίκι Λάουντα, Φιλ Χιλ, Τζιμ Κλαρκ, Στέρλινγκ Μος και ο Τζακ Μπράμπαμ. Σε ακόμη παλαιότερες εποχές πολύ μεγάλοι 
			οδηγοί θεωρούνται ο Αργεντινός Χουάν Μανουέλ Φάντζιο και ο Ιταλός Τάτσιο Νουβολάρι.
		</p>					
		<p name = "color">
			Ο λόγος των επενδύσεων σε αυτό το τόσο δαπανηρό άθλημα είναι η δοκιμή νέων τεχνολογιών με τελικό στόχο την άμεση χρησιμοποίησή τους σε οχήματα μαζικής παραγωγής. Χαρακτηριστικά αναφέρεται ότι η χρήση του δισκόφρενου 
			έγινε για πρώτη φορά στον αγώνα του Λε Μαν από την Jaguar.
		</p>		
		
		
	</div>
	
<div class = "col-6 col-s-12">
				
	<div class="grey-box";>
	
		<h2  style="color:red;" align=center> Πίνακας κορυφαίων πρωταθλητών</h2>
		<br>
		<br>
		<table>
		  <tr>
			<th style="color:black;">Πρωταθλητής</th>
			<th style="color:black;">Σύνολο Πρωταθλημάτων</th>
		  </tr>
		  <tr>
		  
			<td style="color:black;">Michael Schumacher <br><img src="../media/photos/msc.jpg"align="center"></td>
			<td style="color:black;">7</td>
		  </tr>
		  <tr>
			<td style="color:black;">Lewis Hamilton <br> <img src="../media/photos/lh.jpg"align="center"</td>
			<td style="color:black;">7</td>
		  </tr>
		  <tr>
			<td style="color:black;">Juan Manuel Fangio <br> <img src="../media/photos/jmf.jpg"align="center"</td>
			<td style="color:black;">5</td>
		  </tr>
		  <tr>
			<td style="color:black;">Sebastian Vettel <br> <img src="../media/photos/sv.jpg"align="center"</td>
			<td style="color:black;">4</td>
		  </tr>
		  <tr>
			<td style="color:black;">Alain Prost <br> <img src="../media/photos/ap.jpg"align="center"</td>
			<td style="color:black;">4</td>
		  </tr>
		  <tr>
			<td style="color:black;">Ayrton Senna <br> <img src="../media/photos/as.jpg"align="center"</td>
			<td style="color:black;">3</td>
		  </tr>
		  <tr>
			<td style="color:black;">Jackie Stewart <br> <img src="../media/photos/js.jpg"align="center"</td>
			<td style="color:black;">3</td>
		  </tr>
		  <tr>
			<td style="color:black;">Niki Lauda <br> <img src="../media/photos/nl.jpg"align="center"</td>
			<td style="color:black;">3</td>
		  </tr>
	
		</table>
		
	</div>	
</div>

<div class = "col-12 col-s-12">
	<h1 style = "text-align: center"> Φωτογραφικό υλικό </h1>
</div>
<div class = "col-4 col-s-12">
	
	
	<div class="hover14 column" style = "text-align: center">
	  <div>
		<figure><img src="../media/photos/portimao.jpg" width = "100%" height = "300" /></figure>
	  </div>
	</div>	
</div>

<div class = "col-4 col-s-12">
	
	
	<div class="hover14 column" style = "text-align: center">
	  <div>
		<figure><img src="../media/photos/mansell-senna.jpg" width = "100%" height = "300" /></figure>
	  </div>
	</div>	
</div>

<div class = "col-4 col-s-12">
	
	<div class="hover14 column" style = "text-align: center">
	  <div>
		<figure><img src="../media/photos/sparks.jpg" width = "100%" height = "300" /></figure>
	  </div>
	</div>	
</div>

<div class = "col-4 col-s-12">
	
	<div class="hover14 column" style = "text-align: center">
	  <div>
		<figure><img src="../media/photos/rain.jpg" width = "100%" height = "300" /></figure>
	  </div>
	</div>	
</div>

<div class = "col-4 col-s-12">
	
	<div class="hover14 column" style = "text-align: center">
	  <div>
		<figure><img src="../media/photos/vettel.jpg" width = "100%" height = "300" /></figure>
	  </div>
	</div>	
</div>

<div class = "col-4 col-s-12">
	
	<div class="hover14 column" style = "text-align: center">
	  <div>
		<figure><img src="../media/photos/vettel-pit.jpg" width = "100%" height = "300" /></figure>
	  </div>
	</div>	
</div>

<div class = "col-4 col-s-12">
	
	<div class="hover14 column" style = "text-align: center">
	  <div>
		<figure><img src="../media/photos/spa.jpg" width = "100%" height = "300" /></figure>
	  </div>
	</div>	
</div>

<div class = "col-4 col-s-12">
	
	<div class="hover14 column" style = "text-align: center">
	  <div>
		<figure><img src="../media/photos/start.jpg" width = "100%" height = "300" /></figure>
	  </div>
	</div>	
</div>

<div class = "col-4 col-s-12">
	
	<div class="hover14 column" style = "text-align: center">
	  <div>
		<figure><img src="../media/photos/1960sf1.jpg" width = "100%" height = "300" /></figure>
	  </div>
	</div>	
</div>

<div class = "col-12 col-s-12" style= "height:100px">
&nbsp;
</div>

</div>
<div class = "col-12 col-s-12" style = "background-color: red" align = center >
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