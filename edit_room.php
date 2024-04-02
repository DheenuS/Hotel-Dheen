<?php
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $roomId = $_POST['room_id'];
    $rtype = $_POST['rt'];
    $rprice = $_POST['rp'];
    $rtotal = $_POST['rtot'];
    $rbooked = $_POST['rb'];
    $ravailable = $_POST['ra'];

    $query = "UPDATE adminrooms SET roomtype = '$rtype', roomprice = '$rprice', totalrooms = '$rtotal', bookedrooms = '$rbooked', availablerooms = '$ravailable' WHERE id = $roomId";

    if (mysqli_query($con, $query)) {
        // Check if any rows were affected by the update operation
        if (mysqli_affected_rows($con) > 0) {
            // Redirect to admindash.php
            echo "<script>alert('Room details updated successfully.'); window.location.href = 'admindash.php?';</script>";
            exit();
        } else {
            // No changes were made, so redirect with a message
            header("Location: admindash.php?message=no_changes");
            exit();
        }
    } else {
        echo "<script type='text/javascript'>alert('Error updating record: " . mysqli_error($con) . "')</script>";
    }
}
?>
