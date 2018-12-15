<html>
<head>
	<title>Q5</title>
</head>
<body>
	<h3>Displaying an array elements numbers which is less than 15 from an marks array:</h3><br><br>
	<?php
	$marks = array(56,34,89,65,78,5,22,98,85,21,15,55,34,78,98,77,88,22,10,45,67,28,11,65,89,92,4,12,19,18,84,76,65,34,6,67,87,13,15,18); 
	$len = count($marks);
	for ($i=0; $i <$len ; $i++) { 
		if($marks[$i]<15)
		{
			echo "$marks[$i]<br>";
		}
	}
	 ?>
	 


</body>
</html>