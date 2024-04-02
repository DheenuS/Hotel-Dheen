<?php
include("db.php");

if (isset($_GET['id'])) {
    $resId = $_GET['id'];
    // Use prepared statement to delete from reservation table
    $query_reservation = "DELETE FROM reservation WHERE id = ?";
    $stmt_reservation = mysqli_prepare($con, $query_reservation);
    mysqli_stmt_bind_param($stmt_reservation, "i", $resId);
    mysqli_stmt_execute($stmt_reservation);
    mysqli_stmt_close($stmt_reservation);

    // Redirect after deletion
    echo "<script>alert('Reservation Data deleted successfully...'); window.location.href = 'admindash.php';</script>";
    exit();
}
else {
    exit();
}

?>
