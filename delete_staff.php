<?php
include("db.php");

if (isset($_GET['id'])) {
    $staffId = $_GET['id'];
    // Use prepared statement to delete from staffs table
    $query_staffs = "DELETE FROM staffs WHERE id = ?";
    $stmt_staffs = mysqli_prepare($con, $query_staffs);
    mysqli_stmt_bind_param($stmt_staffs, "i", $staffId);
    mysqli_stmt_execute($stmt_staffs);
    mysqli_stmt_close($stmt_staffs);
    // Redirect after deletion
    echo "<script>alert(' Staff Data deleted successfully...'); window.location.href = 'admindash.php';</script>";
    exit();
}
else {
    exit();
}
?>
