<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "timesheet";

// $servername = "server267.web-hosting.com";
// $username = "linozanw_andy";
// $password = "twinkie5050";
// $dbname = "linozanw_timesheet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
