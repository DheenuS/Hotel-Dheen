<?php
session_start();
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve values from $_POST
    $name = $_POST['nme'];
    $gmails = $_POST['mails'];
    $numb = $_POST['numbe'];
    $addre = $_POST['addre'];
    $ad = $_POST['adu'];
    $ch = $_POST['chil'];
    $rtype = $_POST['roomty'];
    $rprice = $_POST['roompr'];
    $chinn = $_POST['checkin'];
    $choutt = $_POST['checkout'];
    
    // Check room availability
    $availQuery = "SELECT availablerooms FROM adminrooms WHERE roomtype = ?";
    $stmt = $con->prepare($availQuery);
    $stmt->bind_param("s", $rtype);
    $stmt->execute();
    $availResult = $stmt->get_result();
    $availRow = $availResult->fetch_assoc();
    if ($availRow['availablerooms'] <= 0) {
        echo "<script type='text/javascript'>alert('Room is full! Unable to reserve room...'); setTimeout(function(){ window.location.href = 'admindash.php' }, 1000);</script>";
        exit;
    }
    
    // Calculate total days
    $checkInDate = new DateTime($chinn);
    $checkOutDate = new DateTime($choutt);
    $interval = $checkInDate->diff($checkOutDate);
    $totalDays = $interval->days + 1; // Including check-in day
    
    // Insert data into the database
    $query = "INSERT INTO reservation (name, email, phone, address, adults, children, roomtype, roomprice, checkin, checkout, totdays) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $con->prepare($query);
    $stmt->bind_param("ssssssssssi", $name, $gmails, $numb, $addre, $ad, $ch, $rtype, $rprice, $chinn, $choutt, $totalDays);
    $result = $stmt->execute();
    if ($result) {
        echo "<script type='text/javascript'>alert('Room Reserved successfully...'); setTimeout(function(){ window.location.href = 'admindash.php' }, 1000);</script>";
        exit;
    } else {
        echo "<script type='text/javascript'>alert('Error...'); setTimeout(function(){ window.location.href = 'admindash.php' }, 1000);</script>";
        exit;
    }
} else {
    echo "Invalid request method";
}
?>
