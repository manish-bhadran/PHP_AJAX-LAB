<html>
<head>
	<title>Q6</title>
</head>
<body>
<?php
	$age=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
	echo "<h3>An ARRAY</h3>";
	foreach ($age as $key => $value) {
		echo $key." "."=>".$value."<br>";
	}
	echo "<br><br>";
	echo "<h3>Acending order sort array by value</h3>";
	asort($age);

	foreach ($age as $key => $value) {
		echo $key." "."=>".$value."<br>";
	}
	echo "<br><br>";

	echo "<h3>Acending order sort array by key</h3>";
	ksort($age);

	foreach ($age as $key => $value) {
		echo $key." "."=>".$value."<br>";
	}
	echo "<br><br>";

	echo "<h3>Decending order sort array by value</h3>";
	arsort($age);

	foreach ($age as $key => $value) {
		echo $key." "."=>".$value."<br>";
	}
	echo "<br><br>";

	echo "<h3>Decending order sort array by key</h3>";
	krsort($age);

	foreach ($age as $key => $value) {
		echo $key." "."=>".$value."<br>";
	}
	echo "<br><br>";

 ?>

</body>
</html>