<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <script src="https://kit.fontawesome.com/ea02caf681.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@1,500&display=swap" rel="stylesheet">
    <link href="sidebars.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="sidebars.js"></script>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap');

    body {
        font-family: 'Rubik', sans-serif;

    }
    </style>
</head>

<body>


    <main>

        <div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
            <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
                <svg class="bi me-2" width="30" height="24">
                    <a href="welcome.php">
                </svg>
                <span class="fs-5 fw-semibold" style="margin-left: -25px;
">Your Travel Companion</span>
            </a>
            <ul class="list-unstyled ps-0">
                <li><a href="welcome.php" class="link-dark rounded">Dashboard</a></li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#dashboard-collapse" aria-expanded="false">
                        Create quotes
                    </button>
                    <div class="collapse" id="dashboard-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="new_quote_overview.php" class="link-dark rounded">Overview</a></li>
                            <li><a href="new_hotel_quote.php" class="link-dark rounded">Hotel Only</a></li>
                            <li><a href="new_flight_quote.php" class="link-dark rounded">Flight Only</a></li>
                            <li><a href="new_package_quote.php" class="link-dark rounded">Packages</a></li>
                            <li><a href="new_other_quote.php" class="link-dark rounded">Other</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#orders-collapse1" aria-expanded="false">
                        View Quotes
                    </button>
                    <div class="collapse" id="orders-collapse1">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="view_hotel_quotes.php" class="link-dark rounded">Hotel Only</a></li>
                            <li><a href="view_flight_quotes.php" class="link-dark rounded">Flight Only</a></li>
                            <li><a href="view_package_quotes.php" class="link-dark rounded">Packages</a></li>
                            <li><a href="view_other_quotes.php" class="link-dark rounded">Other</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#orders-collapse" aria-expanded="false">
                        Create a booking
                    </button>
                    <div class="collapse" id="orders-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="book_hotel.php" class="link-dark rounded">Hotel Only</a></li>
                            <li><a href="book_flight.php" class="link-dark rounded">Flight Only</a></li>
                            <li><a href="book_package.php" class="link-dark rounded">Packages</a></li>
                            <li><a href="book_other.php" class="link-dark rounded">Other</a></li>
                        </ul>
                    </div>
                </li>

                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#orders-collapse2" aria-expanded="false">
                        View Bookings
                    </button>
                    <div class="collapse" id="orders-collapse2">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="booked_overivew.php" class="link-dark rounded">Overview</a></li>
                            <li><a href="booked_hotels.php" class="link-dark rounded">Hotel Only</a></li>
                            <li><a href="booked_flights.php" class="link-dark rounded">Flight Only</a></li>
                            <li><a href="booked_packages.php" class="link-dark rounded">Packages</a></li>
                            <li><a href="booked_other.php" class="link-dark rounded">Other</a></li>
                        </ul>
                    </div>
                </li>

                <li class="border-top my-3"></li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#account-collapse3" aria-expanded="false">
                        Destination Info
                    </button>
                    <div class="collapse" id="account-collapse3">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="reset-password.php" class="link-dark rounded">Mexico</a></li>
                        </ul>
                    </div>
                </li>
                <li class="border-top my-3"></li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#account-collapse4" aria-expanded="false">
                        Airline Info
                    </button>
                    <div class="collapse" id="account-collapse4">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="ba.php" class="link-dark rounded">British Airways</a></li>
                        </ul>
                    </div>
                </li>
                <li class="border-top my-3"></li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#account-collapse5" aria-expanded="false">
                        Supplier Info
                    </button>
                    <div class="collapse" id="account-collapse5">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="classic_packages.php" class="link-dark rounded">Classic Packages</a></li>
                        </ul>
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="major_travel.php" class="link-dark rounded">Major</a></li>
                        </ul>
                    </div>
                </li>
                <li class="border-top my-3"></li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#account-collapse6" aria-expanded="false">
                        Agent offers/rates
                    </button>
                    <div class="collapse" id="account-collapse6">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="accor.php" class="link-dark rounded">Accor</a></li>
                        </ul>
                    </div>
                </li>
                <li class="border-top my-3"></li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#account-collapse" aria-expanded="false">
                        My Account
                    </button>
                    <div class="collapse" id="account-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="reset-password.php" class="link-dark rounded">Reset Password</a></li>
                            <li><a href="logout.php" class="link-dark rounded">Sign out</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>

        <div class="b-example-divider"></div>


        <div class="container" style="padding-top: 20px;">
        <?php
	// Check if an ID value was passed as a URL parameter
	if (isset($_GET["id"])) {
		$id = $_GET["id"];
		// Connect to the database
        // Include the database configuration file
        require_once "config.php";
        
		// Select the row with the matching ID value
		$sql = "SELECT * FROM hotel_quotes WHERE id = $id";
		$result = mysqli_query($link, $sql);
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

    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="sidebars.js"></script>
</body>

</html>