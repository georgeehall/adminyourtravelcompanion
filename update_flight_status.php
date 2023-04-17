<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "yourtravelcompanion");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Get the ID and status from the form submission
$id = $_POST["id"];
$status = $_POST["status"];
// Update the status in the database
$sql = "UPDATE flight_quotes SET status='$status' WHERE id=$id";
if (mysqli_query($conn, $sql)) {
    // If the update was successful, redirect the user back to the index page
    header("Location: welcome.php");
} else {
    // If there was an error, display an error message
    echo "Error updating record: " . mysqli_error($conn);
}
// Close the database connection
mysqli_close($conn);
?>
