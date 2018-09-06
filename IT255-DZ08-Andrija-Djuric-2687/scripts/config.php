<?php
	$servername = "localhost";
	$username   = "root";
	$password   = "";
	$database   = "testdb";
	$conn       = new mysqli($servername, $username, $password, $database);

	if ($conn->connect_error) {
		die("Database connection error: " . $conn->connect_error);
	}
?>