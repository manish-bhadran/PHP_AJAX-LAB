	<html>
<head>
	<title>Q3</title>
</head>
<body>
<?php
	class book{
		var $title;
		var $num_Pages;

		function __construct(){
		$this->num_Pages = 700;
		$this->title = 'My Life';

		}

		function __construct($numofpages, $title){
			$this->num_Pages = $numofpages;
			$this->title = $title;

		}

		function setdata($numofpages, $title)
		{
			$this->num_Pages = $numofpages;
			$this->title = $title;
		}

		function getdata1()
		{

			return $this->num_Pages;
		}

		function getdata2()
		{

			return $this->title;
		}

	}  
	$obj1 = new book();
	$obj2 = new book();
	$obj3 = new book(250, 'Java Raferences');
	echo "First Object Using Parameter<br>";
	$obj1->setdata(547, 'Manish');

	$page=$obj1->getdata1();
	$t=$obj1->getdata2();
	echo "Number of Pages: $page <br> Title: $t<br>";

	echo "Second Object Using Constructor<br><br>";	
	$p=$obj2->getdata1();
	$t=$obj2->getdata2();
	echo "Number of Pages: $p <br> Title: $t<br><br>";

	echo "Third Object Using Constructor and Passing Perameter<br>";	
	$p=$obj3->getdata1();
	$t=$obj3->getdata2();
	echo "Number of Pages: $p <br> Title: $t<br>";

?>

</body>
</html>