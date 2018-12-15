<html>
<head>
	<title>Q4</title>
</head>
<body>
	<h1>Sorting An Array</h1>
	<?php
		$name = array("Manish", "Ram", "Arun", "Karun", "Punit");
		echo "<h3>An Array</h3>";
		foreach ($name as $value) {
			echo "$value<br>";
		}
		echo "<h3>After Sorted An Array</h3>";
		sort($name);
		$alen= count($name);
		for($i=0; $i <$alen ; $i++) { 
			echo "$name[$i]<br>";
		}
		echo "$alen";
	?>

</body>
</html>