<?php
session_start();
include("db.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $fname = $_POST['fn'];
    $lname = $_POST['ln'];
    $gmail = $_POST['mail'];
    $num = $_POST['number'];
    $addr = $_POST['add'];
    $user = $_POST['uname'];
    $password = $_POST['pass'];}
if (!empty($gmail) && !empty($password) && !is_numeric($gmail)){
    $query = "insert into signup (firstname, lastname, email, phone, address, username, password) values ('$fname', '$lname', '$gmail', '$num', '$addr', '$user', '$password')";
    mysqli_query($con, $query);
    echo "<script type='text/javascript'>alert('Successfully registered...')</script>";}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class=" bg-gray-200">
    <nav class=" px-[70px] flex items-center px-6 sticky top-0 shadow-xl bg-blue-600 p-[16px] z-40">
        <div class="text-white text-nowrap text-[26px] font-semibold">Hotel Dheen</div>
        <div class="container flex justify-end">
            <div class="flex items-center space-x-8 font-normal">
                <a href="contactus.php" class="text-white hover:underline underline-offset-8">Contact Us</a>
            </div>
        </div>
    </nav>
    <div class=" absolute w-[520px] h-auto top-[100px] left-[440px] bg-white p-8 shadow-sm rounded-xl">
        <h1 class=" text-[20px] font-semibold text-center pb-8">Signup</h1>
        <form action="" method="POST" class="">
            <div class=" grid grid-cols-2 grid-rows-8 ">
                <label class=" text-[16px] mt-[20px]">First Name</label>
                <input type="text" name="fn" class=" w-[220px] text-[14px] border-2 mt-[16px] pl-[8px] border-gray-300 rounded-sm" required>
                <label class=" text-[16px] mt-[20px]">Last Name</label>
                <input type="text" name="ln" class="w-[220px] text-[14px] border-2 mt-[16px] pl-[8px] border-gray-300 rounded-sm" required>
                <label class=" text-[16px] mt-[20px]">Email</label>
                <input type="email" name="mail" placeholder="eg: dheen@gmail.com" class="w-[220px] text-[14px] border-2 mt-[16px] pl-[8px] border-gray-300 rounded-sm" required>
                <label class=" text-[16px] mt-[20px]">Phone</label>
                <input type="tel" name="number" pattern="[0-9]{3}[0-9]{3}[0-9]{3}[0-9]{1}" placeholder="enter 10 digits" class=" w-[220px] text-[14px] border-2 mt-[16px] pl-[8px] border-gray-300 rounded-sm" required>
                <label class=" text-[16px] mt-[20px]">Address</label>
                <input type="text" name="add" class=" w-[220px] text-[14px] border-2 mt-[16px] pl-[8px] border-gray-300 rounded-sm" required>
                <label class=" text-[16px] mt-[20px]">Username</label>
                <input type="text" name="uname" class=" w-[220px] text-[14px] border-2 mt-[16px] pl-[8px] border-gray-300 rounded-sm" required>
                <label class=" text-[16px] mt-[20px]">Password</label>
                <input type="password" name="pass" class="w-[220px] text-[14px] border-2 mt-[16px] pl-[8px] border-gray-300 rounded-sm" required>
            </div>
            <button type="submit" value="submit" name="submit" class="text-[16px] w-full mt-[20px] bg-blue-600 hover:bg-blue-700 text-white font-normal pt-[8px] pb-[8px] rounded-md" required>Signup</button>
        </form>
        <p class="text-center text-[14px] mt-[20px]">Already have an account?
            <a href="index.php">
                <span class=" cursor-pointer underline text-[14px] text-blue-500 hover:text-blue-600 font-semibold ml-[4px] ">Login</span>
            </a>
        </p>
    </div>
</body>
</html>