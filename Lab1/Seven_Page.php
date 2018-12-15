<html>
<head>
	<title>Switch Statement</title>
</head>
<body>
<?php
$fav= "red";
switch ($fav) {
	case "red":
		echo "Your favourite color is Red";
		break;
	case "blue":
		echo "Your favourite color is Blue";
		break;
	case "green":
		echo "Your favourite color is green`";
		break;
	
	default:
		echo "Your favourite color is nither red, blue nor green";
		break;
}

?>
</body>
</html>