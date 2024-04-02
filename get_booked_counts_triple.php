<?php
// Enable output buffering to prevent extra characters before JSON response
ob_start();

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hoteldheen";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  // If connection fails, return an error response
  header('Content-Type: application/json');
  echo json_encode(array('error' => 'Connection failed: ' . $conn->connect_error));
  exit; // Terminate script execution
}

// Prepare and execute SQL statement to get booked rooms count
$sql = "SELECT id, bookedrooms FROM adminrooms";
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
  // Fetch the booked room count for each room ID
  $bookedCountsTriple = array();
  while ($row = $result->fetch_assoc()) {
    $bookedCountsTriple[$row['id']] = $row['bookedrooms'];
  }

  // Close the connection
  $conn->close();

  // Send JSON response with the booked room counts
  header('Content-Type: application/json');
  echo json_encode($bookedCountsTriple);
} else {
  // If there was an error in the query, return an error response
  header('Content-Type: application/json');
  echo json_encode(array('error' => 'Failed to fetch booked room counts'));
}

// Clean any remaining output buffer and ensure complete response
ob_end_flush();

?>
