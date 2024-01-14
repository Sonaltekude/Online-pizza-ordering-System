
<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$con = mysqli_connect($servername, $username, $password);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database
mysqli_select_db($con,"pizza");

?>
