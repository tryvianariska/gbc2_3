<?php
	$username = "root";
	$password = "";
	$hostname = "127.0.0.1";
	$db_name = "hooman";
 
	//connection to the database
	$mysqli = new mysqli($hostname, $username, $password, $db_name);
	/* check connection */
	if ($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}
?>