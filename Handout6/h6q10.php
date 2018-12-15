<html>
<head>
	<title>File Line</title>
</head>
<body>
<form action="" method="POST">
<input type="text" name="line" required>
<input type="submit" name="submit">

<?php
$count=0;
if(isset($_POST['submit']))
{
	$fp=fopen($_POST['line'], 'r')or die("Unable to open file!");

	while(!feof($fp)){
		fgets($fp);
		
		$count=$count+1;
		
	}
	fclose($fp);
	$count--;
	echo "<br>No. of Lines in file is $count";
	
}

?>
	
</form>
</body>
</html>		