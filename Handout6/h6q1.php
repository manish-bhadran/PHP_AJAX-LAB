<?php
$cookie_name= "user";
$cookie_value="Manish";
setcookie($cookie_name, $cookie_value, time()+15,"/"); 
 ?>
<html>
<head>
	<title>Cookie</title>
</head>
<body>
<?php
if(!isset($_COOKIE[$cookie_name])){
	echo "Cookie named ".$cookie_name." "."is not set" ;
} 
else{
	echo "Cookie ".$cookie_name." "."is set<br>";
	echo "Value is ".$_COOKIE[$cookie_name] ;
}
 ?>



</body>
</html>