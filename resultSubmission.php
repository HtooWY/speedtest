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
echo '<script>';
echo 'console.log("ayylmao")';
echo '</script>';

//Select database to use
mysqli_select_db($conn,"capstone");
$j=$_POST=['download']

//Arrange an SQL statement
$sql = "INSERT INTO capstone.capstonespeedtest VALUES (default, $j, 1, 1, 1, 'test', 'test', 'test', NOW());";

//Query using the arranged SQL statment and retrieve the result from the DB.
$result = mysqli_query($conn, $sql);


// Close connection after submitting the test result to the database
$conn->close();
?> 