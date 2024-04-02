<!-- <?php
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['roomId'])) {
    $roomId = $_GET['roomId'];

    $query = "SELECT * FROM adminrooms WHERE id = $roomId";
    $result = mysqli_query($con, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        echo json_encode($row);
    }
}
?> -->
