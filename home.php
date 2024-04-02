<?php
session_start();
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $custname = $_POST['Name'];
    $custemail = $_POST['Email'];
    $custphone = $_POST['Phone'];
    $custaddr = $_POST['Address'];
    $ad = isset($_POST['Adults']) ? $_POST['Adults'] : null;
    $child = isset($_POST['Children']) ? $_POST['Children'] : null;
    $rt = $_POST['roomType'];
    $rp = $_POST['roomPrice'];
    $cin = $_POST['checkIn'];
    $cout = $_POST['checkOut'];
    $totaldays = $_POST['totalDays'];
}
if (!empty($custemail) && !empty($custphone)) {
    $query = "INSERT INTO reservation (name, email, phone, address, adults, children, roomtype, roomprice, checkin, checkout, totdays) VALUES ('$custname', '$custemail', '$custphone', '$custaddr', '$ad', '$child', '$rt', '$rp', '$cin', '$cout', $totaldays)";
    mysqli_query($con, $query);
    echo "<script type='text/javascript'>alert('Booking Successful...');
        setTimeout(function(){ window.location.href = 'home.php' }, 1000);</script>";
}
mysqli_error($con);

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
            background-color: rgb(156 163 175);
        }

        /* Scroll behaviour */
        html {
            scroll-behavior: smooth;
        }

        .hotel {
            position: relative;
            height: 100vh;
            background-image: url('Images/background/back.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .hotel::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.55);
        }
    </style>
</head>

<body class=" bg-gray-100 cursor-default">

    <!-- Navigation -->
    <nav class=" px-[60px] bg-gray-50 flex items-center justify-between sticky top-0 shadow-xl py-[20px] z-40">
        <div class="text-gray-800 text-nowrap text-[26px] font-semibold ">Hotel Dheen</div>
        <div class="container flex justify-end">
            <div class="flex items-center space-x-8 font-normal text-[16px] text-black">
                <a href="#" class=" duration-300 hover:underline underline-offset-8">Home</a>
                <a href="#about" class=" hover:underline underline-offset-8">About Us</a>
                <a href="#rooms" class=" hover:underline underline-offset-8">Rooms</a>
                <a href="#testimonials" class=" hover:underline underline-offset-8">Testimonials</a>
                <a href="#contact" class=" hover:underline underline-offset-8">Contact Us</a>
                <a href="index.php" class="hover:bg-blue-600 bg-blue-500 flex items-center justify-center text-gray-100 font-normal pl-[12px] pr-[12px] pt-[8px] pb-[8px] rounded-md">
                    <span class="material-symbols-outlined text-[20px] font-normal mt-[2px] mr-1 text-white">
                        logout
                    </span>
                    <button class=" text-[16px]">Logout</button>
                </a>
            </div>
        </div>
    </nav>
    <!-- script for home typing strings -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <!-- Home -->
    <div class="h-screen hotel">
        <div class="relative">
            <div class=" absolute top-[100px] left-[310px] p-28 bg-black/20 backdrop-blur-sm hover:backdrop-blur-sm text-center space-y-2 z-10 shadow-black hover:shadow-md rounded-md">
                <h1 class=" text-[54px] font-bold text-white">Welcome to Hotel Dheen</h1>
                <h5 class=" text-[28px] font-semibold text-white">🙶 The place where you feel <span class="auto-type text-blue-500 "></span>🙷</h5>
            </div>
        </div>
        <a href="#about"><button class="absolute bottom-[100px] left-[580px] pl-4 pr-10 py-4 text-[16px] bg-black/20 backdrop-blur-md hover:backdrop-blur-xl text-gray-300 font-semibold rounded-md shadow-black hover:shadow-md z-20">Let's explore to know about us<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="z-30 w-6 h-6 absolute bottom-[11px] left-[244px] text-white animate-bounce">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
                </svg></button>
        </a>
    </div>
    <script>
        var typed = new Typed(".auto-type", {
            strings: ["Peace", "Comfort", "Faith", "Love"],
            typeSpeed: 250,
            backSpeed: 150,
            loop: true
        })
    </script>

    <div id="about" class="">
        <h1 class=" text-center text-[26px] text-gray-800 font-semibold pt-24">About Us</h1>
        <h1 class=" text-center text-[16px] text-gray-600 font-normal mb-6">Vision and Goals of Hotel Dheen</h1>
        <div class=" mx-auto container flex justify-center items-start space-x-12 pt-10 pb-12 bg-pale-100 rounded-xl">
            <div class="w-[500px] h-[460px]">
                <img src="Images/background/about.png" alt="aboutus" class=" w-[500px] h-[460px] rounded-tl-md rounded-md">
            </div>
            <div class=" w-[600px] h-[460px] bg-gray-50 pl-10 py-4  text-wrap rounded-md">
                <h1 class=" text-[24px] text-gray-500 font-semibold py-2 mb-2">🙶 Our Story 🙷</h1>
                <p class=" indent-12 leading-relaxed text-[15px] text-gray-600 text-left pr-10">We kicked off this adventure in 2024, starting small and dreaming big. Fast forward to today, we've become a spotted for travelers seeking a comfortable stay with our hotel. We faced the many struggles and more challenges to become the people's friendly hotel. Customer's who feel the peace and make them to stay calm. Making Your Stay Awesome: Our goal is simple - make your stay awesome and more comfortable! We're here to give you more than a room. We want to create moments you'll remember.We're not just a hotel; we're your friendly hosts. Expect smiles, quality of comfortable and a vibe that feels like home. Cool Rooms - Our rooms are not just beds, they're comfortable, safe and peaceful place. Quality Foods - We're providing a quality foods for our customers. Foodies, get ready! Our chefs cook up some delicious meals. Your taste buds are in for a treat. We've Got Your Back, Need anything? We're here 24/7. Our team is your team, making sure you're happy and comfortable.
            </div>
        </div>
    </div>



    <!-- Rooms -->
    <div id="rooms" class=" mt-10">
        <h1 class=" text-center text-[26px] text-gray-800 font-semibold pt-24">Our Rooms</h1><!-- underline underline-offset-8 -->
        <h1 class=" text-center text-[16px] text-gray-600 font-normal mb-10">Explore our fantastic rooms where you feel peace and comfortable like home</h1>
        <div class=" mx-auto flex justify-center px-16 container text-center bg-gray-200 mt-10 pt-12 pb-12 rounded-xl">

            <div class=" available-room-count relative gap-x-16 gap-y-8 grid md:grid-cols-4 sm:grid-cols-3 md:grid-rows-2 sm:grid-rows-3">
                <!--Single Room Starts -->
                <div class="bg-gray-100 relative w-[240px] h-[314px] rounded-lg shadow-lg p-2 z-1">
                    <img src="Images/rooms/single.jpg" alt="image" class="w-full h-[174px] rounded-md">
                    <div class="flex justify-between items-center px-1 mt-2">
                        <p class="text-start font-semibold text-[15px]">Single Room</p>
                        <div class="font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[2px] rounded-md">₹1,800</div>
                    </div>
                    <div class=" flex items-center justify-start space-x-2 px-1 mt-4">
                        <div class="text-[13px] font-medium">(4.5)</div>
                        <div class=" flex items-center justify-start gap-x-1">
                        <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                        <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                        <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                        <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                        <img src="icons/rating.png" alt="ratings" class="w-[15px] h-[15px]">
                        </div>
                    </div>

                    <?php
                    $sql = "SELECT availablerooms FROM adminrooms WHERE id = 1";
                    $result = mysqli_query($con, $sql);
                    // Check if the query was successful
                    if ($result) {
                        // Fetch the result as an associative array
                        $row = mysqli_fetch_assoc($result);
                        // Get the available room count of single room
                        $availablerooms = intval($row['availablerooms']);
                    } else {
                        // Handle query error
                        echo "Error executing query: " . mysqli_error($db);
                        $availablerooms = 0; // Set the available room count to 0 for clarity
                    }
                    // Disable the book now button of single room only if available room count is 0
                    if ($availablerooms <= 0) {
                        // Disable the button
                        echo '<p class="mt-[-12px] text-right text-[12px] text-green-600 px-1 font-semibold animate-pulse">Available: <span id="available-room-count" class="font-medium">' . $availablerooms . '</span></p>';
                        echo '<div class="flex justify-between mt-[12px]">
                        <button class=" view-details-button-single border-2 rounded-md pr-[12px] pl-[12px] pt-[4px] pb-[4px] border-orange-400 hover:border-orange-500 text-orange-500 hover:text-orange-600 hover:shadow-md text-[14px] font-semibold">View Details</button>
                        <button id="book-now-button" class=" cursor-not-allowed book-now-button bg-blue-300 hover:bg-blue-400 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold hover:shadow-md" data-room-type="Single" disabled="disabled">Room Full</button>
                    </div>';
                    } else {
                        // Enable the button
                        echo '<p class=" mt-[-12px] text-right text-[12px] text-green-600 px-1 font-semibold animate-pulse">Available: <span id="available-room-count" class="font-medium">' . $availablerooms . '</span></p>';
                        echo '<div class="flex justify-between mt-[12px]">
                        <button class=" view-details-button-single border-2 rounded-md pr-[12px] pl-[12px] pt-[4px] pb-[4px] border-orange-400 hover:border-orange-500 text-orange-500 hover:text-orange-600 hover:shadow-md text-[14px] font-semibold">View Details</button>
                        <button id="book-now-button" class=" book-now-button bg-blue-500 hover:bg-blue-600 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold hover:shadow-md" data-room-type="Single">Book now</button>
                    </div>';
                    }
                    echo '</div>';
                    /* Single room ends */

                    /* Double room starts */
                    echo '<div class=" bg-gray-100 relative w-[240px] h-[314px] rounded-lg shadow-lg p-2 z-0">';
                    echo '<img src="Images/rooms/double.jpg" alt="image" class=" w-full h-[174px] rounded-md">';
                    echo '<div class=" flex justify-between items-center px-1 mt-2">';
                    echo '<p class=" text-start font-semibold text-[15px]">Double Room</p>';
                    echo '<div class=" font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[2px] rounded-md">₹2,200</div>';
                    echo '</div>';
                    echo '<div class=" flex items-center justify-start space-x-2 px-1 mt-4">
                    <div class="text-[13px] font-medium">(4.5)</div>
                    <div class=" flex items-center justify-start gap-x-1">
                    <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                    <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                    <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                    <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                    <img src="icons/rating.png" alt="ratings" class="w-[15px] h-[15px]">
                    </div>
                </div>';
                    $sql = "SELECT availablerooms FROM adminrooms WHERE id = 2";
                    $result = mysqli_query($con, $sql);
                    // Check if the query was successful
                    if ($result) {
                        // Fetch the result as an associative array
                        $row = mysqli_fetch_assoc($result);
                        // Get the available room count of double room
                        $availablerooms = intval($row['availablerooms']);
                    } else {
                        // Handle query error
                        echo "Error executing query: " . mysqli_error($db);
                        $availablerooms = 0; // Set the available room count to 0 for clarity
                    }
                    // Disable the book now button of double room only if available room count is 0
                    if ($availablerooms <= 0) {
                        // Disable the button
                        echo '<p class=" mt-[-12px] text-right text-[12px] text-green-600 px-1 font-semibold animate-pulse">Available: <span id="available-room-count" class="font-medium">' . $availablerooms . '</span></p>';
                        echo '<div class="flex justify-between mt-[12px]">
                        <button class=" view-details-button-double border-2 rounded-md pr-[12px] pl-[12px] pt-[4px] pb-[4px] border-orange-400 hover:border-orange-500 text-orange-500 hover:text-orange-600 hover:shadow-md text-[14px] font-semibold">View Details</button>
                        <button id="book-now-button" class=" cursor-not-allowed book-now-button bg-blue-300 hover:bg-blue-400 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold hover:shadow-md" data-room-type="Double" disabled="disabled">Room Full</button>
                    </div>';
                    } else {
                        // Enable the button
                        echo '<p class=" mt-[-12px] text-right text-[12px] text-green-600 px-1 font-semibold animate-pulse">Available: <span id="available-room-count" class="font-medium">' . $availablerooms . '</span></p>';
                        echo '<div class="flex justify-between mt-[12px]">
                        <button class=" view-details-button-double border-2 rounded-md pr-[12px] pl-[12px] pt-[4px] pb-[4px] border-orange-400 hover:border-orange-500 text-orange-500 hover:text-orange-600 hover:shadow-md text-[14px] font-semibold">View Details</button>
                        <button id="book-now-button" class=" book-now-button bg-blue-500 hover:bg-blue-600 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold hover:shadow-md" data-room-type="Double">Book now</button>
                    </div>';
                    }
                    echo '</div>';
                    /* Double room ends */
                    /* Triple room starts */
                    echo '<div class=" bg-gray-100 relative w-[240px] h-[314px] rounded-lg shadow-lg p-2 z-0">';
                    echo '<img src="Images/rooms/triple.jpg" alt="image" class=" w-full h-[174px] rounded-md">';
                    echo '<div class=" flex justify-between items-center px-1 mt-2">';
                    echo '<p class=" text-start font-semibold text-[15px]">Triple Room</p>';
                    echo '<div class=" font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[2px] rounded-md">₹4,400</div>';
                    echo '</div>';
                    echo '<div class=" flex items-center justify-start space-x-2 px-1 mt-4">
                    <div class="text-[13px] font-medium">(4.5)</div>
                    <div class=" flex items-center justify-start gap-x-1">
                    <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                    <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                    <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                    <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                    <img src="icons/rating.png" alt="ratings" class="w-[15px] h-[15px]">
                    </div>
                </div>';
                    $sql = "SELECT availablerooms FROM adminrooms WHERE id = 3";
                    $result = mysqli_query($con, $sql);
                    // Check if the query was successful
                    if ($result) {
                        // Fetch the result as an associative array
                        $row = mysqli_fetch_assoc($result);
                        // Get the available room count of triple room
                        $availablerooms = intval($row['availablerooms']);
                    } else {
                        // Handle query error
                        echo "Error executing query: " . mysqli_error($db);
                        $availablerooms = 0; // Set the available room count to 0 for clarity
                    }
                    // Disable the book now button of triple room only if available room count is 0
                    if ($availablerooms <= 0) {
                        // Disable the button
                        echo '<p class=" mt-[-12px] text-right text-[12px] text-green-600 px-1 font-semibold animate-pulse">Available: <span id="available-room-count" class="font-medium">' . $availablerooms . '</span></p>';
                        echo '<div class="flex justify-between mt-[12px]">
                        <button class=" view-details-button-triple border-2 rounded-md pr-[12px] pl-[12px] pt-[4px] pb-[4px] border-orange-400 hover:border-orange-500 text-orange-500 hover:text-orange-600 hover:shadow-md text-[14px] font-semibold">View Details</button>
                        <button id="book-now-button" class=" cursor-not-allowed book-now-button bg-blue-300 hover:bg-blue-400 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold hover:shadow-md" data-room-type="Triple" disabled="disabled">Room Full</button>
                    </div>';
                    } else {
                        // Enable the button
                        echo '<p class=" mt-[-12px] text-right text-[12px] text-green-600 px-1 font-semibold animate-pulse">Available: <span id="available-room-count" class="font-medium">' . $availablerooms . '</span></p>';
                        echo '<div class="flex justify-between mt-[12px]">
                        <button class=" view-details-button-triple border-2 rounded-md pr-[12px] pl-[12px] pt-[4px] pb-[4px] border-orange-400 hover:border-orange-500 text-orange-500 hover:text-orange-600 hover:shadow-md text-[14px] font-semibold">View Details</button>
                        <button id="book-now-button" class=" book-now-button bg-blue-500 hover:bg-blue-600 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold hover:shadow-md" data-room-type="Triple">Book now</button>
                    </div>';
                    }
                    /* Triple room ends */
                    // Close the database connection
                    echo '</div>';
                    /* Quad room starts */
                    echo '<div class=" bg-gray-100 relative w-[240px] h-[314px] rounded-lg shadow-lg p-2 z-0">';
                    echo '<img src="Images/rooms/quad.jpg" alt="image" class=" w-full h-[174px] rounded-md">';
                    echo '<div class=" flex justify-between items-center px-1 mt-2">';
                    echo '<p class=" text-start font-semibold text-[15px]">Quad Room</p>';
                    echo '<div class=" font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[2px] rounded-md">₹6,000</div>';
                    echo '</div>';
                    echo '<div class=" flex items-center justify-start space-x-2 px-1 mt-4">
                    <div class="text-[13px] font-medium">(4.5)</div>
                    <div class=" flex items-center justify-start gap-x-1">
                    <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                    <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                    <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                    <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                    <img src="icons/rating.png" alt="ratings" class="w-[15px] h-[15px]">
                    </div>
                </div>';
                    $sql = "SELECT availablerooms FROM adminrooms WHERE id = 4";
                    $result = mysqli_query($con, $sql);
                    // Check if the query was successful
                    if ($result) {
                        // Fetch the result as an associative array
                        $row = mysqli_fetch_assoc($result);
                        // Get the available room count of quad room
                        $availablerooms = intval($row['availablerooms']);
                    } else {
                        // Handle query error
                        echo "Error executing query: " . mysqli_error($db);
                        $availablerooms = 0; // Set the available room count to 0 for clarity
                    }
                    // Disable the book now button of quad room only if available room count is 0
                    if ($availablerooms <= 0) {
                        // Disable the button
                        echo '<p class=" mt-[-12px] text-right text-[12px] text-green-600 px-1 font-semibold animate-pulse">Available: <span id="available-room-count" class="font-medium">' . $availablerooms . '</span></p>';
                        echo '<div class="flex justify-between mt-[12px]">
                        <button class=" view-details-button-quad border-2 rounded-md pr-[12px] pl-[12px] pt-[4px] pb-[4px] border-orange-400 hover:border-orange-500 text-orange-500 hover:text-orange-600 hover:shadow-md text-[14px] font-semibold">View Details</button>
                        <button id="book-now-button" class=" cursor-not-allowed book-now-button bg-blue-300 hover:bg-blue-400 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold hover:shadow-md" data-room-type="Quad" disabled="disabled">Room Full</button>
                    </div>';
                    } else {
                        // Enable the button
                        echo '<p class=" mt-[-12px] text-right text-[12px] text-green-600 px-1 font-semibold animate-pulse">Available: <span id="available-room-count" class="font-medium">' . $availablerooms . '</span></p>';
                        echo '<div class="flex justify-between mt-[12px]">
                        <button class=" view-details-button-quad border-2 rounded-md pr-[12px] pl-[12px] pt-[4px] pb-[4px] border-orange-400 hover:border-orange-500 text-orange-500 hover:text-orange-600 hover:shadow-md text-[14px] font-semibold">View Details</button>
                        <button id="book-now-button" class=" book-now-button bg-blue-500 hover:bg-blue-600 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold hover:shadow-md" data-room-type="Quad">Book now</button>
                    </div>';
                    }
                    echo '</div>';
                    /* Quad rooms end */

                    /* Family room starts */
                    echo '<div class=" bg-gray-100 relative w-[240px] h-[314px] rounded-lg shadow-lg p-2 z-0">';
                    echo '<img src="Images/rooms/family.jpg" alt="image" class=" w-full h-[174px] rounded-md">';
                    echo '<div class=" flex justify-between items-center px-1 mt-2">';
                    echo '<p class=" text-start font-semibold text-[15px]">Family Room</p>';
                    echo '<div class=" font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[2px] rounded-md">₹8,500</div>';
                    echo '</div>';
                    echo '<div class=" flex items-center justify-start space-x-2 px-1 mt-4">
                    <div class="text-[13px] font-medium">(4.5)</div>
                    <div class=" flex items-center justify-start gap-x-1">
                    <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                    <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                    <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                    <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                    <img src="icons/rating.png" alt="ratings" class="w-[15px] h-[15px]">
                    </div>
                </div>';
                    $sql = "SELECT availablerooms FROM adminrooms WHERE id = 5";
                    $result = mysqli_query($con, $sql);
                    // Check if the query was successful
                    if ($result) {
                        // Fetch the result as an associative array
                        $row = mysqli_fetch_assoc($result);
                        // Get the available room count of family room
                        $availablerooms = intval($row['availablerooms']);
                    } else {
                        // Handle query error
                        echo "Error executing query: " . mysqli_error($db);
                        $availablerooms = 0; // Set the available room count to 0 for clarity
                    }
                    // Disable the book now button of family room only if available room count is 0
                    if ($availablerooms <= 0) {
                        // Disable the button
                        echo '<p class=" mt-[-12px] text-right text-[12px] text-green-600 px-1 font-semibold animate-pulse">Available: <span id="available-room-count" class="font-medium">' . $availablerooms . '</span></p>';
                        echo '<div class="flex justify-between mt-[12px]">
                        <button class=" view-details-button-family border-2 rounded-md pr-[12px] pl-[12px] pt-[4px] pb-[4px] border-orange-400 hover:border-orange-500 text-orange-500 hover:text-orange-600 hover:shadow-md text-[14px] font-semibold">View Details</button>
                        <button id="book-now-button" class=" cursor-not-allowed book-now-button bg-blue-300 hover:bg-blue-400 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold hover:shadow-md" data-room-type="Family" disabled="disabled">Room Full</button>
                    </div>';
                    } else {
                        // Enable the button
                        echo '<p class=" mt-[-12px] text-right text-[12px] text-green-600 px-1 font-semibold animate-pulse">Available: <span id="available-room-count" class="font-medium">' . $availablerooms . '</span></p>';
                        echo '<div class="flex justify-between mt-[12px]">
                        <button class=" view-details-button-family border-2 rounded-md pr-[12px] pl-[12px] pt-[4px] pb-[4px] border-orange-400 hover:border-orange-500 text-orange-500 hover:text-orange-600 hover:shadow-md text-[14px] font-semibold">View Details</button>
                        <button id="book-now-button" class=" book-now-button bg-blue-500 hover:bg-blue-600 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold hover:shadow-md" data-room-type="Family">Book now</button>
                    </div>';
                    }
                    echo '</div>';
                    /* Family room ends */
                    /* King room starts */
                    echo '<div class=" bg-gray-100 relative w-[240px] h-[314px] rounded-lg shadow-lg p-2 z-0">';
                    echo '<img src="Images/rooms/king.jpg" alt="image" class=" w-full h-[174px] rounded-md">';
                    echo '<div class=" flex justify-between items-center px-1 mt-2">';
                    echo '<p class=" text-start font-semibold text-[15px]">King Room</p>';
                    echo '<div class=" font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[2px] rounded-md">₹2,400</div>';
                    echo '</div>';
                    echo '<div class=" flex items-center justify-start space-x-2 px-1 mt-4">
                    <div class="text-[13px] font-medium">(4.5)</div>
                    <div class=" flex items-center justify-start gap-x-1">
                    <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                    <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                    <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                    <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                    <img src="icons/rating.png" alt="ratings" class="w-[15px] h-[15px]">
                    </div>
                </div>';
                    $sql = "SELECT availablerooms FROM adminrooms WHERE id = 6";
                    $result = mysqli_query($con, $sql);
                    // Check if the query was successful
                    if ($result) {
                        // Fetch the result as an associative array
                        $row = mysqli_fetch_assoc($result);
                        // Get the available room count of king room
                        $availablerooms = intval($row['availablerooms']);
                    } else {
                        // Handle query error
                        echo "Error executing query: " . mysqli_error($db);
                        $availablerooms = 0; // Set the available room count to 0 for clarity
                    }
                    // Disable the book now button of king room only if available room count is 0
                    if ($availablerooms <= 0) {
                        // Disable the button
                        echo '<p class=" mt-[-12px] text-right text-[12px] text-green-600 px-1 font-semibold animate-pulse">Available: <span id="available-room-count" class="font-medium">' . $availablerooms . '</span></p>';
                        echo '<div class="flex justify-between mt-[12px]">
                        <button class=" view-details-button-king border-2 rounded-md pr-[12px] pl-[12px] pt-[4px] pb-[4px] border-orange-400 hover:border-orange-500 text-orange-500 hover:text-orange-600 hover:shadow-md text-[14px] font-semibold">View Details</button>
                        <button id="book-now-button" class=" cursor-not-allowed book-now-button bg-blue-300 hover:bg-blue-400 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold hover:shadow-md" data-room-type="King" disabled="disabled">Room Full</button>
                    </div>';
                    } else {
                        // Enable the button
                        echo '<p class=" mt-[-12px] text-right text-[12px] text-green-600 px-1 font-semibold animate-pulse">Available: <span id="available-room-count" class="font-medium">' . $availablerooms . '</span></p>';
                        echo '<div class="flex justify-between mt-[12px]">
                        <button class=" view-details-button-king border-2 rounded-md pr-[12px] pl-[12px] pt-[4px] pb-[4px] border-orange-400 hover:border-orange-500 text-orange-500 hover:text-orange-600 hover:shadow-md text-[14px] font-semibold">View Details</button>
                        <button id="book-now-button" class=" book-now-button bg-blue-500 hover:bg-blue-600 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold hover:shadow-md" data-room-type="King">Book now</button>
                    </div>';
                    }
                    echo '</div>';

                    /* King room starts */
                    /* Queen room starts  */
                    echo '<div class=" bg-gray-100 relative w-[240px] h-[314px] rounded-lg shadow-lg p-2 z-0">';
                    echo '<img src="Images/rooms/queen.jpg" alt="image" class=" w-full h-[174px] rounded-md">';
                    echo '<div class=" flex justify-between items-center px-1 mt-2">';
                    echo '<p class=" text-start font-semibold text-[15px]">Queen Room</p>';
                    echo '<div class=" font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[2px] rounded-md">₹2,600</div>';
                    echo '</div>';
                    echo '<div class=" flex items-center justify-start space-x-2 px-1 mt-4">
                    <div class="text-[13px] font-medium">(4.5)</div>
                    <div class=" flex items-center justify-start gap-x-1">
                    <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                    <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                    <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                    <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                    <img src="icons/rating.png" alt="ratings" class="w-[15px] h-[15px]">
                    </div>
                </div>';
                    $sql = "SELECT availablerooms FROM adminrooms WHERE id = 7";
                    $result = mysqli_query($con, $sql);
                    // Check if the query was successful
                    if ($result) {
                        // Fetch the result as an associative array
                        $row = mysqli_fetch_assoc($result);
                        // Get the available room count of queen room
                        $availablerooms = intval($row['availablerooms']);
                    } else {
                        // Handle query error
                        echo "Error executing query: " . mysqli_error($db);
                        $availablerooms = 0; // Set the available room count to 0 for clarity
                    }
                    // Disable the book now button of queen room only if available room count is 0
                    if ($availablerooms <= 0) {
                        // Disable the button
                        echo '<p class=" mt-[-12px] text-right text-[12px] text-green-600 px-1 font-semibold animate-pulse">Available: <span id="available-room-count" class="font-medium">' . $availablerooms . '</span></p>';
                        echo '<div class="flex justify-between mt-[12px]">
                        <button class=" view-details-button-queen border-2 rounded-md pr-[12px] pl-[12px] pt-[4px] pb-[4px] border-orange-400 hover:border-orange-500 text-orange-500 hover:text-orange-600 hover:shadow-md text-[14px] font-semibold">View Details</button>
                        <button id="book-now-button" class=" cursor-not-allowed book-now-button bg-blue-300 hover:bg-blue-400 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold hover:shadow-md" data-room-type="Queen" disabled="disabled">Room Full</button>
                    </div>';
                    } else {
                        // Enable the button
                        echo '<p class=" mt-[-12px] text-right text-[12px] text-green-600 px-1 font-semibold animate-pulse">Available: <span id="available-room-count" class="font-medium">' . $availablerooms . '</span></p>';
                        echo '<div class="flex justify-between mt-[12px]">
                        <button class=" view-details-button-queen border-2 rounded-md pr-[12px] pl-[12px] pt-[4px] pb-[4px] border-orange-400 hover:border-orange-500 text-orange-500 hover:text-orange-600 hover:shadow-md text-[14px] font-semibold">View Details</button>
                        <button id="book-now-button" class=" book-now-button bg-blue-500 hover:bg-blue-600 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold hover:shadow-md" data-room-type="Queen">Book now</button>
                    </div>';
                    }
                    echo '</div>';

                    /* Queen room ends */
                    /* Guest room starts  */
                    echo '<div class=" bg-gray-100 relative w-[240px] h-[314px] rounded-lg shadow-lg p-2 z-0">';
                    echo '<img src="Images/rooms/guest.jpg" alt="image" class=" w-full h-[174px] rounded-md">';
                    echo '<div class=" flex justify-between items-center px-1 mt-2">';
                    echo '<p class=" text-start font-semibold text-[15px]">Guest Room</p>';
                    echo '<div class=" font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[2px] rounded-md">₹9,700</div>';
                    echo '</div>';
                    echo '<div class=" flex items-center justify-start space-x-2 px-1 mt-4">
                    <div class="text-[13px] font-medium">(4.5)</div>
                    <div class=" flex items-center justify-start gap-x-1">
                    <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                    <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                    <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                    <img src="icons/star.png" alt="ratings" class="w-[15px] h-[15px]">
                    <img src="icons/rating.png" alt="ratings" class="w-[15px] h-[15px]">
                    </div>
                </div>';
                    $sql = "SELECT availablerooms FROM adminrooms WHERE id = 8";
                    $result = mysqli_query($con, $sql);
                    // Check if the query was successful
                    if ($result) {
                        // Fetch the result as an associative array
                        $row = mysqli_fetch_assoc($result);
                        // Get the available room count of guest room
                        $availablerooms = intval($row['availablerooms']);
                    } else {
                        // Handle query error
                        echo "Error executing query: " . mysqli_error($db);
                        $availablerooms = 0; // Set the available room count to 0 for clarity
                    }
                    // Disable the book now button of guest room only if available room count is 0
                    if ($availablerooms <= 0) {
                        // Disable the button
                        echo '<p class=" mt-[-12px] text-right text-[12px] text-green-600 px-1 font-semibold animate-pulse">Available: <span id="available-room-count" class="font-medium">' . $availablerooms . '</span></p>';
                        echo '<div class="flex justify-between mt-[12px]">';
                        echo '<button class=" view-details-button-guest border-2 rounded-md pr-[12px] pl-[12px] pt-[4px] pb-[4px] border-orange-400 hover:border-orange-500 text-orange-500 hover:text-orange-600 hover:shadow-md text-[14px] font-semibold">View Details</button>';
                        echo '<button id="book-now-button" class=" cursor-not-allowed book-now-button bg-blue-300 hover:bg-blue-400 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold hover:shadow-md" data-room-type="Guest" disabled="disabled">Room Full</button>';
                        echo '</div>';
                    } else {
                        // Enable the button
                        echo '<p class=" mt-[-12px] text-right text-[12px] text-green-600 px-1 font-semibold animate-pulse">Available: <span id="available-room-count" class="font-medium">' . $availablerooms . '</span></p>';
                        echo '<div class="flex justify-between mt-[12px]">';
                        echo '<button class=" view-details-button-guest border-2 rounded-md pr-[12px] pl-[12px] pt-[4px] pb-[4px] border-orange-400 hover:border-orange-500 text-orange-500 hover:text-orange-600 hover:shadow-md text-[14px] font-semibold">View Details</button>';
                        echo '<button id="book-now-button" class=" book-now-button bg-blue-500 hover:bg-blue-600 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold hover:shadow-md" data-room-type="Guest">Book now</button>';
                        echo '</div>';
                    }
                    echo '</div>';
                    mysqli_close($con);
                    ?>
                    <!-- Guest room ends -->
                </div>
            </div>
        </div>
        <!-- View Details of Single Rooms -->
        <!-- View Details Popup -->
        <div class="view-details-container-single inset-0 fixed hidden top-0 w-full h-[800px] bg-black bg-opacity-50 z-50">
            <div class=" relative modal-content bg-white mx-auto mt-16 p-[40px] rounded-md w-[1000px] h-[660px]">
                <p class=" sticky bg-white absolute text-[24px] font-semibold z-10">Single Room</p>
                <button class=" absolute text-white bg-red-500 hover:bg-red-600 px-[10px] pb-1 rounded-md top-[10px] right-[10px] z-20 text-xl" id="closePopupSingle">×</button>
                <div class=" mt-4 absolute w-[960px] h-[540px] overflow-y-scroll overflow-x-hidden text-left text-wrap cursor-default"><!-- select-none to prevent text selection -->
                    <div class=" flex space-x-6">
                        <div class="">
                            <img src="images/rooms/single.jpg" alt="room1" class="w-[400px] h-[300px] rounded-md">
                            <div class=" flex items-center justify-center space-x-10 w-[400px] h-auto border-2 border-gray-200 rounded-lg p-4 mt-6">
                                <div class="flex items-center space-x-2">
                                    <img src="icons/roomsize.png" alt="roomsize" class="w-[24px] h-[24px]">
                                    <p class="text-gray-500 text-[13px] font-semibold">180 sq.ft</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <img src="icons/bad.png" alt="bed" class="w-[24px] h-[24px]">
                                    <p class="text-gray-500 text-[13px] font-semibold">Single Bed</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <img src="icons/profile.png" alt="guest" class="w-[24px] h-[24px]">
                                    <p class="text-gray-500 text-[13px] font-semibold">Max 1 Guest</p>
                                </div>
                            </div>
                        </div>
                        <div class="pr-6 text-wrap">
                            <p class="text-black text-[16px] font-bold mt-[-6px] pb-1">About room</p>
                            <p class="text-gray-500 text-[14px] font-normal">This comfortable single room offers 180 square feet of space, perfect for solo travelers. It features a single bed that can accommodate one guest comfortably. Stay connected with free Wi-Fi and enjoy air conditioning for a pleasant stay. We provide 24-hour room service for your convenience and daily housekeeping to keep your room fresh.
                            The room is equipped with essential amenities like charging points, hangers, reading lamps, a telephone, a digital clock, a mirror, and a dustbin.For a restful sleep, a single bed with a blanket and pillow is provided. Your safety and security are our priority. The room features digital locks, a fire extinguisher, and an emergency alarm. The private bathroom includes a water heater, shower, shaving mirror, dustbin, and a western toilet.</p>
                        </div>
                    </div>
                    <p class="text-black text-[16px] font-bold mt-4">Amenites</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Free Wi-Fi</li>
                        <li class=" text-[14px] font-normal">Air conditioning</li>
                        <li class=" text-[14px] font-normal">24-hours room service</li>
                        <li class=" text-[14px] font-normal">Daily Housekeeping</li>
                        <li class=" text-[14px] font-normal">Mineral water</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Room Features</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Charging points</li>
                        <li class=" text-[14px] font-normal">Hanger</li>
                        <li class=" text-[14px] font-normal">Reading lamps</li>
                        <li class=" text-[14px] font-normal">Telephone</li>
                        <li class=" text-[14px] font-normal">Digital clock</li>
                        <li class=" text-[14px] font-normal">Mirror</li>
                        <li class=" text-[14px] font-normal">Dustbin</li>
                        <li class=" text-[14px] font-normal">Dustbin</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Media and Entertainment</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Music System</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Bed and Blanket</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Single bed</li>
                        <li class=" text-[14px] font-normal">Blanket</li>
                        <li class=" text-[14px] font-normal">Pillow</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Safety and Security</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Digital Locks</li>
                        <li class=" text-[14px] font-normal">Fire Extinguisher</li>
                        <li class=" text-[14px] font-normal">Emergency alarm</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Bathroom</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Water heater</li>
                        <li class=" text-[14px] font-normal">Shower</li>
                        <li class=" text-[14px] font-normal">Shaving mirror</li>
                        <li class=" text-[14px] font-normal">Dustbin</li>
                        <li class=" text-[14px] font-normal">Western Toilet</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- View Details of Double Rooms -->
        <div class="view-details-container-double inset-0 hidden fixed top-0 w-full h-[800px] bg-black bg-opacity-50 z-50">
            <div class=" relative modal-content bg-white mx-auto mt-16 p-[40px] rounded-md w-[1000px] h-[660px]">
                <p class=" sticky bg-white absolute text-[24px] font-semibold z-10">Double Room</p>
                <button class=" absolute text-white bg-red-500 hover:bg-red-600 px-[10px] pb-1 rounded-md top-[10px] right-[10px] z-20 text-xl" id="closePopupDouble">×</button>
                <div class=" mt-4 absolute w-[960px] h-[540px] overflow-y-scroll overflow-x-hidden text-left text-wrap cursor-default"><!-- select-none to prevent text selection -->
                    <div class=" flex space-x-6">
                        <div class="">
                            <img src="images/rooms/double.jpg" alt="room1" class="w-[400px] h-[300px] rounded-md">
                            <div class=" flex items-center justify-center space-x-10 w-[400px] h-auto border-2 border-gray-200 rounded-lg p-4 mt-6">
                                <div class="flex items-center space-x-2">
                                    <img src="icons/roomsize.png" alt="roomsize" class="w-[24px] h-[24px]">
                                    <p class="text-gray-500 text-[13px] font-semibold">240 sq.ft</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <img src="icons/bad.png" alt="bed" class="w-[24px] h-[24px]">
                                    <p class="text-gray-500 text-[13px] font-semibold">2 Beds</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <img src="icons/profile.png" alt="guest" class="w-[24px] h-[24px]">
                                    <p class="text-gray-500 text-[13px] font-semibold">Max 3 Guest</p>
                                </div>
                            </div>
                        </div>
                        <div class="pr-6 text-wrap">
                            <p class="text-black text-[16px] font-bold mt-[-6px] pb-1">About room</p>
                            <p class="text-gray-500 text-[14px] font-normal">This double room offers 240 square feet of space, ideal for couples or small families. It features two comfortable double beds that can accommodate up to three guests. Stay connected with free Wi-Fi and enjoy air conditioning for a comfortable stay. We provide 24-hour room service for your convenience and daily housekeeping to keep your room fresh. Additionally, laundry service is available for your needs. The room is equipped with essential amenities like charging points, reading lamps, a telephone, a digital clock, a mirror, hangers, and a dustbin. Enjoy with the in-room TV and music system. For a restful sleep, two double beds with blankets and pillows are provided. Your safety and security are our priority. The room features digital locks, a fire extinguisher, and an emergency alarm. The private bathroom includes a water heater, shower, dustbin, and a western toilet.</p>
                        </div>
                    </div>
                    <p class="text-black text-[16px] font-bold mt-4">Amenites</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Free Wi-Fi</li>
                        <li class=" text-[14px] font-normal">24-hours room service</li>
                        <li class=" text-[14px] font-normal">Daily Housekeeping</li>
                        <li class=" text-[14px] font-normal">Air conditioning</li>
                        <li class=" text-[14px] font-normal">Mineral water</li>
                        <li class=" text-[14px] font-normal">Laundry service</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Room Features</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Charging points</li>
                        <li class=" text-[14px] font-normal">Reading lamps</li>
                        <li class=" text-[14px] font-normal">Telephone</li>
                        <li class=" text-[14px] font-normal">Digital clock</li>
                        <li class=" text-[14px] font-normal">Mirror</li>
                        <li class=" text-[14px] font-normal">Dustbin</li>
                        <li class=" text-[14px] font-normal">Hanger</li>
                        <li class=" text-[14px] font-normal">Dustbin</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Media and Entertainment</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">TV</li>
                        <li class=" text-[14px] font-normal">Music System</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Bed and Blanket</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Double beds</li>
                        <li class=" text-[14px] font-normal">Blankets</li>
                        <li class=" text-[14px] font-normal">Pillows</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Safety and Security</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Digital Locks</li>
                        <li class=" text-[14px] font-normal">Fire Extinguisher</li>
                        <li class=" text-[14px] font-normal">Emergency alarm</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Bathroom</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Water heater</li>
                        <li class=" text-[14px] font-normal">Shower</li>
                        <li class=" text-[14px] font-normal">Dustbin</li>
                        <li class=" text-[14px] font-normal">Western Toilet</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- View Details of Triple Rooms -->
        <div class="view-details-container-triple inset-0 hidden fixed top-0 w-full h-[800px] bg-black bg-opacity-50 z-50">
            <div class=" relative modal-content bg-white mx-auto mt-16 p-[40px] rounded-md w-[1000px] h-[660px]">
                <p class=" sticky bg-white absolute text-[24px] font-semibold z-10">Triple Room</p>
                <button class=" absolute text-white bg-red-500 hover:bg-red-600 px-[10px] pb-1 rounded-md top-[10px] right-[10px] z-20 text-xl" id="closePopupTriple">×</button>
                <div class=" mt-4 absolute w-[960px] h-[540px] overflow-y-scroll overflow-x-hidden text-left text-wrap cursor-default"><!-- select-none to prevent text selection -->
                    <div class=" flex space-x-6">
                        <div class="">
                            <img src="images/rooms/triple.jpg" alt="room1" class="w-[400px] h-[300px] rounded-md">
                            <div class=" flex items-center justify-center space-x-10 w-[400px] h-auto border-2 border-gray-200 rounded-lg p-4 mt-6">
                                <div class="flex items-center space-x-2">
                                    <img src="icons/roomsize.png" alt="roomsize" class="w-[24px] h-[24px]">
                                    <p class="text-gray-500 text-[13px] font-semibold">280 sq.ft</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <img src="icons/bad.png" alt="bed" class="w-[24px] h-[24px]">
                                    <p class="text-gray-500 text-[13px] font-semibold">3 Beds</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <img src="icons/profile.png" alt="guest" class="w-[24px] h-[24px]">
                                    <p class="text-gray-500 text-[13px] font-semibold">Max 5 Guest</p>
                                </div>
                            </div>
                        </div>
                        <div class="pr-6 text-wrap">
                            <p class="text-black text-[16px] font-bold mt-[-6px] pb-1">About room</p>
                            <p class="text-gray-500 text-[14px] font-normal">This triple room offers space of 280 square feet, perfect for groups or families of up to five guests. It features three comfortable beds that can accommodate your entire party. Stay connected with free Wi-Fi and enjoy air conditioning for a pleasant stay. We provide 24-hour room service for your convenience and daily housekeeping to keep your room fresh. Additionally, laundry service is available for your needs.The room is equipped with essential amenities like charging points, hangers, a telephone, a work desk for productivity, reading lamps, a digital clock, a mirror, and a dustbin. Enjoy with the in-room TV and music system. For a restful sleep, three beds with blankets and pillows are provided. Your safety and security are our priority. The room features digital locks, a fire extinguisher, and an emergency alarm. The private bathroom includes a water heater, shower, shaving mirror, dustbin, and a western toilet.</p>
                        </div>
                    </div>
                    <p class="text-black text-[16px] font-bold mt-4">Amenites</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Free Wi-Fi</li>
                        <li class=" text-[14px] font-normal">24-hours room service</li>
                        <li class=" text-[14px] font-normal">Daily Housekeeping</li>
                        <li class=" text-[14px] font-normal">Air conditioning</li>
                        <li class=" text-[14px] font-normal">Mineral water</li>
                        <li class=" text-[14px] font-normal">Laundry service</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Room Features</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Charging points</li>
                        <li class=" text-[14px] font-normal">Hanger</li>
                        <li class=" text-[14px] font-normal">Telephone</li>
                        <li class=" text-[14px] font-normal">Work desk</li>
                        <li class=" text-[14px] font-normal">Reading lamps</li>
                        <li class=" text-[14px] font-normal">Digital clock</li>
                        <li class=" text-[14px] font-normal">Mirror</li>
                        <li class=" text-[14px] font-normal">Dustbin</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Media and Entertainment</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">TV</li>
                        <li class=" text-[14px] font-normal">Music System</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Bed and Blanket</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Three beds</li>
                        <li class=" text-[14px] font-normal">Blankets</li>
                        <li class=" text-[14px] font-normal">Pillows</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Safety and Security</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Digital Locks</li>
                        <li class=" text-[14px] font-normal">Fire Extinguisher</li>
                        <li class=" text-[14px] font-normal">Emergency alarm</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Bathroom</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Water heater</li>
                        <li class=" text-[14px] font-normal">Shower</li>
                        <li class=" text-[14px] font-normal">Shaving mirror</li>
                        <li class=" text-[14px] font-normal">Dustbin</li>
                        <li class=" text-[14px] font-normal">Western Toilet</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- View Details of Quad Rooms -->
        <div class="view-details-container-quad inset-0 hidden fixed top-0 w-full h-[800px] bg-black bg-opacity-50 z-50">
            <div class=" relative modal-content bg-white mx-auto mt-16 p-[40px] rounded-md w-[1000px] h-[660px]">
                <p class=" sticky bg-white absolute text-[24px] font-semibold z-10">Quad Room</p>
                <button class=" absolute text-white bg-red-500 hover:bg-red-600 px-[10px] pb-1 rounded-md top-[10px] right-[10px] z-20 text-xl" id="closePopupQuad">×</button>
                <div class=" mt-4 absolute w-[960px] h-[540px] overflow-y-scroll overflow-x-hidden text-left text-wrap cursor-default"><!-- select-none to prevent text selection -->
                    <div class=" flex space-x-6">
                        <div class="">
                            <img src="images/rooms/quad.jpg" alt="room1" class="w-[400px] h-[300px] rounded-md">
                            <div class=" flex items-center justify-center space-x-10 w-[400px] h-auto border-2 border-gray-200 rounded-lg p-4 mt-6">
                                <div class="flex items-center space-x-2">
                                    <img src="icons/roomsize.png" alt="roomsize" class="w-[24px] h-[24px]">
                                    <p class="text-gray-500 text-[13px] font-semibold">310 sq.ft</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <img src="icons/bad.png" alt="bed" class="w-[24px] h-[24px]">
                                    <p class="text-gray-500 text-[13px] font-semibold">4 Beds</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <img src="icons/profile.png" alt="guest" class="w-[24px] h-[24px]">
                                    <p class="text-gray-500 text-[13px] font-semibold">Max 6 Guest</p>
                                </div>
                            </div>
                        </div>
                        <div class="pr-6 text-wrap">
                            <p class="text-black text-[16px] font-bold mt-[-6px] pb-1">About the room</p>
                            <p class="text-gray-500 text-[14px] font-normal">This quad room offers 310 square feet of space, perfect for larger groups or families of up to six guests. It features four comfortable beds, providing ample sleeping arrangements for everyone. Stay connected with free Wi-Fi and enjoy air conditioning for a comfortable stay. We provide 24-hour room service for your convenience and daily housekeeping to keep your room fresh. Additionally, laundry service is available for your needs. The room is equipped with essential amenities like charging points, hangers, a telephone, a work desk for productivity, reading lamps, a digital clock, a mirror, and a dustbin. Enjoy with the in-room TV and music system. For a restful sleep, four beds with blankets and pillows are provided. Your safety and security are our priority. The room features digital locks, a fire extinguisher, and an emergency alarm. The private bathroom includes a water heater, shower, shaving mirror, dustbin, and a western toilet.</p>
                        </div>
                    </div>
                    <p class="text-black text-[16px] font-bold mt-4">Amenites</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Free Wi-Fi</li>
                        <li class=" text-[14px] font-normal">24-hours room service</li>
                        <li class=" text-[14px] font-normal">Daily Housekeeping</li>
                        <li class=" text-[14px] font-normal">Air conditioning</li>
                        <li class=" text-[14px] font-normal">Mineral water</li>
                        <li class=" text-[14px] font-normal">Laundry service</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Room Features</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Charging points</li>
                        <li class=" text-[14px] font-normal">Hanger</li>
                        <li class=" text-[14px] font-normal">Telephone</li>
                        <li class=" text-[14px] font-normal">Work desk</li>
                        <li class=" text-[14px] font-normal">Reading lamps</li>
                        <li class=" text-[14px] font-normal">Digital clock</li>
                        <li class=" text-[14px] font-normal">Mirror</li>
                        <li class=" text-[14px] font-normal">Dustbin</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Media and Entertainment</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">TV</li>
                        <li class=" text-[14px] font-normal">Music System</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Bed and Blanket</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Four beds</li>
                        <li class=" text-[14px] font-normal">Blankets</li>
                        <li class=" text-[14px] font-normal">Pillows</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Safety and Security</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Digital Locks</li>
                        <li class=" text-[14px] font-normal">Fire Extinguisher</li>
                        <li class=" text-[14px] font-normal">Emergency alarm</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Bathroom</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Water heater</li>
                        <li class=" text-[14px] font-normal">Shower</li>
                        <li class=" text-[14px] font-normal">Shaving mirror</li>
                        <li class=" text-[14px] font-normal">Dustbin</li>
                        <li class=" text-[14px] font-normal">Western Toilet</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- View Details of Family Rooms -->
        <div class="view-details-container-family inset-0 hidden fixed top-0 w-full h-[800px] bg-black bg-opacity-50 z-50">
            <div class=" relative modal-content bg-white mx-auto mt-16 p-[40px] rounded-md w-[1000px] h-[660px]">
                <p class=" sticky bg-white absolute text-[24px] font-semibold z-10">Family Room</p>
                <button class=" absolute text-white bg-red-500 hover:bg-red-600 px-[10px] pb-1 rounded-md top-[10px] right-[10px] z-20 text-xl" id="closePopupFamily">×</button>
                <div class=" mt-4 absolute w-[960px] h-[540px] overflow-y-scroll overflow-x-hidden text-left text-wrap cursor-default"><!-- select-none to prevent text selection -->
                    <div class=" flex space-x-6">
                        <div class="">
                            <img src="images/rooms/family.jpg" alt="room1" class="w-[400px] h-[300px] rounded-md">
                            <div class=" flex items-center justify-center space-x-6 w-[400px] h-auto border-2 border-gray-200 rounded-lg p-4 mt-6">
                                <div class="flex items-center space-x-2">
                                    <img src="icons/roomsize.png" alt="roomsize" class="w-[24px] h-[24px]">
                                    <p class="text-gray-500 text-[13px] font-semibold">440 sq.ft</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <img src="icons/bad.png" alt="bed" class="w-[24px] h-[24px]">
                                    <p class="text-gray-500 text-[13px] font-semibold">Family Beds</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <img src="icons/profile.png" alt="guest" class="w-[24px] h-[24px]">
                                    <p class="text-gray-500 text-[13px] font-semibold">Max 8 Guest</p>
                                </div>
                            </div>
                        </div>
                        <div class="pr-6 text-wrap">
                            <p class="text-black text-[16px] font-bold mt-[-6px] pb-1">About room</p>
                            <p class="text-gray-500 text-[14px] font-normal">This expansive(larger) family room boasts a generous 440 square feet, ideal for families or groups of up to eight guests. It features four comfortable family beds, providing ample sleeping space for everyone. Stay connected with free Wi-Fi and enjoy air conditioning for a comfortable stay. We provide 24-hour room service for your convenience and daily housekeeping to keep your room fresh. Additionally, laundry service is available for your needs. The room caters to families with essential amenities like charging points, hangers, a telephone, a work desk for productivity, reading lamps, a digital clock, a mirror, and a dustbin. Enjoy with the in-room TV and music system. For a restful sleep, four family beds with blankets and pillows are provided. Your safety and security are our priority. The room features digital locks, a fire extinguisher, and an emergency alarm. The private bathroom includes a water heater, shower, shaving mirror, dustbin, and a western toilet.</p>
                        </div>
                    </div>
                    <p class="text-black text-[16px] font-bold mt-4">Amenites</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Free Wi-Fi</li>
                        <li class=" text-[14px] font-normal">24-hours room service</li>
                        <li class=" text-[14px] font-normal">Daily Housekeeping</li>
                        <li class=" text-[14px] font-normal">Air conditioning</li>
                        <li class=" text-[14px] font-normal">Mineral water</li>
                        <li class=" text-[14px] font-normal">Laundry service</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Room Features</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Charging points</li>
                        <li class=" text-[14px] font-normal">Hanger</li>
                        <li class=" text-[14px] font-normal">Telephone</li>
                        <li class=" text-[14px] font-normal">Work desk</li>
                        <li class=" text-[14px] font-normal">Reading lamps</li>
                        <li class=" text-[14px] font-normal">Digital clock</li>
                        <li class=" text-[14px] font-normal">Mirror</li>
                        <li class=" text-[14px] font-normal">Dustbin</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Media and Entertainment</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">TV</li>
                        <li class=" text-[14px] font-normal">Music System</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Bed and Blanket</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Fours beds</li>
                        <li class=" text-[14px] font-normal">Blanket</li>
                        <li class=" text-[14px] font-normal">Pillow</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Safety and Security</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Digital Locks</li>
                        <li class=" text-[14px] font-normal">Fire Extinguisher</li>
                        <li class=" text-[14px] font-normal">Emergency alarm</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Bathroom</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Water heater</li>
                        <li class=" text-[14px] font-normal">Shower</li>
                        <li class=" text-[14px] font-normal">Shaving mirror</li>
                        <li class=" text-[14px] font-normal">Dustbin</li>
                        <li class=" text-[14px] font-normal">Western Toilet</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- View Details of King Rooms -->
        <div class="view-details-container-king inset-0 hidden fixed top-0 w-full h-[800px] bg-black bg-opacity-50 z-50">
            <div class=" relative modal-content bg-white mx-auto mt-16 p-[40px] rounded-md w-[1000px] h-[660px]">
                <p class=" sticky bg-white absolute text-[24px] font-semibold z-10">King Room</p>
                <button class=" absolute text-white bg-red-500 hover:bg-red-600 px-[10px] pb-1 rounded-md top-[10px] right-[10px] z-20 text-xl" id="closePopupKing">×</button>
                <div class=" mt-4 absolute w-[960px] h-[540px] overflow-y-scroll overflow-x-hidden text-left text-wrap cursor-default"><!-- select-none to prevent text selection -->
                    <div class=" flex space-x-6">
                        <div class="">
                            <img src="images/rooms/king.jpg" alt="room1" class="w-[400px] h-[300px] rounded-md">
                            <div class=" flex items-center justify-center space-x-4 w-[400px] h-auto border-2 border-gray-200 rounded-lg p-4 mt-6">
                                <div class="flex items-center space-x-2">
                                    <img src="icons/roomsize.png" alt="roomsize" class="w-[24px] h-[24px]">
                                    <p class="text-gray-500 text-[13px] font-semibold">260 sq.ft</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <img src="icons/bad.png" alt="bed" class="w-[24px] h-[24px]">
                                    <p class="text-gray-500 text-[13px] font-semibold">King Size Beds</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <img src="icons/profile.png" alt="guest" class="w-[24px] h-[24px]">
                                    <p class="text-gray-500 text-[13px] font-semibold">Max 3 Guest</p>
                                </div>
                            </div>
                        </div>
                        <div class="pr-6 text-wrap">
                            <p class="text-black text-[16px] font-bold mt-[-6px] pb-1">About room</p>
                            <p class="text-gray-500 text-[14px] font-normal">This luxurious king room offers 260 square feet of space, perfect for couples seeking extra comfort or small groups up to three guests. It features two king-size beds, providing calm sleeping space for a relaxing stay. Stay connected with free Wi-Fi and enjoy air conditioning for a comfortable environment. We provide 24-hour room service for your convenience and daily housekeeping to keep your room fresh. Additionally, laundry service is available for your needs. The room caters to both productivity and relaxation with amenities like charging points, hangers, a work desk, reading lamps for comfortable reading, a telephone, a digital clock, a mirror, and a dustbin. Enjoy with the in-room TV and music system. For a restful sleep, two king-size beds with cozy blankets and pillows are provided. Your safety and security are our priority. The room features digital locks, a fire extinguisher, and an emergency alarm. The private bathroom includes a water heater, shower, shaving mirror, dustbin, and a western toilet.</p>
                        </div>
                    </div>
                    <p class="text-black text-[16px] font-bold mt-4">Amenites</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Free Wi-Fi</li>
                        <li class=" text-[14px] font-normal">24-hours room service</li>
                        <li class=" text-[14px] font-normal">Daily Housekeeping</li>
                        <li class=" text-[14px] font-normal">Air conditioning</li>
                        <li class=" text-[14px] font-normal">Mineral water</li>
                        <li class=" text-[14px] font-normal">Laundry service</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Room Features</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Charging points</li>
                        <li class=" text-[14px] font-normal">Hanger</li>
                        <li class=" text-[14px] font-normal">Work desk</li>
                        <li class=" text-[14px] font-normal">Reading lamps</li>
                        <li class=" text-[14px] font-normal">Telephone</li>
                        <li class=" text-[14px] font-normal">Digital clock</li>
                        <li class=" text-[14px] font-normal">Mirror</li>
                        <li class=" text-[14px] font-normal">Dustbin</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Media and Entertainment</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">TV</li>
                        <li class=" text-[14px] font-normal">Music System</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Bed and Blanket</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">King Size beds</li>
                        <li class=" text-[14px] font-normal">Blankets</li>
                        <li class=" text-[14px] font-normal">Pillows</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Safety and Security</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Digital Locks</li>
                        <li class=" text-[14px] font-normal">Fire Extinguisher</li>
                        <li class=" text-[14px] font-normal">Emergency alarm</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Bathroom</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Water heater</li>
                        <li class=" text-[14px] font-normal">Shower</li>
                        <li class=" text-[14px] font-normal">Shaving mirror</li>
                        <li class=" text-[14px] font-normal">Dustbin</li>
                        <li class=" text-[14px] font-normal">Western Toilet</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- View Details of Queen Rooms -->
        <div class="view-details-container-queen inset-0 hidden fixed top-0 w-full h-[800px] bg-black bg-opacity-50 z-50">
            <div class=" relative modal-content bg-white mx-auto mt-16 p-[40px] rounded-md w-[1000px] h-[660px]">
                <p class=" sticky bg-white absolute text-[24px] font-semibold z-10">Queen Room</p>
                <button class=" absolute text-white bg-red-500 hover:bg-red-600 px-[10px] pb-1 rounded-md top-[10px] right-[10px] z-20 text-xl" id="closePopupQueen">×</button>
                <div class=" mt-4 absolute w-[960px] h-[540px] overflow-y-scroll overflow-x-hidden text-left text-wrap cursor-default"><!-- select-none to prevent text selection -->
                    <div class=" flex space-x-6">
                        <div class="">
                            <img src="images/rooms/queen.jpg" alt="room1" class="w-[400px] h-[300px] rounded-md">
                            <div class=" flex items-center justify-center space-x-4 w-[400px] h-auto border-2 border-gray-200 rounded-lg p-4 mt-6">
                                <div class="flex items-center space-x-2">
                                    <img src="icons/roomsize.png" alt="roomsize" class="w-[24px] h-[24px]">
                                    <p class="text-gray-500 text-[13px] font-semibold">220 sq.ft</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <img src="icons/bad.png" alt="bed" class="w-[24px] h-[24px]">
                                    <p class="text-gray-500 text-[13px] font-semibold">Queen Size Beds</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <img src="icons/profile.png" alt="guest" class="w-[24px] h-[24px]">
                                    <p class="text-gray-500 text-[13px] font-semibold">Max 3 Guest</p>
                                </div>
                            </div>
                        </div>
                        <div class="pr-6 text-wrap">
                            <p class="text-black text-[16px] font-bold mt-[-6px] pb-1">About room</p>
                            <p class="text-gray-500 text-[14px] font-normal">This comfortable queen room offers 220 square feet of space, perfect for couples or small groups of up to three guests. It features a plush queen-size bed, providing ample sleeping space for a relaxing stay. Stay connected with free Wi-Fi and enjoy air conditioning for a comfortable environment. We provide 24-hour room service for your convenience and daily housekeeping to keep your room fresh. Additionally, laundry service is available for your needs. The room with amenities like charging points, hangers, a work desk, reading lamps for comfortable reading, a telephone, a digital clock, a mirror, and a dustbin. Enjoy with the in-room TV and music system. For a restful sleep, a queen-size bed with cozy blankets and pillows are provided. Your safety and security are our priority. The room features digital locks, a fire extinguisher, and an emergency alarm. The private bathroom includes a water heater, shower, shaving mirror, dustbin, and a western toilet.</p>
                        </div>
                    </div>
                    <p class="text-black text-[16px] font-bold mt-4">Amenites</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Free Wi-Fi</li>
                        <li class=" text-[14px] font-normal">24-hours room service</li>
                        <li class=" text-[14px] font-normal">Daily Housekeeping</li>
                        <li class=" text-[14px] font-normal">Air conditioning</li>
                        <li class=" text-[14px] font-normal">Mineral water</li>
                        <li class=" text-[14px] font-normal">Laundry service</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Room Features</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Charging points</li>
                        <li class=" text-[14px] font-normal">Hanger</li>
                        <li class=" text-[14px] font-normal">Telephone</li>
                        <li class=" text-[14px] font-normal">Work desk</li>
                        <li class=" text-[14px] font-normal">Reading lamps</li>
                        <li class=" text-[14px] font-normal">Digital clock</li>
                        <li class=" text-[14px] font-normal">Mirror</li>
                        <li class=" text-[14px] font-normal">Dustbin</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Media and Entertainment</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">TV</li>
                        <li class=" text-[14px] font-normal">Music System</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Bed and Blanket</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Queen Size beds</li>
                        <li class=" text-[14px] font-normal">Blankets</li>
                        <li class=" text-[14px] font-normal">Pillows</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Safety and Security</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Digital Locks</li>
                        <li class=" text-[14px] font-normal">Fire Extinguisher</li>
                        <li class=" text-[14px] font-normal">Emergency alarm</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Bathroom</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Water heater</li>
                        <li class=" text-[14px] font-normal">Shower</li>
                        <li class=" text-[14px] font-normal">Shaving mirror</li>
                        <li class=" text-[14px] font-normal">Dustbin</li>
                        <li class=" text-[14px] font-normal">Western Toilet</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- View Details of Guest Rooms -->
        <div class="view-details-container-guest inset-0 hidden fixed top-0 w-full h-[800px] bg-black bg-opacity-50 z-50">
            <div class=" relative modal-content bg-white mx-auto mt-16 p-[40px] rounded-md w-[1000px] h-[660px]">
                <p class=" sticky bg-white absolute text-[24px] font-semibold z-10">Guest Room</p>
                <button class=" absolute text-white bg-red-500 hover:bg-red-600 px-[10px] pb-1 rounded-md top-[10px] right-[10px] z-20 text-xl" id="closePopupGuest">×</button>
                <div class=" mt-4 absolute w-[960px] h-[540px] overflow-y-scroll overflow-x-hidden text-left text-wrap cursor-default"><!-- select-none to prevent text selection -->
                    <div class=" flex space-x-6">
                        <div class="">
                            <img src="images/rooms/guest.jpg" alt="room1" class="w-[400px] h-[300px] rounded-md">
                            <div class=" flex items-center justify-center space-x-6 w-[400px] h-auto border-2 border-gray-200 rounded-lg p-4 mt-6">
                                <div class="flex items-center space-x-2">
                                    <img src="icons/roomsize.png" alt="roomsize" class="w-[24px] h-[24px]">
                                    <p class="text-gray-500 text-[13px] font-semibold">520 sq.ft</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <img src="icons/bad.png" alt="bed" class="w-[24px] h-[24px]">
                                    <p class="text-gray-500 text-[13px] font-semibold">Guest Beds</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <img src="icons/profile.png" alt="guest" class="w-[24px] h-[24px]">
                                    <p class="text-gray-500 text-[13px] font-semibold">Max 10 Guest</p>
                                </div>
                            </div>
                        </div>
                        <div class="pr-6 text-wrap">
                            <p class="text-black text-[16px] font-bold mt-[-6px] pb-1">About room</p>
                            <p class="text-gray-500 text-[14px] font-normal">This expansive guest room offers a generous 520 square feet of space, perfect for large groups or families of up to 10 guests. It features five comfortable premium beds, providing ample sleeping arrangements for everyone. Stay connected with free Wi-Fi and enjoy air conditioning for a comfortable stay. We provide 24-hour room service for your convenience and daily housekeeping to keep your room fresh. Additionally, laundry service is available for your needs. The room with essential amenities like charging points, hangers, a work desk for productivity, reading lamps, a telephone, a digital clock, a mirror, and a dustbin. Enjoy with the in-room TV and music system. For a restful sleep, five premium beds along with blankets and pillows are provided. Your safety and security are our priority. The room features digital locks, a fire extinguisher, and an emergency alarm. The private bathroom includes a water heater, shower, shaving mirror, dustbin, and a western toilet.</p>
                        </div>
                    </div>
                    <p class="text-black text-[16px] font-bold mt-4">Amenites</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Free Wi-Fi</li>
                        <li class=" text-[14px] font-normal">24-hours room service</li>
                        <li class=" text-[14px] font-normal">Daily Housekeeping</li>
                        <li class=" text-[14px] font-normal">Air conditioning</li>
                        <li class=" text-[14px] font-normal">Mineral water</li>
                        <li class=" text-[14px] font-normal">Laundry service</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Room Features</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Charging points</li>
                        <li class=" text-[14px] font-normal">Hanger</li>
                        <li class=" text-[14px] font-normal">Telephone</li>
                        <li class=" text-[14px] font-normal">Work desk</li>
                        <li class=" text-[14px] font-normal">Reading lamps</li>
                        <li class=" text-[14px] font-normal">Digital clock</li>
                        <li class=" text-[14px] font-normal">Mirror</li>
                        <li class=" text-[14px] font-normal">Dustbin</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Media and Entertainment</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">TV</li>
                        <li class=" text-[14px] font-normal">Music System</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Bed and Blanket</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">5 Premium beds</li>
                        <li class=" text-[14px] font-normal">Blankets</li>
                        <li class=" text-[14px] font-normal">Pillows</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Safety and Security</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Digital Locks</li>
                        <li class=" text-[14px] font-normal">Fire Extinguisher</li>
                        <li class=" text-[14px] font-normal">Emergency alarm</li>
                    </ul>
                    <p class="text-black text-[16px] font-bold mt-4">Bathroom</p>
                    <ul class=" list-disc grid grid-cols-3 text-gray-600 w-[1000px] h-auto p-4">
                        <li class=" text-[14px] font-normal">Water heater</li>
                        <li class=" text-[14px] font-normal">Shower</li>
                        <li class=" text-[14px] font-normal">Shaving mirror</li>
                        <li class=" text-[14px] font-normal">Dustbin</li>
                        <li class=" text-[14px] font-normal">Western Toilet</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- View Details Script for Single Rooms Warning: Don't remove the script from home to another file-->
        <script>
            /* Home Single room View Details Popup */

            document.addEventListener('DOMContentLoaded', function() {
                // Get the view details button
                const viewDetailsButtonSingle = document.querySelector('.view-details-button-single');

                // Get the popup container and close button
                const detailsContainerSingle = document.querySelector('.view-details-container-single');
                const closePopupButtonSingle = document.getElementById('closePopupSingle');

                // Add event listener to view details button
                viewDetailsButtonSingle.addEventListener('click', function() {
                    // Show the popup
                    detailsContainerSingle.classList.remove('hidden');
                });

                // Add event listener to close button
                closePopupButtonSingle.addEventListener('click', function() {
                    // Hide the popup
                    detailsContainerSingle.classList.add('hidden');
                });
            });
            document.addEventListener('DOMContentLoaded', function() {
                // Function to handle the click event of the single room view details button
                function handleViewDetailsSingle(event) {
                    event.preventDefault(); // Prevent form submission
                }

                // Select all view details buttons and attach event listener to each
                const viewDetailsButtonsSingle = document.querySelectorAll('.view-details-button');
                viewDetailsButtonsSingle.forEach(button => {
                    button.addEventListener('click', handleViewDetailsSingle);
                });
            });
        </script>
        <!-- View Details Script for Double Rooms Warning: Don't remove the script from home to another file-->
        <script>
            /* Home Double room View Details Popup */

            document.addEventListener('DOMContentLoaded', function() {
                // Get the view details button
                const viewDetailsButtonDouble = document.querySelector('.view-details-button-double');

                // Get the popup container and close button
                const detailsContainerDouble = document.querySelector('.view-details-container-double');
                const closePopupButtonDouble = document.getElementById('closePopupDouble');

                // Add event listener to view details button
                viewDetailsButtonDouble.addEventListener('click', function() {
                    // Show the popup
                    detailsContainerDouble.classList.remove('hidden');
                });

                // Add event listener to close button
                closePopupButtonDouble.addEventListener('click', function() {
                    // Hide the popup
                    detailsContainerDouble.classList.add('hidden');
                });
            });
            document.addEventListener('DOMContentLoaded', function() {
                // Function to handle the click event of the Double room view details button
                function handleViewDetailsDouble(event) {
                    event.preventDefault(); // Prevent form submission
                }

                // Select all view details buttons and attach event listener to each
                const viewDetailsButtonsDouble = document.querySelectorAll('.view-details-button');
                viewDetailsButtonsDouble.forEach(button => {
                    button.addEventListener('click', handleViewDetailsDouble);
                });
            });
        </script>
        <!-- View Details Script for Triple Rooms Warning: Don't remove the script from home to another file-->
        <script>
            /* Home Triple room View Details Popup */

            document.addEventListener('DOMContentLoaded', function() {
                // Get the view details button
                const viewDetailsButtonTriple = document.querySelector('.view-details-button-triple');

                // Get the popup container and close button
                const detailsContainerTriple = document.querySelector('.view-details-container-triple');
                const closePopupButtonTriple = document.getElementById('closePopupTriple');

                // Add event listener to view details button
                viewDetailsButtonTriple.addEventListener('click', function() {
                    // Show the popup
                    detailsContainerTriple.classList.remove('hidden');
                });

                // Add event listener to close button
                closePopupButtonTriple.addEventListener('click', function() {
                    // Hide the popup
                    detailsContainerTriple.classList.add('hidden');
                });
            });
            document.addEventListener('DOMContentLoaded', function() {
                // Function to handle the click event of the Triple room view details button
                function handleViewDetailsTriple(event) {
                    event.preventDefault(); // Prevent form submission
                }

                // Select all view details buttons and attach event listener to each
                const viewDetailsButtonsTriple = document.querySelectorAll('.view-details-button');
                viewDetailsButtonsTriple.forEach(button => {
                    button.addEventListener('click', handleViewDetailsTriple);
                });
            });
        </script>
        <!-- View Details Script for Quad Rooms Warning: Don't remove the script from home to another file-->
        <script>
            /* Home Quad room View Details Popup */

            document.addEventListener('DOMContentLoaded', function() {
                // Get the view details button
                const viewDetailsButtonQuad = document.querySelector('.view-details-button-quad');

                // Get the popup container and close button
                const detailsContainerQuad = document.querySelector('.view-details-container-quad');
                const closePopupButtonQuad = document.getElementById('closePopupQuad');

                // Add event listener to view details button
                viewDetailsButtonQuad.addEventListener('click', function() {
                    // Show the popup
                    detailsContainerQuad.classList.remove('hidden');
                });

                // Add event listener to close button
                closePopupButtonQuad.addEventListener('click', function() {
                    // Hide the popup
                    detailsContainerQuad.classList.add('hidden');
                });
            });
            document.addEventListener('DOMContentLoaded', function() {
                // Function to handle the click event of the Quad room view details button
                function handleViewDetailsQuad(event) {
                    event.preventDefault(); // Prevent form submission
                }

                // Select all view details buttons and attach event listener to each
                const viewDetailsButtonsQuad = document.querySelectorAll('.view-details-button');
                viewDetailsButtonsQuad.forEach(button => {
                    button.addEventListener('click', handleViewDetailsQuad);
                });
            });
        </script>
        <!-- View Details Script for Family Rooms Warning: Don't remove the script from home to another file-->
        <script>
            /* Home Family room View Details Popup */

            document.addEventListener('DOMContentLoaded', function() {
                // Get the view details button
                const viewDetailsButtonFamily = document.querySelector('.view-details-button-family');

                // Get the popup container and close button
                const detailsContainerFamily = document.querySelector('.view-details-container-family');
                const closePopupButtonFamily = document.getElementById('closePopupFamily');

                // Add event listener to view details button
                viewDetailsButtonFamily.addEventListener('click', function() {
                    // Show the popup
                    detailsContainerFamily.classList.remove('hidden');
                });

                // Add event listener to close button
                closePopupButtonFamily.addEventListener('click', function() {
                    // Hide the popup
                    detailsContainerFamily.classList.add('hidden');
                });
            });
            document.addEventListener('DOMContentLoaded', function() {
                // Function to handle the click event of the Family room view details button
                function handleViewDetailsFamily(event) {
                    event.preventDefault(); // Prevent form submission
                }

                // Select all view details buttons and attach event listener to each
                const viewDetailsButtonsFamily = document.querySelectorAll('.view-details-button');
                viewDetailsButtonsFamily.forEach(button => {
                    button.addEventListener('click', handleViewDetailsFamily);
                });
            });
        </script>
        <!-- View Details Script for King Rooms Warning: Don't remove the script from home to another file-->
        <script>
            /* Home King room View Details Popup */

            document.addEventListener('DOMContentLoaded', function() {
                // Get the view details button
                const viewDetailsButtonKing = document.querySelector('.view-details-button-king');

                // Get the popup container and close button
                const detailsContainerKing = document.querySelector('.view-details-container-king');
                const closePopupButtonKing = document.getElementById('closePopupKing');

                // Add event listener to view details button
                viewDetailsButtonKing.addEventListener('click', function() {
                    // Show the popup
                    detailsContainerKing.classList.remove('hidden');
                });

                // Add event listener to close button
                closePopupButtonKing.addEventListener('click', function() {
                    // Hide the popup
                    detailsContainerKing.classList.add('hidden');
                });
            });
            document.addEventListener('DOMContentLoaded', function() {
                // Function to handle the click event of the King room view details button
                function handleViewDetailsKing(event) {
                    event.preventDefault(); // Prevent form submission
                }

                // Select all view details buttons and attach event listener to each
                const viewDetailsButtonsKing = document.querySelectorAll('.view-details-button');
                viewDetailsButtonsKing.forEach(button => {
                    button.addEventListener('click', handleViewDetailsKing);
                });
            });
        </script>
        <!-- View Details Script for Queen Rooms Warning: Don't remove the script from home to another file-->
        <script>
            /* Home Queen room View Details Popup */

            document.addEventListener('DOMContentLoaded', function() {
                // Get the view details button
                const viewDetailsButtonQueen = document.querySelector('.view-details-button-queen');

                // Get the popup container and close button
                const detailsContainerQueen = document.querySelector('.view-details-container-queen');
                const closePopupButtonQueen = document.getElementById('closePopupQueen');

                // Add event listener to view details button
                viewDetailsButtonQueen.addEventListener('click', function() {
                    // Show the popup
                    detailsContainerQueen.classList.remove('hidden');
                });

                // Add event listener to close button
                closePopupButtonQueen.addEventListener('click', function() {
                    // Hide the popup
                    detailsContainerQueen.classList.add('hidden');
                });
            });
            document.addEventListener('DOMContentLoaded', function() {
                // Function to handle the click event of the Queen room view details button
                function handleViewDetailsQueen(event) {
                    event.preventDefault(); // Prevent form submission
                }

                // Select all view details buttons and attach event listener to each
                const viewDetailsButtonsQueen = document.querySelectorAll('.view-details-button');
                viewDetailsButtonsQueen.forEach(button => {
                    button.addEventListener('click', handleViewDetailsQueen);
                });
            });
        </script>
        <!-- View Details Script for Guest Rooms Warning: Don't remove the script from home to another file-->
        <script>
            /* Home Guest room View Details Popup */

            document.addEventListener('DOMContentLoaded', function() {
                // Get the view details button
                const viewDetailsButtonGuest = document.querySelector('.view-details-button-guest');

                // Get the popup container and close button
                const detailsContainerGuest = document.querySelector('.view-details-container-guest');
                const closePopupButtonGuest = document.getElementById('closePopupGuest');

                // Add event listener to view details button
                viewDetailsButtonGuest.addEventListener('click', function() {
                    // Show the popup
                    detailsContainerGuest.classList.remove('hidden');
                });

                // Add event listener to close button
                closePopupButtonGuest.addEventListener('click', function() {
                    // Hide the popup
                    detailsContainerGuest.classList.add('hidden');
                });
            });
            document.addEventListener('DOMContentLoaded', function() {
                // Function to handle the click event of the Guest room view details button
                function handleViewDetailsGuest(event) {
                    event.preventDefault(); // Prevent form submission
                }

                // Select all view details buttons and attach event listener to each
                const viewDetailsButtonsGuest = document.querySelectorAll('.view-details-button');
                viewDetailsButtonsGuest.forEach(button => {
                    button.addEventListener('click', handleViewDetailsGuest);
                });
            });
        </script>
        
        <!-- Booking Registration form -->
        <div id="popups" class=" fixed hidden top-9 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-50 z-20"><!-- booking-form  -->
            <form id="reservation-form" action="" method="POST" class=" relative text-left w-[700px] h-[650px] mx-auto mt-2 pt-[30px] pb-[40px] px-10 bg-white rounded-md shadow-lg">
                <button id="close-popup" class=" absolute text-white bg-red-500 hover:bg-red-600 px-[10px] pb-1 rounded-md top-[10px] right-[10px] z-20 text-xl">×</button>
                <h1 class="text-[24px] font-semibold text-center mt-[-10px] mb-2">Reservation Form</h1>

                <div class="grid grid-cols-2 gap-x-16">
                    <div class="mt-4">
                        <label for="name" class="block text-[15px] text-gray-700 mb-1">Name</label>
                        <input type="text" pattern="[a-zA-Z\s']+" name="Name" id="name" class="text-[15px] focus:outline-none focus:border-blue-400 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm" required>

                        <label for="email" class="block text-[15px] text-gray-700 mt-3 mb-1">Email</label>
                        <input type="email" name="Email" id="email" class="text-[15px] focus:outline-none focus:border-blue-400 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm" required>

                        <label for="phone" class="block text-[15px] text-gray-700 mt-4 mb-1">Phone Number</label>
                        <input type="tel" name="Phone" id="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="text-[15px] focus:outline-none focus:border-blue-400 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm" required>

                        <label for="address" class="block text-[15px] text-gray-700 mt-4 mb-1">Address</label>
                        <textarea rows="4" cols="50" pattern="[a-zA-Z\s']+" name="Address" id="address" class="resize-none text-wrap w-[276px] focus:outline-none focus:border-blue-400 focus:border-2 w-full h-[206px] p-2 border border-gray-400 rounded-sm" required></textarea>
                        <!-- In address field adding 67 or less than characters cannot affect the editing options -->
                    </div>
                    <div>
                        <label for="adults" class="block text-[15px] text-gray-700 mt-4 mb-1" id="ad">Adults</label>
                        <select name="Adults" id="adults" class="text-[15px] focus:outline-none focus:border-blue-400 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm" required>
                            <option value="">Select Adults</option>
                            <option value="1" id="option1">1</option>
                            <option value="2" id="option2">2</option>
                            <option value="3" id="option3">3</option>
                            <option value="4" id="option4">4</option>
                            <option value="5" id="option5">5</option>
                        </select>
                        <label for="children" class="block text-[15px] text-gray-700 mt-3 mb-1" id="child">Children</label>
                        <select name="Children" id="children" class="text-[15px] focus:outline-none focus:border-blue-400 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm">
                            <option value="">Select Children</option>
                            <option value="1" id="option-1">1</option>
                            <option value="2" id="option-2">2</option>
                            <option value="3" id="option-3">3</option>
                            <option value="4" id="option-4">4</option>
                            <option value="5" id="option-5">5</option>
                        </select>
                        <label for="roomType" class="block text-[15px] text-gray-700 mt-4 mb-1">Room Type</label>
                        <select name="roomType" id="roomType" class="focus:outline-none focus:border-blue-400 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm data-room-type">
                            <option value="Single">Single</option>
                            <option value="Double">Double</option>
                            <option value="Triple">Triple</option>
                            <option value="Quad">Quad</option>
                            <option value="Family">Family</option>
                            <option value="King">King</option>
                            <option value="Queen">Queen</option>
                            <option value="Guest">Guest</option>
                        </select>
                        <label for="roomPrice" class="block text-[15px] text-gray-700 mt-4 mb-1">Room Price</label>
                        <select name="roomPrice" id="roomPrice" class="focus:outline-none focus:border-blue-400 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm data-room-price">
                            <option value="₹1,800">₹1,800</option>
                            <option value="₹2,200">₹2,200</option>
                            <option value="₹4,400">₹4,400</option>
                            <option value="₹6,000">₹6,000</option>
                            <option value="₹8,500">₹8,500</option>
                            <option value="₹2,400">₹2,400</option>
                            <option value="₹2,600">₹2,600</option>
                            <option value="₹9,700">₹9,700</option>
                        </select>

                        <label for="checkIn" class="block text-[15px] text-gray-700 mt-4 mb-1">Check-In</label>
                        <input type="date" name="checkIn" id="checkIn" class="text-[15px] focus:outline-none focus:border-blue-400 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm" required>

                        <label for="checkOut" class="block text-[15px] text-gray-700 mt-4 mb-1">Check-Out</label>
                        <input type="date" name="checkOut" id="checkOut" class="text-[15px] focus:outline-none focus:border-blue-400 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm" required>
                        <!-- Hidden input field for total number of days -->
                        <input type="hidden" name="totalDays" id="totalDays">
                    </div>

                </div>
                <button type="submit" class="text-[15px] w-full bg-blue-600 hover:bg-blue-700 text-center text-white font-normal py-[10px] px-4 rounded-md mt-6">Book</button>
        </div>
    </div>
    </form>

    <!-- Booking Form Validation -->
    <script>
        // Define room types and their corresponding prices
        const roomTypes = {
            Single: "₹1,800",
            Double: "₹2,200",
            Triple: "₹4,400",
            Quad: "₹6,000",
            Family: "₹8,500",
            King: "₹2,400",
            Queen: "₹2,600",
            Guest: "₹9,700"
        };

        // Function to show popup and set default values based on room type
        function openPopup(roomType, roomPrice) {
            // Set default room type and price
            document.getElementById('roomType').value = roomType;
            document.getElementById('roomPrice').value = roomPrice;

            // Disable room type and room price fields
            document.getElementById('roomType').disabled = true;
            document.getElementById('roomPrice').disabled = true;

            // Show or hide fields based on room type
            if (roomType === 'Single') {
                document.getElementById('ad').style.display = 'block';
                document.getElementById('child').style.display = 'block';
                document.getElementById('adults').style.display = 'block';
                document.getElementById('children').style.display = 'block';
                // Remove the required attribute from the hidden fields
                document.getElementById('adults').setAttribute('required', 'required');
                document.getElementById('children').removeAttribute('required');
            } else {
                document.getElementById('ad').style.display = 'block';
                document.getElementById('child').style.display = 'block';
                document.getElementById('adults').style.display = 'block';
                document.getElementById('children').style.display = 'block';
                // Add the required attribute to the visible fields
                document.getElementById('adults').setAttribute('required', 'required');
            }

            // Show popup
            document.getElementById('popups').classList.remove('hidden');
        }

        // Attach event listeners to each "Book now" button
        document.addEventListener('DOMContentLoaded', function() {
            const roomButtons = document.querySelectorAll('.book-now-button');
            roomButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const roomType = this.dataset.roomType;
                    const roomPrice = roomTypes[roomType];
                    openPopup(roomType, roomPrice);
                });
            });

            // Close popup
            var closePopupButton = document.getElementById('close-popup');
            var popups = document.getElementById('popups');
            closePopupButton.addEventListener('click', function(event) {
                // Prevent the default behavior of the button click event (form submission)
                event.preventDefault();
                // Hide the popup
                popups.classList.add('hidden');
            });


            // Handle form submission
            document.getElementById('reservation-form').addEventListener('submit', function(event) {
                // Re-enable room type and room price fields before form submission
                document.getElementById('roomType').disabled = false;
                document.getElementById('roomPrice').disabled = false;
            });
        });
    </script>

    <!-- Date Validation -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the form element
            const form = document.getElementById('reservation-form');

            // Get the check-in and check-out date inputs
            const checkInInput = document.getElementById('checkIn');
            const checkOutInput = document.getElementById('checkOut');

            // Get today's date
            const today = new Date().toISOString().split('T')[0];

            // Set min attribute for check-in input to today's date
            checkInInput.min = today;

            // Add event listener for form submission
            form.addEventListener('submit', function(event) {
                // Validate check-out date is after check-in date
                if (checkOutInput.value < checkInInput.value) {
                    alert('Check-out date must be after or equal to check-in date');
                    event.preventDefault(); // Prevent form submission
                } else {
                    // Calculate total days
                    const checkInDate = new Date(checkInInput.value);
                    const checkOutDate = new Date(checkOutInput.value);

                    console.log('Check-in date:', checkInDate);
                    console.log('Check-out date:', checkOutDate);

                    const totalDays = Math.round((checkOutDate - checkInDate) / (1000 * 60 * 60 * 24)) + 1;

                    console.log('Total days:', totalDays);

                    // Add the total days to a hidden input field
                    document.getElementById('totalDays').value = totalDays;
                }
            });

            // Add event listener for check-in date change
            checkInInput.addEventListener('change', function() {
                // Update minimum selectable date for check-out date
                checkOutInput.min = this.value;
            });
        });
    </script>

    <!-- Testimonials -->
    <div id="testimonials" class=" mt-10">
        <h1 class=" text-center text-[26px] text-gray-800 font-semibold pt-24">Testimonials</h1><!-- underline underline-offset-8 -->
        <h1 class=" text-center text-[16px] text-gray-600 font-normal mb-10">Ratings based on customer reviews</h1>
        <div class=" mx-auto flex justify-center px-16 container text-center bg-orange-50 mt-10 mb-20 pt-12 pb-12 rounded-xl">
            <div class=" relative left-[-14px] gap-x-16 gap-y-8 grid grid-cols-5 grid-rows-2 ">
                <!-- Customer 1 -->
                <div class=" flex flex-col justify-center items-center bg-gray-50 relative w-[210px] h-[260px] rounded-lg shadow-lg p-2 z-1">
                    <img src="Images/testimonials/sudhar1.jpg" alt="image" class=" mt-4 w-[90px] h-[90px] hover:opacity-95 rounded-full outline outline-gray-200 outline-offset-4">
                    <p class=" font-semibold text-[16px] pt-2">Sudhar</p>
                    <p class=" font-semibold text-[12px] text-gray-500">Siruvangur</p>
                    <div class=" flex justify-center items-center mt-4 w-[78px] h-auto p-2 hover:opacity-90 rounded-full bg-gray-200">
                        <p class="font-semibold text-[12px] mr-2">4.5</p>
                        <p class="font-semibold text-[13px]">⭐</p>
                    </div>
                </div>
                <!-- Customer 2 -->
                <div class=" flex flex-col justify-center items-center bg-gray-50 relative w-[210px] h-[260px] rounded-lg shadow-lg p-2 z-1">
                    <img src="Images/testimonials/dilip.jpg" alt="image" class=" mt-4 w-[90px] h-[90px] hover:opacity-90 rounded-full outline outline-gray-200 outline-offset-4">
                    <p class=" font-semibold text-[16px] pt-2">Dilip</p>
                    <p class=" font-semibold text-[12px] text-gray-500">Villupuram</p>
                    <div class=" flex justify-center items-center mt-4 w-[78px] h-auto p-2 hover:opacity-90 rounded-full bg-gray-200">
                        <p class="font-semibold text-[12px] mr-2">4.5</p>
                        <p class="font-semibold text-[13px]">⭐</p>
                    </div>
                </div>
                <!-- Customer 3 -->
                <div class=" flex flex-col justify-center items-center bg-gray-50 relative w-[210px] h-[260px] rounded-lg shadow-lg p-2 z-1">
                    <img src="Images/testimonials/dhanush.jpg" alt="image" class=" mt-4 w-[90px] h-[90px] hover:opacity-90 rounded-full outline outline-gray-200 outline-offset-4">
                    <p class=" font-semibold text-[16px] pt-2">Dhanush</p>
                    <p class=" font-semibold text-[12px] text-gray-500">Woraiyur</p>
                    <div class=" flex justify-center items-center mt-4 w-[78px] h-auto p-2 hover:opacity-90 rounded-full bg-gray-200">
                        <p class="font-semibold text-[12px] mr-2">4.5</p>
                        <p class="font-semibold text-[13px]">⭐</p>
                    </div>
                </div>
                <!-- Customer 4 -->
                <div class=" flex flex-col justify-center items-center bg-gray-50 relative w-[210px] h-[260px] rounded-lg shadow-lg p-2 z-1">
                    <img src="Images/testimonials/bas.jpg" alt="image" class=" mt-4 w-[90px] h-[90px] hover:opacity-90 rounded-full outline outline-gray-200 outline-offset-4">
                    <p class=" font-semibold text-[16px] pt-2">Basith</p>
                    <p class=" font-semibold text-[12px] text-gray-500">Aavanam</p>
                    <div class=" flex justify-center items-center mt-4 w-[78px] h-auto p-2 hover:opacity-90 rounded-full bg-gray-200">
                        <p class="font-semibold text-[12px] mr-2">4.5</p>
                        <p class="font-semibold text-[13px]">⭐</p>
                    </div>
                </div>
                <!-- Customer 5 -->
                <div class=" flex flex-col justify-center items-center bg-gray-50 relative w-[210px] h-[260px] rounded-lg shadow-lg p-2 z-1">
                    <img src="Images/testimonials/salman1.jpg" alt="image" class=" mt-4 w-[90px] h-[90px] hover:opacity-90 rounded-full outline outline-gray-200 outline-offset-4">
                    <p class=" font-semibold text-[16px] pt-2">Salman</p>
                    <p class=" font-semibold text-[12px] text-gray-500">Parangipettai</p>
                    <div class=" flex justify-center items-center mt-4 w-[78px] h-auto p-2 hover:opacity-90 rounded-full bg-gray-200">
                        <p class="font-semibold text-[12px] mr-2">4.5</p>
                        <p class="font-semibold text-[13px]">⭐</p>
                    </div>
                </div>
                <!-- Customer 6 -->
                <div class=" flex flex-col justify-center items-center bg-gray-50 relative w-[210px] h-[260px] rounded-lg shadow-lg p-2 z-1">
                    <img src="Images/testimonials/kalaivanan.jpg" alt="image" class=" mt-4 w-[90px] h-[90px] hover:opacity-90 rounded-full outline outline-gray-200 outline-offset-4">
                    <p class=" font-semibold text-[16px] pt-2">Kalaivanan</p>
                    <p class=" font-semibold text-[12px] text-gray-500">Pathur</p>
                    <div class=" flex justify-center items-center mt-4 w-[78px] h-auto p-2 hover:opacity-90 rounded-full bg-gray-200">
                        <p class="font-semibold text-[12px] mr-2">4.5</p>
                        <p class="font-semibold text-[13px]">⭐</p>
                    </div>
                </div>

                <!-- Customer 7 -->
                <div class=" flex flex-col justify-center items-center bg-gray-50 relative w-[210px] h-[260px] rounded-lg shadow-lg p-2 z-1">
                    <img src="Images/testimonials/nivas.jpg" alt="image" class=" mt-4 w-[90px] h-[90px] hover:opacity-90 rounded-full outline outline-gray-200 outline-offset-4">
                    <p class=" font-semibold text-[16px] pt-2">Nivas</p>
                    <p class=" font-semibold text-[12px] text-gray-500">Manapparai</p>
                    <div class=" flex justify-center items-center mt-4 w-[78px] h-auto p-2 hover:opacity-90 rounded-full bg-gray-200">
                        <p class="font-semibold text-[12px] mr-2">4.5</p>
                        <p class="font-semibold text-[13px]">⭐</p>
                    </div>
                </div>
                <!-- Customer 8 -->
                <div class=" flex flex-col justify-center items-center bg-gray-50 relative w-[210px] h-[260px] rounded-lg shadow-lg p-2 z-1">
                    <img src="Images/testimonials/bala.jpg" alt="image" class=" mt-4 w-[90px] h-[90px] hover:opacity-90 rounded-full outline outline-gray-200 outline-offset-4">
                    <p class=" font-semibold text-[16px] pt-2">Balaji</p>
                    <p class=" font-semibold text-[12px] text-gray-500">Manapparai</p>
                    <div class=" flex justify-center items-center mt-4 w-[78px] h-auto p-2 hover:opacity-90 rounded-full bg-gray-200">
                        <p class="font-semibold text-[12px] mr-2">4.5</p>
                        <p class="font-semibold text-[13px]">⭐</p>
                    </div>
                </div>
                <!-- Customer 9 -->
                <!-- Customer 10 -->
                <div class=" flex flex-col justify-center items-center bg-gray-50 relative w-[210px] h-[260px] rounded-lg shadow-lg p-2 z-1">
                    <img src="Images/testimonials/dilipan.jpg" alt="image" class=" mt-4 w-[90px] h-[90px] hover:opacity-90 rounded-full outline outline-gray-200 outline-offset-4">
                    <p class=" font-semibold text-[16px] pt-2">Dhilipan</p>
                    <p class=" font-semibold text-[12px] text-gray-500">Mannarkudi</p>
                    <div class=" flex justify-center items-center mt-4 w-[78px] h-auto p-2 hover:opacity-90 rounded-full bg-gray-200">
                        <p class="font-semibold text-[12px] mr-2">4.5</p>
                        <p class="font-semibold text-[13px]">⭐</p>
                    </div>
                </div>
                <!-- Customer 11 -->
                <div class=" flex flex-col justify-center items-center bg-gray-50 relative w-[210px] h-[260px] rounded-lg shadow-lg p-2 z-1">
                    <img src="Images/testimonials/gunalanss.jpg" alt="image" class=" mt-4 w-[90px] h-[90px] hover:opacity-90 rounded-full outline outline-gray-200 outline-offset-4">
                    <p class=" font-semibold text-[16px] pt-2">Gunalan</p>
                    <p class=" font-semibold text-[12px] text-gray-500">Thanjavur</p>
                    <div class=" flex justify-center items-center mt-4 w-[78px] h-auto p-2 hover:opacity-90 rounded-full bg-gray-200">
                        <p class="font-semibold text-[12px] mr-2">4.5</p>
                        <p class="font-semibold text-[13px]">⭐</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Us -->
    <div id="contact" class=" flex items-center justify-between mt-0 w-full h-[300px] bg-[#040406] px-[100px]">
        <div class=" w-[400px] h-auto">
            <p class=" text-[24px] text-white font-semibold pb-2">Get in Touch</p>
            <p class=" text-[#9ca3af]">Excited to stay with us? Have questions?<br>Feel free to reach out!<br>drop a message.</p>
            <a href="contactus_home.php">
                <button class=" text-[16px] w-[220px] mt-[40px] bg-blue-500 hover:opacity-90 text-white pt-[8px] pb-[8px] rounded-md cursor-pointer" required>Message</button>
            </a>
            <div class=" flex space-x-4 pt-8">
                <a href="https://www.facebook.com/" target="_blank">
                    <img src="icons/facebook.png" alt="facebook" class="w-[30px] h-[30px] hover:opacity-90 cursor-pointer">
                </a>
                <a href="https://www.instagram.com/" target="_blank">
                    <img src="icons/instagram.png" alt="instagram" class="w-[32px] h-[32px] hover:opacity-90 cursor-pointer">
                </a>
                <a href="https://www.whatsapp.com/" target="_blank">
                    <img src="icons/whatsapp.png" alt="whatsapp" class="w-[32px] h-[32px] hover:opacity-90 cursor-pointer">
                </a>
            </div>
        </div>
        <div class="flex flex-col">
            <div class=" flex mt-4">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-green-400">
                        <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                    </svg>

                </div>
                <div class=" ml-4">
                    <p class=" text-white text-[16px] font-semibold">Phone</p>
                    <p class=" text-[#9ca3af] text-[14px]">+91 9345550559</p>
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
                    <p class=" text-white text-[16px] font-semibold">Email</p>
                    <p class=" text-[#9ca3af] text-[14px]">dheendheenu777@gmail.com</p>
                </div>
            </div>
            <div class=" flex pt-6">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-red-500">
                        <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                    </svg>

                </div>
                <div class=" ml-4">
                    <p class=" text-white text-[16px] font-semibold">Location</p>
                    <p class=" text-[#9ca3af] text-[14px]">Siruvangur</p>
                </div>
            </div>
        </div>
        <div class=" fixed right-2 bottom-0">
            <button onclick="topFunction()" id="scroll" class=" mb-2 py-[14px] px-4 bg-gray-500 hover:opacity-90 rounded-full">
                <!-- Icon for go to top -->
                <img src="icons/up-arrow.png" alt="top arrow" class=" w-[16px] h-[20px]">
            </button>
        </div>
    </div>

    <!-- Footer -->
    <footer class=" bg-[#040406] text-white p-4 bottom-0">
        <div class="container mx-auto text-center">
            &copy; 2024 Hotel Dheen. All rights reserved.
        </div>
    </footer>


    <!-- Keep this scripts in home(not in home.js) -->



    <!-- Fetching and updating single rooms booked count -->
    <!-- Removal of this script doesn't update the adminrooms booked count -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the initial room count from the database and update the display
            async function fetchSingleBookedRoomsCounts() {
                try {
                    const response = await fetch('get_single_room_count.php');
                    const data = await response.text(); // Read response as text
                    console.log("Response:", data);

                    // Check if response contains success message
                    if (data.includes("successfully")) {
                        console.log("Count updated successfully!");
                        // Optionally, you can reload the page or update the UI here
                    } else {
                        console.error("Error updating count:", data);
                        // Optionally, handle the error or display a message to the user
                    }
                } catch (error) {
                    console.error('Error fetching initial room count:', error);
                    // Optional additional error handling (e.g., display error message to user)
                }
            }

            // Fetch initial room count from the database and update display on page load
            fetchSingleBookedRoomsCounts();

        });
    </script>

    <!-- Fetching and updating double rooms booked count -->
    <!-- Removal of this script doesn't update the adminrooms booked count -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the initial room count from the database and update the display
            async function fetchSingleBookedRoomsCounts() {
                try {
                    const response = await fetch('get_double_room_count.php');
                    const data = await response.text(); // Read response as text
                    console.log("Response:", data);

                    // Check if response contains success message
                    if (data.includes("successfully")) {
                        console.log("Count updated successfully!");
                        // Optionally, you can reload the page or update the UI here
                    } else {
                        console.error("Error updating count:", data);
                        // Optionally, handle the error or display a message to the user
                    }
                } catch (error) {
                    console.error('Error fetching initial room count:', error);
                    // Optional additional error handling (e.g., display error message to user)
                }
            }

            // Fetch initial room count from the database and update display on page load
            fetchSingleBookedRoomsCounts();

        });
    </script>

    <!-- Fetching and updating triple rooms booked count -->
    <!-- Removal of this script doesn't update the adminrooms booked count -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the initial room count from the database and update the display
            async function fetchSingleBookedRoomsCounts() {
                try {
                    const response = await fetch('get_triple_room_count.php');
                    const data = await response.text(); // Read response as text
                    console.log("Response:", data);

                    // Check if response contains success message
                    if (data.includes("successfully")) {
                        console.log("Count updated successfully!");
                        // Optionally, you can reload the page or update the UI here
                    } else {
                        console.error("Error updating count:", data);
                        // Optionally, handle the error or display a message to the user
                    }
                } catch (error) {
                    console.error('Error fetching initial room count:', error);
                    // Optional additional error handling (e.g., display error message to user)
                }
            }

            // Fetch initial room count from the database and update display on page load
            fetchSingleBookedRoomsCounts();

        });
    </script>

    <!-- Fetching and updating quad rooms booked count -->
    <!-- Removal of this script doesn't update the adminrooms booked count -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the initial room count from the database and update the display
            async function fetchSingleBookedRoomsCounts() {
                try {
                    const response = await fetch('get_quad_room_count.php');
                    const data = await response.text(); // Read response as text
                    console.log("Response:", data);

                    // Check if response contains success message
                    if (data.includes("successfully")) {
                        console.log("Count updated successfully!");
                        // Optionally, you can reload the page or update the UI here
                    } else {
                        console.error("Error updating count:", data);
                        // Optionally, handle the error or display a message to the user
                    }
                } catch (error) {
                    console.error('Error fetching initial room count:', error);
                    // Optional additional error handling (e.g., display error message to user)
                }
            }

            // Fetch initial room count from the database and update display on page load
            fetchSingleBookedRoomsCounts();
        });
    </script>

    <!-- Fetching and updating family rooms booked count -->
    <!-- Removal of this script doesn't update the adminrooms booked count -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the initial room count from the database and update the display
            async function fetchSingleBookedRoomsCounts() {
                try {
                    const response = await fetch('get_family_room_count.php');
                    const data = await response.text(); // Read response as text
                    console.log("Response:", data);

                    // Check if response contains success message
                    if (data.includes("successfully")) {
                        console.log("Count updated successfully!");
                        // Optionally, you can reload the page or update the UI here
                    } else {
                        console.error("Error updating count:", data);
                        // Optionally, handle the error or display a message to the user
                    }
                } catch (error) {
                    console.error('Error fetching initial room count:', error);
                    // Optional additional error handling (e.g., display error message to user)
                }
            }

            // Fetch initial room count from the database and update display on page load
            fetchSingleBookedRoomsCounts();

        });
    </script>

    <!-- Fetching and updating king rooms booked count -->
    <!-- Removal of this script doesn't update the adminrooms booked count -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the initial room count from the database and update the display
            async function fetchSingleBookedRoomsCounts() {
                try {
                    const response = await fetch('get_king_room_count.php');
                    const data = await response.text(); // Read response as text
                    console.log("Response:", data);

                    // Check if response contains success message
                    if (data.includes("successfully")) {
                        console.log("Count updated successfully!");
                        // Optionally, you can reload the page or update the UI here
                    } else {
                        console.error("Error updating count:", data);
                        // Optionally, handle the error or display a message to the user
                    }
                } catch (error) {
                    console.error('Error fetching initial room count:', error);
                    // Optional additional error handling (e.g., display error message to user)
                }
            }

            // Fetch initial room count from the database and update display on page load
            fetchSingleBookedRoomsCounts();
        });
    </script>

    <!-- Fetching and updating queen rooms booked count -->
    <!-- Removal of this script doesn't update the adminrooms booked count -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the initial room count from the database and update the display
            async function fetchSingleBookedRoomsCounts() {
                try {
                    const response = await fetch('get_queen_room_count.php');
                    const data = await response.text(); // Read response as text
                    console.log("Response:", data);

                    // Check if response contains success message
                    if (data.includes("successfully")) {
                        console.log("Count updated successfully!");
                        // Optionally, you can reload the page or update the UI here
                    } else {
                        console.error("Error updating count:", data);
                        // Optionally, handle the error or display a message to the user
                    }
                } catch (error) {
                    console.error('Error fetching initial room count:', error);
                    // Optional additional error handling (e.g., display error message to user)
                }
            }

            // Fetch initial room count from the database and update display on page load
            fetchSingleBookedRoomsCounts();
        });
    </script>

    <!-- Fetching and updating guest rooms booked count -->
    <!-- Removal of this script doesn't update the adminrooms booked count -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the initial room count from the database and update the display
            async function fetchSingleBookedRoomsCounts() {
                try {
                    const response = await fetch('get_guest_room_count.php');
                    const data = await response.text(); // Read response as text
                    console.log("Response:", data);

                    // Check if response contains success message
                    if (data.includes("successfully")) {
                        console.log("Count updated successfully!");
                        // Optionally, you can reload the page or update the UI here
                    } else {
                        console.error("Error updating count:", data);
                        // Optionally, handle the error or display a message to the user
                    }
                } catch (error) {
                    console.error('Error fetching initial room count:', error);
                    // Optional additional error handling (e.g., display error message to user)
                }
            }
        });
    </script>

    <!-- Fetching Available rooms of Single rooms -->
    <!-- Removal of this script doesn't update the adminrooms available count -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var availableRoomCount; // Declare availableRoomCount variable

            function fetchAvailableRoomCount() {
                fetch('get_available_room_count.php')
                    .then(response => response.json())
                    .then(data => {
                        console.log("Available room count updated:", data.message);
                        if (data && data.message !== undefined) {
                            // Assuming the server response includes the available room count in the message
                            const match = data.message.match(/(\d+)/); // Extract the first number found in the message
                            if (match && match[0] !== undefined) {
                                updateAvailableRoomCount(parseInt(match[0], 10));
                            } // Corrected by closing the if block properly
                        } else {
                            console.error('Error: Invalid data received from server');
                        }
                    })
                    .catch(error => console.error('Error fetching available room count:', error));
            }

            fetchAvailableRoomCount();

        });
    </script>

    <!-- Fetching Available rooms of Double rooms -->
    <!-- Removal of this script doesn't update the adminrooms available count -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var availableRoomCount; // Declare availableRoomCount variable

            function fetchAvailableRoomCountDouble() {
                fetch('get_available_room_count_double.php')
                    .then(response => response.json())
                    .then(data => {
                        console.log("Available room count updated:", data.message);
                        if (data && data.message !== undefined) {
                            // Assuming the server response includes the available room count in the message
                            const match = data.message.match(/(\d+)/); // Extract the first number found in the message
                            if (match && match[0] !== undefined) {
                                updateAvailableRoomCountDouble(parseInt(match[0], 10));
                            } // Corrected by closing the if block properly
                        } else {
                            console.error('Error: Invalid data received from server');
                        }
                    })
                    .catch(error => console.error('Error fetching available room count:', error));
            }

            fetchAvailableRoomCountDouble();

        });
    </script>

    <!-- Fetching Available rooms of Triple rooms -->
    <!-- Removal of this script doesn't update the adminrooms available count -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var availableRoomCount; // Declare availableRoomCount variable

            function fetchAvailableRoomCountTriple() {
                fetch('get_available_room_count_triple.php')
                    .then(response => response.json())
                    .then(data => {
                        console.log("Available room count updated:", data.message);
                        if (data && data.message !== undefined) {
                            // Assuming the server response includes the available room count in the message
                            const match = data.message.match(/(\d+)/); // Extract the first number found in the message
                            if (match && match[0] !== undefined) {
                                updateAvailableRoomCountTriple(parseInt(match[0], 10));
                            } // Corrected by closing the if block properly
                        } else {
                            console.error('Error: Invalid data received from server');
                        }
                    })
                    .catch(error => console.error('Error fetching available room count:', error));
            }

            fetchAvailableRoomCountTriple();

        });
    </script>

    <!-- Fetching Available rooms of Quad rooms -->
    <!-- Removal of this script doesn't update the adminrooms available count -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var availableRoomCount; // Declare availableRoomCount variable

            function fetchAvailableRoomCountQuad() {
                fetch('get_available_room_count_quad.php')
                    .then(response => response.json())
                    .then(data => {
                        console.log("Available room count updated:", data.message);
                        if (data && data.message !== undefined) {
                            // Assuming the server response includes the available room count in the message
                            const match = data.message.match(/(\d+)/); // Extract the first number found in the message
                            if (match && match[0] !== undefined) {
                                updateAvailableRoomCountQuad(parseInt(match[0], 10));
                            } // Corrected by closing the if block properly
                        } else {
                            console.error('Error: Invalid data received from server');
                        }
                    })
                    .catch(error => console.error('Error fetching available room count:', error));
            }

            fetchAvailableRoomCountQuad();

        });
    </script>

    <!-- Fetching Available rooms of Family rooms -->
    <!-- Removal of this script doesn't update the adminrooms available count -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var availableRoomCount; // Declare availableRoomCount variable

            function fetchAvailableRoomCountFamily() {
                fetch('get_available_room_count_family.php')
                    .then(response => response.json())
                    .then(data => {
                        console.log("Available room count updated:", data.message);
                        if (data && data.message !== undefined) {
                            // Assuming the server response includes the available room count in the message
                            const match = data.message.match(/(\d+)/); // Extract the first number found in the message
                            if (match && match[0] !== undefined) {
                                updateAvailableRoomCountFamily(parseInt(match[0], 10));
                            } // Corrected by closing the if block properly
                        } else {
                            console.error('Error: Invalid data received from server');
                        }
                    })
                    .catch(error => console.error('Error fetching available room count:', error));
            }

            fetchAvailableRoomCountFamily();

        });
    </script>

    <!-- Fetching Available rooms of King rooms -->
    <!-- Removal of this script doesn't update the adminrooms available count -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var availableRoomCount; // Declare availableRoomCount variable

            function fetchAvailableRoomCountKing() {
                fetch('get_available_room_count_king.php')
                    .then(response => response.json())
                    .then(data => {
                        console.log("Available room count updated:", data.message);
                        if (data && data.message !== undefined) {
                            // Assuming the server response includes the available room count in the message
                            const match = data.message.match(/(\d+)/); // Extract the first number found in the message
                            if (match && match[0] !== undefined) {
                                updateAvailableRoomCountKing(parseInt(match[0], 10));
                            } // Corrected by closing the if block properly
                        } else {
                            console.error('Error: Invalid data received from server');
                        }
                    })
                    .catch(error => console.error('Error fetching available room count:', error));
            }

            fetchAvailableRoomCountKing();

        });
    </script>

    <!-- Fetching Available rooms of Queen rooms -->
    <!-- Removal of this script doesn't update the adminrooms available count -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var availableRoomCount; // Declare availableRoomCount variable

            function fetchAvailableRoomCountQueen() {
                fetch('get_available_room_count_queen.php')
                    .then(response => response.json())
                    .then(data => {
                        console.log("Available room count updated:", data.message);
                        if (data && data.message !== undefined) {
                            // Assuming the server response includes the available room count in the message
                            const match = data.message.match(/(\d+)/); // Extract the first number found in the message
                            if (match && match[0] !== undefined) {
                                updateAvailableRoomCountQueen(parseInt(match[0], 10));
                            } // Corrected by closing the if block properly
                        } else {
                            console.error('Error: Invalid data received from server');
                        }
                    })
                    .catch(error => console.error('Error fetching available room count:', error));
            }

            fetchAvailableRoomCountQueen();

        });
    </script>

    <!-- Fetching Available rooms of Guest rooms -->
    <!-- Removal of this script doesn't update the adminrooms available count -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var availableRoomCount; // Declare availableRoomCount variable

            function fetchAvailableRoomCountGuest() {
                fetch('get_available_room_count_guest.php')
                    .then(response => response.json())
                    .then(data => {
                        console.log("Available room count updated:", data.message);
                        if (data && data.message !== undefined) {
                            // Assuming the server response includes the available room count in the message
                            const match = data.message.match(/(\d+)/); // Extract the first number found in the message
                            if (match && match[0] !== undefined) {
                                updateAvailableRoomCountGuest(parseInt(match[0], 10));
                            } // Corrected by closing the if block properly
                        } else {
                            console.error('Error: Invalid data received from server');
                        }
                    })
                    .catch(error => console.error('Error fetching available room count:', error));
            }
            fetchAvailableRoomCountGuest();

        });
    </script>
    <!-- Top Scroll and view details-->
    <script src="js/home.js"></script>
</body>

</html>