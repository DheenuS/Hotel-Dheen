<?php
// This code responsible for storing and updating the available rooms count in the admin room table in the database. If this code removed, available rooms count will not get updated in the database
// Include the database connection
include("db.php");

// Function to fetch the count of booked triple rooms from the reservation table
function getBookedTripleRoomsCount($con)
{
    $query = "SELECT COUNT(*) AS bookedTripleRoomsCount FROM reservation WHERE roomtype = 'Triple'";
    $result = mysqli_query($con, $query);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $count = $row['bookedTripleRoomsCount'];
        return $count;
    } else {
        return 0; // Return 0 upon query error for clarity
    }
}

// Function to update the available rooms count in the adminrooms table
function updateAvailableRoomsCountTriple($con, $count)
{
    $updateQuery = "UPDATE adminrooms SET availablerooms = ? WHERE id = 3";
    $stmt = mysqli_prepare($con, $updateQuery);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $count);
        if (mysqli_stmt_execute($stmt)) {
            return true; // Successfully updated
        }
        mysqli_stmt_close($stmt);
    }
    return false; // Update failed
}
// Fetch the total number of rooms from the database
$query = "SELECT totalrooms FROM adminrooms WHERE id = 3";
$result = mysqli_query($con, $query);
if ($result) {
    $row = mysqli_fetch_assoc($result);
    $totalRoomsTriple = $row['totalrooms'];
} else {
    $totalRoomsTriple = 0; // Handle query error for clarity (consider returning an error response)
}
// Fetch the count of booked double rooms
$bookedTripleRoomsCount = getBookedTripleRoomsCount($con);

// Calculate the available room count
$totalRoomsTriple = 10; // Set the total rooms count
$availableRoomCountTriple = $totalRoomsTriple - $bookedTripleRoomsCount;

// Update the available rooms count in the adminrooms table
if (updateAvailableRoomsCountTriple($con, $availableRoomCountTriple)) {
    // Send the response
    header('Content-Type: application/json');
    echo json_encode(['message' => 'Available rooms count updated successfully']);
} else {
    // Error response
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Error updating available rooms count']);
}

// Close the database connection
mysqli_close($con);
