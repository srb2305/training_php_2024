<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$databasename = "php_training";

	$con = mysqli_connect($servername, $username, $password, $databasename);
	if(!$con){
		echo "Database not connected...";
		print_r(mysqli_connect_error());
	}else{
		//echo "Database Connected";
	}
?>