<?php
include("db.php");

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the JSON data from the request body
    $data = json_decode(file_get_contents('php://input'), true);

    // Check if the data is valid and contains the 'count' key
    if (isset($data['count']) && is_numeric($data['count'])) {
        $bookedDoubleRoomsCount = $data['count']; // Extract the count

        // Prepare the update query with parameter binding
        $updateQuery = "UPDATE adminrooms SET bookedrooms = ? WHERE id = 2";
        $stmt = mysqli_prepare($con, $updateQuery);

        if ($stmt) { // Handle potential prepare statement errors
            mysqli_stmt_bind_param($stmt, "i", $bookedDoubleRoomsCount);
            if (mysqli_stmt_execute($stmt)) {
                $response = ['message' => 'Count updated successfully in the database'];
                // Optional: Log successful update (e.g., using a logging library)
            } else {
                $error = mysqli_stmt_error($stmt);
                $response = ['error' => "Error updating count: $error"];
                error_log("Error executing prepared statement: $error");
            }
            mysqli_stmt_close($stmt);
        } else {
            $error = mysqli_error($con);
            $response = ['error' => "Error preparing statement: $error"];
            error_log("Error preparing statement: $error");
        }
    } else {
        $response = ['error' => 'Invalid data: Missing or non-numeric count'];
    }

    // Encode and return the response as JSON
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // Return error response if request method is not POST
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Invalid request method']);
}
?>
