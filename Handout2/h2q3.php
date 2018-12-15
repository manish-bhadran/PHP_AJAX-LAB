<html>
<head>
	<title>Q3 </title>

</head>
<body>
<form action="" method="POST" >
<h3 align="center">STUDENT FORM</h3>
	<label>Name: </label>
	<input type="text" name="name" placeholder="Enter name" required><br><br>
	<label>Gender: </label>
	<input type="radio" name="gender" value="Male">Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="radio" name="gender" value="Female">Female&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="radio" name="gender" value="Other">Other&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>
	<input type="checkbox" name="course[]" value="C++">C++&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="checkbox" name="course[]" value="Java">Java&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="checkbox" name="course[]" value="Python">Python&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="checkbox" name="course[]" value="PHP">PHP<br><br><br>
	<label>Select Year: </label>
	<select name="years">
		<option value="select">select</option>
		<option value="1st Year">1st Year</option>
		<option value="2nd Year">2nd Year</option>
		<option value="3rd Year">3rd Year</option>
	</select><br><br><br>
	<label>Password: </label>
	<input type="password" name="pass" placeholder="Enter Password" required><br><br>	
	<label>Discription: </label>
	<textarea rows="3" cols="30" placeholder="Suggestions" name="sugg"></textarea><br><br>
	<input type="hidden" name="some" value="1234">

	<input type="submit" name="submit" value="Submit"><br><br><hr><br><br>
	<?php
	if(isset($_POST['submit']))
	{
		$name= $_POST['name'];
		$gender= $_POST['gender'];
		$years= $_POST['years'];
		$courses= $_POST['course'];
		$dis= $_POST['sugg'];
		$hide= $_POST['some'];
		echo "<h2><center>STUDENT INFORMATION</center></h2><br><br>";
		echo "Name: $name <br><br>";
		echo "Gender: $gender <br><br>";
		echo "Known Languages: ";
		foreach ($courses as $course) {
			echo "$course , ";	
		}
		echo "<br><br>";
		echo "Year: $years<br><br>";
		echo "Discription: $dis<br><br>";
		echo "Hidden Field value: $hide";
		
	
		
	}

	?>
</form>
</body>
</html>