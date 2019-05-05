<html>
<head>
<style>
.div2 {
  width: 500px;
  height: 400px;
  border: 2px solid blue;
  border-radius: 25px;
  box-sizing: border-box;
  background-color:white;
  position:absolute;
  top:10%;
  left:30%;
}
.div2:hover
{background-color:#f2f2f2;

}
.div1:hover
{background-color:violet;

}
h2,h5{
	color:blue;
	text-align:center;
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
  border-color:blue;
}
</style>
</head>
</html>





<?php

echo "<div  class='div2'>";
$f=$_POST['first_name'];
echo "<h2>". $f . "</h2>";
$l=$_POST['last_name'];
echo "<h2>". $l . "</h2>";
$a=$_POST['age'];
echo "<h2>". $a . "</h2>";
$y=$_POST['yog'];
echo "<h2>". $y . "</h2>";
$u=$_POST['uuid'];
echo "<h2>". $u . "</h2>";
echo "<hr>";
$str=$f.$l.$a.$y.$u;
echo "<h2>"."Obtained Hashvalue"."</h2>";
echo "<div class='div1'>";
$hashedoutput= hash('sha256',$str);

echo "<h5 id='cp'>". $hashedoutput. "</h5>";

echo "</div>";
echo "</div>";
?>


