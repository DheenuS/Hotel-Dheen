
<?php
// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the data from the request body
  $data = json_decode(file_get_contents("php://input"));

  // Check if the required fields are present
  if (isset($data->roomtype) && isset($data->roomprice) && isset($data->totalrooms) && isset($data->bookedrooms)) {
    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hoteldheen";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // Extract data from the request
    $roomType = $data->roomtype;
    $roomPrice = $data->roomprice;
    $totalRooms = $data->totalrooms;
    $bookedRooms = $data->bookedrooms; // Assuming booked rooms is submitted

    // Prepare and execute the SQL statement to store room information
    $stmt = $conn->prepare("INSERT INTO adminrooms (roomtype, roomprice, totalrooms, bookedrooms) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssii", $roomType, $roomPrice, $totalRooms, $bookedRooms);
    $stmt->execute();

    // Close the connection
    $stmt->close();
    $conn->close();

    // Send success response
    $response = array(
      'status' => 'success',
      'message' => 'Room information stored successfully'
    );
    echo json_encode($response);
  } else {
    // Send error response if required fields are missing
    $response = array(
      'status' => 'error',
      'message' => 'Room type, room price, total rooms or booked rooms count not specified'
    );
    echo json_encode($response);
  }
} else {
  // Send error response for invalid request method
  $response = array(
    'status' => 'error',
    'message' => 'Invalid request method'
  );
  echo json_encode($response);
}
