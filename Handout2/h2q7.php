<html>
<head>
	<title>Q7</title>
</head>
<body>
	<h3>Average of Class Marks:</h3>
	<?php 
		$marks = array(56,34,89,65,78,34,22,98,85,21,15,55,34,78,98,77,88,22,23,45,67,28,11,65,89,92,4,76,19,18,84,76,65,34,66,67,87,13,15,18);
		$len= count($marks);
		$sum=0;
		$avg=0;
		$low=0;
		$high=0;
		for ($i=0; $i < $len ; $i++) { 
			$sum=$sum+$marks[$i];
		}
		$avg=$sum/$len;
		echo "Average Marks of $len Students are ".round($avg, 2)."<br><br><br>";
		
		for ($i=0; $i <$len ; $i++) { 
			if($marks[$i]<20)
			{
				++$low;
			}
		}
		for ($i=0; $i <$len ; $i++) { 
			if($marks[$i]>80)
			{
				++$high;
			}
		}
		echo "<h3>Number of Students who secured less than 20%</h3>";
		echo "<h2>Students: $low</h2><br><br>";
		echo "<h3>Number of Students who secured greater than 80%</h3>";
		echo "<h2>Students: $high</h2><br><br>";



	 ?>

</body>
</html>