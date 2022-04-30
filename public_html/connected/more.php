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
<title>Περισσότερα</title>
<link rel="stylesheet" href="../styles/test.css">
<link rel="stylesheet" href="../styles/more.css">
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
  <a href="basics.php" >ΕΙΣΑΓΩΓΗ</a>
  <a href="more.php" style="background-color: #010f26;">ΠΕΡΙΣΣΟΤΕΡΑ</a>
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
		  
		  <a href="basics.php">ΕΙΣΑΓΩΓΗ</a>
		  
		  <a href="more.php" style="background-color: #010f26;">ΠΕΡΙΣΣΟΤΕΡΑ</a>
		  
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

	<h1  style = "border-top: 2px solid black;"> Τα πρώτα χρόνια </h1>
	<div class = "col-6 col-s-6" >
	<p name = "color">
	   Οι αγώνες ράλι, που είχαν αρχίσει να αναπτύσσονται με γοργούς τη δεκαετία του ‘30, σαρώθηκαν από τη λαίλαπα του Β' Παγκοσμίου Πόλεμου, 
	   όπως και κάθε αθλητική δραστηριότητα στη γηραιά ήπειρο. Η Ευρώπη ήταν τότε η κυρίαρχη δύναμη στον μηχανοκίνητο αθλητισμό, όπως συμβαίνει εν πολλοίς και σήμερα.
	   Με γοργούς ρυθμούς μετά το τέλος του πολέμου άρχισε να συζητείται στους κόλπους της Διεθνούς Ομοσπονδίας Αυτοκινήτου (FIA) η διοργάνωση ενός ενιαίου πρωταθλήματος 
	   με κάποια κοινά χαρακτηριστικά. Το νέο σχέδιο ονομάστηκε «Formula A», όπου Φόρμουλα αναφέρεται σ' ένα σύνολο κανόνων που πρέπει να τηρούνται από τις ομάδες, ενώ το 
	   Α (1 αργότερα) αναφέρεται στις προδιαγραφές των αυτοκινήτων που παίρνουν μέρος στο πρωτάθλημα.
	   Την 1η Σεπτεμβρίου 1946 έγινε ο πρώτος δοκιμαστικός αγώνας Φόρμουλα 1 (Formula 1) στο Τορίνο, υπό την επωνυμία Βαλεντίνο Γκραν Πρι, με νικητή τον ιταλό Ακίλε Βάρτσι, 
	   που οδηγούσε μία Αλφα-Ρομέο 158 Αλφέτα. Τα αυτοκίνητα που πήραν μέρος στον αγώνα δεν διέφεραν και πολύ από τα αντίστοιχα της προπολεμικής εποχής. Το αυτοκίνητο του 
	   Βάρτσι στην πραγματικότητα είχε κατασκευαστεί τη δεκαετία του ‘30.
	   Στις 2 Οκτωβρίου 1947 η FIA παίρνει την οριστική απόφαση να διοργανώσει ένα αγώνα Φόρμουλα 1, αρχής γενομένης από το 1950. Ο πρώτος αγώνας του Παγκοσμίου Πρωταθλήματος 
	   διεξάγεται στις 13 Μαΐου 1950 στο Σίλβερστοουν, ένα εγκαταλελειμμένο αεροδρόμιο της RAF. Νικητής είναι ο Τζιουζέπε Φαρίνα με Άλφα Ρομέο. Τα αυτοκίνητα είναι μεταλλικά, 
	   με τον κινητήρα εμπρός και τους τροχούς ακάλυπτους κι έχουν μέγιστο κυβισμό τα 4500 κ.ε. για ατμοσφαιρικούς κινητήρες και 1500 κ.ε. για τους υπερτροφοδοτούμενους.
	   Οι περισσότεροι αγώνες διαρκούν 500 χιλιόμετρα ή 5 ώρες και επιτρέπεται η αλλαγή οδηγών.
	</p>				
	
	
		
	<div class="hover14 column" style = "text-align: center">
	  <div>
		<figure><img src="../media/photos/1950sf1.jpg"  width="100%" height="300px"></figure>
	  </div>
	</div>	
	
	
	


	<p name = "color">
		Το 1954 θεσπίζονται νέοι κανονισμοί, οι οποίοι θα ισχύσουν έως το 1960. Ο μέγιστος κυβισμός καθορίζεται στα 2500 κ.ε. για τους ατμοσφαιρικούς κινητήρες και τα 750 κ.ε. 
		για του υπερσυμπιεζόμενους. Το 1958 καθιερώνεται η χρήση βενζίνης αντί των καυσίμων αλκοόλης και μειώνεται το μήκος των αγώνων από τα 500 χλμ. ή τρεις ώρες σε 300 χλμ. ή δύο ώρες.
		Τη δεκαετία του ‘50 κυριάρχησε ο αργεντίνος Χουάν Μανουέλ Φάνχιο, που κατέκτησε 5 πρωταθλήματα. Το 1958 καθιερώθηκε το πρωτάθλημα κατασκευαστών.			
		Η δεκαετία του ‘60 ανήκει στους αγγλοσάξονες οδηγούς και στις εταιρείες Μπράμπαμ, Λότους και Φεράρι. Αναμφισβήτητα, όμως, αυτοί που άλλαξαν την πορεία της Φόρμουλα 1
		στη συγκεκριμένη δεκαετία ήταν η Λότους του Κόλιν Τσάπμαν και οι οδηγικές ικανότητες του Τζιμ Κλαρκ. Ο πρώτος παρουσιάζει το αυτοφερόμενο πλαίσιο, χαρίζοντας 
		στον οδηγό του δύο παγκόσμια πρωταθλήματα. Τα αεροδυναμικά βοηθήματα και οι σπόνσορες συμπληρώνουν την προσφορά της Λότους στο άθλημα.	
		Στις 4 Ιουνίου 1967 παρουσιάζεται στο ολλανδικό Γκραν Πρι ο κινητήρας V8 Cosworth, ο οποίος για τα επόμενα 16 χρόνια θα είναι ο κυρίαρχος. 
		Ο μέγιστος κυβισμός καθορίζεται στο 1,5 λίτρο, που θα ισχύσει ως το 1965.
	</p>
	
	</div>
	<div class = "col-6 col-s-6" >
		<div class="grey-box1 ">
			<h2 align=left> Η δεκαετία του '70</h2>
			<p> 
			Τη δεκαετία του '70, Λότους και Φεράρι μοιράζονται τα πρωταθλήματα κατασκευαστών, ενώ οι αγγλοσάξονες εξακολουθούν να κυριαρχούν στο πρωτάθλημα 
			οδηγών. Ο αυστριακός Νίκι Λάουντα και ο βραζιλιάνος Φιτιπάλντι σπάνε τη μονοτονία με δύο κι ένα τίτλο αντίστοιχα. Η Ρενό εισαγάγει το 1977 τον υπερτροφοδοτούμενο κινητήρα 
			και δύο χρόνια αργότερα θα κερδίσει τον πρώτο της αγώνα στη Γαλλία. Ferrari και BMW την αντιγράφουν και οι ημέρες του ατμοσφαιρικού κινητήρα είναι μετρημένες.
			Η σφηνοειδής Lotus 72, με τα ψυγεία στο πλάι, κάνει την πρώτη της εμφάνιση. Τα αυτοκίνητα γίνονται εξαιρετικά πιο γρήγορα και απαιτούν ιδιαίτερες οδηγικές ικανότητες. 
			Η δεκαετία αυτή στιγματίστηκε από πολλά ατυχήματα και κάθε χρόνο περίπου δύο οδηγοί εχάναν την ζωή τους στην πίστα. Ένα χαρακτηριστικό τέτοιο ατύχημα είναι αυτό του Νίκι
			Λάουντα ο οποίος προσέκρουσε στον τοίχο κατα την διάρκεια του Grand Prix της δυτικής Γερμανίας. Ο αυστριακός υπέστει σοβαρά εγκαύματα. 
			</p>	
		
		</div>		
		&nbsp;
		<div class = "vid" align=center>
		<video width="100%" height="400" controls>
				<source src="../media/videos/video.mp4" type="video/mp4">
		</video>
		</div>

		<div class = "vphone">
			<video width="100%" height="250" controls>
				<source src="../media/videos/video.mp4" type="video/mp4">
		</video>
		</div>
	</div>
	<div class = "col-12 col-s-12" style = "border-bottom: 3px solid black;">
	    &nbsp;
	 </div>
	<div class="col-12 col-s-12" style = "border-top: 3px solid white;">
		<h2> Η δεκαετία του ‘80</h2>
		<p name = "color">
		Τη δεκαετία του ‘80 κυριαρχούν οι ΜακΛάρεν και Γουίλιαμς, ενώ στους οδηγούς Γάλλοι και Βραζιλιάνοι κάνουν αισθητή την παρουσία τους.
		Η Μπράμπαμ-BMW είναι το πρώτο τούρμπο αυτοκίνητο που κερδίζει το παγκόσμιο πρωτάθλημα (1983).
		Το 1980 ξεσπά διαμάχη για τον έλεγχο των αγώνων Φόρμουλα 1, μεταξύ της FOCA (Ένωση των Κατασκευαστών Αυτοκινήτων της Φόρμουλα 1) και της Διεθνούς Ομοσπονδίας. 
		Οι κατασκευαστές με επικεφαλής τον πανούργο Μπέρνι Έκλεστον θα κερδίσουν τη μάχη και την εμπορική εκμετάλλευση της Φόρμουλα 1. Το 1981 o Ρον Ντένις αναλαμβάνει 
		τη ΜακΛάρεν και η ομάδα παρουσιάζει το πρώτο μονοθέσιο από ανθρακονήματα, σχεδιασμένο από τον Τζον Μπάρναρντ.
		</p>
		<div class = "spdf">
			<p style= "text-align: center">
				<embed src="../media/12.pdf" width="50%" height="550" />
			</p>
		</div>
	</div>
	
	<div class="col-12 col-s-12" style = "border-top: 3px solid white;">
		&nbsp;
	</div>
	<div class = "col-12 col-s-12" style = "border-bottom: 3px solid black;">
	    &nbsp;
	 </div>
	<div class="col-4 col-s-12">
		<h2  style="color:red;" align=left> Η δεκαετία του ‘90 και ο 21ος αιώνας</h2>
		<p name = "color">
		Η Γουίλιαμς κυριάρχησε στο πρωτάθλημα κατασκευαστών, ενώ από την Μπενετόν ανέτειλε το άστρο του γερμανού Μίκαελ Σουμάχερ, που κέρδισε το πρώτο του πρωτάθλημα το 1994 
		και το 2000 έδωσε στη Φεράρι τον πρώτο της τίτλο στο πρωτάθλημα οδηγών, έπειτα από 21 χρόνια.
		Η πρώτη δεκαετία του 21ου αιώνα ανήκει στον Μίκαελ Σουμάχερ και τη Φεράρι. Ο γερμανός έσπασε το ρεκόρ του Χουάν Μανουέλ Φάνχιο (5 πρωταθλήματα), κατακτώντας 7 και βαδίζει
		φέτος για το 8ο. Ακόμη, κατέρριψε το ρεκόρ νικών που είχε ο Αλέν Προστ (51), έχοντας ξεπεράσει τις 90.
		Από το 2010 ξεκίνησε η δυναστεία ενός άλλου Γερμανού, του Ζεμπάστιαν Φέτελ, ο οποίος κέρδισε τέσσερις συνεχόμενους τίτλους έως το 2013 και σε ηλικία μόλις 26 ετών απειλεί 
		πολλά ρεκόρ στη Φόρμουλα 1. Τον βοήθησε σ’ αυτή του την προσπάθεια η αξιόπιστη ομάδα της Red Bull του πάμπλουτου αυστριακού ποτοποιού Ντίτριχ Μάτεσιτς, η οποία με τη σειρά 
		της κατέκτησε ισάριθμους τίτλους στο πρωτάθλημα κατασκευαστών.
		Η Φόρμουλα 1 είναι σήμερα μια ιδιαίτερα επικερδής επιχείρηση θεάματος, η οποία προσελκύει χιλιάδες θεατές στις πίστες και δισεκατομμύρια τηλεθεατές. Μα πάνω απ’ όλα, 
		παραμένει ένα πεδίο δοκιμών για την εξέλιξη και την ασφάλεια της αυτοκίνησης.
		</p>			
	</div>
	
	<div class="col-4 col-s-12">	
		<h2> Κανονισμοί Υβριδικών κινητήρων</h2>
		
		<div class = "vid">
		<iframe  width = "90%" height = "320px"	
			src="https://www.youtube.com/embed/hFHmYFlbFn8">		<!-- κλαση που εμφανιζει βιντεο σε desktop και tablet -->
		</iframe>
		</div>

		<div class = "vphone">
		<iframe  width = "100%" height = "300px"	
			src="https://www.youtube.com/embed/hFHmYFlbFn8">		<!-- κλαση που εμφανιζει βιντεο σε desktop και tablet -->
		</iframe>
		</div>
	</div>
	
	<div class="col-4 col-s-12">		
	<h2 align=center>Κινητήρας V10</h2>
		<audio controls width = 100%>
			<source src="../media/r25.mp3" type="audio/mpeg" >
		</audio>
	</div>
	
	
	<div class="col-12 col-s-12" style = "border-top: 3px solid white;">
		&nbsp;
	</div>
	<div class = "col-12 col-s-12" style = "border-bottom: 3px solid black;">
	    &nbsp;
	 </div>
	<div class="col-12 col-s-12" style = "text-align:center">
		<h2 > Πηγές</h2>
		
		<a  href ="https://el.wikipedia.org/wiki/%CE%A6%CF%8C%CF%81%CE%BC%CE%BF%CF%85%CE%BB%CE%B1_1" target = "_blank" >Wikipedia</a>
		<br>
		<a  href="https://www.sansimera.gr/articles/176" target = "_blank">San simera</a>

	</div>
	
</div>	
	
<div class = "col-12 col-s-12" style= "height:100px">
&nbsp;
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
