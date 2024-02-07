<?php
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userId = $_POST['editStaffId'];
    $name = $_POST['edit_staff_name'];
    $role = $_POST['edit_staff_role'];

    $query = "UPDATE staffs SET name = '$name', role = '$role' WHERE id = $userId";

    if (mysqli_query($con, $query)) {
        // Check if any rows were affected by the update operation
        if (mysqli_affected_rows($con) > 0) {
            // Redirect to admindash.php
            echo "<script>alert('Staff updated successfully.'); window.location.href = 'admindash.php';</script>";
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
