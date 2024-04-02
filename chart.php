<?php
header('Content-type: application/json');
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hoteldheen";
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
// Query to get booked room counts
$query = "SELECT bookedrooms FROM adminrooms ORDER BY roomtype";
$result = mysqli_query($con, $query);
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
mysqli_close($con);
print json_encode($data);
?>