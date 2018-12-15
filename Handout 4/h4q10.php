<html>
<head>
	<title>Store data</title>
</head>
<body>
<form action="" method="POST">
	<label>ID: </label>
	<input type="text" name="id" placeholder="Enter your Id" required><br><br>
	<label>Name: </label>
	<input type="text" name="fname" placeholder="Enter your frist name: " required><br><br>
	<input type="submit" name="submit" value="Store in File">
	<?php
	
		if(isset($_POST['submit']))
		{
			$id = $_POST['id'];
			$fname = $_POST['fname'];
			
			$handle=fopen('store1.txt', 'w') or die('unable to open file');
			fwrite($handle, $id);
			
			fwrite($handle, "\n");
			fwrite($handle, $fname);
			fclose($handle);

		}

	?>
	<script type="text/javascript">alert("Data stored successfully!!")</script>
</form>

</body>
</html>