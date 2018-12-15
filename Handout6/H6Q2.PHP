<?php
$cookie_name= "user";
$cookie_value=date("d/m/y h:i:s");
setcookie($cookie_name, $cookie_value, time()+60,"/"); 
 ?>
<html>
<head>
	<title>Cookie time</title>
	<h5>Last visited time on web page: </h5>
</head>
<body>
<?php
if(!isset($_COOKIE[$cookie_name])){
	echo "Cookie named ".$cookie_name." "."is not set" ;
} 
else{
	echo "Cookie ".$cookie_name." "."is set<br>";
	echo "You last visited was ".$_COOKIE[$cookie_name] ;
}
 ?>



</body>
</html>