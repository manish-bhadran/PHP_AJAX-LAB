<html>
<head>
	<title>Q8</title>
</head>
<body>
	<h1 align="center">Using Different Array Futions</h1>
<?php
	$marks = array(56,34,89,65,78,34,22,98,85,21,15,55,34,78,98,77,88,22,23,45,67,28,11,65,89,92,4,76,19,18,84,76,65,34,66,67,87,13,15,18);
	$cars= array("Verna", "Swift", "Figo", "Vento", "Dustor", "Figo");
	$cars1= array("Ciaz", "Eon", "Kwid");
	echo "The Smallest element in an Marks array is ".min($marks)."<br><br>"; 
	echo "The Largest element in an Marks array is ".max($marks)."<br><br>";
	echo "The Cars Array elements  ";
	print_r($cars);
	echo "<br><br>";
	echo "The Cars Array elements in reverse order ";
	print_r(array_reverse($cars, true));
	echo "<br><br>";
	echo "Displaying Cars Array Starting 3 elements using array_slice function: ";
	print_r(array_slice($cars, 2));
	echo "<br><br>";
	echo "Displaying Unique Cars Array elements using array_unique function: ";
	print_r(array_unique($cars));
	echo "<br><br>";
	echo "The Another Cars1 Array elements  ";
	print_r($cars1);
	echo "<br><br>";
	echo "Merging 2 array in one array: ";
	print_r(array_merge($cars1, $cars));
 ?>

</body>
</html>