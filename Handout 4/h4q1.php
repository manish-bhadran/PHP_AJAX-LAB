<html>
<head>
	<title>Reverse Number</title>

</head>
<body>
<form action="" method="POST" >
	<h3>GCD Calculate</h3>
	<label>Enter number: </label>
	<input type="number" name="num1" placeholder="Enter here" required><br>
	<label>Enter number: </label>
	<input type="number" name="num2" placeholder="Enter here" required><br>
	<input type="submit" name="submit"><br><br>
	<?php
	if(isset($_POST['submit']))
	{
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		
		function gcd($num1, $num2)
		{
			if($num2==0)
				return $num1;
			else
				return gcd($num2,$num1%$num2);
		}
		echo "GCD of $num1 & $num2 is ";
		echo gcd($num1, $num2);
	}

	?>
</form>
</body>
</html>