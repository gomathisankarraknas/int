<!DOCTYPE html>

<html>
<head>
<link rel = "stylesheet"
   type = "text/css"
   href = "css/form.css" />
<style>


#sel1
{

 
 width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 25px;
  box-sizing: border-box;

}
hr
{
	display: block;
  margin-top: 0.5em;
  margin-bottom: 0.5em;
  margin-left: auto;
  margin-right: auto;
  border-style: inset;
  border-width: 1px;
  border-color:black;
}
</style>
   
   
<script type="text/javascript">
function Checkval(val){
 
 if(val=='firstname')
 { var element=document.getElementById('fn');
   element.style.display='block';
 }
 if(val=='lastname')
 {
   var element=document.getElementById('ln');
   element.style.display='block';
 }
 if(val=='age')
 {
   var element=document.getElementById('ag');
   element.style.display='block';
 }
 if(val=='yog')
 {
   var element=document.getElementById('yog');
   element.style.display='block';
	val="pick details you want to verify";
 }
 if(val=='uuid')
 {
   var element=document.getElementById('uuid');
   element.style.display='block';
 }
}

</script> 

</head>
<body>
    
<div id="di1">
<h3><center>Data Validation</center></h3>
<h4><center>Pick the details you want to verify</center></h4>
<select id="sel1" onchange='Checkval(this.value);'> 
    
    <option value="firstname" selected>First name</option>
    <option value="lastname">Last name</option>
    <option value="age">Age</option>
	<option value="yog">Year of Graduation</option>
	<option value="uuid">uuid</option>
  </select>
<hr>
<br>
  <form action="verify.php" method = "POST" name="myForm" onsubmit="return validateForm()">
    
    <input type="text" id="fn" name="first_name" placeholder="Your First name.." style='display:none;'/>

    
    <input type="text" id="ln" name="last_name" placeholder="Your last name.." style='display:none;'/>

     
	 
    <input type="number" id="ag" name="age" placeholder="Your age.." style='display:none;'/>
	
 
   
   <br>
    <input type="number" id="yog" name="yog" placeholder="Your year of graduation.." style='display:none;'/>
	<br>

	 
	 
    <input type="number" id="uuid" name="uuid" placeholder="Your uuid.." style='display:none;'/>
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