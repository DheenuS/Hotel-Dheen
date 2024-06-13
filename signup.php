<?php
session_start();
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $fname = $_POST['fn'];
    $lname = $_POST['ln'];
    $gmail = $_POST['mail'];
    $num = $_POST['number'];
    $addr = $_POST['add'];
    $user = $_POST['uname'];
    $password = $_POST['password'];

    if (!empty($gmail) && !empty($password) && !is_numeric($gmail)) {
        $query = "INSERT INTO signup (firstname, lastname, email, phone, address, username, password) VALUES ('$fname', '$lname', '$gmail', '$num', '$addr', '$user', '$password')";
        if (mysqli_query($con, $query)) {
            echo "<script type='text/javascript'>alert('Successfully registered...'); setTimeout(function(){ window.location.href = 'index.php' }, 500);</script>";
        } else {
            echo "<script type='text/javascript'>alert('Error: " . mysqli_error($con) . "')</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
    body {
            font-family: 'sarabun';
        }
</style>
</head>

<body class=" bg-gray-200">
    <nav class=" px-[60px] flex items-center justify-between sticky top-0 shadow-xl bg-gray-100 py-[20px] z-40">
        <div class="text-gray-800 text-nowrap text-[26px] font-semibold ">Hotel Dheen</div>
        <div class="flex items-center space-x-8 font-normal">
            <a href="index.php" class="text-black hover:underline underline-offset-8 font-semibold">Home</a>
        </div>
        </div>
    </nav>
    <div class=" w-[550px] h-auto mx-auto bg-white mt-8 pt-8 pr-8 pl-8 pb-8 rounded-md mt-12 shadow-lg">
        <h1 class=" text-[22px] text-center font-semibold text-center pb-4">Signup</h1>
        <form action="" method="POST" class="grid grid-cols-1 gap-y-2">
            <div class="grid grid-cols-2 gap-x-4">
                <div>
                    <label class=" text-[15px] mt-[4px]">First Name</label>
                    <input type="text" pattern="[a-zA-Z\s']+" name="fn" class=" mt-2 focus:outline-none focus:border-blue-400 focus:border-2 w-full h-[36px] p-2 border border-gray-400 rounded-sm" required>
                </div>
                <div>
                    <label class=" text-[15px] mt-[4px]">Last Name</label>
                    <input type="text" pattern="[a-zA-Z\s']+" name="ln" class="mt-2 focus:outline-none focus:border-blue-400 focus:border-2 w-full h-[36px] p-2 border border-gray-400 rounded-sm" required>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-x-4">
                <div>
                    <label class=" text-[15px] mt-[4px]">Email</label>
                    <input type="email" name="mail" placeholder="eg: dheen@gmail.com" class="mt-2 focus:outline-none focus:border-blue-400 focus:border-2 w-full h-[36px] p-2 border border-gray-400 rounded-sm" required>
                </div>
                <div>
                    <label class=" text-[15px] mt-[4px]">Phone</label>
                    <input type="tel" name="number" pattern="[0-9]{3}[0-9]{3}[0-9]{3}[0-9]{1}" placeholder="enter 10 digits" class=" mt-2 focus:outline-none focus:border-blue-400 focus:border-2 w-full h-[36px] p-2 border border-gray-400 rounded-sm" required>
                </div>
            </div>
            <label class=" text-[15px] mt-[4px]">Address</label>
            <textarea rows="4" cols="50" pattern="[a-zA-Z\s']+" name="add" class="resize-none text-wrap w-[276px] mt-[-2px] focus:outline-none focus:border-blue-400 focus:border-2 w-full h-[86px] p-2 border border-gray-400 rounded-sm" required></textarea>
            <div class="grid grid-cols-2 gap-x-4">
                <div>
            <label class=" text-[15px] mt-[4px]">Username</label>
            <input type="text" name="uname" class=" mt-2 focus:outline-none focus:border-blue-400 focus:border-2 w-full h-[36px] p-2 border border-gray-400 rounded-sm" required>
            </div>
                <div>
            <label class=" text-[15px] mt-[4px]">Password</label>
            <input type="password" name="password" class="mt-2 focus:outline-none focus:border-blue-400 focus:border-2 w-full h-[36px] p-2 border border-gray-400 rounded-sm" required>
            </div>
            </div>
            <button type="submit" value="submit" name="submit" class="text-[16px] w-full h-[38px] mt-[24px] bg-blue-600 hover:bg-blue-700 text-white font-normal rounded-md" required>Signup</button>
        </form>
        <p class="text-center text-[13px] mt-[14px]">Already have an account?
            <a href="index.php">
                <span class=" cursor-pointer underline text-[13px] text-blue-500 hover:text-blue-600 font-semibold ml-[4px]">Login</span>
            </a>
        </p>
    </div>
</body>

</html>