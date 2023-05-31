<?php
// Step 1: Establish a database connection
$host = "localhost";
$user = "root";
$password = "";
$database = "yourtravelcompanion";

$link = mysqli_connect($host, $user, $password, $database);

// Check if the connection was successful
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}



