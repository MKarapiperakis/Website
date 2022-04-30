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
<title>Εισαγωγή Ερώτησης</title>
<link rel="stylesheet" href="../styles/test.css">
<link rel="stylesheet" href="../styles/admin.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="../media/photos/f1icon.png" type="image/icon type">

<style>
select{
	color: white;
	font-weight: bold;
	background-color: red;
}


input{
	color: white;
	font-weight: bold;
	background-color: red;
	border: none;
	text-align: center;
	
}
input[type=text] {
    width: 60%;
    height: 23px;
    border: 1px inset white;
   
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

.btn_submit{
    width: 150px;
    height: 30px;
    border-radius: 30px;
    border: 2px inset white;
}

.btn_submit:hover
{
    cursor: pointer;
}

.mess{
    text-align: center;
    color: red;
    font-size: 18px;
    margin-top: 10px;
}
</style>
</head>



<body>
    <div class = "col-12 col-s-12" style = "height: 100px;">
        &nbsp;
    </div>
<div class = "col-12 col-s-12" style = "text-align: center;">
  <h2>Προσθήκη ερώτησης</h2>  
 <?php
 
 echo "<select  name = \"level\" onChange = \"question(this)\"> 
 <option value=\"0\">Τύπος ερώτησης</option> 
    <option value=\"single\">Μονής επιλογής</option>  
    <option value=\"multiple\">Πολλαπλής επιλογής</option> 
    <option value=\"label\">Συμπλήρωσης κενού</option>
</select>";

echo "<div class=\"col-12 col-s-12\">
            <div id = \"demo\"> </div>
    </div>";

echo 	"<div class=\"col-12 col-s-12\">&nbsp;</div>
        <div class=\"col-12 col-s-12\">
        <input type=\"submit\" class = \"btn_submit\" value=\"Submit\" onclick=\"results()\"></div> 
        </div>";

?>

</div>

<div class="col-12 col-s-12">
            <div class = "mess" id = "message"> </div>
    </div>


<script>
function question(obj){
    q = obj.options[obj.selectedIndex].value;
    document.getElementById("message").innerHTML = "";
    if(q == 0)
        document.getElementById("demo").innerHTML ="";
    if(q=="single")
    {
        document.getElementById("demo").innerHTML = "<br><input type = 'text' value = 'Εκφώνηση' maxlength ='200' id = 'nm1'> <br><input type = 'text' value = 'Σωστή Απάντηση' maxlength ='50' id = 'nm2'> <br><input type = 'text' value = 'Λάθος Απάντηση 1' maxlength ='50' id = 'nm3'> <br><input type = 'text' value = 'Λάθος Απάντηση 2' maxlength ='50' id = 'nm4'> <br><input type = 'text' value = 'Δυσκολία(easy,hard)' maxlength ='50' id = 'nm5'><br><input type = 'hidden' value = 'single' maxlength ='50' id = 'nm6'>";
        
    }
    
    if(q=="multiple")
    {
         document.getElementById("demo").innerHTML ="<br><input type = 'text' value = 'Εκφώνηση' maxlength ='200' id = 'nm1'> <br><input type = 'text' value = 'Σωστή Απάντηση' maxlength ='50' id = 'nm2'> <br><input type = 'text' value = 'Σωστή Απάντηση 2' maxlength ='50' id = 'nm3'> <br><input type = 'text' value = 'Λάθος Απάντηση 1' maxlength ='50' id = 'nm4'> <br><input type = 'text' value = 'Δυσκολία(easy,hard)' maxlength ='50' id = 'nm5'><br><input type = 'hidden' value = 'multiple' maxlength ='50' id = 'nm6'>";
    }
    
    if(q=="label")
    {
        document.getElementById("demo").innerHTML ="<br><input type = 'text' value = 'Εκφώνηση' maxlength ='200' id = 'nm1'> <br><input type = 'text' value = 'Εισαγόμενο κείμενο' maxlength ='50' id = 'nm2'> <br><input type = 'text' value = 'Εισαγόμενο κείμενο 2' maxlength ='50' id = 'nm3'> <br><input type = 'text' value = Εισαγόμενο κείμενο 3' maxlength ='50' id = 'nm4'> <br><input type = 'text' value = 'Δυσκολία(easy,hard)' maxlength ='50' id = 'nm5'><br><input type = 'hidden' value = 'label' maxlength ='50' id = 'nm6'>";
    }

	
	 
}

function results(){
        n1=document.getElementById("nm1").value;
        n2=document.getElementById("nm2").value;
        n3=document.getElementById("nm3").value;
        n4=document.getElementById("nm4").value;
        n5=document.getElementById("nm5").value;
        n6=document.getElementById("nm6").value;
        //alert(n1+n2+n3+n4+n5+n6);
         document.getElementById("message").innerHTML = "Your question has been successfully submitted";
            var data = new FormData();
            data.append("n1",n1);
            data.append("n2",n2);
            data.append("n3",n3);
            data.append("n4",n4);
            data.append("n5",n5);
            data.append("n6",n6);
            var xhr = new XMLHttpRequest();
            xhr.open('POST', "temp_quiz.php");
            xhr.send(data);
        
        
}

</script>
</body>


</html>

