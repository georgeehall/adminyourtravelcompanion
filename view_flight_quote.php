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
</head>

<body>


    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="welcome.php">
                <img src="images/footerlogo.png" style="height: 100px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
			<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
        </li>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
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

<div class="container mt-5">
	<h1 class="mb-3">View Flight Quote</h1>
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
		$sql = "SELECT * FROM flight_quotes WHERE id = $id";
		$result = mysqli_query($conn, $sql);
		// Check if a row was found
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
			$name = $row["name"];
			$email = $row["email"];
			$phone = $row["phone"];
			$destination = $row["destination"];
            $outbound_date = date('d/m/Y', strtotime($row["outbound_date"])); // format date to UK format
			$return_date = date('d/m/Y', strtotime($row["return_date"])); // format date to UK format
			$travel_class = $row["travel_class"];
			$preferred_airline = $row["preferred_airline"];
			$adults = $row["adults"];
			$children = $row["children"];
			$infants = $row["infants"];
			$message = $row["message"];
			$status = $row["status"];
			// Display the row data in a table
			echo "<table class='table'>";
			echo "<tr><th>ID</th><td>$id</td></tr>";
			echo "<tr><th>Name</th><td>$name</td></tr>";
			echo "<tr><th>Email</th><td>$email</td></tr>";
			echo "<tr><th>Phone</th><td>$phone</td></tr>";
			echo "<tr><th>Destination</th><td>$destination</td></tr>";
			echo "<tr><th>Outbound Date</th><td>$outbound_date</td></tr>";
			echo "<tr><th>Return Date</th><td>$return_date</td></tr>";
			echo "<tr><th>Travel Class</th><td>$travel_class</td></tr>";
			echo "<tr><th>Preferred Airline</th><td>$preferred_airline</td></tr>";
			echo "<tr><th>Adults</th><td>$adults</td></tr>";
			echo "<tr><th>Children</th><td>$children</td></tr>";
			echo "<tr><th>Infants</th><td>$infants</td></tr>";
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
