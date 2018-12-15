<html>
<head>
	<title>If Statement</title>
</head>
<body>

<?php
$t = date("H");
if($t <"20"){
	echo "Have a nice day <br>";
	echo $t;
	echo "<br>";
	echo "Day: "." ".date("D");
	echo "<br>";
	echo "Date: "." ".date("d");
}
?>

</body>
</html>