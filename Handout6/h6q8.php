<?php
	//error handler function
	function customError($errno, $errstr){
		echo "<br> Error: <br> [$errno] $errstr<br>";
		die();
	} 
	//setting error handler
	set_error_handler("customError", E_USER_ERROR);

	//trriger error
	if (!file_exists("file.txt")) {
  trigger_error("File not found",E_USER_ERROR);
}
 ?>