<?php
	echo "<h3>--------------- MY Results ---------------</h3>";
	echo "<table>";
	echo "<tr>";
	echo "<th>Timestamp</th>";
	echo "<th>IP Address</th>";
	echo "<th>Download</th>";
	echo "<th>Upload</th>";
	echo "<th>Jitter</th>";
	echo "<th>Test Server</th>";
	echo "<th>Host</th>";
	echo "</tr>";
	$servername = "capstoneskyeye.cfyrhe0diz6p.us-west-2.rds.amazonaws.com:3306";
	$username = "calvinlee708";
	$password = "chwb5278";
	$dbname = "capstone";
	$conn = mysqli_connect($servername, $username, $password);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	//Select database to use
	mysqli_select_db($conn,"capstone");

	//Arrange an SQL statement
	$sql = "SElECT * FROM capstone.capstonespeedtest where IP='$_GET['ip']';";

	//Query using the arranged SQL statment and retrieve the result from the DB.
	$result = mysqli_query($conn, $sql);
	
	
	echo "</table>";
				
	// Close connection after submitting the test result to the database
	$conn->close();
				
?>