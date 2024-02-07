<?php

session_start();

include("db.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fn'];
    $lname = $_POST['ln'];
    $gmail = $_POST['mail'];
    $msg = $_POST['mess'];
}

if (!empty($gmail) && !empty($msg) && !is_numeric($gmail)) {
    $query = "insert into contactus (firstname, lastname, email, message) values ('$fname', '$lname', '$gmail', '$msg')";
    mysqli_query($con, $query);
    echo "<script type='text/javascript'>alert('Thank you...we will reach you soon')</script>";/* use single quotes */
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
    <!-- CSS Link -->
    <link rel="stylesheet" href="css/home.css">

<body class=" bg-white">
    <!-- Navigation -->
    <nav class=" px-[70px] flex items-center px-6 sticky top-0 shadow-xl bg-gray-900 p-[16px] z-40">
        <div class="text-white text-nowrap text-[26px] font-semibold hover:shadow-sm">Hotel <span class="text-blue-500">D<span>heen</div>
        <div class="container flex justify-end">
            <div class="flex items-center space-x-8 font-normal">
                <a href="home.php" class="text-white hover:underline underline-offset-8">Home</a>
            </div>
        </div>
    </nav>
    <!-- Contact Us -->
    <div class="flex justify-center">
        <div class=" flex w-[850px] h-[640px] space-x-20">
            <div class="flex flex-col w-[600px] h-[600px]">
                <h1 class=" text-black text-[28px] mt-[40px] pb-4 font-semibold">Contact Us</h1>
                <div class=" bg-orange-50">
                <img src="Images/contact/contactus.svg" alt="image" class=" w-full h-[300px]">
                </div>
                <div class=" flex mt-4">
                    <div class="flex items-center">
                        <img src="icons/phone.png" alt="phone" class=" w-[30px] h-[30px]">
                    </div>
                    <div class=" ml-4">
                        <p class=" text-[18px] font-semibold">Phone</p>
                        <p class=" text-[16px] text-gray-600">+91 9345550559</p>
                    </div>
                </div>
                <div class=" flex pt-6">
                    <div class="flex items-center">
                    <img src="icons/email.png" alt="email" class=" w-[30px] h-[30px]">
                    </div>
                    <div class=" ml-4">
                    <p class=" text-[18px] font-semibold">Email</p>
                    <p class=" text-[16px] text-gray-600">dheendheenu777@gmail.com</p>
                    </div>
                </div>
                <div class=" flex pt-6">
                    <div class="flex items-center">
                    <img src="icons/location.png" alt="location" class=" w-[30px] h-[30px]">
                    </div>
                    <div class=" ml-4">
                    <p class=" text-[18px] font-semibold">Location</p>
                    <p class=" text-[16px] text-gray-600">Siruvangur</p>
                    </div>
                </div>
            </div>
            <form action="" method="POST" class="flex pt-[20px] pb-[20px] mt-[50px] bg-gray-800 text-white">
                <div class="flex flex-col pl-14 pr-14">

                    <label class=" text-[16px] mt-[20px]">First Name</label>
                    <input type="text" name="fn" class=" w-[276px] text-black text-[14px] border-2 mt-[16px] py-[4px] pl-[6px] outline-none border-gray-300 rounded-sm" required>

                    <label class=" text-[16px] mt-[20px]">Last Name</label>
                    <input type="text" name="ln" class=" w-[276px] text-black text-[14px] border-2 mt-[16px] py-[4px] pl-[6px] outline-none border-gray-300 rounded-sm" required>

                    <label class=" text-[16px] mt-[20px]">Email</label>
                    <input type="email" name="mail" class=" w-[276px] text-black text-[14px] border-2 mt-[16px] py-[4px] pl-[6px] outline-none border-gray-300 rounded-sm" required>

                    <label class=" text-[16px] mt-[20px]">Message</label>
                    <textarea rows="4" cols="50" name="mess" placeholder="Your message" class=" text-wrap w-[276px] text-black text-[14px] border-2 mt-[16px] py-[4px] pl-[6px] py-[10px] outline-none border-gray-300 rounded-sm" required></textarea>

                    <button type="submit" value="submit" name="submit" class=" text-[16px] w-[276px] mt-[60px] bg-blue-600 hover:bg-blue-700 text-white font-normal pt-[8px] pb-[8px] rounded-md" required>Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>