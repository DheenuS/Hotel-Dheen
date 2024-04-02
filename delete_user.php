<?php
include("db.php");

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Use prepared statement to delete from signup table
    $query_signup = "DELETE FROM signup WHERE id = ?";
    $stmt_signup = mysqli_prepare($con, $query_signup);
    mysqli_stmt_bind_param($stmt_signup, "i", $userId);
    mysqli_stmt_execute($stmt_signup);
    mysqli_stmt_close($stmt_signup);

    // Use prepared statement to delete from reservation table
    $query_reservation = "DELETE FROM reservation WHERE id = ?";
    $stmt_reservation = mysqli_prepare($con, $query_reservation);
    mysqli_stmt_bind_param($stmt_reservation, "i", $userId);
    mysqli_stmt_execute($stmt_reservation);
    mysqli_stmt_close($stmt_reservation);

    // Redirect after deletion
    echo "<script>alert('User Data deleted successfully.'); window.location.href = 'admindash.php';</script>";
    exit();
}
else {
    exit();
}

?>
