<?php
session_start();

include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['User_Login'])) { // Check if user login form is submitted
        $gmail = $_POST['mail'];
        $password = $_POST['password'];

        if (!empty($gmail) && !empty($password) && !is_numeric($gmail)) {
            $query = "SELECT * FROM signup WHERE email = '$gmail' LIMIT 1";
            $result = mysqli_query($con, $query);
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                if ($user_data['password'] == $password) {
                    echo "<script type='text/javascript'>alert('Login Successfull...'); setTimeout(function(){ window.location.href = 'home.php' }, 1000);</script>";
                    exit;
                } else {
                    echo "<script type='text/javascript'>alert('Invalid Username or Password')</script>";
                }
            } else {
                echo "<script type='text/javascript'>alert('Invalid Username or Password')</script>";
            }
        }
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Admin_Login'])) { // Check if admin login form is submitted
    $gm = $_POST['Admin_Email'];
    $pwd = $_POST['password'];

    if (!empty($gm) && !empty($pwd) && !is_numeric($gm)) {
        $query = "SELECT * FROM admin WHERE email = '$gm' LIMIT 1";
        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            $admin_data = mysqli_fetch_assoc($result);
            if ($admin_data['password'] == $pwd) {
                echo "<script type='text/javascript'>alert('Welcome Admin...'); setTimeout(function(){ window.location.href = 'admindash.php' }, 1000);</script>";
                exit;
            } else {
                echo "<script type='text/javascript'>alert('Invalid Admin Username or Password')</script>";
            }
        }
        echo "<script type='text/javascript'>alert('Admin! Please enter valid username or password')</script>";/* use single quotes */
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
    <title>Hotel Dheen</title>
    <link rel="icon" href="Images/admin/dheenblack.jpeg">
    <!-- <script defer src="js/main.js"></script> -->
    <!-- Tailwind css link -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Icon import link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body class="hotel bg-gray-200">

    <!-- Navigation -->
    <nav class=" px-[60px] flex items-center justify-between sticky top-0 shadow-xl bg-gray-100 py-[20px] z-40">
    <div class="text-gray-800 text-nowrap text-[26px] font-semibold ">Hotel Dheen</div>
        <div class="container flex justify-end">
            <div class="flex items-center space-x-6 font-normal">
                <a href="contactus.php"class=" text-black hover:underline underline-offset-8 font-semibold text-[16px]">Contact Us</a>
            </div>
        </div>
        </div>
    </nav>

    <!-- User Login Form -->

    <div class=" absolute top-[180px] left-[340px] z-20">
        <form action="" method="POST" id="userlogin">
            <div class=" mx-auto flex flex-col bg-gray-50 shadow-sm w-[380px] h-[460px] rounded-lg">
                <div class=" flex justify-center items-center pt-10">
                    <img src="icons/profile.png" alt="user" class=" w-[34px] h-[34px]">
                </div>
                <h1 class=" text-[18px] font-semibold text-center mt-2">User Login</h1>
                <label for="email" class=" text-[16px] ml-[50px] mt-[36px]">Username</label>
                <input type="email" name="mail" id="username" class=" w-[280px] ml-[50px] text-[14px] mt-[6px] border-2 border-t-0 border-x-0 border-gray-800 pl-[2px] outline-none " required>
                <label for="password" class=" text-[16px] ml-[50px] mt-[20px]">Password</label>
                <input type="password" name="password" id="password" class="w-[280px] ml-[50px] text-[14px] mt-[6px] border-2 border-t-0 border-x-0 border-gray-800 pl-[2px] outline-none " required>
                <button type="submit" name="User_Login" class=" text-[16px] w-[280px] ml-[50px] mt-[50px] bg-blue-600 hover:bg-blue-700 text-center text-white font-normal pt-[8px] pb-[8px] rounded-md" required>Login</button>
                <h1 class="text-center text-[13px] mt-[20px]">Don't have an account
                    <a href="signup.php">
                        <span class=" cursor-pointer underline text-[13px] text-blue-500 hover:text-blue-600 font-semibold ml-[4px]">Signup</span>
                    </a>
                    <!-- <a href="home.php">
                        <span class=" cursor-pointer underline text-[13px] text-blue-500 hover:text-blue-600 font-semibold ml-[4px]">home</span>
                    </a> -->
                </h1>
            </div>
        </form>
    </div>

    <!-- Admin Login -->
    <div class=" absolute top-[180px] left-[740px]">
        <form action="" method="POST" id="adminlogin">
            <div class=" mx-auto flex flex-col bg-gray-50 shadow-sm w-[380px] h-[460px] rounded-lg">
                <div class=" flex justify-center items-center pt-10">
                    <img src="icons/admin-panel.png" alt="user" class=" w-[34px] h-[34px]">
                </div>
                <h1 class=" text-[18px] font-semibold text-center mt-2">Admin Login</h1>
                <label for="username" class=" text-[16px] ml-[50px] mt-[36px]">Username</label>
                <input type="email" name="Admin_Email" id="username" class=" w-[280px] ml-[50px] text-[14px] mt-[6px] border-2 border-t-0 border-x-0 border-gray-800 pl-[2px] outline-none " required>
                <label for="password" class=" text-[16px] ml-[50px] mt-[20px]">Password</label>
                <input type="password" name="password" id="password" class="w-[280px] ml-[50px] text-[14px] mt-[6px] border-2 border-t-0 border-x-0 border-gray-800 pl-[2px] outline-none " required>
                <button type="submit" name="Admin_Login" class=" text-[16px] w-[280px] ml-[50px] mt-[50px] bg-blue-600 hover:bg-blue-700 text-center text-white font-normal pt-[8px] pb-[8px] rounded-md" required>Login</button>
                <h1 class="text-center text-[13px] mt-[20px]">Welcome to admin login 
                    <!-- <a href="admindash.php">
                        <span class=" cursor-pointer underline text-[13px] text-blue-500 hover:text-blue-600 font-semibold ml-[4px]">click here</span>
                    </a> -->
                </h1>
            </div>
        </form>
    </div>
</body>

</html>