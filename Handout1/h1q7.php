<html>
<head>
	<title>Leap Year</title>

</head>
<body>
<form action="" method="POST" >
	<label>Enter a year: </label>
	<input type="number" name="year" placeholder="Enter here" required>
	<input type="submit" name="submit"><br><br>
	<?php
	if(isset($_POST['submit']))
	{
		$year = $_POST['year'];
		if(($year % 4 == 0) && ($year % 100 != 0) || ($year % 400 == 0))
		{
			echo "$year is a leap year";
			echo "<script type='text/javascript'>alert('$year  is a leap year');</script>";

		}
		else{
			echo "$year is not a leap year";
			echo "<script type='text/javascript'>alert('$year  is not a leap year');</script>";
		}
	}

	?>
</form>
</body>
</html>