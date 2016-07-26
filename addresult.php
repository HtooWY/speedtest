
<?php
echo '<script>';
echo 'console.log("ayy lmao")';
echo '</script>';

$servername = "capstoneskyeye.cfyrhe0diz6p.us-west-2.rds.amazonaws.com:3306";
$username = "calvinlee708";
$password = "chwb5278";
$dbname = "capstone";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
echo '<script>';
echo 'console.log("haha")';
echo '</script>';
// Check connection
if (!$conn) {
	echo '<script>';
	echo 'console.log('. mysqli_connect_error().')';
	echo '</script>';
    die("Connection failed: " . mysqli_connect_error());
	
} 
echo "Connected successfully";

$download=$_POST[download];
$upload = $_POST[upload];

$sql = "INSERT INTO capstone.capstonespeedtest (download, upload, latency,jitter,test_server,ip_address,hostname,timestamp)
VALUES ($download, $upload, 0, 0, 0, 'test',null)";

$result = mysqli_query($conn,$sql);
echo '<script>';
echo 'console.log('. json_encode( 'ayy lmao' ) .')';
echo '</script>';

mysqli_close($conn);
?>