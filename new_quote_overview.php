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
                    <use xlink:href="#bootstrap" />
                </svg>
                <span class="fs-5 fw-semibold" style="
    margin-left: -25px;
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

<h1>Quotes Overivew</h1>


            <div class="col-md-12">
                <h1 class="mb-3">Flight Quotes</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Departure Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
			// Connect to the database
            $conn = mysqli_connect("localhost", "root", "", "yourtravelcompanion");
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			// Select all rows from the flight_quotes table
			$sql = "SELECT id, name, outbound_date, status FROM flight_quotes WHERE status='pending'";
$result = mysqli_query($conn, $sql);

// Loop through each row and display the data in the table
while ($row = mysqli_fetch_assoc($result)) {
    $id = $row["id"];
    $name = $row["name"];
    $outbound_date = date('d/m/Y', strtotime($row["outbound_date"])); // format date to UK format
    echo "<tr>";
    echo "<td><a href='view_flight_quote.php?id=$id'>$id</a></td>";
    echo "<td>$name</td>";
    echo "<td>$outbound_date</td>";
    echo "<td>";
    echo "<form method='post' action='update_flight_status.php'>";
    echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
    echo "<select name='status' onchange='this.form.submit()'>";
    echo "<option value='pending' " . ($row["status"] == "pending" ? "selected" : "") . ">Pending</option>";
    echo "<option value='sent' " . ($row["status"] == "sent" ? "selected" : "") . ">Sent</option>";
    echo "<option value='closed' " . ($row["status"] == "closed" ? "selected" : "") . ">Closed</option>";
    echo "</select>";
    echo "</form>";
    echo "</td>";
    echo "</tr>";
}
			// Close the database connection
			mysqli_close($conn);
			?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12">
                <h1 class="mb-3">Hotel Quotes</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Check In Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
			// Connect to the database
            $conn = mysqli_connect("localhost", "root", "", "yourtravelcompanion");
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			// Select all rows from the flight_quotes table
			$sql = "SELECT id, name, checkin, status FROM hotel_quotes WHERE status='pending'";
$result = mysqli_query($conn, $sql);

// Loop through each row and display the data in the table
while ($row = mysqli_fetch_assoc($result)) {
    $id = $row["id"];
    $name = $row["name"];
    $checkin = date('d/m/Y', strtotime($row["checkin"])); // format date to UK format
    echo "<tr>";
    echo "<td><a href='view_hotel_quote.php?id=$id'>$id</a></td>";
    echo "<td>$name</td>";
    echo "<td>$checkin</td>";
    echo "<td>";
    echo "<form method='post' action='update_hotel_status.php'>";
    echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
    echo "<select name='status' onchange='this.form.submit()'>";
    echo "<option value='pending' " . ($row["status"] == "pending" ? "selected" : "") . ">Pending</option>";
    echo "<option value='sent' " . ($row["status"] == "sent" ? "selected" : "") . ">Sent</option>";
    echo "<option value='closed' " . ($row["status"] == "closed" ? "selected" : "") . ">Closed</option>";
    echo "</select>";
    echo "</form>";
    echo "</td>";
    echo "</tr>";
}			
			// Close the database connection
			mysqli_close($conn);
			?>
                    </tbody>
                </table>
            </div>

            <div class="col-md-12">
                <h1 class="mb-3">Package Quotes</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Outbound Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
			// Connect to the database
            $conn = mysqli_connect("localhost", "root", "", "yourtravelcompanion");
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			// Select all rows from the flight_quotes table
			$sql = "SELECT id, name, outbound_date, status FROM package_quotes WHERE status='pending'";
$result = mysqli_query($conn, $sql);

// Loop through each row and display the data in the table
while ($row = mysqli_fetch_assoc($result)) {
    $id = $row["id"];
    $name = $row["name"];
    $outbound_date = date('d/m/Y', strtotime($row["outbound_date"])); // format date to UK format
    echo "<tr>";
    echo "<td><a href='view_package_quote.php?id=$id'>$id</a></td>";
    echo "<td>$name</td>";
    echo "<td>$outbound_date</td>";
    echo "<td>";
    echo "<form method='post' action='update_package_status.php'>";
    echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
    echo "<select name='status' onchange='this.form.submit()'>";
    echo "<option value='pending' " . ($row["status"] == "pending" ? "selected" : "") . ">Pending</option>";
    echo "<option value='sent' " . ($row["status"] == "sent" ? "selected" : "") . ">Sent</option>";
    echo "<option value='closed' " . ($row["status"] == "closed" ? "selected" : "") . ">Closed</option>";
    echo "</select>";
    echo "</form>";
    echo "</td>";
    echo "</tr>";
}			
			// Close the database connection
			mysqli_close($conn);
			?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>

    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="sidebars.js"></script>
</body>

</html>