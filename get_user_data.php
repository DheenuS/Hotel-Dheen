<?php
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['userId'])) {
    $userId = $_GET['userId'];

    $query = "SELECT * FROM signup WHERE id = $userId";
    $result = mysqli_query($con, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        echo json_encode($row);
    }
}
?>
