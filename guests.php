<!-- guests.php -->
<?php
include("db.php");

function displayGuests() {
    global $con; // Use the global connection variable

    $query = "SELECT * FROM guests";
    $result = mysqli_query($con, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        // Display guest data here
        // You can use HTML to structure how each guest is shown
        echo '<div>';
        echo '<p>Guest Name: ' . $row['guest_name'] . '</p>';
        echo '<p>Room Number: ' . $row['room_number'] . '</p>';
        // Add more details as needed
        echo '</div>';
    }
}
?>
