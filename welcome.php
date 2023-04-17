<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Your Travel Companion</title>
    <script src="https://kit.fontawesome.com/ea02caf681.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <style>
    body {
        background-color: white;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
    }

    .dropdown-menu {
        margin-top: 0;
    }

    /* Style the video: 100% width and height to cover the entire window */
    #myVideo {
        position: absolute;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
    }

    /* Add some content at the bottom of the video/page */
    .content {
        position: fixed;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        color: #f1f1f1;
        width: 100%;
        padding: 20px;
    }

    /* Style the button used to pause/play the video */
    #myBtn {
        width: 200px;
        font-size: 18px;
        padding: 10px;
        border: none;
        background: #000;
        color: #fff;
        cursor: pointer;
    }

    #myBtn:hover {
        background: #ddd;
        color: black;
    }

    h2 {
        width: 100%;
        text-align: center;
        border-bottom: 1px solid #000;
        line-height: 0.1em;
        margin: 10px 0 20px;
    }

    h2 span {
        background: #fff;
        padding: 0 10px;

    }
    </style>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="welcome.php">
                <img src="images/footerlogo.png" class="responsive" style="height: 100px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="welcome.php">Dashboard</a>
         </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Create a Quote
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Flight Only</a></li>
                            <li><a class="dropdown-item" href="#">Hotel Only</a></li>
                            <li><a class="dropdown-item" href="#">Package</a></li>
                        </ul>
                    </li><li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Quotes
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">View All Flight Only</a></li>
                            <li><a class="dropdown-item" href="#">View All Hotel Only</a></li>
                            <li><a class="dropdown-item" href="#">View All Package</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">View Bookings</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            My Account
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="reset-password.php">Reset Password</a></li>
                            <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
    <div class="row">
        <div class="col-md-6">
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
        <div class="col-md-6">
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
    </div>
    <div class="row">
        <div class="col-md-12">
        <h1 class="mb-3">Package Quotes</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Destination</th>
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
			$sql = "SELECT id, name, destination, outbound_date, status FROM package_quotes WHERE status='pending'";
$result = mysqli_query($conn, $sql);

// Loop through each row and display the data in the table
while ($row = mysqli_fetch_assoc($result)) {
    $id = $row["id"];
    $name = $row["name"];
    $destination = $row["destination"];
    $outbound_date = date('d/m/Y', strtotime($row["outbound_date"])); // format date to UK format
    echo "<tr>";
    echo "<td><a href='view_package_quote.php?id=$id'>$id</a></td>";
    echo "<td>$name</td>";
    echo "<td>$destination</td>";
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>