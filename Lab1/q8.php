<html>
<head>
	<title>(Q8) Date Function</title>
</head>
<body>
<?php
	echo date("l"." "."jS"." "."F"." "."Y"." "."h:i:s A")."<br><br>";
	echo date(DATE_RFC822);
	echo "<h4>31 January 1996 was on ".date("l", mktime(0,0,0,01,31,1996))."</h4><br>";

?>

</body>
</html>