<!DOCTYPE html>
<html>
<head>
	<title>View Package Quote</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
	<h1 class="mb-3">View Package Quote</h1>
	<?php
	// Check if an ID value was passed as a URL parameter
	if (isset($_GET["id"])) {
		$id = $_GET["id"];
		// Connect to the database
        $conn = mysqli_connect("localhost", "root", "", "yourtravelcompanion"); 
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		// Select the row with the matching ID value
		$sql = "SELECT * FROM package_quotes WHERE id = $id";
		$result = mysqli_query($conn, $sql);
		// Check if a row was found
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
			$name = $row["name"];
			$email = $row["email"];
			$phone = $row["phone"];
			$destination = $row["destination"];
			$perferred_hotel = $row["preferred_hotel"];
			$board_basis = $row["board_basis"];
			$outbound_date = date('d/m/Y', strtotime($row["outbound_date"])); // format date to UK format
			$return_date = date('d/m/Y', strtotime($row["return_date"])); // format date to UK format
			$travel_class = $row["travel_class"];
			$preferred_airline = $row["preferred_airline"];
			$adults = $row["adults"];
			$children = $row["children"];
			$infants = $row["infants"];
			$rooms = $row["rooms"];
			$car_hire = $row["car_hire"];
			$transfers = $row["transfers"];
			$total_budget = $row["total_budget"];
			$message = $row["message"];
			$status = $row["status"];
			// Display the row data in a table
			echo "<table class='table'>";
			echo "<tr><th>ID</th><td>$id</td></tr>";
			echo "<tr><th>Name</th><td>$name</td></tr>";
			echo "<tr><th>Email</th><td>$email</td></tr>";
			echo "<tr><th>Phone</th><td>$phone</td></tr>";
			echo "<tr><th>Destination</th><td>$destination</td></tr>";
			echo "<tr><th>perferred_hotel</th><td>$perferred_hotel</td></tr>";
			echo "<tr><th>board_basis</th><td>$board_basis</td></tr>";
			echo "<tr><th>Outbound Date</th><td>$outbound_date</td></tr>";
			echo "<tr><th>Return Date</th><td>$return_date</td></tr>";
			echo "<tr><th>Travel Class</th><td>$travel_class</td></tr>";
			echo "<tr><th>Preferred Airline</th><td>$preferred_airline</td></tr>";
			echo "<tr><th>Adults</th><td>$adults</td></tr>";
			echo "<tr><th>Children</th><td>$children</td></tr>";
			echo "<tr><th>Infants</th><td>$infants</td></tr>";
			echo "<tr><th>Rooms</th><td>$rooms</td></tr>";
			echo "<tr><th>Car Hire</th><td>$car_hire</td></tr>";
			echo "<tr><th>Transfers</th><td>$transfers</td></tr>";
			echo "<tr><th>Budget</th><td>$total_budget</td></tr>";
			echo "<tr><th>Message</th><td>$message</td></tr>";
			echo "<tr><th>Status</th><td>$status</td></tr>";
			echo "</table>";
		} else {
			// If no row was found, display an error message
			echo "<p>Invalid ID value. Please try again.</p>";
		}
		// Close the database connection
		mysqli_close($conn);
    }
		?>
		
</div>
</body>
</html>
