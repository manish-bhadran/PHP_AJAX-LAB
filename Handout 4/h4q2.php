<html>
<head>
	<title>Reverse Number</title>

</head>
<body>
<form action="" method="POST" >
	<h3>Fibonacci series Calculate</h3>
	<label>Enter number: </label>
	<input type="number" name="num" placeholder="Enter here" required><br>
	
	<input type="submit" name="submit"><br><br>
	<?php
	if(isset($_POST['submit']))
	{
		$num3 = $_POST['num'];
		$n1=0;
		$n2=1;
		echo "The Fibonacci series is: <br>";

		function fibo($num3, $n1, $n2)
		{
			if($num3!=0)
			{
				echo "$n1 <br>";
				fibo($num3-1,$n2, $n2+$n1);
			}
		}
		fibo($num3, $n1, $n2);
	
	}

	?>
</form>
</body>
</html>