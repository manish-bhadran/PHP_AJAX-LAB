<html>
<head>
	<title>Q1</title>

</head>
<body>
<form action="" method="POST" >

	<label>Enter name: </label>
	<input type="text" name="name" placeholder="Enter here" required>
	<input type="text" name="usn" placeholder="Enter here"><br><br>
	<input type="submit" name="submit" value="Submit"><br><br>
	<?php
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$usn = $_POST['usn'];
		echo "Name: $name <br>";
		echo "USN: $usn";
		
	}

	?>
</form>
</body>
</html>