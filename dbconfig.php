<?php

	$host = "localhost";
	$dbname = "organisation";
	$username = "root";
	$password = "12345454";

	try
	{
		$pdo = new PDO("mysql:host=$host;", $username, $password);
		echo ("<p>Connected to $host database server");

		try
		{
			$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
			echo ("<p>Connected to $dbname database</p>");
		}
		catch (PDOException $e)
		{
			echo ("<p>Database $dbname not available</p>");
		}

	}
	catch (PDOException $e)
	{
		echo ("<p>Could not connect to $host database server</p>" . $e->getMessage());
	}
?>