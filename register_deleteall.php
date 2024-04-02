<?php
session_start();
include("db.php");

if (isset($_POST['register_delete_all'])) {
    if (isset($_POST['register_delete_id']) && is_array($_POST['register_delete_id']) && !empty($_POST['register_delete_id'])) {
        $all_id = $_POST['register_delete_id'];
        $extract_id = implode(',', $all_id);
        $query = "DELETE FROM signup WHERE id IN($extract_id)";
        $query_run = mysqli_query($con, $query);
        if ($query_run) {
            echo "<script type='text/javascript'>alert('User data deleted successfully...'); setTimeout(function(){ window.location.href = 'admindash.php' }, 1000);</script>";
        } else {
            echo "<script type='text/javascript'>alert('No data deleted...'); setTimeout(function(){ window.location.href = 'admindash.php' }, 1000);</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Please select user data to delete...'); setTimeout(function(){ window.location.href = 'admindash.php' }, 1000);</script>";
    }
    exit();
}
?>
