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
$download=$_POST['download'];
$upload=$_POST['upload'];
$lat=$_POST['latency'];
$jit=$_POST['jitter'];
$hostname=$_POST['hostname'];
$ip=$_POST['ip'];
$server=$_POST['testserver'];


//Arrange an SQL statement
$sql = "INSERT INTO capstone.capstonespeedtest VALUES (default, $download, $upload, $lat, $jit, '$server','test','test', NOW());";

//Query using the arranged SQL statment and retrieve the result from the DB.
$result = mysqli_query($conn, $sql);


// Close connection after submitting the test result to the database
$conn->close();
?> 