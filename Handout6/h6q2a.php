<?php
$cookie_name= "time";
$cookie_value=date("d/m/y h:i:s");
?>
<html>
<head>
	<title>Cookie time</title>
	
</head>
<body>
<h5>Last visited time on web page: </h5>
<?php
$cookie_name= "time";
$cookie_value=date("d/m/y h:i:s");

if(!isset($_COOKIE[$cookie_name])){
	echo "Cookie named ".$cookie_name." "."is not set<br>" ;
} 
else{
	
	echo "You last visited was ".$_COOKIE[$cookie_name]."<br>" ;
}
setcookie($cookie_name, $cookie_value, time()+60,"/");
echo "Curent Login Time: ".$cookie_value."<br>";

 ?>



</body>
</html>