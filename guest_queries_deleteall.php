<?php
session_start();
include("db.php");
if (isset($_POST['queries_delete_all'])) {
    if (isset($_POST['queries_delete_id']) && is_array($_POST['queries_delete_id'])) {
        $all_id = $_POST['queries_delete_id'];
        $extract_id = implode(',', $all_id);
        $query = "DELETE FROM contactus WHERE id IN($extract_id)";
        $query_run = mysqli_query($con, $query);
        if ($query_run) {
            echo "<script type='text/javascript'>alert('Queries Deleted successfully...'); setTimeout(function(){ window.location.href = 'admindash.php' }, 1000);</script>";
        } else {
            echo "<script type='text/javascript'>alert('Queries not deleted...'); setTimeout(function(){ window.location.href = 'admindash.php' }, 1000);</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Please select queries to delete.'); setTimeout(function(){ window.location.href = 'admindash.php' }, 1000);</script>";
    }
    exit();
}
