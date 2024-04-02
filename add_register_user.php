<?php
session_start();
include("db.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fn'];
    $lname = $_POST['ln'];
    $gmail = $_POST['mail'];
    $num = $_POST['number'];
    $addr = $_POST['add'];
    $user = $_POST['uname'];
    $password = $_POST['pass'];
}
if (!empty($gmail) && !empty($password) && !is_numeric($gmail)) {
    $query = "insert into signup (firstname, lastname, email, phone, address, username, password) values ('$fname', '$lname', '$gmail', '$num', '$addr', '$user', '$password')";
    mysqli_query($con, $query);
    echo "<script type='text/javascript'>alert('User Added successfully...'); setTimeout(function(){ window.location.href = 'admindash.php' }, 1000);</script>";
}

// echo phpversion(); 8.2.12
?>