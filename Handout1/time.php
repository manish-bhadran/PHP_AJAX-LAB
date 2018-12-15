<html>
<head>
	<title>time</title>
</head>
<body>
<?php
	echo strtotime("now")."<br>";
	echo strtotime("yesterday")."<br>";
	echo strtotime("tomorrow")."<br>";
	echo strtotime("10 Septempber 2000")."<br>";
	print time()."<br>";

	echo "Today is ".date("Y/m/d")."<br>";
	echo "Today is ".date("Y.m.d")."<br>";
	echo "Today is ".date("Y-m-d")."<br>";
	echo "Today is ".date("l")."<br><br>";

	$yesterday = new DateTime('yesterday'); //object
	echo $yesterday->format("Y/m/d")."<br>";


	$twoDaysLater = new DateTime('+2 days');
	echo $twoDaysLater->format("Y/m/d")."<br>";
	$oneWeekEarly = new DateTime('-1 week');
	echo $oneWeekEarly->format("Y/m/d")."<br>";
	$dateTime = new DateTime('2015-01-01 12:30:12');
	echo $dateTime->format("Y/m/d")."<br>";
	$today = new DateTime('today');
	echo $today->format("Y/m/d")."<br>";
?>

</body>
</html>