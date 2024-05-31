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
    echo "<script type='text/javascript'>alert('Thank you...we will reach you soon'); setTimeout(function(){ window.location.href = 'index.php' }, 1000);</script>";/* use single quotes */
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

<body class=" bg-white">
    <!-- Navigation -->
    <nav class=" px-[60px] flex items-center justify-between sticky top-0 shadow-xl bg-gray-100 py-[20px] z-40">
        <div class="text-gray-800 text-nowrap text-[26px] font-semibold ">Hotel Dheen</div>
        <div class="container flex justify-end">
            <div class="flex items-center space-x-8 font-normal">
                <a href="index.php" class="text-black hover:underline underline-offset-8 font-semibold">Home</a>
            </div>
        </div>
    </nav>
    <!-- Contact Us -->
    <div class="flex justify-center mt-[-20px]">
        <div class=" flex w-[850px] h-[640px] space-x-20">
            <div class="flex flex-col w-[600px] h-[600px]">
                <h1 class=" text-black text-[28px] mt-[40px] pb-4 font-semibold">Contact Us</h1>
                <div class=" bg-gray-200">
                    <img src="Images/contact/contactus.svg" alt="image" class=" w-full h-[300px]">
                </div>
                <div class=" flex mt-4">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-green-400">
                            <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                        </svg>

                    </div>
                    <div class=" ml-4">
                        <p class=" text-[18px] font-semibold">Phone</p>
                        <p class=" text-[16px] text-gray-600">+91 9345550559</p>
                    </div>
                </div>
                <div class=" flex pt-6">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-orange-400">
                            <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                            <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                        </svg>

                    </div>
                    <div class=" ml-4">
                        <p class=" text-[18px] font-semibold">Email</p>
                        <p class=" text-[16px] text-gray-600">dheendheenu777@gmail.com</p>
                    </div>
                </div>
                <div class=" flex pt-6">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-red-500">
                            <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                        </svg>

                    </div>
                    <div class=" ml-4">
                        <p class=" text-[18px] font-semibold">Location</p>
                        <p class=" text-[16px] text-gray-600">Siruvangur</p>
                    </div>
                </div>
            </div>
            <form action="" method="POST" class="flex pt-[20px] pb-[20px] mt-[50px] bg-gray-800 text-white rounded-lg">
                <div class="flex flex-col pl-14 pr-14">

                    <label class=" text-[16px] mt-[20px]">First Name</label>
                    <input type="text" pattern="[a-zA-Z\s']+" name="fn" class=" w-[276px] h-[38px] focus:outline-none focus:border-blue-600 focus:border-2 text-black text-[16px] border mt-[16px] py-[4px] pl-[6px] outline-none border-gray-400 rounded-sm" required>

                    <label class=" text-[16px] mt-[20px]">Last Name</label>
                    <input type="text" pattern="[a-zA-Z\s']+" name="ln" class="  w-[276px] h-[38px] focus:outline-none focus:border-blue-600 focus:border-2 text-black text-[16px] border mt-[16px] py-[4px] pl-[6px] outline-none border-gray-400 rounded-sm" required>

                    <label class=" text-[16px] mt-[20px]">Email</label>
                    <input type="email" name="mail" class="  w-[276px] h-[38px] focus:outline-none focus:border-blue-600 focus:border-2 text-black text-[16px] border mt-[16px] py-[4px] pl-[6px] outline-none border-gray-400 rounded-sm" required>

                    <label class=' text-[16px] mt-[20px]'>Message</label>
                    <textarea rows='4' cols='50' pattern='[a-zA-Z\s]+' name='mess' placeholder='Send us your message' class='resize-none text-wrap w-[276px] text-black text-[16px] border-2 mt-[16px] py-[4px] pl-[6px] py-[10px] outline-none border-gray-300 rounded-sm' required></textarea>

                    <button type="submit" value="submit" name="submit" class=" text-[16px] w-[276px] mt-[60px] bg-blue-600 hover:bg-blue-700 text-white font-normal pt-[8px] pb-[8px] rounded-md" required>Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>