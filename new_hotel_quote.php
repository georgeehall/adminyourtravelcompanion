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

        <form method="post" action="inserthotelquote.php">
                             
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                           
                             
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            
                             
                                <label for="phone" class="form-label">Phone number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            
                             
                                <label for="destination" class="form-label">Destination</label>
                                <input type="text" class="form-control" id="destination" name="destination" required>
                           
                             
                                <label for="checkin" class="form-label">Check-in date</label>
                                <input type="date" class="form-control" id="checkin" name="checkin" required>
                            
                             
                                <label for="checkout" class="form-label">Check-out date</label>
                                <input type="date" class="form-control" id="checkout" name="checkout" required>
                            
                             
                                <label for="board_basis" class="form-label">Board Basis</label>
                                <select class="form-select" id="board_basis" name="board_basis" required>
                                    <option value="">Select board basis...</option>
                                    <option value="room_only">Room Only</option>
                                    <option value="bed_and_breakfast">Bed and Breakfast</option>
                                    <option value="half_board">Half Board</option>
                                    <option value="full_board">Full Board</option>
                                    <option value="all_inclusive">All Inclusive</option>
                                </select>
                            

                             
                                <label for="adults" class="form-label">Number of adults</label>
                                <input type="number" class="form-control" id="adults" name="adults" required>
                         
                             
                                <label for="children" class="form-label">Number of children</label>
                                <input type="number" class="form-control" id="children" name="children" required>
                            
                             
                                <label for="infants" class="form-label">Number of infants</label>
                                <input type="number" class="form-control" id="infants" name="infants" required>
                            
                             
                                <label for="message" class="form-label">Additional information</label>
                                <textarea class="form-control" id="message" name="message" rows="3" ></textarea>
                          
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

        </div>

    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="sidebars.js"></script>
</body>

</html>