<?php
include("db.php");

if(isset($_POST['btn'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $role = mysqli_real_escape_string($con, $_POST['role']);

    // Insert into the 'staffs' table
    $query = "INSERT INTO staffs (name, role) VALUES ('$name', '$role')";
    mysqli_query($con, $query);
    
    // Display alert using PHP
    echo "<script>alert('Staff added successfully.'); window.location.href = 'admindash.php';</script>";
    exit();
}
?>
