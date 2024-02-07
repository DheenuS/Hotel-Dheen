<?php

session_start();

include("db.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $custname = $_POST['Name'];
    $custemail = $_POST['Email'];
    $custphone = $_POST['Phone'];
    $custaddr = $_POST['Address'];
    $ad = $_POST['Adults'];
    $child = $_POST['Children'];
    $rt = $_POST['roomType'];
    $rp = $_POST['roomPrice'];
    $cin = $_POST['checkIn'];
    $cout = $_POST['checkOut'];
    $foood = $_POST['food'];
    $wif = $_POST['wifis'];
}

if (!empty($custemail) && !empty($custphone) && !is_numeric($custemail)) {
    $query = "insert into roombook (name, email, phone, address, adults, children, roomtype, roomprice, checkin, checkout, foods, wifi) values ('$custname', '$custemail', '$custphone', '$custaddr', '$ad', '$child', '$rt', '$rp', '$cin', '$cout', '$foood', '$wif')";
    mysqli_query($con, $query);
    echo "<script type='text/javascript'>alert('Booking Successfull...')</script>";/* use single quotes */

    // header('location: home.php');
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
    <!-- CSS Link -->
    <link rel="stylesheet" href="css/home.css">
    <!-- Google Icon import link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        /* Scroll bar */
        ::-webkit-scrollbar {
            width: 6px;
            /* height: 12px; */
            background-color: #fff;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #0080ff;
        }

        /* Scroll behaviour */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class=" bg-gray-50">

    <!-- Navigation -->
    <nav class=" px-[70px] flex items-center px-6 sticky top-0 shadow-xl bg-gray-900 p-[16px] z-40">
        <div class="text-white text-nowrap text-[26px] font-semibold hover:shadow-sm">Hotel <span class="text-blue-500">Dheen</span></div>
        <div class="container flex justify-end">
            <div class="flex items-center space-x-8 font-normal ">
                <a href="#" class=" text-white hover:underline underline-offset-8">Home</a>
                <a href="#about" class=" text-white hover:underline underline-offset-8">About Us</a>
                <a href="#rooms" class=" text-white hover:underline underline-offset-8">Rooms</a>
                <a href="#testimonials" class=" text-white hover:underline underline-offset-8">Testimonials</a>
                <a href="#contact" class=" text-white hover:underline underline-offset-8">Contact Us</a>
                <a href="index.php">
                    <button class=" text-[16px] hover:bg-blue-600 bg-blue-500 text-center text-white font-normal pl-[12px] pr-[12px] pt-[8px] pb-[8px] rounded-md">Logout</button>
                </a>
            </div>
        </div>
    </nav>

    <!-- Home -->
    <div class="h-screen">
        <div class="relative">
            <img src="Images/background/background.jpg" alt="background" class="w-full h-[700px]">
            <div class=" absolute top-[8px] left-[450px] space-y-2">
                <h1 class=" text-[50px] font-semibold text-white">Welcome to Hotel Dheen</h1>
                <!-- <h5 class=" text-center text-[20px] font-semibold text-gray-600 text-black">The place where you feel peace</h5> -->
            </div>
        </div>
    </div>

    <!-- About Us -->
    <!-- <div id="about" class="mt-10 h-screen bg-green-50 mx-auto">
        <h1 class=" text-center text-[26px] text-gray-800 font-semibold mb-2 pt-20">About Us</h1>

    </div> -->
    <div id="about" class="">
        <h1 class=" text-center text-[26px] text-gray-800 font-semibold pt-20">About Us</h1>
        <h1 class=" text-center text-[16px] text-gray-600 font-normal mb-10">Vision and Goals of Hotel Dheen</h1>
        <div class=" mx-auto flex justify-center px-16 container text-center bg-green-100 mt-10 pt-12 pb-12 rounded-xl">
            <div class="">
                <img src="Images/background/aboutus.jpg" alt="aboutus" class=" w-[600px] h-[700px] rounded-tl-md rounded-bl-md">
            </div>
            <div class=" w-[600px] h-[700px] bg-white px-10 py-6 text-left text-wrap rounded-tr-md rounded-br-md">
                <h1 class=" text-[26px] text-black font-semibold mb-2">Welcome to Hotel Dheen</h1>
                <p class=" text-[16px] text-gray-600 pb-2">Hey there! We're Hotel Dheen, and we're thrilled to have you with us.
                    Imagine a place where you meet peace and comfort.
                    That's what we're all about!</p>

                <h1 class=" text-[18px] text-black font-semibold pb-2">Our Story</h1>
                <p class=" text-[16px] text-gray-600 pb-2">We kicked off this adventure in 2024, starting small and dreaming big. Fast forward to today, we've become a spotted for travelers seeking a comfortable stay with our hotel.</p>

                <h1 class=" text-[18px] text-black font-semibold pb-2">Our Mission</h1>
                <p class=" text-[16px] text-gray-600 pb-2">Making Your Stay Awesome: Our goal is simple - make your stay awesome and more comfortable! We're here to give you more than a room. We want to create moments you'll remember.</p>

                <h1 class=" text-[18px] text-black font-semibold pb-2">Friendly Vibes</h1>
                <p class=" text-[16px] text-gray-600 pb-2">We're not just a hotel; we're your friendly hosts. Expect smiles, quality of comfortable and a vibe that feels like home.</p>

                <h1 class=" text-[18px] text-black font-semibold pb-2">Why Choose Hotel Dheen</h1>
                <p class=" text-[16px] text-gray-600">Cool Rooms - Our rooms are not just beds, they're comfortable, safe and peaceful place. Quality Foods - We're providing a quality foods for our customers. Foodies, get ready! Our chefs cook up some delicious meals. Your taste buds are in for a treat. We've Got Your Back, Need anything? We're here 24/7. Our team is your team, making sure you're happy and comfortable.
            </div>
        </div>
    </div>



    <!-- Rooms -->
    <div id="rooms" class=" mt-10">
        <h1 class=" text-center text-[26px] text-gray-800 font-semibold pt-20">Our Rooms</h1><!-- underline underline-offset-8 -->
        <h1 class=" text-center text-[16px] text-gray-600 font-normal mb-10">Explore our fantastic rooms where you feel peace and comfortable like home</h1>
        <div class=" mx-auto flex justify-center px-16 container text-center bg-gray-200 mt-10 pt-12 pb-12 rounded-xl">

            <div class=" relative gap-x-16 gap-y-8 grid md:grid-cols-4 sm:grid-cols-3 md:grid-rows-2 sm:grid-rows-3">
                <!-- Room 1 -->
                <div class=" bg-[#fafafa] relative sm:w-[180px] sm:h-[240px] md:w-[240px] md:h-[340px] rounded-lg shadow-lg p-2 z-1">
                    <div class=" flex justify-between">
                        <div class=" absolute top-[14px] left-[148px] flex px-[6px] py-[2px]">
                            <span class="material-symbols-outlined text-[14px] px-[8px] py-[6px] rounded-md shadow-lg bg-white hover:bg-gray-100 font-semibold mr-2">wifi</span>
                            <span class="material-symbols-outlined text-[14px] px-[8px] py-[6px] rounded-md shadow-lg bg-white hover:bg-gray-100 font-semibold">fastfood</span>
                        </div>
                    </div>
                    <img src="Images/rooms/room1.jpg" alt="image" class=" w-full h-[180px] rounded-md">
                    <div class=" flex justify-between items-center px-1 mt-2">
                        <p class=" text-start font-semibold text-[15px]">Single Room</p>
                        <!-- <div class=" text-green-600">25% Offer <span class=" text-black font-normal line-through text-[16px]">₹5000</span></div> -->
                        <div class=" font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[2px] rounded-md">₹2,800</div>
                    </div>
                    <p class=" text-left text-wrap px-1 text-[12px] text-gray-800 mt-1">Explore and book the room to feel peace and faith and enjoy with your family</p>
                    <div class="flex justify-between mt-[18px]">
                        <button class="border-2 rounded-md pr-[12px] pl-[12px] pt-[4px] pb-[4px] border-orange-400 hover:border-orange-500 text-orange-500 hover:text-orange-600 text-[14px] font-semibold shadow-md">View Details</button>
                        <button id="open-popup" class="bg-blue-500 hover:bg-blue-600 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold shadow-md">Book now</button>
                    </div>
                </div>



                <!-- Room 2 -->
                <div class=" bg-[#fafafa] relative sm:w-[180px] sm:h-[240px] md:w-[240px] md:h-[340px] rounded-lg shadow-lg p-2 z-0">
                    <div class=" flex justify-between">
                        <div class=" absolute top-[14px] left-[148px] flex px-[6px] py-[2px]">
                            <span class="material-symbols-outlined text-[14px] px-[8px] py-[6px] rounded-md shadow-lg bg-white hover:bg-gray-100 font-semibold mr-2">wifi</span>
                            <span class="material-symbols-outlined text-[14px] px-[8px] py-[6px] rounded-md shadow-lg bg-white hover:bg-gray-100 font-semibold">fastfood</span>
                        </div>
                    </div>
                    <img src="Images/rooms/room2.jpg" alt="image" class=" w-full h-[180px] rounded-md">
                    <div class=" flex justify-between items-center px-1 mt-2">
                        <p class=" text-start font-semibold text-[15px]">Double Room</p>
                        <!-- <div class=" text-green-600">25% Offer <span class=" text-black font-normal line-through text-[16px]">₹5000</span></div> -->
                        <div class=" font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[2px] rounded-md">₹4,500</div>
                    </div>
                    <p class=" text-left text-wrap px-1 text-[12px] text-gray-800 mt-1">Explore and book the room to feel peace and faith and enjoy with your family</p>
                    <div class="flex justify-between mt-[18px]">
                        <button class="border-2 rounded-md pr-[12px] pl-[12px] pt-[4px] pb-[4px] border-orange-400 hover:border-orange-500 text-orange-500 hover:text-orange-600 text-[14px] font-semibold shadow-md">View Details</button>
                        <button class="bg-blue-500 hover:bg-blue-600 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold shadow-md">Book now</button>
                    </div>
                </div>
                <!-- Room 3 -->
                <div class=" bg-[#fafafa] relative sm:w-[180px] sm:h-[240px] md:w-[240px] md:h-[340px] rounded-lg shadow-lg p-2 z-0">
                    <div class=" flex justify-between">
                        <div class=" absolute top-[14px] left-[148px] flex px-[6px] py-[2px]">
                            <span class="material-symbols-outlined text-[14px] px-[8px] py-[6px] rounded-md shadow-lg bg-white hover:bg-gray-100 font-semibold mr-2">wifi</span>
                            <span class="material-symbols-outlined text-[14px] px-[8px] py-[6px] rounded-md shadow-lg bg-white hover:bg-gray-100 font-semibold">fastfood</span>
                        </div>
                    </div>
                    <img src="Images/rooms/room3.jpg" alt="image" class=" w-full h-[180px] rounded-md">
                    <div class=" flex justify-between items-center px-1 mt-2">
                        <p class=" text-start font-semibold text-[15px]">Triple Room</p>
                        <!-- <div class=" text-green-600">25% Offer <span class=" text-black font-normal line-through text-[16px]">₹5000</span></div> -->
                        <div class=" font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[2px] rounded-md">₹7,000</div>
                    </div>
                    <p class=" text-left text-wrap px-1 text-[12px] text-gray-800 mt-1">Explore and book the room to feel peace and faith and enjoy with your family</p>
                    <div class="flex justify-between mt-[18px]">
                        <button class="border-2 rounded-md pr-[12px] pl-[12px] pt-[4px] pb-[4px] border-orange-400 hover:border-orange-500 text-orange-500 hover:text-orange-600 text-[14px] font-semibold shadow-md">View Details</button>
                        <button class="bg-blue-500 hover:bg-blue-600 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold shadow-md">Book now</button>
                    </div>
                </div>
                <!-- Room 4 -->
                <div class=" bg-[#fafafa] relative sm:w-[180px] sm:h-[240px] md:w-[240px] md:h-[340px] rounded-lg shadow-lg p-2 z-0">
                    <div class=" flex justify-between">
                        <div class=" absolute top-[14px] left-[148px] flex px-[6px] py-[2px]">
                            <span class="material-symbols-outlined text-[14px] px-[8px] py-[6px] rounded-md shadow-lg bg-white hover:bg-gray-100 font-semibold mr-2">wifi</span>
                            <span class="material-symbols-outlined text-[14px] px-[8px] py-[6px] rounded-md shadow-lg bg-white hover:bg-gray-100 font-semibold">fastfood</span>
                        </div>
                    </div>
                    <img src="Images/rooms/room4.jpg" alt="image" class=" w-full h-[180px] rounded-md">
                    <div class=" flex justify-between items-center px-1 mt-2">
                        <p class=" text-start font-semibold text-[15px]">Quad Room</p>
                        <!-- <div class=" text-green-600">25% Offer <span class=" text-black font-normal line-through text-[16px]">₹5000</span></div> -->
                        <div class=" font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[2px] rounded-md">₹5,000</div>
                    </div>
                    <p class=" text-left text-wrap px-1 text-[12px] text-gray-800 mt-1">Explore and book the room to feel peace and faith and enjoy with your family</p>
                    <div class="flex justify-between mt-[18px]">
                        <button class="border-2 rounded-md pr-[12px] pl-[12px] pt-[4px] pb-[4px] border-orange-400 hover:border-orange-500 text-orange-500 hover:text-orange-600 text-[14px] font-semibold shadow-md">View Details</button>
                        <button class="bg-blue-500 hover:bg-blue-600 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold shadow-md">Book now</button>
                    </div>
                </div>
                <!-- Room 5 -->
                <div class=" bg-[#fafafa] relative sm:w-[180px] sm:h-[240px] md:w-[240px] md:h-[340px] rounded-lg shadow-lg p-2 z-0">
                    <div class=" flex justify-between">
                        <div class=" absolute top-[14px] left-[148px] flex px-[6px] py-[2px]">
                            <span class="material-symbols-outlined text-[14px] px-[8px] py-[6px] rounded-md shadow-lg bg-white hover:bg-gray-100 font-semibold mr-2">wifi</span>
                            <span class="material-symbols-outlined text-[14px] px-[8px] py-[6px] rounded-md shadow-lg bg-white hover:bg-gray-100 font-semibold">fastfood</span>
                        </div>
                    </div>
                    <img src="Images/rooms/room8.jpg" alt="image" class=" w-full h-[180px] rounded-md">
                    <div class=" flex justify-between items-center px-1 mt-2">
                        <p class=" text-start font-semibold text-[15px]">Family Room</p>
                        <!-- <div class=" text-green-600">25% Offer <span class=" text-black font-normal line-through text-[16px]">₹5000</span></div> -->
                        <div class=" font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[2px] rounded-md">₹5,600</div>
                    </div>
                    <p class=" text-left text-wrap px-1 text-[12px] text-gray-800 mt-1">Explore and book the room to feel peace and faith and enjoy with your family</p>
                    <div class="flex justify-between mt-[18px]">
                        <button class="border-2 rounded-md pr-[12px] pl-[12px] pt-[4px] pb-[4px] border-orange-400 hover:border-orange-500 text-orange-500 hover:text-orange-600 text-[14px] font-semibold shadow-sm ">View Details</button>
                        <button class="bg-blue-500 hover:bg-blue-600 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold shadow-sm">Book now</button>
                    </div>
                </div>
                <!-- Room 6 -->
                <div class=" bg-[#fafafa] relative sm:w-[180px] sm:h-[240px] md:w-[240px] md:h-[340px] rounded-lg shadow-lg p-2 z-0">
                    <div class=" flex justify-between">
                        <div class=" absolute top-[14px] left-[148px] flex px-[6px] py-[2px]">
                            <span class="material-symbols-outlined text-[14px] px-[8px] py-[6px] rounded-md shadow-lg bg-white hover:bg-gray-100 font-semibold mr-2">wifi</span>
                            <span class="material-symbols-outlined text-[14px] px-[8px] py-[6px] rounded-md shadow-lg bg-white hover:bg-gray-100 font-semibold">fastfood</span>
                        </div>
                    </div>
                    <img src="Images/rooms/room6.jpg" alt="image" class=" w-full h-[180px] rounded-md">
                    <div class=" flex justify-between items-center px-1 mt-2">
                        <p class=" text-start font-semibold text-[15px]">King Room</p>
                        <!-- <div class=" text-green-600">25% Offer <span class=" text-black font-normal line-through text-[16px]">₹5000</span></div> -->
                        <div class=" font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[2px] rounded-md">₹6,400</div>
                    </div>
                    <p class=" text-left text-wrap px-1 text-[12px] text-gray-800 mt-1">Explore and book the room to feel peace and faith and enjoy with your family</p>
                    <div class="flex justify-between mt-[18px]">
                        <button class="border-2 rounded-md pr-[12px] pl-[12px] pt-[4px] pb-[4px] border-orange-400 hover:border-orange-500 text-orange-500 hover:text-orange-600 text-[14px] font-semibold shadow-md">View Details</button>
                        <button class="bg-blue-500 hover:bg-blue-600 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold shadow-md">Book now</button>
                    </div>
                </div>
                <!-- Room 7 -->
                <div class=" bg-[#fafafa] relative sm:w-[180px] sm:h-[240px] md:w-[240px] md:h-[340px] rounded-lg shadow-lg p-2 z-0">
                    <div class=" flex justify-between">
                        <div class=" absolute top-[14px] left-[148px] flex px-[6px] py-[2px]">
                            <span class="material-symbols-outlined text-[14px] px-[8px] py-[6px] rounded-md shadow-lg bg-white hover:bg-gray-100 font-semibold mr-2">wifi</span>
                            <span class="material-symbols-outlined text-[14px] px-[8px] py-[6px] rounded-md shadow-lg bg-white hover:bg-gray-100 font-semibold">fastfood</span>
                        </div>
                    </div>
                    <img src="Images/rooms/room7.jpg" alt="image" class=" w-full h-[180px] rounded-md">
                    <div class=" flex justify-between items-center px-1 mt-2">
                        <p class=" text-start font-semibold text-[15px]">Queen Room</p>
                        <!-- <div class=" text-green-600">25% Offer <span class=" text-black font-normal line-through text-[16px]">₹5000</span></div> -->
                        <div class=" font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[2px] rounded-md">₹3,200</div>
                    </div>
                    <p class=" text-left text-wrap px-1 text-[12px] text-gray-800 mt-1">Explore and book the room to feel peace and faith and enjoy with your family</p>
                    <div class="flex justify-between mt-[18px]">
                        <button class="border-2 rounded-md pr-[12px] pl-[12px] pt-[4px] pb-[4px] border-orange-400 hover:border-orange-500 text-orange-500 hover:text-orange-600 text-[14px] font-semibold shadow-md">View Details</button>
                        <button class="bg-blue-500 hover:bg-blue-600 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold shadow-md">Book now</button>
                    </div>
                </div>
                <!-- Room 8 -->
                <div class=" bg-[#fafafa] relative sm:w-[180px] sm:h-[240px] md:w-[240px] md:h-[340px] rounded-lg shadow-lg p-2 z-0">
                    <div class=" flex justify-between">
                        <div class=" absolute top-[14px] left-[148px] flex px-[6px] py-[2px]">
                            <span class="material-symbols-outlined text-[14px] px-[8px] py-[6px] rounded-md shadow-lg bg-white hover:bg-gray-100 font-semibold mr-2">wifi</span>
                            <span class="material-symbols-outlined text-[14px] px-[8px] py-[6px] rounded-md shadow-lg bg-white hover:bg-gray-100 font-semibold">fastfood</span>
                        </div>
                    </div>
                    <img src="Images/rooms/room5.jpg" alt="image" class=" w-full h-[180px] rounded-md">
                    <div class=" flex justify-between items-center px-1 mt-2">
                        <p class=" text-start font-semibold text-[15px]">Guest Room</p>
                        <!-- <div class=" text-green-600">25% Offer <span class=" text-black font-normal line-through text-[16px]">₹5000</span></div> -->
                        <div class=" font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[2px] rounded-md">₹3,700</div>
                    </div>
                    <p class=" text-left text-wrap px-1 text-[12px] text-gray-800 mt-1">Explore and book the room to feel peace and faith and enjoy with your family</p>
                    <div class="flex justify-between mt-[18px]">
                        <button class="border-2 rounded-md pr-[12px] pl-[12px] pt-[4px] pb-[4px] border-orange-400 hover:border-orange-500 text-orange-500 hover:text-orange-600 text-[14px] font-semibold shadow-md">View Details</button>
                        <button class="bg-blue-500 hover:bg-blue-600 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold shadow-md">Book now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Booking Registration form -->
    <div id="popups" class="fixed top-10 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-50 hidden z-20">
        <form action="" method="POST" class=" relative text-left max-w-lg mx-auto mt-0 p-8 bg-white rounded-xl shadow-lg">
            <button id="close-popup" class=" text-red-600 hover:text-red-500 absolute top-3 right-6 z-20 text-3xl">×</button>
            <h1 class="text-2xl font-semibold text-center mb-6">Reservation Form</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-16">
                <div>
                    <label for="name" class="block text-[16px] mb-1">Name</label>
                    <input type="text" name="Name" id="name" class="w-full p-2 border" required>

                    <label for="email" class="block text-[16px] mt-4 mb-1">Email</label>
                    <input type="email" name="Email" id="email" class="w-full p-2 border" required>

                    <label for="phone" class="block text-[16px] mt-4 mb-1">Phone Number</label>
                    <input type="tel" name="Phone" id="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="w-full p-2 border" required>

                    <label for="address" class="block text-[16px] mt-4 mb-1">Address</label>
                    <input type="text" name="Address" id="address" class="w-full p-2 border" required>

                    <label for="adults" class="block text-[16px] mt-4 mb-1">Adults</label>
                    <select name="Adults" id="adults" class="w-full p-2 border" required>
                        <option value="">Select Adults</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>

                    <label for="children" class="block text-[16px] mt-4 mb-1">Child</label>
                    <select name="Children" id="children" class="w-full p-2 border" required>
                        <option value="">Select Children</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>

                <div>
                    <label for="roomType" class="block text-[16px] mb-1">Room Type</label>
                    <select name="roomType" id="roomType" class="w-full p-2 border" required>
                        <option value="Single">Single</option>
                    </select>

                    <label for="roomPrice" class="block text-[16px] mt-4 mb-1">Room Price</label>
                    <select name="roomPrice" id="roomPrice" class="w-full p-2 border" required>
                        <option value="₹2,800">₹2,800</option>
                    </select>

                    <label for="checkIn" class="block text-[16px] mt-4 mb-1">Check-In</label>
                    <input type="date" name="checkIn" id="checkIn" class="w-full p-2 border" required>

                    <label for="checkOut" class="block text-[16px] mt-4 mb-1">Check-Out</label>
                    <input type="date" name="checkOut" id="checkOut" class="w-full p-2 border" required>

                    <label for="food" class="block text-[16px] mt-4 mb-1">Food</label>
                    <select name="food" id="food" class="w-full p-2 border" required>
                        <option value="">Select Food</option>
                        <option value="Pizza">Pizza</option>
                        <option value="Burger">Burger</option>
                        <option value="Pasta">Pasta</option>
                        <option value="Salad">Salad</option>
                        <option value="Sushi">Sushi</option>
                        <option value="Tacos">Tacos</option>
                        <option value="Ice Cream">Ice Cream</option>
                        <option value="Chicken Curry">Chicken Curry</option>
                    </select>

                    <label for="wifi" class="block text-[16px] mt-4 mb-1">Need Wifi</label>
                    <select name="wifis" id="food" class="flex items-center w-full p-2 border" required>
                        <option value="">Select Access</option>
                        <option value="yes">yes</option>
                        <option value="no">no</option>
                    </select>
                </div>

            </div>
            <button type="submit" class="text-[16px] w-full bg-blue-600 hover:bg-blue-700 text-center text-white font-normal py-2 px-4 rounded-md mt-6">Book</button>
        </div>
    </div>
</form>

<!-- Testimonials -->
<div id="testimonials" class=" mt-10">
    <h1 class=" text-center text-[26px] text-gray-800 font-semibold pt-20">Testimonials</h1><!-- underline underline-offset-8 -->
    <h1 class=" text-center text-[16px] text-gray-600 font-normal mb-10">Rating based on customer reviews</h1>
    <div class=" mx-auto flex justify-center px-16 container text-center bg-orange-50 mt-10 mb-10 pt-12 pb-12 rounded-xl">
        <div class=" relative gap-x-16 gap-y-8 grid md:grid-cols-4 sm:grid-cols-3 md:grid-rows-2 sm:grid-rows-3">
            <!-- Customer 1 -->
            <div class=" flex flex-col justify-center items-center bg-[#fafafa] relative sm:w-[180px] sm:h-[240px] md:w-[240px] md:h-[340px] rounded-lg shadow-lg p-2 z-1">
                <img src="Images/testimonials/sudhar1.jpg" alt="image" class=" w-[140px] h-[140px] hover:opacity-90 rounded-full outline outline-gray-200 outline-offset-4">
                <p class=" font-semibold text-[18px] pb-1 pt-2">Sudhar</p>
                <p class=" font-semibold text-[13px] text-gray-600">Siruvangur</p>
                <div class=" flex justify-center items-center mt-4 w-[88px] h-auto p-2 hover:opacity-90 rounded-full bg-gray-200">
                    <p class="font-semibold text-[15px] mr-2">4.9</p>
                    <p class="font-semibold">⭐</p>
                </div>
            </div>
                <!-- Customer 2 -->
                <div class=" flex flex-col justify-center items-center bg-[#fafafa] relative sm:w-[180px] sm:h-[240px] md:w-[240px] md:h-[340px] rounded-lg shadow-lg p-2 z-1">
                    <img src="Images/testimonials/dhanush.jpg" alt="image" class=" w-[140px] h-[140px] hover:opacity-90 rounded-full outline outline-gray-200 outline-offset-4">
                    <p class=" font-semibold text-[18px] pb-1 pt-2">Dhanush</p>
                    <p class=" font-semibold text-[13px] text-gray-600">Woraiyur</p>
                    <div class=" flex justify-center items-center mt-4 w-[88px] h-auto p-2 hover:opacity-90 rounded-full bg-gray-200">
                        <p class="font-semibold text-[15px] mr-2">4.9</p>
                        <p class="font-semibold">⭐</p>
                    </div>
                </div>
                <!-- Customer 3 -->
                <div class=" flex flex-col justify-center items-center bg-[#fafafa] relative sm:w-[180px] sm:h-[240px] md:w-[240px] md:h-[340px] rounded-lg shadow-lg p-2 z-1">
                    <img src="Images/testimonials/bas.jpg" alt="image" class=" w-[140px] h-[140px] hover:opacity-90 rounded-full outline outline-gray-200 outline-offset-4">
                    <p class=" font-semibold text-[18px] pb-1 pt-2">Basith</p>
                    <p class=" font-semibold text-[13px] text-gray-600">Aavanam</p>
                    <div class=" flex justify-center items-center mt-4 w-[88px] h-auto p-2 hover:opacity-90 rounded-full bg-gray-200">
                        <p class="font-semibold text-[15px] mr-2">4.9</p>
                        <p class="font-semibold">⭐</p>
                    </div>
                </div>
                <!-- Customer 4 -->
                <div class=" flex flex-col justify-center items-center bg-[#fafafa] relative sm:w-[180px] sm:h-[240px] md:w-[240px] md:h-[340px] rounded-lg shadow-lg p-2 z-1">
                    <img src="Images/testimonials/kalaivanan.jpg" alt="image" class=" w-[140px] h-[140px] hover:opacity-90 rounded-full outline outline-gray-200 outline-offset-4">
                    <p class=" font-semibold text-[18px] pb-1 pt-2">Kalaivanan</p>
                    <p class=" font-semibold text-[13px] text-gray-600">Pathur</p>
                    <div class=" flex justify-center items-center mt-4 w-[88px] h-auto p-2 hover:opacity-90 rounded-full bg-gray-200">
                        <p class="font-semibold text-[15px] mr-2">4.9</p>
                        <p class="font-semibold">⭐</p>
                    </div>
                </div>
                <!-- Customer 5 -->
                <div class=" flex flex-col justify-center items-center bg-[#fafafa] relative sm:w-[180px] sm:h-[240px] md:w-[240px] md:h-[340px] rounded-lg shadow-lg p-2 z-1">
                    <img src="Images/testimonials/salman1.jpg" alt="image" class=" w-[140px] h-[140px] hover:opacity-90 rounded-full outline outline-gray-200 outline-offset-4">
                    <p class=" font-semibold text-[18px] pb-1 pt-2">Salman</p>
                    <p class=" font-semibold text-[13px] text-gray-600">Parangipettai</p>
                    <div class=" flex justify-center items-center mt-4 w-[88px] h-auto p-2 hover:opacity-90 rounded-full bg-gray-200">
                        <p class="font-semibold text-[15px] mr-2">4.9</p>
                        <p class="font-semibold">⭐</p>
                    </div>
                </div>
                <!-- Customer 6 -->
                <div class=" flex flex-col justify-center items-center bg-[#fafafa] relative sm:w-[180px] sm:h-[240px] md:w-[240px] md:h-[340px] rounded-lg shadow-lg p-2 z-1">
                    <img src="Images/testimonials/nivas.jpg" alt="image" class=" w-[140px] h-[140px] hover:opacity-90 rounded-full outline outline-gray-200 outline-offset-4">
                    <p class=" font-semibold text-[18px] pb-1 pt-2">Nivas</p>
                    <p class=" font-semibold text-[13px] text-gray-600">Manapparai</p>
                    <div class=" flex justify-center items-center mt-4 w-[88px] h-auto p-2 hover:opacity-90 rounded-full bg-gray-200">
                        <p class="font-semibold text-[15px] mr-2">4.9</p>
                        <p class="font-semibold">⭐</p>
                    </div>
                </div>
                <!-- Customer 7 -->
                <div class=" flex flex-col justify-center items-center bg-[#fafafa] relative sm:w-[180px] sm:h-[240px] md:w-[240px] md:h-[340px] rounded-lg shadow-lg p-2 z-1">
                    <img src="Images/testimonials/person8.jpg" alt="image" class=" w-[140px] h-[140px] hover:opacity-90 rounded-full outline outline-gray-200 outline-offset-4">
                    <p class=" font-semibold text-[18px] pb-1 pt-2">Jenifer</p>
                    <p class=" font-semibold text-[13px] text-gray-600">Odissa</p>
                    <div class=" flex justify-center items-center mt-4 w-[88px] h-auto p-2 hover:opacity-90 rounded-full bg-gray-200">
                        <p class="font-semibold text-[15px] mr-2">4.9</p>
                        <p class="font-semibold">⭐</p>
                    </div>
                </div>
                <!-- Customer 8 -->
                <div class=" flex flex-col justify-center items-center bg-[#fafafa] relative sm:w-[180px] sm:h-[240px] md:w-[240px] md:h-[340px] rounded-lg shadow-lg p-2 z-1">
                    <img src="Images/testimonials/person2.jpg" alt="image" class=" w-[140px] h-[140px] hover:opacity-90 rounded-full outline outline-gray-200 outline-offset-4">
                    <p class=" font-semibold text-[18px] pb-1 pt-2">Adrew</p>
                    <p class=" font-semibold text-[13px] text-gray-600">Delhi</p>
                    <div class=" flex justify-center items-center mt-4 w-[88px] h-auto p-2 hover:opacity-90 rounded-full bg-gray-200">
                        <p class="font-semibold text-[15px] mr-2">4.9</p>
                        <p class="font-semibold">⭐</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Us -->
    <div id="contact" class=" flex items-center justify-between mt-0 w-full h-[300px] bg-gray-700 px-[100px]">
        <div class=" w-[400px] h-auto">
            <p class=" text-[24px] text-white font-semibold pb-2">Get in Touch</p>
            <p class=" text-[#9ca3af]">Excited to stay with us? Have questions?<br>Feel free to reach out!<br>drop a message.</p>
            <a href="contactus.php">
                <button class=" text-[16px] w-[220px] mt-[40px] bg-orange-600 hover:bg-orange-700 text-white pt-[8px] pb-[8px] rounded-md cursor-pointer" required>Message</button>
            </a>
            <div class=" flex space-x-4 pt-8">
                <a href="https://www.linkedin.com/in/dheenu-s/" target="_blank">
                    <img src="icons/linkedin.png" alt="linkedin" class="w-[30px] h-[30px] hover:opacity-90 cursor-pointer">
                </a>
                <a href="" target="_blank">
                <img src="icons/whatsapp.png" alt="whatsapp" class="w-[30px] h-[30px] hover:opacity-90 cursor-pointer">
                </a>
                <a href="https://www.instagram.com/dheen_dp/" target="_blank">
                <img src="icons/instagram.png" alt="instagram" class="w-[30px] h-[30px] hover:opacity-90 cursor-pointer">
                </a>
            </div>
        </div>
        <div class="flex flex-col">
            <div class=" flex mt-4">
                <div class="flex items-center">
                    <img src="icons/phone.png" alt="phone" class=" w-[30px] h-[30px] hover:opacity-90">
                </div>
                <div class=" ml-4">
                    <p class=" text-white text-[16px] font-semibold">Phone</p>
                    <p class=" text-[#9ca3af] text-[14px]">+91 9345550559</p>
                </div>
            </div>
            <div class=" flex pt-6">
                <div class="flex items-center">
                    <img src="icons/email.png" alt="email" class=" w-[30px] h-[30px] hover:opacity-90">
                </div>
                <div class=" ml-4">
                    <p class=" text-white text-[16px] font-semibold">Email</p>
                    <p class=" text-[#9ca3af] text-[14px]">dheendheenu777@gmail.com</p>
                </div>
            </div>
            <div class=" flex pt-6">
                <div class="flex items-center">
                    <img src="icons/location.png" alt="location" class=" w-[30px] h-[30px] hover:opacity-90">
                </div>
                <div class=" ml-4">
                    <p class=" text-white text-[16px] font-semibold">Location</p>
                    <p class=" text-[#9ca3af] text-[14px]">Siruvangur</p>
                </div>
            </div>
        </div>
        <div class=" fixed right-2 bottom-0">
            <button onclick="topFunction()" id="scroll" class=" mb-2 py-2 px-4 text-white bg-blue-500 hover:bg-blue-500 rounded-md">
                <!-- Icon for go to top -->
                <img src="icons/arrow.png" alt="top arrow" class=" w-[16px] h-[20px]">
            </button>
        </div>
    </div>

    <div class="hidden">
        <span">
            call
            </span>
            <span class="material-symbols-outlined">
                groups
            </span>
            <span class="material-symbols-outlined">
                login
            </span>
            <span class="material-symbols-outlined">
                logout
            </span>
            <span class="material-symbols-outlined">
                visibility
            </span>
            <span class="material-symbols-outlined">
                visibility_off
            </span>
            <span class="material-symbols-outlined">
                person
            </span>
            <span class="material-symbols-outlined">
                account_circle
            </span>
            <span class="material-symbols-outlined">
                admin_panel_settings
            </span>
            <span class="material-symbols-outlined">
                shield_person
            </span>

            <span class="material-symbols-outlined">
                how_to_reg
            </span>
            <span class="material-symbols-outlined">
                book
            </span>
            <span class="material-symbols-outlined">
                bedroom_parent
            </span>
    </div>

    <!-- Footer -->
    <footer class=" bg-gray-900 text-white p-4 bottom-0">
        <div class="container mx-auto text-center">
            &copy; 2024 Hotel Dheen. All rights reserved.
        </div>
    </footer>
    <script src="js/home.js"></script>
    <!-- Keep this script in home(not in home.js) -->
    <script>
        document.getElementById('open-popup').addEventListener('click', function() {
            document.getElementById('popups').classList.remove('hidden');
        });

        // document.getElementById('close-popup').addEventListener('click', function() {
        //     document.getElementById('popups').classList.add('hidden');
        // });
        document.addEventListener('DOMContentLoaded', function() {
            var closePopupButton = document.getElementById('close-popup');
            var popups = document.getElementById('popups');

            closePopupButton.addEventListener('click', function() {
                popups.classList.add('hidden');
            });

            // Add more JavaScript logic as needed for form submission, validation, etc.
        });
    </script>
</body>

</html>