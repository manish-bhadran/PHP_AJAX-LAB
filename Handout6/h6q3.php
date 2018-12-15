
<html>
<head>
	<title>Session</title>
</head>
<body>
<?php 
session_start();
if(isset($_SESSION['counter'])){
	$_SESSION['counter']+=1;
}
else {
	$_SESSION['counter']=1;
}
echo "You have visited th page ".$_SESSION['counter'];

 ?>



</body>
</html>