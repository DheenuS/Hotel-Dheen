<?php
include("db.php");

if (isset($_GET['id'])) {
    $queryId = $_GET['id'];
    // Use prepared statement to delete from contactus table
    $query_contactus = "DELETE FROM contactus WHERE id = ?";
    $stmt_contactus = mysqli_prepare($con, $query_contactus);
    mysqli_stmt_bind_param($stmt_contactus, "i", $queryId);
    mysqli_stmt_execute($stmt_contactus);
    mysqli_stmt_close($stmt_contactus);
    // Redirect after deletion
    echo "<script>alert(' Guest Query deleted successfully...'); window.location.href = 'admindash.php';</script>";
    exit();
}
else {
    exit();
}
?>