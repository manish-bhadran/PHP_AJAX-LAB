<html>
<head>
	<title>Q7to9</title>
</head>
<body>
<form action="" method="POST">
	<label>Click on submit button to display File Content: </label><br><br>
	<input type="submit" name="submit"><br><br>

	<?php
		if(isset($_POST['submit']))
		{
			$handle= fopen('f1.txt', 'r') or die('unable to open file');
			$data1=fread($handle, 10);
			echo "Content of f1.txt using fread(character): $data1 <br><br>";
			fclose($handle);

			$handle= fopen('f1.txt', 'r') or die('unable to open file');
			$data2= fgets($handle);
			echo "Content of f1.txt using fgets(line): $data2 <br><br>";
			fclose($handle);

			$handle= fopen('f1.txt', 'r') or die('unable to open file');
			echo "Content of f1.txt using feof(entire content): ";
			while (!feof($handle)) {
				echo fgets($handle)."<br>";
			}
			fclose($handle);

		}  
	?>


	
</form>

</body>
</html>