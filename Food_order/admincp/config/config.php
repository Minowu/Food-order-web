<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="web_mysql";  
// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
  die("Kết nối lỗi : " . $con->connect_error);
}
?>