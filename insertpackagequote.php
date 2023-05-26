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
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$destination = $_POST['destination'];
$preferred_hotel = $_POST['preferred_hotel'];
$board_basis = $_POST['board_basis'];
$outbound_date = $_POST['outbound_date'];
$return_date = $_POST['return_date'];
$travel_class = $_POST['travel_class'];
$preferred_airline = $_POST['preferred_airline'];
$adults = $_POST['adults'];
$children = $_POST['children'];
$infants = $_POST['infants'];
$rooms = $_POST['rooms'];
$car_hire = $_POST['car_hire'];
$transfers = $_POST['transfers'];
$total_budget = $_POST['total_budget'];
$message = $_POST['message'];

// Escape special characters to prevent SQL injection
$name = mysqli_real_escape_string($connection, $name);
$email = mysqli_real_escape_string($connection, $email);
$phone = mysqli_real_escape_string($connection, $phone);
$destination = mysqli_real_escape_string($connection, $destination);
$preferred_hotel = mysqli_real_escape_string($connection, $preferred_hotel);
$board_basis = mysqli_real_escape_string($connection, $board_basis);
$outbound_date = mysqli_real_escape_string($connection, $outbound_date);
$return_date = mysqli_real_escape_string($connection, $return_date);
$travel_class = mysqli_real_escape_string($connection, $travel_class);
$preferred_airline = mysqli_real_escape_string($connection, $preferred_airline);
$adults = mysqli_real_escape_string($connection, $adults);
$children = mysqli_real_escape_string($connection, $children);
$infants = mysqli_real_escape_string($connection, $infants);
$rooms = mysqli_real_escape_string($connection, $rooms);
$car_hire = mysqli_real_escape_string($connection, $car_hire);
$transfers = mysqli_real_escape_string($connection, $transfers);
$total_budget =mysqli_real_escape_string($connection, $total_budget);
$message = mysqli_real_escape_string($connection, $message);

// Construct the SQL query
// Construct the SQL query
$sql = "INSERT INTO package_quotes (name, email, phone, destination, preferred_hotel, board_basis, preferred_airline, outbound_date, return_date, travel_class, adults, children, infants, rooms, car_hire, transfers, total_budget, message)
        VALUES ('$name', '$email', '$phone', '$destination', '$preferred_hotel', '$board_basis', '$preferred_airline', '$outbound_date', '$return_date', '$travel_class', '$adults', '$children', '$infants', '$rooms', '$car_hire', '$transfers', '$total_budget', '$message')";


// Execute the query and check if it was successful
if (mysqli_query($connection, $sql)) {
  header("Location: index.php?thankyou=true");
  exit();
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}


// Step 3: Close the database connection
mysqli_close($connection);
?>
