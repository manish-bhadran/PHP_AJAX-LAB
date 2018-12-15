<html>
<head>
	<title>Reverse Number</title>

</head>
<body>
<form action="" method="POST" >
	<label>Enter any number: </label>
	<input type="number" name="num" placeholder="Enter here" required>
	<input type="submit" name="submit"><br><br>
	<?php
	if(isset($_POST['submit']))
	{
		$num = $_POST['num'];
		$rem=0;
		$temp=$num;
		$ans=0;
		do{
			$rem = $num % 10;
			$ans = (($ans*10)+$rem) ;
			$num = $num / 10;

		}while($num != 0);
		echo "Number  is $temp <br>";
		echo "Reverse No. $ans";
	}

	?>
</form>
</body>
</html>