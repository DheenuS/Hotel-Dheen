<?php
include("db.php");

// Function to fetch the count of booked quad rooms from the reservation table
function getBookedQuadRoomsCount($con) {
    $query = "SELECT COUNT(*) AS bookedQuadRoomsCount FROM reservation WHERE roomtype = 'Quad'";
    $result = mysqli_query($con, $query);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['bookedQuadRoomsCount'];
    } else {
        error_log("Error executing SQL query: " . mysqli_error($con));
        return 0; // Return 0 upon query error for clarity
    }
}

// Function to update the booked Quad rooms count in the adminrooms table
function updateBookedQuadRoomsCount($con, $count) {
    $updateQuery = "UPDATE adminrooms SET bookedrooms = ? WHERE id = 4";
    $stmt = mysqli_prepare($con, $updateQuery);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $count);
        if (mysqli_stmt_execute($stmt)) {
            return true; // Successfully updated
        } else {
            error_log("Error executing prepared statement: " . mysqli_stmt_error($stmt));
        }
        mysqli_stmt_close($stmt);
    } else {
        error_log("Error preparing statement: " . mysqli_error($con));
    }
    return false; // Update failed
}

// Fetch the count of booked single rooms
$bookedQuadRoomsCount = getBookedQuadRoomsCount($con);

// Update the count in the adminrooms table
if (updateBookedQuadRoomsCount($con, $bookedQuadRoomsCount)) {
    echo "Count updated successfully in the adminrooms table.";
} else {
    echo "Error updating count in the adminrooms table.";
}

// Close the database connection
mysqli_close($con);
?>
