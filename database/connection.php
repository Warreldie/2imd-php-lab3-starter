<?php
	define("DB_SERVER", "127.0.0.1");
	define("DB_USER", "root");
	define("DB_PASSWORD", "123456");
	define("DB_DATABASE", "spotify");

	// $conn = mysqli_connect(servername_db, username_db, password_db, database_db);
	try {
		$conn = new PDO("mysql:dbname=".DB_DATABASE.";host=".DB_SERVER.";charset=UTF8", DB_USER, DB_PASSWORD);
	}
	catch (PDOException $e) {
		echo $e->getMessage();
	}
	
?>