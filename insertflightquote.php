<?php
// Step 1: Include the config.php file
require_once "config.php";

// Step 2: Process form data and insert into database table
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$destination = $_POST['destination'] ?? '';
$outbound_date = $_POST['outbound_date'] ?? '';
$return_date = $_POST['return_date'] ?? '';
$travel_class = $_POST['travel_class'] ?? '';
$preferred_airline = $_POST['preferred_airline'] ?? '';
$adults = $_POST['adults'] ?? '';
$children = $_POST['children'] ?? '';
$infants = $_POST['infants'] ?? '';
$message = $_POST['message'] ?? '';

// Escape special characters to prevent SQL injection
$name = mysqli_real_escape_string($link, $name);
$email = mysqli_real_escape_string($link, $email);
$phone = mysqli_real_escape_string($link, $phone);
$destination = mysqli_real_escape_string($link, $destination);
$outbound_date = mysqli_real_escape_string($link, $outbound_date);
$return_date = mysqli_real_escape_string($link, $return_date);
$travel_class = mysqli_real_escape_string($link, $travel_class);
$preferred_airline = mysqli_real_escape_string($link, $preferred_airline);
$adults = mysqli_real_escape_string($link, $adults);
$children = mysqli_real_escape_string($link, $children);
$infants = mysqli_real_escape_string($link, $infants);
$message = mysqli_real_escape_string($link, $message);

// Check if any required fields are empty
if (empty($name) || empty($email) || empty($phone)) {
  die("Error: Required fields are missing.");
}

// Construct the SQL query
$sql = "INSERT INTO flight_quotes (name, email, phone, destination, preferred_airline, outbound_date, return_date, travel_class, adults, children, infants, message)
        VALUES ('$name', '$email', '$phone', '$destination', '$preferred_airline', '$outbound_date', '$return_date', '$travel_class', '$adults', '$children', '$infants', '$message')";

// Execute the query and check if it was successful
if (mysqli_query($link, $sql)) {
  header("Location: welcome.php");
  exit();
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

// Step 3: Close the database connection
mysqli_close($link);
?>
