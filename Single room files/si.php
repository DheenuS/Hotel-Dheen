<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $staffname = $_POST['text'];
    $staffrole = $_POST['select'];
    
}
if (!empty($staffname) && !is_numeric($staffrole)) {
    $query = "insert into staffs (name, role) values ('$staffname', '$staffrole')";
    mysqli_query($con, $query);
    echo "<script type='text/javascript'>alert('Staff Added Successfully...')</script>";
    header("Location: admindash.php");
    die();
}
// Add error handling for the database connection
if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error());
}?>