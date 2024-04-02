<?php
include("db.php");

// Function to fetch the count of booked Family rooms from the reservation table
function getBookedFamilyRoomsCount($con) {
    $query = "SELECT COUNT(*) AS bookedFamilyRoomsCount FROM reservation WHERE roomtype = 'Family'";
    $result = mysqli_query($con, $query);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['bookedFamilyRoomsCount'];
    } else {
        error_log("Error executing SQL query: " . mysqli_error($con));
        return 0; // Return 0 upon query error for clarity
    }
}

// Function to update the booked Family rooms count in the adminrooms table
function updateBookedFamilyRoomsCount($con, $count) {
    $updateQuery = "UPDATE adminrooms SET bookedrooms = ? WHERE id = 5";
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
$bookedFamilyRoomsCount = getBookedFamilyRoomsCount($con);

// Update the count in the adminrooms table
if (updateBookedFamilyRoomsCount($con, $bookedFamilyRoomsCount)) {
    echo "Count updated successfully in the adminrooms table.";
} else {
    echo "Error updating count in the adminrooms table.";
}

// Close the database connection
mysqli_close($con);
?>
