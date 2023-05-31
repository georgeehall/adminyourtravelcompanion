<?php
// Step 1: Include the config.php file
require_once 'config.php';
// Step 2: Process form data and insert into database table
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$destination = $_POST['destination'] ?? '';
$checkin = $_POST['checkin'] ?? '';
$checkout = $_POST['checkout'] ?? '';
$board_basis = $_POST['board_basis'] ?? '';
$adults = $_POST['adults'] ?? '';
$children = $_POST['children'] ?? '';
$infants = $_POST['infants'] ?? '';
$message = $_POST['message'] ?? '';

// Escape special characters to prevent SQL injection
$name = mysqli_real_escape_string($link, $name);
$email = mysqli_real_escape_string($link, $email);
$phone = mysqli_real_escape_string($link, $phone);
$destination = mysqli_real_escape_string($link, $destination);
$checkin = mysqli_real_escape_string($link, $checkin);
$checkout = mysqli_real_escape_string($link, $checkout);
$board_basis = mysqli_real_escape_string($link, $board_basis);
$adults = mysqli_real_escape_string($link, $adults);
$children = mysqli_real_escape_string($link, $children);
$infants = mysqli_real_escape_string($link, $infants);
$message = mysqli_real_escape_string($link, $message);

// Check if any required fields are empty
if (empty($name) || empty($email) || empty($phone)) {
  die("Error: Required fields are missing.");
}


// Construct the SQL query
$sql = "INSERT INTO hotel_quotes (name, email, phone, destination, checkin, checkout, board_basis, adults, children, infants, message) 
        VALUES ('$name', '$email', '$phone', '$destination', '$checkin', '$checkout', '$board_basis', '$adults', '$children', '$infants', '$message')";

// Execute the query and check if it was successful
if (mysqli_query($link, $sql)) {
  header("Location: welcome.php?thankyou=true");
  exit();
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($link);
}


// Step 3: Close the database link
mysqli_close($link);
?>
