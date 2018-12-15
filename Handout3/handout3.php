<!DOCTYPE html>
<html>
<head>
	<title>HANDOUT 3</title>
</head>
<body>
<?php 
echo "<br>CHECKDATE<br>";
echo checkdate(12,31,2017);
echo "<br>";
var_dump(checkdate(2,28,2003));

echo "<br>TIMESTAMP<br>";
$timestamp = strtotime('2-3-2011');
$newDate = date('d-M-y:D', $timestamp); 
echo $newDate;

echo "<br>DATE OF BIRTH CALCULATOR<br>";
echo"<br>";
$sdate = new DateTime("1995-06-22");
$edate = new DateTime("now");
$interval = $sdate->diff($edate);
echo "you are : " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days old ";


echo "<br>DIFFERENCE B/W TWO DATES<br>";
$sdate = new DateTime("1981-11-03");
$edate = new DateTime("2013-09-04");
$interval = $sdate->diff($edate);
echo "Difference : " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days ";

echo "<br>LASR WEEK DATE AND TIME<br>";
echo date('d.m.Y/h:i:s',strtotime("-1 week"));
 ?>
</body>
</html>