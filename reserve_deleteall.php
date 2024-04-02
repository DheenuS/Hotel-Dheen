<?php
session_start();
include("db.php");
if (isset($_POST['reserve_delete_all'])) {
    if (isset($_POST['reserve_delete_id']) && is_array($_POST['reserve_delete_id'])) {
        $all_id = $_POST['reserve_delete_id'];
        $extract_id = implode(',', $all_id);
        $query = "DELETE FROM reservation WHERE id IN($extract_id)";
        $query_run = mysqli_query($con, $query);
        if ($query_run) {
            echo "<script type='text/javascript'>alert('Reservation data deleted successfully...'); setTimeout(function(){ window.location.href = 'admindash.php' }, 1000);</script>";
        } else {
            echo "<script type='text/javascript'>alert('No Data Deleted...'); setTimeout(function(){ window.location.href = 'admindash.php' }, 1000);</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Please select data to delete.'); setTimeout(function(){ window.location.href = 'admindash.php' }, 1000);</script>";
    }
    exit();
}
