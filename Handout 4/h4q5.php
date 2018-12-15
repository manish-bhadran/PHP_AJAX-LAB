<html>
<head>
	<title>Q5</title>
</head>
<body>
<form action="" method="POST">
	<label>Length: </label>
	<input type="number" name="l" placeholder="Enter here" required>
	<label>Width: </label>
	<input type="number" name="w" placeholder="Enter here" required><br><br>
	<input type="submit" name="submit" value="Submit"><br><br>
	
</form>
<?php

	if(isset($_POST['submit']))
	{
		$l= (int)$_POST['l'];
		$w= (int)$_POST['w'];

	class rectangle{
		var $len;
		var $wid;

		
		function setdata($l, $w)
		{
			$this->len = $l;
			$this->wid = $w;
		}

		function area()
		{
			
			$ans1= $this->len*$this->wid;
			echo "Area: $ans1<br>";
		}
		function pera()
		{
			$ans2= 2*($this->len+$this->wid);
			echo "Perameter: $ans2";
		}
	}
	$obj = new rectangle();
	$obj->setdata($l, $w);
	$obj->area();
	$obj->pera();
	}
  ?>

</body>
</html>