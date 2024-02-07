<?php
session_start();

include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gmail = $_POST['mail'];
    $password = $_POST['pass'];

    if (!empty($gmail) && !empty($password) && !is_numeric($gmail)) {

        $query = "select * from signup where email = '$gmail' limit 1";/* use table names */
        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['pass'] == $person_password) {
                    header('location: home.php');
                    die;
                }
                // echo "<script type='text/javascript'>alert('Login Successful')</script>";
            }
        }
        echo "<script type='text/javascript'>alert('Invalid Username or Password')</script>";/* use single quotes */
    }
}
// else {
//     echo "<script type='text/javascript'>alert('Invalid Username or Password :(')</script>";/* use single quotes */
// }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Dheen</title>
    <link rel="icon" href="Images/admin/dheenblack.jpeg">
    <script defer src="js/main.js"></script>
    <!-- Tailwind css link -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Icon import link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Signup Form -->
</head>

<body class=" bg-gray-200">

    <!-- Navigation -->
    <nav class=" px-[86px] flex items-center px-6 py-4 sticky top-0 shadow-lg bg-gray-50 p-[12px] z-10">
        <div class="text-black text-nowrap text-[26px] font-semibold">Hotel Dheen</div>
        <div class="container flex justify-end">
            <div class="flex items-center space-x-8 font-normal">
                <a href="contactus.php" class="text-black hover:underline underline-offset-8 font-semibold">Contact Us</a>
            </div>
        </div>
        </div>
    </nav>
    <div class="">
        <div class="relative">
            <div class=" absolute top-[16px] left-[500px]">
                <h1 class=" text-[40px] text-gray-900 font-semibold">Welcome to Hotel Dheen</h1>
            </div>
        </div>
    </div>

    <!-- User Login Form -->
    <div class=" absolute top-[180px] left-[340px] z-20">
        <form action="" method="POST" id="userlogin">

            <div class=" mx-auto flex flex-col bg-white opacity-90 shadow-sm w-[380px] h-[460px] rounded-tl-lg rounded-bl-lg border-2">
                <div class=" flex justify-center items-center pt-10">
                    <span class="material-symbols-outlined text-[30px]">
                        account_circle
                    </span>
                </div>
                <h1 class=" text-[18px] font-semibold text-center mt-2">User Login</h1>
                <label for="email" class=" text-[16px] ml-[50px] mt-[36px]">Username</label>
                <input type="email" name="mail" id="username" class=" w-[280px] ml-[50px] text-[14px] mt-[6px] border-2 border-t-0 border-x-0 border-gray-800 pl-[2px] outline-none " required>
                <label for="password" class=" text-[16px] ml-[50px] mt-[20px]">Password</label>
                <input type="password" name="pass" id="password" class="w-[280px] ml-[50px] text-[14px] mt-[6px] border-2 border-t-0 border-x-0 border-gray-800 pl-[2px] outline-none " required>
                <button type="submit" name="User_Login" class=" text-[16px] w-[280px] ml-[50px] mt-[50px] bg-blue-600 hover:bg-blue-700 text-center text-white font-normal pt-[8px] pb-[8px] rounded-md" required>Login</button>
                <h1 class="text-center text-[14px] mt-[20px]">Don't have an account
                    <a href="signup.php">
                        <span class=" cursor-pointer underline text-[14px] text-blue-500 hover:text-blue-600 font-semibold ml-[4px]">Signup</span>
                    </a>
                </h1>
            </div>
        </form>
    </div>

    <!-- Admin Login -->
    <div class=" absolute top-[180px] left-[740px]">
        <form action="" method="POST" id="adminlogin">

            <div class=" mx-auto flex flex-col bg-white opacity-90 shadow-sm w-[380px] h-[460px] rounded-tr-lg rounded-br-lg border-2">
                <div class=" flex justify-center items-center pt-10">
                    <span class="material-symbols-outlined text-[30px]">
                        shield_person
                    </span>
                </div>
                <h1 class=" text-[18px] font-semibold text-center mt-2">Admin Login</h1>
                <label for="username" class=" text-[16px] ml-[50px] mt-[36px]">Username</label>
                <input type="email" name="Admin_Email" id="username" class=" w-[280px] ml-[50px] text-[14px] mt-[6px] border-2 border-t-0 border-x-0 border-gray-800 pl-[2px] outline-none " required>
                <label for="password" class=" text-[16px] ml-[50px] mt-[20px]">Password</label>
                <input type="password" name="Admin_Password" id="password" class="w-[280px] ml-[50px] text-[14px] mt-[6px] border-2 border-t-0 border-x-0 border-gray-800 pl-[2px] outline-none " required>
                <button type="submit" name="Admin_Login" class=" text-[16px] w-[280px] ml-[50px] mt-[50px] bg-blue-600 hover:bg-blue-700 text-center text-white font-normal pt-[8px] pb-[8px] rounded-md" required>Login</button>
                <h1 class="text-center text-[14px] mt-[20px]">Go to admin panel
                    <a href="admindash.php">
                        <span class=" cursor-pointer underline text-[14px] text-blue-500 hover:text-blue-600 font-semibold ml-[4px]">click here</span>
                    </a>
                </h1>
            </div>
        </form>
    </div>
</body>

</html>