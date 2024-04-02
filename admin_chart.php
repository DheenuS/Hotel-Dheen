<?php
header('Content-type: application/json');

// Database connection (replace with your details)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hoteldheen";

$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

// Query to get booked room counts by room type
$query = "SELECT roomtype, SUM(bookedrooms) AS bookedCount FROM adminrooms GROUP BY roomtype";
$result = mysqli_query($con, $query);

$bookedRoomData = array();
while ($row = mysqli_fetch_assoc($result)) {
  $bookedRoomData[] = $row; // Add data to array
}

mysqli_close($con);

print json_encode($bookedRoomData);
?>
