 <?php

// Login credentials
$servername = "capstoneskyeye.cfyrhe0diz6p.us-west-2.rds.amazonaws.com:3306";
$username = "resultSubmission";
$password = "reply1988";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

//Select database to use
mysqli_select_db($conn,"capstone");

//Arrange an SQL statement
$sql = "INSERT INTO capstone.capstonespeedtest VALUES (default, $_POST[download], $_POST[upload], $_POST[latency], $_POST[jitter], $_POST[testServer], $_POST[ip], $_POST[hostname], NOW());";

//Query using the arranged SQL statment and retrieve the result from the DB.
$result = mysqli_query($conn, $sql);


// Close connection after submitting the test result to the database
$conn->close();
?> 