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

    // Use prepared statement to delete from contactus table
    $query_contactus = "DELETE FROM contactus WHERE id = ?";
    $stmt_contactus = mysqli_prepare($con, $query_contactus);
    mysqli_stmt_bind_param($stmt_contactus, "i", $userId);
    mysqli_stmt_execute($stmt_contactus);
    mysqli_stmt_close($stmt_contactus);

    // Use prepared statement to delete from staffs table
    $query_staffs = "DELETE FROM staffs WHERE id = ?";
    $stmt_staffs = mysqli_prepare($con, $query_staffs);
    mysqli_stmt_bind_param($stmt_staffs, "i", $userId);
    mysqli_stmt_execute($stmt_staffs);
    mysqli_stmt_close($stmt_staffs);

    // Redirect after deletion
    echo "<script>alert('Data deleted successfully.'); window.location.href = 'admindash.php';</script>";
    exit();
}

?>
