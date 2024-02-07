<?php
include("db.php");
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
}
?>


<button class="open-popup" data-userid="<?php echo $id; ?>">
    <span class="material-symbols-outlined text-[20px] p-2 rounded-full hover:bg-green-100 text-green-500 hover:text-green-600">
        Edit
    </span>
</button>



<button onclick="confirmDelete(<?php echo $id; ?>)">
    <span class="material-symbols-outlined text-[20px] p-2 rounded-full hover:bg-red-100 text-red-500 hover:text-red-600">
        delete
    </span>
</button>