<!DOCTYPE html>
<html>
<head>
	<title>View Hotel Quote</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
	<h1 class="mb-3">View Hotel Quote</h1>
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
		$sql = "SELECT * FROM hotel_quotes WHERE id = $id";
		$result = mysqli_query($conn, $sql);
		// Check if a row was found
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
			$name = $row["name"];
			$email = $row["email"];
			$phone = $row["phone"];
			$destination = $row["destination"];
            $checkin = date('d/m/Y', strtotime($row["checkin"])); // format date to UK format
			$checkout = date('d/m/Y', strtotime($row["checkout"])); // format date to UK format
			$adults = $row["adults"];
			$children = $row["children"];
			$infants = $row["infants"];
			$board_basis = $row["board_basis"];
			$message = $row["message"];
			$status = $row["status"];
			// Display the row data in a table
			echo "<table class='table'>";
			echo "<tr><th>ID</th><td>$id</td></tr>";
			echo "<tr><th>Name</th><td>$name</td></tr>";
			echo "<tr><th>Email</th><td>$email</td></tr>";
			echo "<tr><th>Phone</th><td>$phone</td></tr>";
			echo "<tr><th>Destination</th><td>$destination</td></tr>";
			echo "<tr><th>Outbound Date</th><td>$checkin</td></tr>";
			echo "<tr><th>Return Date</th><td>$checkout</td></tr>";
			echo "<tr><th>Adults</th><td>$adults</td></tr>";
			echo "<tr><th>Children</th><td>$children</td></tr>";
			echo "<tr><th>Infants</th><td>$infants</td></tr>";
			echo "<tr><th>Board Basis</th><td>$board_basis</td></tr>";
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
