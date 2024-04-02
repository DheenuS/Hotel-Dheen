<?php
include("db.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $reservationId = $_POST['reserve_id'];
    $name = $_POST['nme'];
    $gmails = $_POST['mails'];
    $numb = $_POST['numbe'];
    $addre = $_POST['addre'];
    $ad = $_POST['adu'];
    $ch = $_POST['chil'];
    $rtype = $_POST['roomty'];
    $rprice = $_POST['roompr'];
    $chinn = $_POST['checkIn'];
    $choutt = $_POST['checkOut'];
    $totalDays = $_POST['totalDays'];

    $query = "UPDATE reservation SET name = '$name', email = '$gmails', phone = '$numb', address = '$addre', adults = '$ad', children = '$ch', roomtype = '$rtype', roomprice = '$rprice', checkin = '$chinn', checkout = '$choutt', totdays = '$totalDays' WHERE id = $reservationId";

    if (mysqli_query($con, $query)) {
        // Check if any rows were affected by the update operation
        if (mysqli_affected_rows($con) > 0) {
            // Redirect to admindash.php
            echo "<script>alert('Reservation Data updated successfully.'); window.location.href = 'admindash.php?';</script>";
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
