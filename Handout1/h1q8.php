<html>
<head>
	<title>Greatest among three</title>
</head>
<body>
<form action="" method="post">
	<label>Enter Number for A: </label>
	<input type="number" name="num1" placeholder="enter here" required><br><br>
	<label>Enter Number for B: </label>
	<input type="number" name="num2" placeholder="enter here" required><br><br>
	<label>Enter Number for C: </label>
	<input type="number" name="num3" placeholder="enter here" required><br><br>
	<input type="submit" name="submit"><br><br>
	<?php
	if(isset($_POST['submit'])){
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$num3 = $_POST['num3'];

		if(($num1 > $num2) && ($num1 > $num3))
		{
			echo "A is largest";
		}
		elseif ($num2 > $num3 ) {
			echo "B is largest";
		}
		else{
			echo "C is largest";
		}
	}
	?>
	
</form>

</body>
</html>