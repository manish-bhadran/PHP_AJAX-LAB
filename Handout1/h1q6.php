<html>
<head>
	<title>Armstrong Number</title>

</head>
<body>
<form action="" method="POST" >
	<label>Enter a year: </label>
	<input type="number" name="num" placeholder="Enter here" required>
	<input type="submit" name="submit"><br><br>
	<?php
	if(isset($_POST['submit']))
	{
		$num = $_POST['num'];
		$sum=0;
		$rem=0;
		$temp=0;
		$temp=$num;
		while($temp!=0)
		{
			$rem= $temp%10;
			$sum=$sum+$rem*$rem*$rem;
			$temp= (int)$temp/10;
		}
		if($sum===$num)
		{
			echo "$num is an Armstrong Number";
			echo "<script type='text/javascript'>alert('$num is an Armstrong Number');</script>";

		}
		else{
			echo "$num is not an Armstrong Number";
			echo "<script type='text/javascript'>alert('$num is not an Armstrong Number');</script>";
		}
	}

	?>
</form>
</body>
</html>