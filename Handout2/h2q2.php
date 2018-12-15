<html>
<head>
	<title>Q2 </title>

</head>
<body>
<form action="" method="POST" >
<h3>Fahrenheit To Kelvin Temprature Conversion</h3>
	<label>Enter Fahrenheit (F): </label>
	<input type="text" name="temp" placeholder="Enter here" required>
	<input type="submit" name="submit" value="Submit"><br><br>
	<?php
	if(isset($_POST['submit']))
	{
		$temp = $_POST['temp'];
		$kelvin;
		$kelvin = ($temp + 459.67) * 5/9;
		echo "Temprature in Kelvin is $kelvin <br>";
	
		
	}

	?>
</form>
</body>
</html>