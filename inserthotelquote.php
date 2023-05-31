<?php
// Step 1: Establish a database connection
$host = "localhost";
$user = "root";
$password = "";
$database = "yourtravelcompanion";

$connection = mysqli_connect($host, $user, $password, $database);

// Check if the connection was successful
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}

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
$name = mysqli_real_escape_string($connection, $name);
$email = mysqli_real_escape_string($connection, $email);
$phone = mysqli_real_escape_string($connection, $phone);
$destination = mysqli_real_escape_string($connection, $destination);
$checkin = mysqli_real_escape_string($connection, $checkin);
$checkout = mysqli_real_escape_string($connection, $checkout);
$board_basis = mysqli_real_escape_string($connection, $board_basis);
$adults = mysqli_real_escape_string($connection, $adults);
$children = mysqli_real_escape_string($connection, $children);
$infants = mysqli_real_escape_string($connection, $infants);
$message = mysqli_real_escape_string($connection, $message);

// Check if any required fields are empty
if (empty($name) || empty($email) || empty($phone)) {
  die("Error: Required fields are missing.");
}


// Construct the SQL query
$sql = "INSERT INTO hotel_quotes (name, email, phone, destination, checkin, checkout, board_basis, adults, children, infants, message) 
        VALUES ('$name', '$email', '$phone', '$destination', '$checkin', '$checkout', '$board_basis', '$adults', '$children', '$infants', '$message')";

// Execute the query and check if it was successful
if (mysqli_query($connection, $sql)) {
  header("Location: welcome.php?thankyou=true");
  exit();
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}


// Step 3: Close the database connection
mysqli_close($connection);
?>
