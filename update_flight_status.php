<?php
// Include the database configuration file
require_once 'config.php';

// Get the ID and status from the form submission
$id = $_POST["id"];
$status = $_POST["status"];

// Update the status in the database
$sql = "UPDATE flight_quotes SET status='$status' WHERE id=$id";
if (mysqli_query($link, $sql)) {
    // If the update was successful, redirect the user back to the index page
    header("Location: new_quote_overview.php");
} else {
    // If there was an error, display an error message
    echo "Error updating record: " . mysqli_error($link);
}

// Close the database connection
mysqli_close($link);
?>
