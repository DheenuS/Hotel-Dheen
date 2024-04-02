<?php
// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from POST request
    $data = json_decode(file_get_contents("php://input"));

    // Check if roomId and totalRooms are provided
    if (isset($data->roomId) && isset($data->totalRooms)) {
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

        // Extract data from request
        $roomId = $data->roomId;
        $totalRooms = $data->totalRooms;

        // Prepare and execute the SQL statement to update the room count in the database
        $stmt = $conn->prepare("UPDATE adminrooms SET totalrooms = ? WHERE id = ?");
        $stmt->bind_param("ii", $totalRooms, $roomId);
        $stmt->execute();

        // Close the connection
        $stmt->close();
        $conn->close();

        // Send success response
        $response = array('status' => 'success', 'message' => 'Room count updated successfully');
        echo json_encode($response);
    } else {
        // If roomId or totalRooms is not provided, send an error response
        $response = array(
            'status' => 'error',
            'message' => 'Room ID or total rooms count not specified'
        );
        echo json_encode($response);
    }
} else {
    // If the request method is not POST, return an error response
    $response = array(
        'status' => 'error',
        'message' => 'Invalid request method'
    );
    echo json_encode($response);
}
?>
