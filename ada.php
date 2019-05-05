<!DOCTYPE html>

<html>
<head>
<link rel = "stylesheet"
   type = "text/css"
   href = "css/form.css" />
   
   <script>
function validateForm() {
  var x = document.forms["myForm"]["first_name"].value;
    var y = document.forms["myForm"]["last_name"].value;
	var y1 = document.forms["myForm"]["yog"].value;
	var y2 = document.forms["myForm"]["age"].value;
	var y3= document.forms["myForm"]["uuid"].value;
  if (x == "" || y== "" || y1== "" || y2== "" || y3== "") {
    alert("please fill all the requirements");
    return false;
  }
}
</script>
</head>
<body>
  
<div id="di1">
<h3><center>Data Validation</center></h3>
  <form action="verify.php" method = "POST" name="myForm" onsubmit="return validateForm()">
    
    <input type="text" id="fname" name="first_name" placeholder="Your name..">

    
    <input type="text" id="lname" name="last_name" placeholder="Your last name..">

     
	 <br>
    <input type="number" id="ag" name="age" placeholder="Your age..">
	
 
   
   <br>
    <input type="number" id="yo" name="yog" placeholder="Your year of graduation..">
	<br>

	 
	 
    <input type="number" id="uui" name="uuid" placeholder="Your uuid..">
	<br>
	<div id="cap" class="g-recaptcha" data-sitekey="6LcMx6EUAAAAALwleLN6HTmcOhvqcI_qAGsx2cQQ"></div>
	<input type="submit" name="submit" value="Submit">
	<br>
	
    
  </form>
</div>
 

  <script src="https://www.google.com/recaptcha/api.js"></script>
</body>
</html>
<?php

	if(isset($_POST['submit']))
	{
		$secertkey="6LcMx6EUAAAAAEM_OLd_IgGYE6E3Gp5Mr2DJP408";
		$responsekey=$_POST['g-recaptcha-response'];
		$userIP = $_SERVER['REMOTE_ADDR'];
		$url ="https://www.google.com/recaptcha/api/siteverify?secret=$secertkey&response=$responsekey&remote=$userIP";
		$response =file_get_contents($url);
		
		

	}
	
	
	?>