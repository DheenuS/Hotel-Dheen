<?php
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userId = $_POST['user_id'];
    $fname = $_POST['fn'];
    $lname = $_POST['ln'];
    $gmail = $_POST['mail'];
    $num = $_POST['number'];
    $addr = $_POST['add'];
    $user = $_POST['uname'];
    $password = $_POST['pass'];

    $query = "UPDATE signup SET firstname = '$fname', lastname = '$lname', email = '$gmail', phone = '$num', address = '$addr', username = '$user', password = '$password' WHERE id = $userId";

    if (mysqli_query($con, $query)) {
        // Check if any rows were affected by the update operation
        if (mysqli_affected_rows($con) > 0) {
            // Redirect to admindash.php
            echo "<script>alert('User updated successfully.'); window.location.href = 'admindash.php?';</script>";
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
