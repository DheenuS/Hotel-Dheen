<?php
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

// Prepare and execute SQL statement to get the total room count
// Display available count in admin
$sql = "SELECT id, availablerooms FROM adminrooms";
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    // Fetch the total room count for each room ID
    $availableCountsTriple = array();
    while ($row = $result->fetch_assoc()) {
        $availableCountsTriple[$row['id']] = $row['availablerooms'];
    }

    // Close the connection
    $conn->close();

    // Send JSON response with the total room counts
    header('Content-Type: application/json');
    echo json_encode($availableCountsTriple);
} else {
    // If there was an error in the query, return an error response
    header('Content-Type: application/json');
    echo json_encode(array('error' => 'Failed to fetch total room counts'));
}
?>
