<?php
session_start();
include("db.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['nme'];
    $gmails = $_POST['mails'];
    $numb = $_POST['numbe'];
    $addre = $_POST['addre'];
    $ad = $_POST['adu'];
    $ch = $_POST['chil'];
    $rtype = $_POST['roomty'];
    $rprice = $_POST['roompr'];
    $chinn = $_POST['checkIn'];
    $choutt = $_POST['checkOut'];
    $totalDays = $_POST['totalDays'];
}
if (!empty($gmails) && !empty($password) && !is_numeric($gmails)) {
    $query = "insert into reservation (name, email, phone, address, adults, children, roomtype, roomprice, checkin, checkout, totdays) values ('$name', '$gmails', '$numb', '$addre', '$ad', '$ch', '$rtype', '$rprice', '$chinn', '$choutt', '$totalDays')";
    mysqli_query($con, $query);
    echo "<script type='text/javascript'>alert('Room Reserved successfully...'); setTimeout(function(){ window.location.href = 'admindash.php' }, 1000);</script>";
}
// echo phpversion(); 8.2.12
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <script src="https://www.google.com/jsapi"></script> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Dheen</title>
    <link rel="icon" href="Images/admin/dheen-straight.jpg">
    <!-- <script defer src="js/main.js"></script> -->
    <!-- Tailwind css link -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Icon import link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- CSS Link -->
    <style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
    body {
            font-family: 'sarabun';
        }
        /* body {
            cursor: url("icons/cursor.svg"), auto;
        } */
        /* Scroll bar */
        ::-webkit-scrollbar {
            width: 6px;
            height: 8px;
            background-color: #fff;
        }

        ::-webkit-scrollbar-thumb {
            background-color: rgb(156 163 175);
        }

        /* Scroll behaviour */
        html {
            scroll-behavior: smooth;
        }

        /* Style the tab */
        .tab {
            float: left;
            width: 296px;
            height: 660px;
            border-right: 3px solid rgb(243 244 246);
            ;
        }

        /* Style the buttons inside the tab */
        .tab button {
            display: block;
            color: black;
            padding: 22px 16px;
            width: 100%;
            text-align: left;
            cursor: pointer;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: rgb(243 244 246);
        }

        /* Create an active/current "tab button" class */
        .tab button.active {
            background-color: rgb(229 231 235);
            /* background-color: rgb(220 252 231); green */
            border-inline-end: 6px solid #2a2a2a;
        }

        /* Style the tab content */
        .tabcontent {
            float: left;
            padding: 0px 12px;
            width: 80%;
            border-left: none;
            height: 666px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class=" bg-white overflow-y-hidden">
    <!-- Navigation -->
    <nav class=" px-[86px] flex items-center px-6 sticky top-0 shadow-lg bg-gray-50 py-[20px] z-30">
        <div class="text-black text-nowrap text-[26px] font-semibold">Hotel Dheen</div>
        <div class="container flex justify-end">
            <div class="flex items-center space-x-8 font-normal">

                <div class="relative inline-block text-left z-40">
                    <img id="dropdown-button" src="Images/admin/dheen-straight.jpg" alt="admin" class=" w-[36px] h-[36px] outline outline-gray-200 outline-offset-4 rounded-full hover:cursor-pointer inline-flex">

                    <div id="dropdown-menu" class="hidden origin-top-right absolute right-0 mt-1 w-[130px] rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">

                        <div class="py-1" role="none">

                            <a href="index.php" class="text-gray-700 block px-6 py-2 text-sm hover:bg-gray-100 flex" role="menuitem" tabindex="-1" id="menu-item-3">
                                <span class="material-symbols-outlined text-[19px]">
                                    logout
                                </span>
                                <p class=" ml-2 mt-[-2px] text-[15px]">Logout</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </nav>
    <!-- Vertical Tabs Starts-->
    <div class="tab sticky left-0">
        <button class="tablinks" onclick="openCity(event, 'Dashboard')" id="defaultOpen">
            <div class=" flex flex-col items-center justify-center">
                <img src="icons/dash.png" alt="Dashboard" class="w-[26px] h-[26px]">
                <p class="">Dashboard</p>
            </div>
        </button>

        <button class="tablinks" onclick="openCity(event, 'Registration')">
            <div class=" flex flex-col items-center justify-center">
                <img src="icons/people.png" alt="Registration" class="w-[26px] h-[26px]">
                <p class="">Registration</p>
            </div>
        </button>

        <button class="tablinks" onclick="openCity(event, 'Reservation')">
            <div class=" flex flex-col items-center justify-center">
                <img src="icons/registration-form.png" alt="Reservation" class="w-[26px] h-[26px]">
                <p class="">Reservation</p>
            </div>
        </button>

        <button class="tablinks" onclick="openCity(event, 'Rooms')">
            <div class=" flex flex-col items-center justify-center">
                <img src="icons/bad.png" alt="Rooms" class="w-[26px] h-[26px]">
                <p class="">Rooms</p>
            </div>
        </button>

        <button class="tablinks" onclick="openCity(event, 'Staffs')">
            <div class=" flex flex-col items-center justify-center">
                <img src="icons/hotel.png" alt="Staffs" class="w-[26px] h-[26px]">
                <p class="">Staffs</p>
            </div>
        </button>

        <button class="tablinks" onclick="openCity(event, 'Queries')">
            <div class=" flex flex-col items-center justify-center">
                <img src="icons/chat-bubbles-with-ellipsis.png" alt="Guest Queries" class="w-[26px] h-[26px]">
                <p class="">Guest Queries</p>
            </div>
        </button>
    </div>
    <!-- Vertical Tabs Ends -->
<!-- Dashboard Starts -->
    <div id="Dashboard" class="tabcontent overflow-y-hidden overflow-x-hidden bg-gray-100 pb-6">
        <?php
        // Query to fetch the counts
        $queryRegistration = "SELECT COUNT(*) AS guestCount FROM signup";
        $queryStaffs = "SELECT COUNT(*) AS staffsCount FROM staffs";
        $queryGuestQueries = "SELECT COUNT(*) AS guestQueriesCount FROM contactus";
        $queryReservation = "SELECT COUNT(*) AS guestReservation FROM reservation";

        // Execute the queries
        $resultRegistration = mysqli_query($con, $queryRegistration);
        $resultStaffs = mysqli_query($con, $queryStaffs);
        $resultGuestQueries = mysqli_query($con, $queryGuestQueries);
        $resultReservation = mysqli_query($con, $queryReservation);

        // Fetch counts from the results
        $rowRegistration = mysqli_fetch_assoc($resultRegistration);
        $rowStaffs = mysqli_fetch_assoc($resultStaffs);
        $rowGuestQueries = mysqli_fetch_assoc($resultGuestQueries);
        $rowReservation = mysqli_fetch_assoc($resultReservation);
        ?>
        <!-- <div>Total Guests: <?php echo $rowRegistration['guestCount']; ?></div>
    <div>Total Staffs: <?php echo $rowStaffs['staffsCount']; ?></div>
    <div>Guest Queries: <?php echo $rowGuestQueries['guestQueriesCount']; ?></div> -->

        <div class="grid grid-cols-4 ml-6 mt-4">
            <div class="bg-white shadow-xl w-[260px] h-[140px] rounded-md flex flex-col justify-start">
                <p class="text-[18px] font-semibold text-gray-600 text-start mt-2 ml-4">Total Reservation</p>
                <div class="flex items-center justify-center space-x-14 mt-2 p-2">
                    <p class="text-[34px] font-semibold text-black"><?php echo $rowReservation['guestReservation']; ?></p>
                    <div class=" p-4 hover:bg-gray-300 bg-gray-200 rounded-full">
                        <img src="icons/bad.png" alt="Guest Queries" class="w-[36px] h-[36px]">
                    </div>
                </div>
            </div>
            <div class="bg-white shadow-xl w-[260px] h-[140px] rounded-md flex flex-col justify-start">
                <p class="text-[18px] font-semibold text-gray-600 text-start mt-2 ml-4">Guests Registered</p>
                <div class="flex items-center justify-center space-x-14 mt-2 p-2">
                    <p class="text-[34px] font-semibold text-black"><?php echo $rowRegistration['guestCount']; ?></p>
                    <div class=" p-4 hover:bg-gray-300 bg-gray-200 rounded-full">
                        <img src="icons/people.png" alt="peoples" class="w-[36px] h-[36px]">
                    </div>
                </div>
            </div>
            <div class="bg-white shadow-xl w-[260px] h-[140px] rounded-md flex flex-col justify-start">
                <p class="text-[18px] font-semibold text-gray-600 text-start mt-2 ml-4">Staffs</p>
                <div class="flex items-center justify-center space-x-14 mt-2 p-2">
                    <p class="text-[34px] font-semibold text-black"><?php echo $rowStaffs['staffsCount']; ?></p>
                    <div class=" p-4 hover:bg-gray-300 bg-gray-200 rounded-full">
                        <img src="icons/hotel.png" alt="staffs" class="w-[36px] h-[36px]">
                    </div>
                </div>
            </div>
            <div class="bg-white shadow-xl w-[260px] h-[140px] rounded-md flex flex-col justify-start">
                <p class="text-[18px] font-semibold text-gray-600 text-start mt-2 ml-4">Guest Queries</p>
                <div class="flex items-center justify-center space-x-14 mt-2 p-2">
                    <p class="text-[34px] font-semibold text-black"><?php echo $rowGuestQueries['guestQueriesCount']; ?></p>
                    <div class=" p-4 hover:bg-gray-300 bg-gray-200 rounded-full">
                        <img src="icons/chat-bubbles-with-ellipsis.png" alt="Guest Queries" class="w-[36px] h-[36px]">
                    </div>
                </div>
            </div>
        </div>

        <div class="flex ml-6 mt-4 space-x-6 overflow-y-hidden pb-6 bg-gray-100">
            <div class=" flex flex-col gap-y-4 justify-start w-[544px] h-[450px] bg-white shadow-xl rounded-md">
                <p class="text-[18px] font-semibold text-gray-600 text-start mt-3 mb-0 ml-4">Rooms</p>
                <div class="flex items-center justify-start mt-[-10px] p-[10px] bg-gray-100 hover:bg-gray-200 rounded-md mx-2">
                    <p class="text-[16px] font-semibold text-gray-600 text-start ml-[52px] mr-[52px]">Type</p>
                    <p class="text-[16px] font-semibold text-gray-600 text-start ml-[52px] mr-[52px]">Available</p>
                    <p class="text-[16px] font-semibold text-gray-600 text-start ml-[46px] mr-[46px]">Booked</p>
                </div>
                <?php
                // Query to fetch the counts
                $singleRoomAvailable = "SELECT availablerooms FROM adminrooms WHERE id = 1";
                $singleRoomBooked = "SELECT bookedrooms FROM adminrooms WHERE id = 1";
                // Execute the queries
                $singleRoomExecute = mysqli_query($con, $singleRoomAvailable);
                $singleRoomBookedExecute = mysqli_query($con, $singleRoomBooked);
                // Fetch counts from the results
                $singleRoomFetchAvailable = mysqli_fetch_assoc($singleRoomExecute);
                $singleRoomFetchBooked = mysqli_fetch_assoc($singleRoomBookedExecute);
                ?>
                <?php
                // Query to fetch the counts
                $doubleRoomAvailable = "SELECT availablerooms FROM adminrooms WHERE id = 2";
                $doubleRoomBooked = "SELECT bookedrooms FROM adminrooms WHERE id = 2";
                // Execute the queries
                $doubleRoomExecute = mysqli_query($con, $doubleRoomAvailable);
                $doubleRoomBookedExecute = mysqli_query($con, $doubleRoomBooked);
                // Fetch counts from the results
                $doubleRoomFetchAvailable = mysqli_fetch_assoc($doubleRoomExecute);
                $doubleRoomFetchBooked = mysqli_fetch_assoc($doubleRoomBookedExecute);
                ?>
                <?php
                // Query to fetch the counts
                $tripleRoomAvailable = "SELECT availablerooms FROM adminrooms WHERE id = 3";
                $tripleRoomBooked = "SELECT bookedrooms FROM adminrooms WHERE id = 3";
                // Execute the queries
                $tripleRoomExecute = mysqli_query($con, $tripleRoomAvailable);
                $tripleRoomBookedExecute = mysqli_query($con, $tripleRoomBooked);
                // Fetch counts from the results
                $tripleRoomFetchAvailable = mysqli_fetch_assoc($tripleRoomExecute);
                $tripleRoomFetchBooked = mysqli_fetch_assoc($tripleRoomBookedExecute);
                ?>
                <?php
                // Query to fetch the counts
                $quadRoomAvailable = "SELECT availablerooms FROM adminrooms WHERE id = 4";
                $quadRoomBooked = "SELECT bookedrooms FROM adminrooms WHERE id = 4";
                // Execute the queries
                $quadoomExecute = mysqli_query($con, $quadRoomAvailable);
                $quadRoomBookedExecute = mysqli_query($con, $quadRoomBooked);
                // Fetch counts from the results
                $quadRoomFetchAvailable = mysqli_fetch_assoc($quadoomExecute);
                $quadRoomFetchBooked = mysqli_fetch_assoc($quadRoomBookedExecute);
                ?>
                <?php
                // Query to fetch the counts
                $familyRoomAvailable = "SELECT availablerooms FROM adminrooms WHERE id = 5";
                $familyRoomBooked = "SELECT bookedrooms FROM adminrooms WHERE id = 5";
                // Execute the queries
                $familyRoomExecute = mysqli_query($con, $familyRoomAvailable);
                $familyRoomBookedExecute = mysqli_query($con, $familyRoomBooked);
                // Fetch counts from the results
                $familyRoomFetchAvailable = mysqli_fetch_assoc($familyRoomExecute);
                $familyRoomFetchBooked = mysqli_fetch_assoc($familyRoomBookedExecute);
                ?>
                <?php
                // Query to fetch the counts
                $kingRoomAvailable = "SELECT availablerooms FROM adminrooms WHERE id = 6";
                $kingRoomBooked = "SELECT bookedrooms FROM adminrooms WHERE id = 6";
                // Execute the queries
                $kingRoomExecute = mysqli_query($con, $kingRoomAvailable);
                $kingRoomBookedExecute = mysqli_query($con, $kingRoomBooked);
                // Fetch counts from the results
                $kingRoomFetchAvailable = mysqli_fetch_assoc($kingRoomExecute);
                $kingRoomFetchBooked = mysqli_fetch_assoc($kingRoomBookedExecute);
                ?>
                <?php
                // Query to fetch the counts
                $queenRoomAvailable = "SELECT availablerooms FROM adminrooms WHERE id = 7";
                $queenRoomBooked = "SELECT bookedrooms FROM adminrooms WHERE id = 7";
                // Execute the queries
                $queenRoomExecute = mysqli_query($con, $queenRoomAvailable);
                $queenRoomBookedExecute = mysqli_query($con, $queenRoomBooked);
                // Fetch counts from the results
                $queenRoomFetchAvailable = mysqli_fetch_assoc($queenRoomExecute);
                $queenRoomFetchBooked = mysqli_fetch_assoc($queenRoomBookedExecute);
                ?>
                <?php
                // Query to fetch the counts
                $guestRoomAvailable = "SELECT availablerooms FROM adminrooms WHERE id = 8";
                $guestRoomBooked = "SELECT bookedrooms FROM adminrooms WHERE id = 8";
                // Execute the queries
                $guestRoomExecute = mysqli_query($con, $guestRoomAvailable);
                $guestRoomBookedExecute = mysqli_query($con, $guestRoomBooked);
                // Fetch counts from the results
                $guestRoomFetchAvailable = mysqli_fetch_assoc($guestRoomExecute);
                $guestRoomFetchBooked = mysqli_fetch_assoc($guestRoomBookedExecute);
                ?>
                <div class="flex justify-start space-x-8 mt-[-8px]">
                    <div class=" text-left space-y-5 px-6 py-[6px] ml-2">
                        <div class=" flex justify-start items-center gap-x-4 ml-2 ">
                            <div class=" w-[16px] h-[16px] rounded-full bg-[#707070]"></div>
                            <p class="text-[15px] text-gray-500 font-medium">Single</p>
                        </div>
                        <div class=" flex justify-start items-center gap-x-4 ml-2">
                            <div class=" w-[16px] h-[16px] rounded-full bg-[#404040]"></div>
                            <p class="text-[15px] text-gray-500 font-medium">Double</p>
                        </div>
                        <div class=" flex justify-start items-center gap-x-4 ml-2">
                            <div class=" w-[16px] h-[16px] rounded-full bg-[#787878]"></div>
                            <p class="text-[15px] text-gray-500 font-medium">Triple</p>
                        </div>
                        <div class=" flex justify-start items-center gap-x-4 ml-2">
                            <div class=" w-[16px] h-[16px] rounded-full bg-[#606060]"></div>
                            <p class="text-[15px] text-gray-500 font-medium">Quad</p>
                        </div>
                        <div class=" flex justify-start items-center gap-x-4 ml-2">
                            <div class=" w-[16px] h-[16px] rounded-full bg-[#484848]"></div>
                            <p class="text-[15px] text-gray-500 font-medium">Family</p>
                        </div>
                        <div class=" flex justify-start items-center gap-x-4 ml-2">
                            <div class=" w-[16px] h-[16px] rounded-full bg-[#585858]"></div>
                            <p class="text-[15px] text-gray-500 font-medium">King</p>
                        </div>
                        <div class=" flex justify-start items-center gap-x-4 ml-2">
                            <div class=" w-[16px] h-[16px] rounded-full bg-[#686868]"></div>
                            <p class="text-[15px] text-gray-500 font-medium">Queen</p>
                        </div>
                        <div class=" flex justify-start items-center gap-x-4 ml-2">
                            <div class=" w-[16px] h-[16px] rounded-full bg-[#505050]"></div>
                            <p class="text-[15px] text-gray-500 font-medium">Guest</p>
                        </div>
                    </div>
                    <div class="flex flex-col text-left space-y-3 pl-[32px] pr-[40px] py-[2px]">
                        <p class="text-[20px] font-semibold"><?php echo $singleRoomFetchAvailable['availablerooms']; ?>/10</p>
                        <p class="text-[20px] font-semibold"><?php echo $doubleRoomFetchAvailable['availablerooms']; ?>/10</p>
                        <p class="text-[20px] font-semibold"><?php echo $tripleRoomFetchAvailable['availablerooms']; ?>/10</p>
                        <p class="text-[20px] font-semibold"><?php echo $quadRoomFetchAvailable['availablerooms']; ?>/10</p>
                        <p class="text-[20px] font-semibold"><?php echo $familyRoomFetchAvailable['availablerooms']; ?>/10</p>
                        <p class="text-[20px] font-semibold"><?php echo $kingRoomFetchAvailable['availablerooms']; ?>/10</p>
                        <p class="text-[20px] font-semibold"><?php echo $queenRoomFetchAvailable['availablerooms']; ?>/10</p>
                        <p class="text-[20px] font-semibold"><?php echo $guestRoomFetchAvailable['availablerooms']; ?>/10</p>
                    </div>
                    <div class="flex flex-col text-left space-y-3 pl-[54px] pr-[40px] py-[2px]">
                        <p class="text-[20px] font-semibold"><?php echo $singleRoomFetchBooked['bookedrooms']; ?></p>
                        <p class="text-[20px] font-semibold"><?php echo $doubleRoomFetchBooked['bookedrooms']; ?></p>
                        <p class="text-[20px] font-semibold"><?php echo $tripleRoomFetchBooked['bookedrooms']; ?></p>
                        <p class="text-[20px] font-semibold"><?php echo $quadRoomFetchBooked['bookedrooms']; ?></p>
                        <p class="text-[20px] font-semibold"><?php echo $familyRoomFetchBooked['bookedrooms']; ?></p>
                        <p class="text-[20px] font-semibold"><?php echo $kingRoomFetchBooked['bookedrooms']; ?></p>
                        <p class="text-[20px] font-semibold"><?php echo $queenRoomFetchBooked['bookedrooms']; ?></p>
                        <p class="text-[20px] font-semibold"><?php echo $guestRoomFetchBooked['bookedrooms']; ?></p>
                    </div>
                </div>
            </div>
            <div class="chart-container bg-white w-[546px] h-[450px] rounded-md shadow-xl">
                <p class="text-[18px] font-semibold text-gray-600 text-start mt-3 ml-4">Reserved Rooms</p>
                <div class=" doughnut-chart-container w-[430px] h-[390px] ml-8 flex items-start justify-center">
                    <canvas id="doughnut-chartcanvas" class=""></canvas>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div>
    </div>
    </div>
    </div>
    </div>
    <script src="doughnut.js"></script>
<!-- Dashboard Ends -->
    <!-- Registration starts -->
    <div id="Registration" class="tabcontent overflow-y-scroll bg-gray-100">
        <form action="register_deleteall.php" method="POST">
            <div class="sticky top-0 pt-[8px] pb-[7px] bg-gray-100 ml-[-18px] w-[1860px] pl-[12px] pr-2 z-10 flex justify-start item-start space-x-4">
                <button type="submit" name="register_delete_all" class=" ml-2 flex items-center justify-center space-x-2 px-4 py-2 bg-red-500 hover:bg-red-600 rounded-md text-white" onclick="confirmDelete()">
                    <span class="material-symbols-outlined text-[20px] text-white mt-[1px]">
                        delete
                    </span>
                    <span id="deleteBtnTextRegister">Delete</span>
                </button>
                <button id="add-user-button" class=" text-nowrap ml-1 flex items-center justify-center text-[15px] bg-blue-600 hover:bg-blue-700 hover:cursor-pointer w-[146px] py-[11px] px-2 text-white font-normal rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" mr-2 w-[20px] h-[20px] text-white font-semibold">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                    </svg>
                    Add User
                </button>
                <div>
                    <?php
                    // Query to fetch the counts
                    $queryRegistration = "SELECT COUNT(*) AS guestCount FROM signup";

                    // Execute the queries
                    $resultRegistration = mysqli_query($con, $queryRegistration);

                    // Fetch counts from the results
                    $rowRegistration = mysqli_fetch_assoc($resultRegistration);
                    ?>
                    <p class="text-[16px] font-semibold text-gray-600 text-start mt-2 ml-[-4px]">Total Registration: <?php echo $rowRegistration['guestCount']; ?></p>
                </div>
            </div>
            <table class="w-full mt-0 border-collapse bg-white text-nowrap overflow-x-scroll">
                <thead class=" sticky top-[58px] text-left bg-gray-200">
                    <tr class=" space-x-8 border-b border-b-2 border-gray-300 text-nowrap">
                        <th class="py-4 px-4">
                            <input type="checkbox" id="selectAllRegister" class=" w-[14px] h-[14px]" onclick="changeDeleteBtnTextRegister()">
                        </th>
                        <th class="py-4 px-4">Id</th>
                        <th class="py-4 px-4">First Name</th>
                        <th class="py-4 px-6">Last Name</th>
                        <th class="py-4 px-2">Email</th>
                        <th class="py-4 px-6">Phone</th>
                        <th class="py-4 px-2">Address</th>
                        <th class="py-4 px-6">Username</th>
                        <th class="py-4 px-6">Password</th>
                        <th class="py-4 px-6">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "select * from signup";
                    $run = mysqli_query($con, $query);

                    $id = 1;
                    while ($row = mysqli_fetch_array($run)) {
                        $id = $row['id'];
                        $firstname = $row['firstname'];
                        $lastname = $row['lastname'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                        $address = $row['address'];
                        $username = $row['username'];
                        $password = $row['password'];
                    ?>
                        <tr class=" border-b-2 text-nowrap">
                            <td class="py-4 px-4">
                                <input type="checkbox" name="register_delete_id[]" value="<?= $row['id']; ?>" class=" rowCheckboxRegister w-[14px] h-[14px]">
                            </td>
                            <td class="py-4 px-4"><?php echo $id ?></td>
                            <td class="py-4 px-4"><?php echo $firstname ?></td>
                            <td class="py-4 px-6"><?php echo $lastname ?></td>
                            <td class="py-4 px-2"><?php echo $email ?></td>
                            <td class="py-4 px-6"><?php echo $phone ?></td>
                            <td class="py-4 px-2"><?php echo $address ?></td>
                            <td class="py-4 px-6"><?php echo $username ?></td>
                            <td class="py-4 px-6"><?php echo $password ?></td>
                            <td>
                                <button class="ml-8">
                                    <span onclick="openRegisterEditPopup(<?php echo $id ?>,'<?php echo $firstname ?>','<?php echo $lastname ?>','<?php echo $email ?>','<?php echo $phone ?>','<?php echo $address ?>','<?php echo $username ?>','<?php echo $password ?>')" class="material-symbols-outlined text-[20px] p-2 rounded-full hover:bg-green-100 text-green-500 hover:text-green-600">
                                        Edit
                                    </span>
                                </button>
                            </td>
                        </tr>
                    <?php
                        $id++;
                    } ?>
                </tbody>
            </table>
        </form>
    </div>
    <!-- Registration script for delete all records -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var selectAllCheckboxRegistration = document.getElementById('selectAllRegister');
            var rowCheckboxesRegistration = document.querySelectorAll('.rowCheckboxRegister');

            selectAllCheckboxRegistration.addEventListener('change', function(e) {
                for (var i = 0; i < rowCheckboxesRegistration.length; i++) {
                    rowCheckboxesRegistration[i].checked = this.checked;
                }
            });
        });
    </script>
    <!-- Registration script for changing delete button text based on checkbox selection -->
    <script>
        function changeDeleteBtnTextRegister() {
            var deleteBtnTextRegister = document.getElementById('deleteBtnTextRegister');
            var selectAllCheckboxRegistration = document.getElementById('selectAllRegister');

            if (selectAllCheckboxRegistration.checked) {
                deleteBtnTextRegister.textContent = "Delete all";
            } else {
                deleteBtnTextRegister.textContent = "Delete";
            }
        }
    </script>
    <div id="userEditPopup" class="modal hidden fixed overflow-hidden top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-50 z-30">
        <form action="edit_user.php" method="POST" class="modal-content relative text-left w-[700px] h-[490px] mx-auto mt-2 py-8 px-10 bg-white rounded-md shadow-lg">
            <span class=" absolute text-white bg-red-500 hover:bg-red-600 px-[10px] pb-1 rounded-md top-[10px] right-[10px] z-20 text-xl cursor-pointer" onclick="closeUserEditPopup()">&times;</span>
            <h1 class="text-[24px] font-semibold text-center mt-[-10px] mb-2">Edit User Information</h1>
            <div class="grid grid-cols-2 gap-x-16">
                <div class="mt-4">
                    <!-- Add this hidden field for user_id -->
                    <input type="hidden" name="user_id" id="user_id" value="">

                    <label for="firstname" class="block text-[15px] text-gray-500 mb-1">First Name</label>
                    <input type="text" pattern="[a-zA-Z\s']+" name="fn" id="fname" class="text-[15px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm" required>

                    <label for="lastname" class="block text-[15px] text-gray-500 mt-3 mb-1">Last Name</label>
                    <input type="text" pattern="[a-zA-Z\s']+" name="ln" id="lname" class="text-[15px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm" required>

                    <label for="email" class="block text-[15px] text-gray-500 mt-3 mb-1">Email</label>
                    <input type="email" name="mail" id="emails" placeholder="eg: dheen@gmail.com" class="text-[15px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm" required>

                    <label for="phone" class="block text-[15px] text-gray-500 mt-4 mb-1">Phone Number</label>
                    <input type="tel" name="number" id="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="enter 10 digits" class="text-[15px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm" required>
                </div>
                <div>
                    <label for="address" class="block text-[15px] text-gray-500 mt-4 mb-1">Address</label>
                    <textarea rows="4" cols="50" pattern="[a-zA-Z\s']+" name="add" id="address" class="resize-none focus:outline-none focus:border-green-600 focus:border-2 w-full h-[120px] p-2 border border-gray-400 rounded-sm" required></textarea>
                    <!-- In address field adding 67 or less than characters cannot affect the editing options -->

                    <label for="username" class="block text-[15px] text-gray-500 mt-2 mb-1">Username</label>
                    <input type="text" pattern="[a-zA-Z]+" name="uname" id="username" class="text-[15px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm" required>

                    <label for="password" class="block text-[15px] text-gray-500 mt-3 mb-1">Password</label>
                    <input type="password" name="pass" id="password" class="text-[15px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm" required>

                </div>
            </div>
            <button type="submit" value="submit" name="submit" class="text-[15px] w-full bg-green-600 hover:bg-green-700 text-center text-white font-normal py-2 px-4 rounded-md mt-8">Update User</button>
    </div>
    </form>
    <!-- Popup for registration to edit and delete -->
    <script>
        function openRegisterEditPopup(usId, usfirstname, uslastname, usemail, usphone, usaddress, ususername, uspass) {
            // Populate the form fields with existing data
            document.getElementById('user_id').value = usId;
            document.getElementById('fname').value = usfirstname;
            document.getElementById('lname').value = uslastname;
            document.getElementById('emails').value = usemail;
            document.getElementById('phone').value = usphone;
            document.getElementById('address').value = usaddress;
            document.getElementById('username').value = ususername;
            document.getElementById('password').value = uspass;
            // Show the popup
            document.getElementById('userEditPopup').classList.remove('hidden');
            event.preventDefault(); // Prevent default form submission
        }

        function closeUserEditPopup() {
            // Close the popup
            document.getElementById('userEditPopup').classList.add('hidden');
        }
    </script>
    <div id="add-popup" class="fixed hidden top-10 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-50 z-20">
        <form action="add_register_user.php" method="POST" class="relative text-left w-[700px] h-[490px] mx-auto mt-2 py-8 px-10 bg-white rounded-md shadow-lg">
            <button id="close-add-popup" class="absolute text-white bg-red-500 hover:bg-red-600 px-[10px] pb-1 rounded-md top-[10px] right-[10px] z-20 text-xl">×</button>
            <h1 class="text-[24px] font-semibold text-center mt-[-10px] mb-2">User Information</h1>
            <div class="grid grid-cols-2 gap-x-16">
                <div class="mt-4">
                    <!-- Add this hidden field for user_id -->
                    <input type="hidden" name="user_id" id="user_id" value="">

                    <label for="firstname" class="block text-[15px] text-gray-500 mb-1">First Name</label>
                    <input type="text" pattern="[a-zA-Z\s']+" name="fn" id="fname" class="text-[15px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm" required>

                    <label for="lastname" class="block text-[15px] text-gray-500 mt-3 mb-1">Last Name</label>
                    <input type="text" pattern="[a-zA-Z\s']+" name="ln" id="lname" class="text-[15px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm" required>

                    <label for="email" class="block text-[15px] text-gray-500 mt-3 mb-1">Email</label>
                    <input type="email" name="mail" id="emails" placeholder="eg: dheen@gmail.com" class="text-[15px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm" required>

                    <label for="phone" class="block text-[15px] text-gray-500 mt-4 mb-1">Phone Number</label>
                    <input type="tel" name="number" id="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="enter 10 digits" class="text-[15px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm" required>
                </div>
                <div>
                    <label for="address" class="block text-[15px] text-gray-500 mt-4 mb-1">Address</label>
                    <textarea rows="4" cols="50" pattern="[a-zA-Z\s']+" name="add" id="address" class="resize-none focus:outline-none focus:border-green-600 focus:border-2 w-full h-[120px] p-2 border border-gray-400 rounded-sm" required></textarea>
                    <!-- In address field adding 67 or less than characters cannot affect the editing options -->

                    <label for="username" class="block text-[15px] text-gray-500 mt-2 mb-1">Username</label>
                    <input type="text" pattern="[a-zA-Z]+" name="uname" id="username" class="text-[15px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm" required>

                    <label for="password" class="block text-[15px] text-gray-500 mt-3 mb-1">Password</label>
                    <input type="password" name="pass" id="password" class="text-[15px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm" required>
                </div>
            </div>
            <button type="submit" value="submit" name="add-submit" class="text-[15px] w-full bg-green-600 hover:bg-green-700 text-center text-white font-normal py-2 px-4 rounded-md mt-8">Add User</button>
        </form>
    </div>
    <!-- JavaScript to toggle the visibility of the "Add" popup -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var addRegisterButton = document.getElementById('add-user-button');
            var registerPopup = document.getElementById('add-popup');
            var closeAddPopupButton = document.getElementById('close-add-popup');
            // Open popup when clicking the "Add user" button
            addRegisterButton.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default form submission
                registerPopup.classList.remove('hidden'); // Show the popup
            });
            // Close popup when clicking the close button
            closeAddPopupButton.addEventListener('click', function() {
                registerPopup.classList.add('hidden'); // Hide the popup
            });
        });
    </script>
    <!-- Registration ends -->
<!-- Reservation Starts -->
    <div id="Reservation" class="tabcontent overflow-y-scroll bg-gray-100">
        <form action="reserve_deleteall.php" method="POST">
            <div class="sticky top-0 py-[8px] bg-gray-100 ml-[-18px] w-[2348px] pl-[12px] pr-2 z-10 flex justify-start item-start space-x-4">
                <button type="submit" name="reserve_delete_all" class=" ml-2 flex items-center justify-center space-x-2 px-4 py-2 bg-red-500 hover:bg-red-600 rounded-md text-white" onclick="confirmDeleteReserve()">
                    <span class="material-symbols-outlined text-[20px] text-white mt-[1px]">
                        delete
                    </span>
                    <span id="deleteBtnTextReserve">Delete</span>
                </button>
                <button id="add-reserve-button" class=" text-nowrap ml-1 flex items-center justify-center text-[15px] bg-blue-600 hover:bg-blue-700 hover:cursor-pointer w-[162px] py-[10px] px-2 text-white font-normal rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-4 h-4" class=" mr-1 w-[26px] h-[25px] text-white font-semibold">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    New Reservation
                </button>
                <div>
                    <?php
                    // Query to fetch the counts
                    $queryReservation = "SELECT COUNT(*) AS guestReservation FROM reservation";

                    // Execute the queries
                    $resultReservation = mysqli_query($con, $queryReservation);

                    // Fetch counts from the results
                    $rowReservation = mysqli_fetch_assoc($resultReservation);
                    ?>
                    <p class="text-[16px] font-semibold text-gray-600 text-start mt-2 ml-[-4px]">Total Reservation: <?php echo $rowReservation['guestReservation']; ?></p>
                </div>
            </div>
            <table class=" w-full mt-0 border-collapse bg-white text-nowrap overflow-x-scroll mb-8">
                <thead class=" sticky top-[60px] text-left bg-gray-200">
                    <tr class=" space-x-8 border-b border-b-2 border-gray-300">
                        <th class="py-4 px-4">
                            <input type="checkbox" id="selectAllReserve" class=" w-[14px] h-[14px]" onclick="changeDeleteBtnTextReserve()">
                        </th>
                        <th class="py-4 px-4">Id</th>
                        <th class="py-4 px-4">Name</th>
                        <th class="py-4 px-2">Email</th>
                        <th class="py-4 px-6">Phone</th>
                        <th class="py-4 px-2">Address</th>
                        <th class="py-4 px-6">Adults</th>
                        <th class="py-4 px-6">Children</th>
                        <th class="py-4 px-6">Room Type</th>
                        <th class="py-4 px-6">Room Price</th>
                        <th class="py-4 px-6">CheckIn</th>
                        <th class="py-4 px-6">CheckOut</th>
                        <th class="py-4 px-6">Total Days</th>
                        <th class="py-4 px-6">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "select * from reservation";
                    $run = mysqli_query($con, $query);

                    $id = 1;
                    while ($row = mysqli_fetch_array($run)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                        $address = $row['address'];
                        $adults = $row['adults'];
                        $children = $row['children'];
                        $roomtype = $row['roomtype'];
                        $roomprice = $row['roomprice'];
                        $checkin = $row['checkin'];
                        $checkout = $row['checkout'];
                        $totdays = $row['totdays'];
                    ?>
                        <tr class=" border-b-2">
                            <td class="py-4 px-4">
                                <input type="checkbox" name="reserve_delete_id[]" value="<?= $row['id']; ?>" class=" rowCheckboxReserve w-[14px] h-[14px]">
                            </td>
                            <td class="py-4 px-4"><?php echo $id ?></td>
                            <td class="py-4 px-4"><?php echo $name ?></td>
                            <td class="py-4 px-2"><?php echo $email ?></td>
                            <td class="py-4 px-6"><?php echo $phone ?></td>
                            <td class="py-4 px-2 "><?php echo $address ?></td>
                            <td class="py-4 px-6"><?php echo $adults ?></td>
                            <td class="py-4 px-6"><?php echo $children ?></td>
                            <td class="py-4 px-6"><?php echo $roomtype ?></td>
                            <td class="py-4 px-6"><?php echo $roomprice ?></td>
                            <td class="py-4 px-6"><?php echo $checkin ?></td>
                            <td class="py-4 px-6"><?php echo $checkout ?></td>
                            <td class="py-4 px-6"><?php echo $totdays ?></td>
                            <td>
                                <button class="ml-8">
                                    <span onclick="openReserveEditPopup(<?php echo $id ?>,'<?php echo $name ?>','<?php echo $email ?>','<?php echo $phone ?>','<?php echo $address ?>','<?php echo $adults ?>','<?php echo $children ?>', '<?php echo $roomtype ?>', '<?php echo $roomprice ?>', '<?php echo $checkin ?>', '<?php echo $checkout ?>', '<?php echo $totdays ?>')" class="material-symbols-outlined text-[20px] p-2 rounded-full hover:bg-green-100 text-green-500 hover:text-green-600">
                                        Edit
                                    </span>
                                </button>
                            </td>
                        </tr>
                    <?php
                        $id++;
                    } ?>
                </tbody>
            </table>
        </form>
    </div>
    <!-- Reservation script for delete all records -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var selectAllCheckboxReservation = document.getElementById('selectAllReserve');
            var rowCheckboxesReservation = document.querySelectorAll('.rowCheckboxReserve');

            selectAllCheckboxReservation.addEventListener('change', function(e) {
                for (var i = 0; i < rowCheckboxesReservation.length; i++) {
                    rowCheckboxesReservation[i].checked = this.checked;
                }
            });
        });
    </script>
    <!-- Reservation script for changing delete button text based on checkbox selection -->
    <script>
        function changeDeleteBtnTextReserve() {
            var deleteBtnTextReserve = document.getElementById('deleteBtnTextReserve');
            var selectAllCheckboxReservation = document.getElementById('selectAllReserve');

            if (selectAllCheckboxReservation.checked) {
                deleteBtnTextReserve.textContent = "Delete all";
            } else {
                deleteBtnTextReserve.textContent = "Delete";
            }
        }
    </script>
    <div id="reserveEditPopup" class="modal hidden fixed overflow-hidden top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-50 z-30">
        <form id="reservation-form" action="edit_reservation.php" method="POST" class="modal-content relative text-left w-[700px] h-[658px] mx-auto mt-4 py-8 px-10 bg-white rounded-md shadow-lg">
            <span class=" absolute text-white bg-red-500 hover:bg-red-600 px-[10px] pb-1 rounded-md top-[10px] right-[10px] z-20 text-xl cursor-pointer" onclick="closeReserveEditPopup()">&times;</span>
            <h1 class="text-[24px] font-semibold text-center mt-[-10px] mb-2">Edit Reservation Details</h1>
            <div class="grid grid-cols-2 gap-x-16">
                <div class="mt-4">
                    <!-- Add this hidden field for user_id -->
                    <input type="hidden" name="reserve_id" id="reserve_id" value="">

                    <label for="firstname" class="block text-[15px] text-gray-500 mb-1">Name</label>
                    <input type="text" pattern="[a-zA-Z\s']+" name="nme" id="Name" class="text-[15px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm" required>

                    <label for="email" class="block text-[15px] text-gray-500 mt-3 mb-1 mt-4 mb-1">Email</label>
                    <input type="email" name="mails" id="emailss" placeholder="eg: dheen@gmail.com" class="text-[15px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm" required>

                    <label for="phone" class="block text-[16px] text-gray-500 mt-4 mb-1">Phone Number</label>
                    <input type="tel" name="numbe" id="phon" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="enter 10 digits" class="text-[15px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm" required>

                    <label for="address" class="block text-gray-500 mt-4 mb-1">Address</label>
                    <textarea rows="4" cols="50" pattern="[a-zA-Z\s']+" name="addre" id="addres" class="resize-none text-wrap w-[276px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[206px] p-2 border border-gray-400 rounded-sm" required></textarea>

                </div>
                <div>
                    <label for="Adults" class="block text-[15px] text-gray-500 mt-4 mb-1">Adults</label>
                    <select name="adu" id="adul" class="text-[15px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm" required>
                        <option value="">Select Adults</option>
                        <option value="1" id="option1">1</option>
                        <option value="2" id="option2">2</option>
                        <option value="3" id="option3">3</option>
                        <option value="4" id="option4">4</option>
                        <option value="5" id="option5">5</option>
                    </select>
                    <label for="Children" class="block text-[15px] text-gray-500 mt-4 mb-1">Children</label>
                    <select name="chil" id="childr" class="text-[15px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm">
                        <option value="">Select Children</option>
                        <option value="0" id="option-0">0</option>
                        <option value="1" id="option-1">1</option>
                        <option value="2" id="option-2">2</option>
                        <option value="3" id="option-3">3</option>
                        <option value="4" id="option-4">4</option>
                        <option value="5" id="option-5">5</option>
                    </select>

                    <label for="RoomType" class="block text-[15px] text-gray-500 mt-4 mb-1">Room Type</label>
                    <select name="roomty" id="roomTyp" class="text-[15px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm data-room-type" required>
                        <option value="Single">Single</option>
                        <option value="Double">Double</option>
                        <option value="Triple">Triple</option>
                        <option value="Quad">Quad</option>
                        <option value="Family">Family</option>
                        <option value="King">King</option>
                        <option value="Queen">Queen</option>
                        <option value="Guest">Guest</option>
                    </select>

                    <label for="RoomPrice" class="block text-[15px] text-gray-500 mt-4 mb-1">Room Price</label>
                    <select name="roompr" id="roomPric" class="text-[15px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm data-room-price" required>
                        <option value="₹1,800">₹1,800</option>
                        <option value="₹2,200">₹2,200</option>
                        <option value="₹4,400">₹4,400</option>
                        <option value="₹6,000">₹6,000</option>
                        <option value="₹8,500">₹8,500</option>
                        <option value="₹2,400">₹2,400</option>
                        <option value="₹2,600">₹2,600</option>
                        <option value="₹9,700">₹9,700</option>
                    </select>

                    <label for="Checkin" class="block text-[15px] text-gray-500 mt-4 mb-1">Check-In</label>
                    <input type="date" name="checkIn" id="checkIn" class="text-[15px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm" required>

                    <label for="Checkout" class="block text-[15px] text-gray-500 mt-4 mb-1">Check-Out</label>
                    <input type="date" name="checkOut" id="checkOut" class="text-[15px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm" required>

                    <!-- Hidden input field for total number of days -->
                    <!-- <label for="TotalDayss" class="block text-[16px] mt-4 mb-1">Total Days</label> -->
                    <input type="hidden" name="totalDays" id="totalDays">
                </div>
            </div>
            <button type="submit" value="submit" name="submit" class="text-[15px] w-full bg-green-600 hover:bg-green-700 text-center text-white font-normal py-2 px-4 rounded-md mt-6">Update Reservation</button>
    </div>
    </form>
    <!-- Popup for reservation to edit and delete -->
    <script>
        function openReserveEditPopup(rsId, rsname, rsemail, rsphone, rsaddress, rsadult, rschildren, rstype, rsprice, rscin, rscout, rstot) {
            // Populate the form fields with existing data
            document.getElementById('reserve_id').value = rsId;
            document.getElementById('Name').value = rsname;
            document.getElementById('emailss').value = rsemail;
            document.getElementById('phon').value = rsphone;
            document.getElementById('addres').value = rsaddress;
            document.getElementById('adul').value = rsadult;
            document.getElementById('childr').value = rschildren;
            document.getElementById('roomTyp').value = rstype;
            document.getElementById('roomPric').value = rsprice;
            document.getElementById('checkIn').value = rscin;
            document.getElementById('checkOut').value = rscout;
            document.getElementById('totalDays').value = rstot;
            // Show the popup
            document.getElementById('reserveEditPopup').classList.remove('hidden');
            event.preventDefault(); // Prevent default form submission
            // Redirect to add_reservation.php
        }

        function closeReserveEditPopup() {
            // Close the popup
            document.getElementById('reserveEditPopup').classList.add('hidden');
        }
    </script>
    <div id="reserve-popup" class=" hidden fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-50 z-50">
        <form id="reservations-form" action="add_reservation.php" method="POST" class=" relative text-left w-[700px] h-[650px] mx-auto mt-2 py-8 px-10  bg-white rounded-md shadow-lg">
            <button id="close-reserve-popup" class="absolute text-white bg-red-500 hover:bg-red-600 px-[10px] pb-1 rounded-md top-[10px] right-[10px] z-20 text-xl">×</button>
            <h1 class="text-[24px] font-semibold text-center mt-[-10px] mb-2">New Reservation Form</h1>
            <div class="grid grid-cols-2 gap-x-16">
                <div class="mt-4">
                    <!-- Add this hidden field for user_id -->
                    <input type="hidden" name="reserve_id" id="reserve_id" value="">

                    <label for="Name" class="block text-[15px] text-gray-500 mb-1">Name</label>
                    <input type="text" pattern="[a-zA-Z\s']+" name="nme" id="Name" class=" text-[15px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm" required>

                    <label for="emails" class="block text-[15px] text-gray-500 mt-3 mb-1">Email</label>
                    <input type="email" name="mails" id="emailss" placeholder="eg: dheen@gmail.com" class=" text-[15px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm" required>

                    <label for="phone" class="block text-[15px] text-gray-500 mt-4 mb-1">Phone Number</label>
                    <input type="tel" name="numbe" id="phon" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="enter 10 digits" class=" text-[15px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm" required>

                    <label for="address" class="block text-[15px] text-gray-500 mt-4 mb-1">Address</label>
                    <textarea rows="4" cols="50" pattern="[a-zA-Z\s']+" name="addre" id="addres" class="resize-none text-wrap w-[276px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[206px] p-2 border border-gray-400 rounded-sm" required></textarea>
                    <!-- In address field adding 67 or less than characters cannot affect the editing options -->
                </div>
                <div>
                    <label for="Adults" class="block text-[15px] text-gray-500 mt-4 mb-1">Adults</label>
                    <select name="adu" id="adul" class=" text-[15px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm" required>
                        <option value="">Select Adults</option>
                        <option value="1" id="option1">1</option>
                        <option value="2" id="option2">2</option>
                        <option value="3" id="option3">3</option>
                        <option value="4" id="option4">4</option>
                        <option value="5" id="option5">5</option>
                    </select>
                    <label for="Children" class="block text-[15px] text-gray-500 mt-3 mb-1">Children</label>
                    <select name="chil" id="childr" class=" text-[15px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm">
                        <option value="">Select Children</option>
                        <option value="0" id="option-0">0</option>
                        <option value="1" id="option-1">1</option>
                        <option value="2" id="option-2">2</option>
                        <option value="3" id="option-3">3</option>
                        <option value="4" id="option-4">4</option>
                        <option value="5" id="option-5">5</option>
                    </select>
                    <label for="RoomType" class="block text-[15px] text-gray-500 mt-4 mb-1">Room Type</label>
                    <select name="roomty" id="roomTyp" class="focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm data-room-type" required>
                        <option value="Single">Single</option>
                        <option value="Double">Double</option>
                        <option value="Triple">Triple</option>
                        <option value="Quad">Quad</option>
                        <option value="Family">Family</option>
                        <option value="King">King</option>
                        <option value="Queen">Queen</option>
                        <option value="Guest">Guest</option>
                    </select>

                    <label for="RoomPrice" class="block text-[15px] text-gray-500 mt-4 mb-1">Room Price</label>
                    <select name="roompr" id="roomPric" class="focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm data-room-price" required>
                        <option value="₹1,800">₹1,800</option>
                        <option value="₹2,200">₹2,200</option>
                        <option value="₹4,400">₹4,400</option>
                        <option value="₹6,000">₹6,000</option>
                        <option value="₹8,500">₹8,500</option>
                        <option value="₹2,400">₹2,400</option>
                        <option value="₹2,600">₹2,600</option>
                        <option value="₹9,700">₹9,700</option>
                    </select>

                    <label for="checkIn" class="block text-[15px] text-gray-500 mt-4 mb-1">Check-In</label>
                    <input type="date" name="checkin" id="checkin" class=" text-[15px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm" required>

                    <label for="checkOut" class="block text-[15px] text-gray-500 mt-4 mb-1">Check-Out</label>
                    <input type="date" name="checkout" id="checkout" class=" text-[15px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm" required>

                    <!-- Hidden input field for total number of days -->
                    <!-- <label for="TotalDayss" class="block text-[15px] mt-4 mb-1">Total Days</label> -->
                    <input type="hidden" name="totalDays" id="totalDays">

                </div>
            </div>
            <button type="submit" value="submit" name="add-submit" class="text-[15px] w-full bg-green-600 hover:bg-green-700 text-center text-white font-normal py-2 px-4 rounded-md mt-6">Add Reservation</button>
        </form>
    </div>
    <!-- JavaScript to toggle the visibility of the "Add" popup for Reservation -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var addReserveButton = document.getElementById('add-reserve-button');
            var reservePopup = document.getElementById('reserve-popup');
            var closeReservePopupButton = document.getElementById('close-reserve-popup');

            // Open popup when clicking the "new reservation" button
            addReserveButton.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default form submission
                reservePopup.classList.remove('hidden'); // Show the popup
            });

            // Close popup when clicking the close button
            closeReservePopupButton.addEventListener('click', function() {
                reservePopup.classList.add('hidden'); // Hide the popup
            });
        });
    </script>
    <!-- Date Validation for edit registration-form-->
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

            // Event listener for form submission
            form.addEventListener('submit', function(event) {
                // Validate check-out date is after check-in date
                if (checkOutInput.value < checkInInput.value) {
                    alert('Check-out date must be after or equal to check-in date');
                    event.preventDefault(); // Prevent form submission
                } else {
                    // Calculate total days
                    const checkInDate = new Date(checkInInput.value);
                    const checkOutDate = new Date(checkOutInput.value);

                    const totalDays = Math.round((checkOutDate - checkInDate) / (1000 * 60 * 60 * 24)) + 1; // Calculate total days including check-in day

                    // Add the total days to the hidden input field
                    document.getElementById('totalDays').value = totalDays;
                }
            });

            // Event listener for check-in date change
            checkInInput.addEventListener('change', function() {
                // Update minimum selectable date for check-out date
                checkOutInput.min = this.value;
            });
        });
    </script>
    <!-- Date Validation for new reservation-form-->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the form element
            const forms = document.getElementById('reserve-popup');

            // Get the check-in and check-out date inputs
            const checkInInputs = document.getElementById('checkin');
            const checkOutInputs = document.getElementById('checkout');

            // Get today's date
            const todays = new Date().toISOString().split('T')[0];

            // Set min attribute for check-in input to todays's date
            checkInInputs.min = todays;

            // Event listener for form submission
            forms.addEventListener('submit', function(event) {
                // Validate check-out date is after check-in date
                if (checkOutInputs.value < checkInInputs.value) {
                    alert('Check-out date must be after or equal to check-in date');
                    event.preventDefault(); // Prevent form submission
                } else {
                    // Calculate total days
                    const checkInDates = new Date(checkInInputs.value);
                    const checkOutDates = new Date(checkOutInputs.value);

                    const totalDay = Math.round((checkOutDates - checkInDates) / (1000 * 60 * 60 * 24)) + 1; // Calculate total days including check-in day

                    // Add the total days to the hidden input field
                    document.getElementById('totalDay').value = totalDay;
                }
            });

            // Event listener for check-in date change
            checkInInputs.addEventListener('change', function() {
                // Update minimum selectable date for check-out date
                checkOutInputs.min = this.value;
            });
        });
    </script>
    <!-- Reservation Ends -->
<!-- Admin Rooms Starts -->
    <div id="Rooms" class="tabcontent overflow-y-scroll bg-gray-100">
        <div>
            <!-- <div class=" mx-auto flex justify-center px-16 container text-center bg-gray-200 mt-10 pt-12 pb-12 rounded-xl"> -->

            <div class=" relative px-6 gap-x-16 gap-y-3 grid grid-cols-4 grid-rows-2 mt-2 mb-8">
                <!-- Room 1 -->
                <!-- Room card with form for storing room information -->
                <div data-room-id="1" class="totalrooms room-card bg-[#fafafa] relative w-[240px] h-[300px] rounded-lg shadow-lg p-2 z-1">
                    <form id="single-room-form" class="store-room-form" method="post" action="store_room_info.php">
                        <img src="Images/rooms/single.jpg" alt="image" class=" w-full h-[170px] rounded-md">
                        <div class="flex justify-between items-center px-1 mt-2">
                            <p class="roomtype text-start font-semibold text-[15px]">Single Room</p>
                            <p class="roomprice font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[1px] rounded-md">₹1,800</p>
                        </div>
                        <div class="flex item-center justify-between pr-1">
                            <div class=" flex items-center justify-start space-x-1 px-1 mt-[12px]">
                                <div class="text-[12px] font-medium">(4.5)</div>
                                <div class=" flex items-center justify-start">
                                    <img src="icons/star.png" alt="ratings" class="w-[14px] h-[14px]">
                                </div>
                            </div>
                            <p class="booked booked-rooms text-[12px] mt-[12px] text-gray-600 font-medium pl-1">Booked: <span id="booked-single-rooms-count" class="font-medium">0</span></p>
                            <p class="available-rooms text-[12px] mt-[11px] text-gray-600 font-medium">Available: <span id="available-rooms-count" class="font-medium">0</span></p>
                            <!-- Hidden input field to store the booked single room count -->
                            <input type="hidden" id="booked-single-rooms-hidden" name="booked_single_rooms_count" value="0">
                        </div>
                        <div class="flex items-center justify-between px-1 mt-[10px]">
                            <p class="totalrooms total-rooms text-[12px] mt-[8px] text-gray-600 font-medium pl-0">Total Rooms: <span id="total-rooms-count" class="font-medium">0</span></p>
                            <div>
                                <button id="add-single-view" class="view-details-button-single border-2 rounded-md pr-[12px] pl-[12px] pt-[6px] pb-[6px] border-gray-400 text-gray-800 text-[12px] font-semibold hover:shadow-md">View Details</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Room 2 -->
                <div data-room-id="2" class="totalrooms room-card bg-[#fafafa] relative w-[240px] h-[300px] rounded-lg shadow-lg p-2 z-1">
                    <form id="double-room-form" class="store-room-form" method="post" action="store_room_info.php">
                        <img src="Images/rooms/double.jpg" alt="image" class=" w-full h-[170px] rounded-md">
                        <div class="flex justify-between items-center px-1 mt-2">
                            <p class="roomtype text-start font-semibold text-[15px]">Double Room</p>
                            <p class="roomprice font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[1px] rounded-md">₹2,200</p>
                        </div>
                        <div class="flex item-center justify-between pr-1">
                            <div class=" flex items-center justify-start space-x-1 px-1 mt-[12px]">
                                <div class="text-[12px] font-medium">(4.5)</div>
                                <div class=" flex items-center justify-start">
                                    <img src="icons/star.png" alt="ratings" class="w-[14px] h-[14px]">
                                </div>
                            </div>

                            <p class="booked booked-rooms-double text-[12px] mt-[12px] text-gray-600 font-medium pl-1">Booked: <span id="booked-double-rooms-count" class="font-medium">0</span></p>
                            <p class="available-rooms-double text-[12px] mt-[11px] text-gray-600 font-medium">Available: <span id="available-rooms-count" class="font-medium">0</span></p>
                            <!-- Hidden input field to store the booked double room count -->
                            <input type="hidden" id="booked-double-rooms-hidden" name="booked_double_rooms_count" value="0">
                        </div>
                        <div class="flex items-center justify-between px-1 mt-[10px]">
                            <p class="totalrooms total-rooms text-[12px] mt-[8px] text-gray-600 font-medium pl-0">Total Rooms: <span id="total-rooms-count" class="font-medium">0</span></p>
                            <div>
                                <button id="add-double-view" class="view-details-button-double border-2 rounded-md pr-[12px] pl-[12px] pt-[6px] pb-[6px] border-gray-400 text-gray-800 text-[12px] font-semibold hover:shadow-md">View Details</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Room 3 -->
                <div data-room-id="3" class="room-card bg-[#fafafa] relative w-[240px] h-[300px] rounded-lg shadow-lg p-2 z-1">
                    <form id="triple-room-form" class="store-room-form" method="post" action="store_room_info.php">
                        <img src="Images/rooms/triple.jpg" alt="image" class=" w-full h-[170px] rounded-md">
                        <div class="flex justify-between items-center px-1 mt-2">
                            <p class="roomtype text-start font-semibold text-[15px]">Triple Room</p>
                            <p class="roomprice font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[1px] rounded-md">₹4,400</p>
                        </div>
                        <div class="flex item-center justify-between pr-1">
                            <div class=" flex items-center justify-start space-x-1 px-1 mt-[12px]">
                                <div class="text-[12px] font-medium">(4.5)</div>
                                <div class=" flex items-center justify-start">
                                    <img src="icons/star.png" alt="ratings" class="w-[14px] h-[14px]">
                                </div>
                            </div>
                            <p class="booked booked-rooms-triple text-[12px] mt-[12px] text-gray-600 font-medium pl-1">Booked: <span id="booked-triple-rooms-count" class="font-medium">0</span></p>
                            <p class="available-rooms-triple text-[12px] mt-[11px] text-gray-600 font-medium">Available: <span id="available-rooms-count" class="font-medium">0</span></p>
                            <!-- Hidden input field to store the booked single room count -->
                            <input type="hidden" id="booked-triple-rooms-hidden" name="booked_triple_rooms_count" value="0">
                        </div>
                        <div class="flex items-center justify-between px-1 mt-[10px]">
                            <p class="totalrooms total-rooms text-[12px] mt-[8px] text-gray-600 font-medium pl-0">Total Rooms: <span id="total-rooms-count" class="font-medium">0</span></p>
                            <div>
                                <button id="add-triple-view" class="view-details-button-triple border-2 rounded-md pr-[12px] pl-[12px] pt-[6px] pb-[6px] border-gray-400 text-gray-800 text-[12px] font-semibold hover:shadow-md">View Details</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Room 4 -->
                <div data-room-id="4" class="room-card bg-[#fafafa] relative w-[240px] h-[300px] rounded-lg shadow-lg p-2 z-1">
                    <form id="quad-room-form" class="store-room-form" method="post" action="store_room_info.php">
                        <img src="Images/rooms/quad.jpg" alt="image" class=" w-full h-[170px] rounded-md">
                        <div class="flex justify-between items-center px-1 mt-2">
                            <p class="roomtype text-start font-semibold text-[15px]">Quad Room</p>
                            <p class="roomprice font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[1px] rounded-md">₹6,000</p>
                        </div>
                        <div class="flex item-center justify-between pr-1">
                            <div class=" flex items-center justify-start space-x-1 px-1 mt-[12px]">
                                <div class="text-[12px] font-medium">(4.5)</div>
                                <div class=" flex items-center justify-start">
                                    <img src="icons/star.png" alt="ratings" class="w-[14px] h-[14px]">
                                </div>
                            </div>
                            <p class="booked booked-rooms-quad text-[12px] mt-[12px] text-gray-600 font-medium pl-1">Booked: <span id="booked-quad-rooms-count" class="font-medium">0</span></p>
                            <p class="available-rooms-quad text-[12px] mt-[11px] text-gray-600 font-medium">Available: <span id="available-rooms-count" class="font-medium">0</span></p>
                            <!-- Hidden input field to store the booked single room count -->
                            <input type="hidden" id="booked-quad-rooms-hidden" name="booked_quad_rooms_count" value="0">
                        </div>
                        <div class="flex items-center justify-between px-1 mt-[10px]">
                            <p class="totalrooms total-rooms text-[12px] mt-[8px] text-gray-600 font-medium pl-0">Total Rooms: <span id="total-rooms-count" class="font-medium">0</span></p>
                            <div>
                                <button id="add-quad-view" class="view-details-button-quad border-2 rounded-md pr-[12px] pl-[12px] pt-[6px] pb-[6px] border-gray-400 text-gray-800 text-[12px] font-semibold hover:shadow-md">View Details</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Room 5 -->
                <div data-room-id="5" class="room-card bg-[#fafafa] relative w-[240px] h-[300px] rounded-lg shadow-lg p-2 z-1">
                    <form id="family-room-form" class="store-room-form" method="post" action="store_room_info.php">
                        <img src="Images/rooms/family.jpg" alt="image" class=" w-full h-[170px] rounded-md">
                        <div class="flex justify-between items-center px-1 mt-2">
                            <p class="roomtype text-start font-semibold text-[15px]">Family Room</p>
                            <p class="roomprice font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[1px] rounded-md">₹8,500</p>
                        </div>
                        <div class="flex item-center justify-between pr-1">
                            <div class=" flex items-center justify-start space-x-1 px-1 mt-[12px]">
                                <div class="text-[12px] font-medium">(4.5)</div>
                                <div class=" flex items-center justify-start">
                                    <img src="icons/star.png" alt="ratings" class="w-[14px] h-[14px]">
                                </div>
                            </div>

                            <p class="booked booked-rooms-family text-[12px] mt-[12px] text-gray-600 font-medium pl-1">Booked: <span id="booked-family-rooms-count" class="font-medium">0</span></p>
                            <p class="available-rooms-family text-[12px] mt-[11px] text-gray-600 font-medium">Available: <span id="available-rooms-count" class="font-medium">0</span></p>
                            <!-- Hidden input field to store the booked single room count -->
                            <input type="hidden" id="booked-family-rooms-hidden" name="booked_family_rooms_count" value="0">
                        </div>
                        <div class="flex items-center justify-between px-1 mt-[10px]">
                            <p class="totalrooms total-rooms text-[12px] mt-[8px] text-gray-600 font-medium pl-0">Total Rooms: <span id="total-rooms-count" class="font-medium">0</span></p>
                            <div>
                                <button id="add-family-view" class="view-details-button-family border-2 rounded-md pr-[12px] pl-[12px] pt-[6px] pb-[6px] border-gray-400 text-gray-800 text-[12px] font-semibold hover:shadow-md">View Details</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Room 6 -->
                <div data-room-id="6" class="room-card bg-[#fafafa] relative w-[240px] h-[300px] rounded-lg shadow-lg p-2 z-1">
                    <form id="king-room-form" class="store-room-form" method="post" action="store_room_info.php">
                        <img src="Images/rooms/king.jpg" alt="image" class=" w-full h-[170px] rounded-md">
                        <div class="flex justify-between items-center px-1 mt-2">
                            <p class="roomtype text-start font-semibold text-[15px]">King Room</p>
                            <p class="roomprice font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[1px] rounded-md">₹2,400</p>
                        </div>
                        <div class="flex item-center justify-between pr-1">
                            <div class=" flex items-center justify-start space-x-1 px-1 mt-[12px]">
                                <div class="text-[12px] font-medium">(4.5)</div>
                                <div class=" flex items-center justify-start">
                                    <img src="icons/star.png" alt="ratings" class="w-[14px] h-[14px]">
                                </div>
                            </div>

                            <p class="booked booked-rooms-king text-[12px] mt-[12px] text-gray-600 font-medium pl-1">Booked: <span id="booked-king-rooms-count" class="font-medium">0</span></p>
                            <p class="available-rooms-king text-[12px] mt-[11px] text-gray-600 font-medium">Available: <span id="available-rooms-count" class="font-medium">0</span></p>
                            <!-- Hidden input field to store the booked single room count -->
                            <input type="hidden" id="booked-king-rooms-hidden" name="booked_king_rooms_count" value="0">
                        </div>
                        <div class="flex items-center justify-between px-1 mt-[10px]">
                            <p class="totalrooms total-rooms text-[12px] mt-[8px] text-gray-600 font-medium pl-0">Total Rooms: <span id="total-rooms-count" class="font-medium">0</span></p>
                            <div>
                                <button id="add-king-view" class="view-details-button-king border-2 rounded-md pr-[12px] pl-[12px] pt-[6px] pb-[6px] border-gray-400 text-gray-800 text-[12px] font-semibold hover:shadow-md">View Details</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Room 7 -->
                <div data-room-id="7" class="room-card bg-[#fafafa] relative w-[240px] h-[300px] rounded-lg shadow-lg p-2 z-1">
                    <form id="queen-room-form" class="store-room-form" method="post" action="store_room_info.php">
                        <img src="Images/rooms/queen.jpg" alt="image" class=" w-full h-[170px] rounded-md">
                        <div class="flex justify-between items-center px-1 mt-2">
                            <p class="roomtype text-start font-semibold text-[15px]">Queen Room</p>
                            <p class="roomprice font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[1px] rounded-md">₹2,600</p>
                        </div>
                        <div class="flex item-center justify-between pr-1">
                            <div class=" flex items-center justify-start space-x-1 px-1 mt-[12px]">
                                <div class="text-[12px] font-medium">(4.5)</div>
                                <div class=" flex items-center justify-start">
                                    <img src="icons/star.png" alt="ratings" class="w-[14px] h-[14px]">
                                </div>
                            </div>

                            <p class="booked booked-rooms-queen text-[12px] mt-[12px] text-gray-600 font-medium pl-1">Booked: <span id="booked-queen-rooms-count" class="font-medium">0</span></p>
                            <p class="available-rooms-queen text-[12px] mt-[11px] text-gray-600 font-medium">Available: <span id="available-rooms-count" class="font-medium">0</span></p>
                            <!-- Hidden input field to store the booked single room count -->
                            <input type="hidden" id="booked-queen-rooms-hidden" name="booked_queen_rooms_count" value="0">
                        </div>
                        <div class="flex items-center justify-between px-1 mt-[10px]">
                            <p class="totalrooms total-rooms text-[12px] mt-[8px] text-gray-600 font-medium pl-0">Total Rooms: <span id="total-rooms-count" class="font-medium">0</span></p>

                            <div>
                                <button id="add-queen-view" class="view-details-button-queen border-2 rounded-md pr-[12px] pl-[12px] pt-[6px] pb-[6px] border-gray-400 text-gray-800 text-[12px] font-semibold hover:shadow-md">View Details</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Room 8 -->
                <div data-room-id="8" class="room-card bg-[#fafafa] relative w-[240px] h-[300px] rounded-lg shadow-lg p-2 z-1">
                    <form id="guest-room-form" class="store-room-form" method="post" action="store_room_info.php">
                        <img src="Images/rooms/guest.jpg" alt="image" class=" w-full h-[170px] rounded-md">
                        <div class="flex justify-between items-center px-1 mt-2">
                            <p class="roomtype text-start font-semibold text-[15px]">Guest Room</p>
                            <p class="roomprice font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[1px] rounded-md">₹9,700</p>
                        </div>
                        <div class="flex item-center justify-between pr-1">
                            <div class=" flex items-center justify-start space-x-1 px-1 mt-[12px]">
                                <div class="text-[12px] font-medium">(4.5)</div>
                                <div class=" flex items-center justify-start">
                                    <img src="icons/star.png" alt="ratings" class="w-[14px] h-[14px]">
                                </div>
                            </div>
                            <p class="booked booked-rooms-guest text-[12px] mt-[12px] text-gray-600 font-medium pl-1">Booked: <span id="booked-guest-rooms-count" class="font-medium">0</span></p>
                            <p class="available-rooms-guest text-[12px] mt-[11px]  text-gray-600 font-medium">Available: <span id="available-rooms-count" class="font-medium">0</span></p>
                            <!-- Hidden input field to store the booked single room count -->
                            <input type="hidden" id="booked-guest-rooms-hidden" name="booked_guest_rooms_count" value="0">
                        </div>
                        <div class="flex items-center justify-between px-1 mt-[10px]">
                            <p class="totalrooms total-rooms text-[12px] mt-[8px] text-gray-600 font-medium pl-0">Total Rooms: <span id="total-rooms-count" class="font-medium">0</span></p>
                            <div>
                                <button id="add-guest-view" class="view-details-button-guest border-2 rounded-md pr-[12px] pl-[12px] pt-[6px] pb-[6px] border-gray-400 text-gray-800 text-[12px] font-semibold hover:shadow-md">View Details</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- Admin Rooms Ends -->

<!-- View Details Popup -->
<!-- View Details of Single Rooms -->
    <div id="view-single" class=" view-details-container-single hidden inset-0 fixed top-[-20px] w-full h-[800px] bg-black bg-opacity-50 z-50">
        <div class=" relative modal-content bg-white mx-auto mt-12 p-[40px] rounded-md w-[1000px] h-[660px]">
            <p class=" sticky bg-white absolute text-[24px] font-semibold z-10">Single Room</p>
            <button id="closePopupSingle" class=" absolute text-white bg-red-500 hover:bg-red-600 px-[10px] pb-1 rounded-md top-[10px] right-[10px] z-20 text-xl">×</button>
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
                        <p class="text-[14px] text-gray-600 font-normal text-justify">This comfortable single room offers 180 square feet of space, perfect for solo travelers. It features a single bed that can accommodate one guest comfortably. Stay connected with free Wi-Fi and enjoy air conditioning for a pleasant stay. We provide 24-hour room service for your convenience and daily housekeeping to keep your room fresh.
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
    <!-- JavaScript to toggle the visibility of the "Single room View Details" popup for Admin Rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var addSingleView = document.getElementById('add-single-view');
            var singleView = document.getElementById('view-single');
            var closeSingleViewButton = document.getElementById('closePopupSingle');

            // Open popup when clicking the "new reservation" button
            addSingleView.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default form submission
                singleView.classList.remove('hidden'); // Show the popup
            });

            // Close popup when clicking the close button
            closeSingleViewButton.addEventListener('click', function() {
                singleView.classList.add('hidden'); // Hide the popup
            });
        });
    </script>

    <!-- View Details of Double Rooms -->
    <div id="view-double" class=" view-details-container-double hidden inset-0 fixed top-[-20px] w-full h-[800px] bg-black bg-opacity-50 z-50">
        <div class=" relative modal-content bg-white mx-auto mt-12 p-[40px] rounded-md w-[1000px] h-[660px]">
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
                        <p class="text-gray-600 text-[14px] font-normal text-justify">
                            This double room offers 240 square feet of space, ideal for couples or small families. It features two comfortable double beds that can accommodate up to three guests. Stay connected with free Wi-Fi and enjoy air conditioning for a comfortable stay. We provide 24-hour room service for your convenience and daily housekeeping to keep your room fresh. Additionally, laundry service is available for your needs. The room is equipped with essential amenities like charging points, reading lamps, a telephone, a digital clock, a mirror, hangers, and a dustbin. Enjoy with the in-room TV and music system. For a restful sleep, two double beds with blankets and pillows are provided. Your safety and security are our priority. The room features digital locks, a fire extinguisher, and an emergency alarm. The private bathroom includes a water heater, shower, dustbin, and a western toilet.
                        </p>
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
    <!-- JavaScript to toggle the visibility of the "Double room View Details" popup for Admin Rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var addDoubleView = document.getElementById('add-double-view');
            var doubleView = document.getElementById('view-double');
            var closeDoubleViewButton = document.getElementById('closePopupDouble');

            // Open popup when clicking the "new reservation" button
            addDoubleView.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default form submission
                doubleView.classList.remove('hidden'); // Show the popup
            });

            // Close popup when clicking the close button
            closeDoubleViewButton.addEventListener('click', function() {
                doubleView.classList.add('hidden'); // Hide the popup
            });
        });
    </script>

    <!-- View Details of Triple Rooms -->
    <div id="view-triple" class=" view-details-container-triple hidden inset-0 fixed top-[-20px] w-full h-[800px] bg-black bg-opacity-50 z-50">
        <div class=" relative modal-content bg-white mx-auto mt-12 p-[40px] rounded-md w-[1000px] h-[660px]">
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
                        <p class="text-gray-600 text-[14px] font-normal text-justify">
                        This triple room offers space of 280 square feet, perfect for groups or families of up to five guests. It features three comfortable beds that can accommodate your entire party. Stay connected with free Wi-Fi and enjoy air conditioning for a pleasant stay. We provide 24-hour room service for your convenience and daily housekeeping to keep your room fresh. Additionally, laundry service is available for your needs.The room is equipped with essential amenities like charging points, hangers, a telephone, a work desk for productivity, reading lamps, a digital clock, a mirror, and a dustbin. Enjoy with the in-room TV and music system. For a restful sleep, three beds with blankets and pillows are provided. Your safety and security are our priority. The room features digital locks, a fire extinguisher, and an emergency alarm. The private bathroom includes a water heater, shower, shaving mirror, dustbin, and a western toilet.
                        </p>
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
    <!-- JavaScript to toggle the visibility of the "Triple room View Details" popup for Admin Rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var addTripleView = document.getElementById('add-triple-view');
            var tripleView = document.getElementById('view-triple');
            var closeTripleViewButton = document.getElementById('closePopupTriple');

            // Open popup when clicking the "new reservation" button
            addTripleView.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default form submission
                tripleView.classList.remove('hidden'); // Show the popup
            });

            // Close popup when clicking the close button
            closeTripleViewButton.addEventListener('click', function() {
                tripleView.classList.add('hidden'); // Hide the popup
            });
        });
    </script>
    <!-- View Details of Quad Rooms -->
    <div id="view-quad" class=" view-details-container-quad hidden inset-0 fixed top-[-20px] w-full h-[800px] bg-black bg-opacity-50 z-50">
        <div class=" relative modal-content bg-white mx-auto mt-12 p-[40px] rounded-md w-[1000px] h-[660px]">
            <p class=" sticky bg-white absolute text-[24px] font-semibold z-10">Quad Room</p>
            <button class=" absolute text-white bg-red-500 hover:bg-red-600 px-[10px] pb-1 rounded-md top-[10px] right-[10px] z-20 text-xl" id="closePopupQuad">×</button>
            <div class=" mt-4 absolute w-[960px] h-[540px] overflow-y-scroll overflow-x-hidden text-left text-wrap cursor-default"><!-- select-none to prevent text selection -->
                <div class=" flex space-x-6">
                    <div class="">
                        <img src="images/rooms/quad.jpg" alt="room1" class="w-[400px] h-[300px] rounded-md">
                        <div class=" flex items-center justify-center space-x-10 w-[400px] h-auto border-2 border-gray-200 rounded-lg p-4 mt-6">
                            <div class="flex items-center space-x-2">
                                <img src="icons/roomsize.png" alt="roomsize" class="w-[24px] h-[24px]">
                                <p class= " text-gray-500 text-[13px] font-semibold">310 sq.ft</p>
                            </div>
                            <div class="flex items-center space-x-2">
                                <img src="icons/bad.png" alt="bed" class="w-[24px] h-[24px]">
                                <p class= " text-gray-500 text-[13px] font-semibold">4 Beds</p>
                            </div>
                            <div class="flex items-center space-x-2">
                                <img src="icons/profile.png" alt="guest" class="w-[24px] h-[24px]">
                                <p class= " text-gray-500 text-[13px] font-semibold">Max 6 Guest</p>
                            </div>
                        </div>
                    </div>
                    <div class="pr-6 text-wrap">
                        <p class="text-black text-[16px] font-bold mt-[-6px] pb-1">About room</p>
                        <p class="text-gray-600 text-[14px] font-normal text-justify">This quad room offers 310 square feet of space, perfect for larger groups or families of up to six guests. It features four comfortable beds, providing ample sleeping arrangements for everyone. Stay connected with free Wi-Fi and enjoy air conditioning for a comfortable stay. We provide 24-hour room service for your convenience and daily housekeeping to keep your room fresh. Additionally, laundry service is available for your needs. The room is equipped with essential amenities like charging points, hangers, a telephone, a work desk for productivity, reading lamps, a digital clock, a mirror, and a dustbin. Enjoy with the in-room TV and music system. For a restful sleep, four beds with blankets and pillows are provided. Your safety and security are our priority. The room features digital locks, a fire extinguisher, and an emergency alarm. The private bathroom includes a water heater, shower, shaving mirror, dustbin, and a western toilet.</p>
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
    <!-- JavaScript to toggle the visibility of the "Quad room View Details" popup for Admin Rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var addQuadView = document.getElementById('add-quad-view');
            var quadView = document.getElementById('view-quad');
            var closeQuadViewButton = document.getElementById('closePopupQuad');

            // Open popup when clicking the "new reservation" button
            addQuadView.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default form submission
                quadView.classList.remove('hidden'); // Show the popup
            });

            // Close popup when clicking the close button
            closeQuadViewButton.addEventListener('click', function() {
                quadView.classList.add('hidden'); // Hide the popup
            });
        });
    </script>
    <!-- View Details of Family Rooms -->
    <div id="view-family" class=" view-details-container-family hidden inset-0 fixed top-[-20px] w-full h-[800px] bg-black bg-opacity-50 z-50">
        <div class=" relative modal-content bg-white mx-auto mt-12 p-[40px] rounded-md w-[1000px] h-[660px]">
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
                        <p class="text-gray-600 text-[14px] font-normal text-justify">This expansive(larger) family room boasts a generous 440 square feet, ideal for families or groups of up to eight guests. It features four comfortable family beds, providing ample sleeping space for everyone. Stay connected with free Wi-Fi and enjoy air conditioning for a comfortable stay. We provide 24-hour room service for your convenience and daily housekeeping to keep your room fresh. Additionally, laundry service is available for your needs. The room caters to families with essential amenities like charging points, hangers, a telephone, a work desk for productivity, reading lamps, a digital clock, a mirror, and a dustbin. Enjoy with the in-room TV and music system. For a restful sleep, four family beds with blankets and pillows are provided. Your safety and security are our priority. The room features digital locks, a fire extinguisher, and an emergency alarm. The private bathroom includes a water heater, shower, shaving mirror, dustbin, and a western toilet.</p>
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
    <!-- JavaScript to toggle the visibility of the "Family room View Details" popup for Admin Rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var addFamilyView = document.getElementById('add-family-view');
            var familyView = document.getElementById('view-family');
            var closeFamilyViewButton = document.getElementById('closePopupFamily');

            // Open popup when clicking the "new reservation" button
            addFamilyView.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default form submission
                familyView.classList.remove('hidden'); // Show the popup
            });

            // Close popup when clicking the close button
            closeFamilyViewButton.addEventListener('click', function() {
                familyView.classList.add('hidden'); // Hide the popup
            });
        });
    </script>
    <!-- View Details of King Rooms -->
    <div id="view-king" class="view-details-container-king hidden inset-0 fixed top-[-20px] w-full h-[800px] bg-black bg-opacity-50 z-50">
        <div class=" relative modal-content bg-white mx-auto mt-12 p-[40px] rounded-md w-[1000px] h-[660px]">
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
                        <p class="text-gray-600 text-[14px] font-normal text-justify">
                        This luxurious king room offers 260 square feet of space, perfect for couples seeking extra comfort or small groups up to three guests. It features two king-size beds, providing calm sleeping space for a relaxing stay. Stay connected with free Wi-Fi and enjoy air conditioning for a comfortable environment. We provide 24-hour room service for your convenience and daily housekeeping to keep your room fresh. Additionally, laundry service is available for your needs. The room caters to both productivity and relaxation with amenities like charging points, hangers, a work desk, reading lamps for comfortable reading, a telephone, a digital clock, a mirror, and a dustbin. Enjoy with the in-room TV and music system. For a restful sleep, two king-size beds with cozy blankets and pillows are provided. Your safety and security are our priority. The room features digital locks, a fire extinguisher, and an emergency alarm. The private bathroom includes a water heater, shower, shaving mirror, dustbin, and a western toilet.
                        </p>
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
    <!-- JavaScript to toggle the visibility of the "King room View Details" popup for Admin Rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var addKingView = document.getElementById('add-king-view');
            var kingView = document.getElementById('view-king');
            var closeKingViewButton = document.getElementById('closePopupKing');

            // Open popup when clicking the "new reservation" button
            addKingView.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default form submission
                kingView.classList.remove('hidden'); // Show the popup
            });

            // Close popup when clicking the close button
            closeKingViewButton.addEventListener('click', function() {
                kingView.classList.add('hidden'); // Hide the popup
            });
        });
    </script>
    <!-- View Details of Queen Rooms -->
    <div id="view-queen" class="view-details-container-queen hidden inset-0 fixed top-[-20px] w-full h-[800px] bg-black bg-opacity-50 z-50">
        <div class=" relative modal-content bg-white mx-auto mt-12 p-[40px] rounded-md w-[1000px] h-[660px]">
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
                        <p class="text-black text-[16px] font-bold mt-[-6px] pb-1">About the room</p>
                        <p class="text-gray-600 text-[14px] font-normal text-justify">
                        This comfortable queen room offers 220 square feet of space, perfect for couples or small groups of up to three guests. It features a plush queen-size bed, providing ample sleeping space for a relaxing stay. Stay connected with free Wi-Fi and enjoy air conditioning for a comfortable environment. We provide 24-hour room service for your convenience and daily housekeeping to keep your room fresh. Additionally, laundry service is available for your needs. The room with amenities like charging points, hangers, a work desk, reading lamps for comfortable reading, a telephone, a digital clock, a mirror, and a dustbin. Enjoy with the in-room TV and music system. For a restful sleep, a queen-size bed with cozy blankets and pillows are provided. Your safety and security are our priority. The room features digital locks, a fire extinguisher, and an emergency alarm. The private bathroom includes a water heater, shower, shaving mirror, dustbin, and a western toilet.
                        </p>
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
    <!-- JavaScript to toggle the visibility of the "Queen room View Details" popup for Admin Rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var addQueenView = document.getElementById('add-queen-view');
            var queenView = document.getElementById('view-queen');
            var closeQueenViewButton = document.getElementById('closePopupQueen');

            // Open popup when clicking the "new reservation" button
            addQueenView.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default form submission
                queenView.classList.remove('hidden'); // Show the popup
            });

            // Close popup when clicking the close button
            closeQueenViewButton.addEventListener('click', function() {
                queenView.classList.add('hidden'); // Hide the popup
            });
        });
    </script>
    <!-- View Details of Guest Rooms -->
    <div id="view-guest" class="view-details-container-guest hidden inset-0 fixed top-[-20px] w-full h-[800px] bg-black bg-opacity-50 z-50">
        <div class=" relative modal-content bg-white mx-auto mt-12 p-[40px] rounded-md w-[1000px] h-[660px]">
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
                        <p class="text-gray-600 text-[14px] font-normal text-justify">
                        This expansive guest room offers a generous 520 square feet of space, perfect for large groups or families of up to 10 guests. It features five comfortable premium beds, providing ample sleeping arrangements for everyone. Stay connected with free Wi-Fi and enjoy air conditioning for a comfortable stay. We provide 24-hour room service for your convenience and daily housekeeping to keep your room fresh. Additionally, laundry service is available for your needs. The room with essential amenities like charging points, hangers, a work desk for productivity, reading lamps, a telephone, a digital clock, a mirror, and a dustbin. Enjoy with the in-room TV and music system. For a restful sleep, five premium beds along with blankets and pillows are provided. Your safety and security are our priority. The room features digital locks, a fire extinguisher, and an emergency alarm. The private bathroom includes a water heater, shower, shaving mirror, dustbin, and a western toilet.
                        </p>
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
    <!-- JavaScript to toggle the visibility of the "Guest room View Details" popup for Admin Rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var addGuestView = document.getElementById('add-guest-view');
            var guestView = document.getElementById('view-guest');
            var closeGuestViewButton = document.getElementById('closePopupGuest');

            // Open popup when clicking the "new reservation" button
            addGuestView.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default form submission
                guestView.classList.remove('hidden'); // Show the popup
            });

            // Close popup when clicGuest the close button
            closeGuestViewButton.addEventListener('click', function() {
                guestView.classList.add('hidden'); // Hide the popup
            });
        });
    </script>

<!-- Staffs Starts -->
    <div id="Staffs" class="tabcontent overflow-y-scroll overflow-x-scroll bg-gray-100">
        <div class=" flex space-x-4 bg-gray-100 py-2 sticky top-0 z-20 rounded-bl-md rounded-br-md">
            <button id="add-staff-button" type="submit" name="btn" class=" text-nowrap ml-4 flex items-center justify-center text-[15px] bg-blue-600 hover:bg-blue-700 hover:cursor-pointer py-[8px] pl-2 pr-4 text-white font-normal rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-4 h-4" class=" w-[26px] h-[26px] mr-1 text-white font-semibold">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                Add Staff
            </button>
            <div>
                <?php
                // Query to fetch the counts
                $queryStaffs = "SELECT COUNT(*) AS staffsCount FROM staffs";

                // Execute the queries
                $resultStaffs = mysqli_query($con, $queryStaffs);

                // Fetch counts from the results
                $rowStaffs = mysqli_fetch_assoc($resultStaffs);
                ?>
                <p class="text-[16px] font-semibold text-gray-600 text-start mt-2 ml-[-4px]">Total Staffs: <?php echo $rowStaffs['staffsCount']; ?></p>
            </div>
        </div>
        <!-- Popup for adding staff -->
        <div id="add-new-staff-popup" class=" hidden fixed top-9 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-50 z-20">
            <form action="add_staff.php" method="POST" class=" bg-white relative mx-auto w-[500px] h-auto pt-12 pb-10 pl-10 pr-10 rounded-md">
                <button id="close-new-staff-popup" class="absolute text-white bg-red-500 hover:bg-red-600 px-[10px] pb-1 rounded-md top-[10px] right-[10px] z-20 text-xl">×</button>
                <h1 class="text-[24px] font-semibold text-center mt-[-10px] mb-4">New Staff Information</h1>
                <div class="mt-4">
                    <label for="staff_name" class=" ">Staff Name:</label>
                    <input type="text" name="name" pattern="[a-zA-Z\s']+" placeholder="Staff Name" class=" text-[15px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm mb-4" required>
                    <label for="staff_role" class="mt-4 mb-2">Staff Role:</label>
                    <select name="role" class=" text-[15px] focus:outline-none focus:border-green-600 focus:border-2 w-full h-[40px] p-2 border border-gray-400 rounded-sm" required>
                        <option value="select">select role</option>
                        <option value="housekeeper">housekeeper</option>
                        <option value="security">security</option>
                        <option value="front desk">front desk</option>
                        <option value="porter">porter</option>
                        <option value="cook">cook</option>
                        <option value="chef">chef</option>
                        <option value="server">server</option>
                        <option value="technician">technician</option>
                    </select>
                    <button type="submit" value="submit" name="btn" class="text-[15px] w-full bg-green-600 hover:bg-green-700 text-center text-white font-normal py-[8px] px-4 rounded-md mt-6">Add Staff Information</button>
                </div>
            </form>
        </div>
        <div class="relative ml-4 mt-0 mb-10 gap-x-10 gap-y-4 grid grid-cols-5 grid-rows-3">
            <?php

            $query = "SELECT * FROM staffs";
            $run = mysqli_query($con, $query);

            if (!$run) {
                die("Query failed: " . mysqli_error($con));
            }

            while ($row = mysqli_fetch_array($run)) {

                $id = $row['id'];
                $name = $row['name'];
                $role = $row['role'];
            ?>

                <!-- Customer 1 -->
                <div class="flex flex-col justify-center items-center bg-[#fafafa] relative w-[180px] h-[220px] rounded-lg shadow-lg p-2 z-1">
                    <img src="Images/logos/staffs.png" alt="image" class="w-[60px] h-[60px] mb-2 hover:opacity-90 rounded-full outline outline-gray-200 outline-offset-4">
                    <p class="font-semibold text-[13px] px-2 bg-gray-200 rounded-md absolute top-1 left-1"><?php echo $id ?></p>
                    <p class="font-semibold text-[13px] pt-2"><?php echo $name ?></p>
                    <p class="font-semibold text-[12px] text-gray-400 pb-4"><?php echo $role ?></p>
                    <div class="absolute bottom-2 mx-auto flex justify-center space-x-2">
                        <a class=" edit-button absolute left-[10px] bottom-1 text-green-500 bg-gray-100 hover:bg-green-100 rounded-md px-4 pt-1 pb-2 flex items-center hover:cursor-pointer" onclick="openStaffEditPopup(<?php echo $id; ?>, '<?php echo $name; ?>', '<?php echo $role; ?>')">
                            <span class="material-symbols-outlined text-[14px] mt-1 border-1 rounded-full ">
                                edit
                            </span>
                            <p class="ml-1 mt-1 text-[12px] text-green-500 hover:cursor-pointer">Edit</p>
                        </a>
                        <a onclick="confirmDeleteStaff(<?php echo $id; ?>)" class=" absolute right-[-4px] bottom-1 text-red-500 bg-gray-100 hover:bg-red-100 rounded-md px-4 pt-1 pb-2 flex items-center hover:cursor-pointer">
                            <span class="material-symbols-outlined text-[14px] mt-1 border-1 rounded-full ">
                                delete
                            </span>
                            <p class="ml-1 mt-1 text-[12px] text-red-500 hover:cursor-pointer">Delete</p>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- JavaScript to toggle the visibility of the "Add" popup for Reservation -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var addReserveButton = document.getElementById('add-staff-button');
            var reservePopup = document.getElementById('add-new-staff-popup');
            var closeReservePopupButton = document.getElementById('close-new-staff-popup');

            // Open popup when clicking the "new reservation" button
            addReserveButton.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default form submission
                reservePopup.classList.remove('hidden'); // Show the popup
            });

            // Close popup when clicking the close button
            closeReservePopupButton.addEventListener('click', function() {
                reservePopup.classList.add('hidden'); // Hide the popup
            });
        });
    </script>

    <!-- Popup for Staff Edit -->
    <div id="staffEditPopup" class="modal hidden fixed h-full overflow-hidden bg-black bg-opacity-50 z-30 w-full">
        <div class=" relative modal-content mx-auto mt-36">
            <button class="absolute text-white bg-red-500 hover:bg-red-600 px-[10px] pb-1 rounded-md top-[8px] right-[520px] z-20 text-xl" onclick="closeStaffEditPopup()">×</button>
            <form action="edit_staff.php" method="POST" class=" bg-white relative mx-auto w-[500px] h-auto pt-12 pb-10 pl-10 pr-10 rounded-md">
                <input type="hidden" name="editStaffId" id="editStaffId">
                <h1 class="text-[24px] font-semibold text-center mt-[-10px] mb-4">Edit Staff Information</h1>

                <label for="staff_name" class=" ">Staff Name:</label>
                <input type="text" pattern="[a-zA-Z\s']+" name="edit_staff_name" id="staff_name" class="w-full h-[40px] pl-2 text-gray-500 focus:outline-none focus:border-green-600 focus:border-2 border border-gray-400 rounded-sm mb-4" required>

                <label for="staff_role" class="mt-4 mb-2">Staff Role:</label>
                <select name="edit_staff_role" id="staff_role" class="w-full h-[40px] pl-2 text-gray-500 focus:outline-none focus:border-green-600 focus:border-2 border border-gray-400 rounded-sm" required>
                    <option value="select">select role</option>
                    <option value="housekeeper">housekeeper</option>
                    <option value="security">security</option>
                    <option value="front desk">front desk</option>
                    <option value="porter">porter</option>
                    <option value="cook">cook</option>
                    <option value="chef">chef</option>
                    <option value="server">server</option>
                    <option value="technician">technician</option>
                </select>

                <button type="submit" name="update_staff" class=" mt-10 w-full px-4 py-2 rounded-md bg-green-600 hover:bg-green-700 text-white">Update Staff</button>
            </form>
        </div>
    </div>
<!-- Staffs Ends -->
<!-- Guest Queries Starts -->
    <div id="Queries" class="tabcontent overflow-y-scroll bg-gray-100">
        <form action="guest_queries_deleteall.php" method="POST">
            <table class=" w-full border-collapse bg-white">
                <thead class=" w-full sticky top-[54px] text-left bg-gray-200 pr-[10px]">
                    <tr class=" text-nowrap border-b border-b-2 border-gray-300">
                        <div class=" sticky top-0 pt-2 pb-2 bg-gray-100 w-full flex space-x-4">
                            <button type="submit" name="queries_delete_all" class=" flex items-center justify-center space-x-2 px-4 py-2 bg-red-500 hover:bg-red-600 rounded-md text-white" onclick="confirmDeleteQuery()">
                                <span class="material-symbols-outlined text-[20px] text-white mt-[1px]">
                                    delete
                                </span>
                                <span id="deleteBtnText">Delete</span>
                            </button>
                            <div>
                                <?php
                                $queryGuestQueries = "SELECT COUNT(*) AS guestQueriesCount FROM contactus";
                                // Execute the queries
                                $resultGuestQueries = mysqli_query($con, $queryGuestQueries);

                                // Fetch counts from the results
                                $rowGuestQueries = mysqli_fetch_assoc($resultGuestQueries);
                                ?>

                                <p class="text-[16px] font-semibold text-gray-600 text-start mt-2 ml-[-4px]">Total Queries: <?php echo $rowGuestQueries['guestQueriesCount']; ?></p>

                            </div>
                        </div>
                        <th class="py-4 px-4">
                            <input type="checkbox" id="selectAllQueries" class=" w-[14px] h-[14px]" onclick="changeDeleteBtnText()">
                        </th>
                        <th class="py-4 px-4">Id</th>
                        <th class="py-4 px-4">First Name</th>
                        <th class="py-4 px-4">Last Name</th>
                        <th class="py-4 px-4">Email</th>
                        <th class="py-4 px-4">Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "select * from contactus";
                    $run = mysqli_query($con, $query);

                    $id = 1;
                    while ($row = mysqli_fetch_array($run)) {
                        $id = $row['id'];
                        $firstname = $row['firstname'];
                        $lastname = $row['lastname'];
                        $email = $row['email'];
                        $message = $row['message'];
                    ?>
                        <tr class=" border-b-2 overflow-hidden">
                            <td class="py-4 px-4">
                                <input type="checkbox" name="queries_delete_id[]" value="<?= $row['id']; ?>" class=" rowCheckbox w-[14px] h-[14px]">
                            </td>
                            <td class="py-4 px-4"><?php echo $id ?></td>
                            <td class="py-4 px-4"><?php echo $firstname ?></td>
                            <td class="py-4 px-4"><?php echo $lastname ?></td>
                            <td class="py-4 px-4"><?php echo $email ?></td>
                            <td class="py-4 px-4"><?php echo $message ?></td>
                            <td>
                            </td>
                        </tr>
                    <?php
                        $id++;
                    } ?>
                </tbody>
            </table>
        </form>
    </div>
    <!-- Guest Queries script for delete all records -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var selectAllCheckbox = document.getElementById('selectAllQueries');
            var rowCheckboxes = document.querySelectorAll('.rowCheckbox');

            selectAllCheckbox.addEventListener('change', function(e) {
                for (var i = 0; i < rowCheckboxes.length; i++) {
                    rowCheckboxes[i].checked = this.checked;
                }
            });
        });
    </script>
    <!-- Guest Queries script for changing delete button text based on checkbox selection -->
    <script>
        function changeDeleteBtnText() {
            var deleteBtnText = document.getElementById('deleteBtnText');
            var selectAllCheckbox = document.getElementById('selectAllQueries');

            if (selectAllCheckbox.checked) {
                deleteBtnText.textContent = "Delete all";
            } else {
                deleteBtnText.textContent = "Delete";
            }
        }
    </script>
    <!-- Guest Queries Ends -->


    <!-- Tablinks and navigation Dropdown -->
    <script>
        /* Vertical tabs */
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();



        /* Logout Dropdown in Navigation */

        // Get the button and the menu elements
        const button = document.getElementById("dropdown-button");
        const menu = document.getElementById("dropdown-menu");

        // Add a click event listener to the button
        button.addEventListener("click", function() {
            // Toggle the visibility of the menu
            menu.classList.toggle("hidden");
        });
        // Add a click event listener to the window
        window.addEventListener("click", function(event) {
            // Check if the target element is not the button or the menu
            if (event.target !== button && !menu.contains(event.target)) {
                // Hide the menu by adding the hidden class
                menu.classList.add("hidden");
            }
        });
    </script>

    <!-- Delete User -->
    <script>
        function confirmDelete(userId) {
            var confirmation = confirm("Are you sure you want to delete this data?");
            if (confirmation) {
                window.location.href = 'delete_user.php?id=' + userId;
            } else {
                event.preventDefault(); // Prevent default form submission
            }
        }
    </script>
    
    <!-- Delete Staffs -->
    <script>
        function confirmDeleteStaff(staffId) {
            var confirmationStaff = confirm("Are you sure you want to delete this data?");
            if (confirmationStaff) {
                window.location.href = 'delete_staff.php?id=' + staffId;
            } else {
                event.preventDefault(); // Prevent default form submission
            }
        }
    </script>

    <!-- Delete Queries -->
    <script>
        function confirmDeleteQuery(queryId) {
            var confirmationQuery = confirm("Are you sure you want to delete this data?");
            if (confirmationQuery) {
                window.location.href = 'delete_queries.php?id=' + queryId;
            } else {
                event.preventDefault(); // Prevent default form submission
            }
        }
    </script>

    <!-- Delete Reservation -->
    <script>
        function confirmDeleteReserve(resId) {
            var confirmationReserve = confirm("Are you sure you want to delete this data?");
            if (confirmationReserve) {
                window.location.href = 'delete_reserve.php?id=' + resId;
            } else {
                event.preventDefault(); // Prevent default form submission
            }
        }
    </script>

    <!-- Popup for staff to edit and delete -->
    <script>
        function openStaffEditPopup(staffId, staffName, staffRole) {
            // Populate the form fields with existing data
            document.getElementById('editStaffId').value = staffId;
            document.getElementById('staff_name').value = staffName;
            document.getElementById('staff_role').value = staffRole;

            // Show the popup
            document.getElementById('staffEditPopup').classList.remove('hidden');
        }

        function closeStaffEditPopup() {
            // Close the popup
            document.getElementById('staffEditPopup').classList.add('hidden');
        }
    </script>

    <!-- Single Rooms -->
    <!-- Fetching and updating total rooms count of single rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the initial room count from the database and update the display
            function fetchInitialRoomCount() {
                fetch('get_room_counts.php')
                    .then(response => response.json())
                    .then(data => {
                        // Assuming the data contains room counts for each room ID
                        Object.keys(data).forEach(roomId => {
                            updateRoomCount(roomId, data[roomId]);
                        });
                    })
                    .catch(error => console.error('Error fetching initial room count:', error));
            }

            // Function to update the room count display
            function updateRoomCount(roomId, newTotalRooms) {
                const roomCard = document.querySelector(`.room-card[data-room-id="${roomId}"]`);
                if (roomCard) {
                    const totalCountSpan = roomCard.querySelector(".total-rooms span");
                    if (totalCountSpan) {
                        totalCountSpan.textContent = newTotalRooms;
                    }
                }
            }
            // Fetch initial room count from the database and update display on page load
            fetchInitialRoomCount();
        });
    </script>

    <!-- Fetching and updating booked rooms count of single rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the initial room count from the database and update the display
            function fetchSingleBookedRoomsCounts() {
                fetch('get_booked_counts.php')
                    .then(response => response.json())
                    .then(data => {
                        // Assuming the data contains room counts for each room ID
                        Object.keys(data).forEach(roomId => {
                            updateSingleBookedCount(roomId, data[roomId]);
                        });
                    })
                    .catch(error => console.error('Error fetching initial room count:', error));
            }

            // Function to update the room count display
            function updateSingleBookedCount(roomId, newSingleBookedRooms) {
                const singleBookedCard = document.querySelector(`.room-card[data-room-id="${roomId}"]`);
                if (singleBookedCard) {
                    const totalBookedSpan = singleBookedCard.querySelector(".booked-rooms span");
                    if (totalBookedSpan) {
                        totalBookedSpan.textContent = newSingleBookedRooms;
                    }
                }
            }
            // Fetch initial room count from the database and update display on page load
            fetchSingleBookedRoomsCounts();
        });
    </script>

    <!-- Fetching and updating available rooms count of single rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the initial room count from the database and update the display
            function fetchInitialAvailableCount() {
                fetch('get_available_single_room_count.php')
                    .then(response => response.json())
                    .then(data => {
                        // Assuming the data contains room counts for each room ID
                        Object.keys(data).forEach(roomId => {
                            updateAvailableCount(roomId, data[roomId]);
                        });
                    })
                    .catch(error => console.error('Error fetching initial room count:', error));
            }

            // Function to update the room count display
            function updateAvailableCount(roomId, newAvailableRooms) {
                const availableCard = document.querySelector(`.room-card[data-room-id="${roomId}"]`);
                if (availableCard) {
                    const availableCountSpan = availableCard.querySelector(".available-rooms span");
                    if (availableCountSpan) {
                        availableCountSpan.textContent = newAvailableRooms;
                    }
                }
            }
            // Fetch initial room count from the database and update display on page load
            fetchInitialAvailableCount();
        });
    </script>

    <!-- Double Rooms -->
    <!-- Fetching and updating total rooms count of double rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the double room count from the database and update the display
            function fetchRoomCountDouble() {
                fetch('get_room_counts_double.php')
                    .then(response => response.json())
                    .then(data => {
                        // Assuming the data contains room counts for each room ID
                        Object.keys(data).forEach(roomId => {
                            updateRoomCountDouble(roomId, data[roomId]);
                        });
                    })
                    .catch(error => console.error('Error fetching initial room count:', error));
            }

            // Function to update the room count display
            function updateRoomCountDouble(roomId, newTotalRoomsDouble) {
                const roomCardDouble = document.querySelector(`.room-card[data-room-id="${roomId}"]`);
                if (roomCardDouble) {
                    const totalCountSpanDouble = roomCardDouble.querySelector(".total-rooms span");
                    if (totalCountSpanDouble) {
                        totalCountSpanDouble.textContent = newTotalRoomsDouble;
                    }
                }
            }
            // Fetch initial room count from the database and update display on page load
            fetchRoomCountDouble();
        });
    </script>

    <!-- Fetching and updating booked rooms count of double rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the initial room count from the database and update the display
            function fetchBookedRoomsCountsDouble() {
                fetch('get_booked_counts_double.php')
                    .then(response => response.json())
                    .then(data => {
                        // Assuming the data contains room counts for each room ID
                        Object.keys(data).forEach(roomId => {
                            updateBookedCountDouble(roomId, data[roomId]);
                        });
                    })
                    .catch(error => console.error('Error fetching initial room count:', error));
            }

            // Function to update the room count display
            function updateBookedCountDouble(roomId, newBookedRoomsDouble) {
                const bookedCardDouble = document.querySelector(`.room-card[data-room-id="${roomId}"]`);
                if (bookedCardDouble) {
                    const totalBookedSpanDouble = bookedCardDouble.querySelector(".booked-rooms-double span");
                    if (totalBookedSpanDouble) {
                        totalBookedSpanDouble.textContent = newBookedRoomsDouble;
                    }
                }
            }
            // Fetch initial room count from the database and update display on page load
            fetchBookedRoomsCountsDouble();
        });
    </script>

    <!-- Fetching and updating available rooms count of double rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the initial room count from the database and update the display
            function fetchAvailableCountDouble() {
                fetch('get_available_double_room_count.php')
                    .then(response => response.json())
                    .then(data => {
                        // Assuming the data contains room counts for each room ID
                        Object.keys(data).forEach(roomId => {
                            updateAvailableCountDouble(roomId, data[roomId]);
                        });
                    })
                    .catch(error => console.error('Error fetching initial room count:', error));
            }

            // Function to update the room count display
            function updateAvailableCountDouble(roomId, newAvailableRoomsDouble) {
                const availableCardDouble = document.querySelector(`.room-card[data-room-id="${roomId}"]`);
                if (availableCardDouble) {
                    const availableCountSpanDouble = availableCardDouble.querySelector(".available-rooms-double span");
                    if (availableCountSpanDouble) {
                        availableCountSpanDouble.textContent = newAvailableRoomsDouble;
                    }
                }
            }
            // Fetch initial room count from the database and update display on page load
            fetchAvailableCountDouble();
        });
    </script>

    <!-- Triple Rooms -->
    <!-- Fetching and updating total rooms count of triple rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the triple room count from the database and update the display
            function fetchRoomCountTriple() {
                fetch('get_room_counts_triple.php')
                    .then(response => response.json())
                    .then(data => {
                        // Assuming the data contains room counts for each room ID
                        Object.keys(data).forEach(roomId => {
                            updateRoomCountTriple(roomId, data[roomId]);
                        });
                    })
                    .catch(error => console.error('Error fetching initial room count:', error));
            }

            // Function to update the room count display
            function updateRoomCountTriple(roomId, newTotalRoomsTriple) {
                const roomCardTriple = document.querySelector(`.room-card[data-room-id="${roomId}"]`);
                if (roomCardTriple) {
                    const totalCountSpanTriple = roomCardTriple.querySelector(".total-rooms span");
                    if (totalCountSpanTriple) {
                        totalCountSpanTriple.textContent = newTotalRoomsTriple;
                    }
                }
            }
            // Fetch initial room count from the database and update display on page load
            fetchRoomCountTriple();
        });
    </script>

    <!-- Fetching and updating booked rooms count of triple rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the initial room count from the database and update the display
            function fetchBookedRoomsCountsTriple() {
                fetch('get_booked_counts_triple.php')
                    .then(response => response.json())
                    .then(data => {
                        // Assuming the data contains room counts for each room ID
                        Object.keys(data).forEach(roomId => {
                            updateBookedCountTriple(roomId, data[roomId]);
                        });
                    })
                    .catch(error => console.error('Error fetching initial room count:', error));
            }

            // Function to update the room count display
            function updateBookedCountTriple(roomId, newBookedRoomsTriple) {
                const bookedCardTriple = document.querySelector(`.room-card[data-room-id="${roomId}"]`);
                if (bookedCardTriple) {
                    const totalBookedSpanTriple = bookedCardTriple.querySelector(".booked-rooms-triple span");
                    if (totalBookedSpanTriple) {
                        totalBookedSpanTriple.textContent = newBookedRoomsTriple;
                    }
                }
            }
            // Fetch initial room count from the database and update display on page load
            fetchBookedRoomsCountsTriple();
        });
    </script>

    <!-- Fetching and updating available rooms count of triple rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the initial room count from the database and update the display
            function fetchAvailableCountTriple() {
                fetch('get_available_triple_room_count.php')
                    .then(response => response.json())
                    .then(data => {
                        // Assuming the data contains room counts for each room ID
                        Object.keys(data).forEach(roomId => {
                            updateAvailableCountTriple(roomId, data[roomId]);
                        });
                    })
                    .catch(error => console.error('Error fetching initial room count:', error));
            }

            // Function to update the room count display
            function updateAvailableCountTriple(roomId, newAvailableRoomsTriple) {
                const availableCardTriple = document.querySelector(`.room-card[data-room-id="${roomId}"]`);
                if (availableCardTriple) {
                    const availableCountSpanTriple = availableCardTriple.querySelector(".available-rooms-triple span");
                    if (availableCountSpanTriple) {
                        availableCountSpanTriple.textContent = newAvailableRoomsTriple;
                    }
                }
            }
            // Fetch initial room count from the database and update display on page load
            fetchAvailableCountTriple();
        });
    </script>

    <!-- Quad Rooms -->
    <!-- Fetching and updating total rooms count of Quad rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the Quad room count from the database and update the display
            function fetchRoomCountQuad() {
                fetch('get_room_counts_quad.php')
                    .then(response => response.json())
                    .then(data => {
                        // Assuming the data contains room counts for each room ID
                        Object.keys(data).forEach(roomId => {
                            updateRoomCountQuad(roomId, data[roomId]);
                        });
                    })
                    .catch(error => console.error('Error fetching initial room count:', error));
            }

            // Function to update the room count display
            function updateRoomCountQuad(roomId, newTotalRoomsQuad) {
                const roomCardQuad = document.querySelector(`.room-card[data-room-id="${roomId}"]`);
                if (roomCardQuad) {
                    const totalCountSpanQuad = roomCardQuad.querySelector(".total-rooms span");
                    if (totalCountSpanQuad) {
                        totalCountSpanQuad.textContent = newTotalRoomsQuad;
                    }
                }
            }
            // Fetch initial room count from the database and update display on page load
            fetchRoomCountQuad();
        });
    </script>

    <!-- Fetching and updating booked rooms count of Quad rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the initial room count from the database and update the display
            function fetchBookedRoomsCountsQuad() {
                fetch('get_booked_counts_quad.php')
                    .then(response => response.json())
                    .then(data => {
                        // Assuming the data contains room counts for each room ID
                        Object.keys(data).forEach(roomId => {
                            updateBookedCountQuad(roomId, data[roomId]);
                        });
                    })
                    .catch(error => console.error('Error fetching initial room count:', error));
            }

            // Function to update the room count display
            function updateBookedCountQuad(roomId, newBookedRoomsQuad) {
                const bookedCardQuad = document.querySelector(`.room-card[data-room-id="${roomId}"]`);
                if (bookedCardQuad) {
                    const totalBookedSpanQuad = bookedCardQuad.querySelector(".booked-rooms-quad span");
                    if (totalBookedSpanQuad) {
                        totalBookedSpanQuad.textContent = newBookedRoomsQuad;
                    }
                }
            }
            // Fetch initial room count from the database and update display on page load
            fetchBookedRoomsCountsQuad();
        });
    </script>

    <!-- Fetching and updating available rooms count of Quad rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the initial room count from the database and update the display
            function fetchAvailableCountQuad() {
                fetch('get_available_quad_room_count.php')
                    .then(response => response.json())
                    .then(data => {
                        // Assuming the data contains room counts for each room ID
                        Object.keys(data).forEach(roomId => {
                            updateAvailableCountQuad(roomId, data[roomId]);
                        });
                    })
                    .catch(error => console.error('Error fetching initial room count:', error));
            }

            // Function to update the room count display
            function updateAvailableCountQuad(roomId, newAvailableRoomsQuad) {
                const availableCardQuad = document.querySelector(`.room-card[data-room-id="${roomId}"]`);
                if (availableCardQuad) {
                    const availableCountSpanQuad = availableCardQuad.querySelector(".available-rooms-quad span");
                    if (availableCountSpanQuad) {
                        availableCountSpanQuad.textContent = newAvailableRoomsQuad;
                    }
                }
            }
            // Fetch initial room count from the database and update display on page load
            fetchAvailableCountQuad();
        });
    </script>

    <!-- Family Rooms -->
    <!-- Fetching and updating total rooms count of Family rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the Family room count from the database and update the display
            function fetchRoomCountFamily() {
                fetch('get_room_counts_family.php')
                    .then(response => response.json())
                    .then(data => {
                        // Assuming the data contains room counts for each room ID
                        Object.keys(data).forEach(roomId => {
                            updateRoomCountFamily(roomId, data[roomId]);
                        });
                    })
                    .catch(error => console.error('Error fetching initial room count:', error));
            }

            // Function to update the room count display
            function updateRoomCountFamily(roomId, newTotalRoomsFamily) {
                const roomCardFamily = document.querySelector(`.room-card[data-room-id="${roomId}"]`);
                if (roomCardFamily) {
                    const totalCountSpanFamily = roomCardFamily.querySelector(".total-rooms span");
                    if (totalCountSpanFamily) {
                        totalCountSpanFamily.textContent = newTotalRoomsFamily;
                    }
                }
            }
            // Fetch initial room count from the database and update display on page load
            fetchRoomCountFamily();
        });
    </script>

    <!-- Fetching and updating booked rooms count of Family rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the initial room count from the database and update the display
            function fetchBookedRoomsCountsFamily() {
                fetch('get_booked_counts_family.php')
                    .then(response => response.json())
                    .then(data => {
                        // Assuming the data contains room counts for each room ID
                        Object.keys(data).forEach(roomId => {
                            updateBookedCountFamily(roomId, data[roomId]);
                        });
                    })
                    .catch(error => console.error('Error fetching initial room count:', error));
            }

            // Function to update the room count display
            function updateBookedCountFamily(roomId, newBookedRoomsFamily) {
                const bookedCardFamily = document.querySelector(`.room-card[data-room-id="${roomId}"]`);
                if (bookedCardFamily) {
                    const totalBookedSpanFamily = bookedCardFamily.querySelector(".booked-rooms-family span");
                    if (totalBookedSpanFamily) {
                        totalBookedSpanFamily.textContent = newBookedRoomsFamily;
                    }
                }
            }
            // Fetch initial room count from the database and update display on page load
            fetchBookedRoomsCountsFamily();
        });
    </script>

    <!-- Fetching and updating available rooms count of Family rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the initial room count from the database and update the display
            function fetchAvailableCountFamily() {
                fetch('get_available_family_room_count.php')
                    .then(response => response.json())
                    .then(data => {
                        // Assuming the data contains room counts for each room ID
                        Object.keys(data).forEach(roomId => {
                            updateAvailableCountFamily(roomId, data[roomId]);
                        });
                    })
                    .catch(error => console.error('Error fetching initial room count:', error));
            }

            // Function to update the room count display
            function updateAvailableCountFamily(roomId, newAvailableRoomsFamily) {
                const availableCardFamily = document.querySelector(`.room-card[data-room-id="${roomId}"]`);
                if (availableCardFamily) {
                    const availableCountSpanFamily = availableCardFamily.querySelector(".available-rooms-family span");
                    if (availableCountSpanFamily) {
                        availableCountSpanFamily.textContent = newAvailableRoomsFamily;
                    }
                }
            }
            // Fetch initial room count from the database and update display on page load
            fetchAvailableCountFamily();
        });
    </script>

    <!-- King Rooms -->
    <!-- Fetching and updating total rooms count of King rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the King room count from the database and update the display
            function fetchRoomCountKing() {
                fetch('get_room_counts_king.php')
                    .then(response => response.json())
                    .then(data => {
                        // Assuming the data contains room counts for each room ID
                        Object.keys(data).forEach(roomId => {
                            updateRoomCountKing(roomId, data[roomId]);
                        });
                    })
                    .catch(error => console.error('Error fetching initial room count:', error));
            }

            // Function to update the room count display
            function updateRoomCountKing(roomId, newTotalRoomsKing) {
                const roomCardKing = document.querySelector(`.room-card[data-room-id="${roomId}"]`);
                if (roomCardKing) {
                    const totalCountSpanKing = roomCardKing.querySelector(".total-rooms span");
                    if (totalCountSpanKing) {
                        totalCountSpanKing.textContent = newTotalRoomsKing;
                    }
                }
            }
            // Fetch initial room count from the database and update display on page load
            fetchRoomCountKing();
        });
    </script>

    <!-- Fetching and updating booked rooms count of King rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the initial room count from the database and update the display
            function fetchBookedRoomsCountsKing() {
                fetch('get_booked_counts_king.php')
                    .then(response => response.json())
                    .then(data => {
                        // Assuming the data contains room counts for each room ID
                        Object.keys(data).forEach(roomId => {
                            updateBookedCountKing(roomId, data[roomId]);
                        });
                    })
                    .catch(error => console.error('Error fetching initial room count:', error));
            }

            // Function to update the room count display
            function updateBookedCountKing(roomId, newBookedRoomsKing) {
                const bookedCardKing = document.querySelector(`.room-card[data-room-id="${roomId}"]`);
                if (bookedCardKing) {
                    const totalBookedSpanKing = bookedCardKing.querySelector(".booked-rooms-king span");
                    if (totalBookedSpanKing) {
                        totalBookedSpanKing.textContent = newBookedRoomsKing;
                    }
                }
            }
            // Fetch initial room count from the database and update display on page load
            fetchBookedRoomsCountsKing();
        });
    </script>

    <!-- Fetching and updating available rooms count of King rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the initial room count from the database and update the display
            function fetchAvailableCountKing() {
                fetch('get_available_king_room_count.php')
                    .then(response => response.json())
                    .then(data => {
                        // Assuming the data contains room counts for each room ID
                        Object.keys(data).forEach(roomId => {
                            updateAvailableCountKing(roomId, data[roomId]);
                        });
                    })
                    .catch(error => console.error('Error fetching initial room count:', error));
            }

            // Function to update the room count display
            function updateAvailableCountKing(roomId, newAvailableRoomsKing) {
                const availableCardKing = document.querySelector(`.room-card[data-room-id="${roomId}"]`);
                if (availableCardKing) {
                    const availableCountSpanKing = availableCardKing.querySelector(".available-rooms-king span");
                    if (availableCountSpanKing) {
                        availableCountSpanKing.textContent = newAvailableRoomsKing;
                    }
                }
            }
            // Fetch initial room count from the database and update display on page load
            fetchAvailableCountKing();
        });
    </script>

    <!-- Queen Rooms -->
    <!-- Fetching and updating total rooms count of Queen rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the Queen room count from the database and update the display
            function fetchRoomCountQueen() {
                fetch('get_room_counts_queen.php')
                    .then(response => response.json())
                    .then(data => {
                        // Assuming the data contains room counts for each room ID
                        Object.keys(data).forEach(roomId => {
                            updateRoomCountQueen(roomId, data[roomId]);
                        });
                    })
                    .catch(error => console.error('Error fetching initial room count:', error));
            }

            // Function to update the room count display
            function updateRoomCountQueen(roomId, newTotalRoomsQueen) {
                const roomCardQueen = document.querySelector(`.room-card[data-room-id="${roomId}"]`);
                if (roomCardQueen) {
                    const totalCountSpanQueen = roomCardQueen.querySelector(".total-rooms span");
                    if (totalCountSpanQueen) {
                        totalCountSpanQueen.textContent = newTotalRoomsQueen;
                    }
                }
            }
            // Fetch initial room count from the database and update display on page load
            fetchRoomCountQueen();
        });
    </script>

    <!-- Fetching and updating booked rooms count of Queen rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the initial room count from the database and update the display
            function fetchBookedRoomsCountsQueen() {
                fetch('get_booked_counts_queen.php')
                    .then(response => response.json())
                    .then(data => {
                        // Assuming the data contains room counts for each room ID
                        Object.keys(data).forEach(roomId => {
                            updateBookedCountQueen(roomId, data[roomId]);
                        });
                    })
                    .catch(error => console.error('Error fetching initial room count:', error));
            }

            // Function to update the room count display
            function updateBookedCountQueen(roomId, newBookedRoomsQueen) {
                const bookedCardQueen = document.querySelector(`.room-card[data-room-id="${roomId}"]`);
                if (bookedCardQueen) {
                    const totalBookedSpanQueen = bookedCardQueen.querySelector(".booked-rooms-queen span");
                    if (totalBookedSpanQueen) {
                        totalBookedSpanQueen.textContent = newBookedRoomsQueen;
                    }
                }
            }
            // Fetch initial room count from the database and update display on page load
            fetchBookedRoomsCountsQueen();
        });
    </script>

    <!-- Fetching and updating available rooms count of Queen rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the initial room count from the database and update the display
            function fetchAvailableCountQueen() {
                fetch('get_available_queen_room_count.php')
                    .then(response => response.json())
                    .then(data => {
                        // Assuming the data contains room counts for each room ID
                        Object.keys(data).forEach(roomId => {
                            updateAvailableCountQueen(roomId, data[roomId]);
                        });
                    })
                    .catch(error => console.error('Error fetching initial room count:', error));
            }

            // Function to update the room count display
            function updateAvailableCountQueen(roomId, newAvailableRoomsQueen) {
                const availableCardQueen = document.querySelector(`.room-card[data-room-id="${roomId}"]`);
                if (availableCardQueen) {
                    const availableCountSpanQueen = availableCardQueen.querySelector(".available-rooms-queen span");
                    if (availableCountSpanQueen) {
                        availableCountSpanQueen.textContent = newAvailableRoomsQueen;
                    }
                }
            }
            // Fetch initial room count from the database and update display on page load
            fetchAvailableCountQueen();
        });
    </script>

    <!-- Guest Rooms -->
    <!-- Fetching and updating total rooms count of Guest rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the Guest room count from the database and update the display
            function fetchRoomCountGuest() {
                fetch('get_room_counts_guest.php')
                    .then(response => response.json())
                    .then(data => {
                        // Assuming the data contains room counts for each room ID
                        Object.keys(data).forEach(roomId => {
                            updateRoomCountGuest(roomId, data[roomId]);
                        });
                    })
                    .catch(error => console.error('Error fetching initial room count:', error));
            }

            // Function to update the room count display
            function updateRoomCountGuest(roomId, newTotalRoomsGuest) {
                const roomCardGuest = document.querySelector(`.room-card[data-room-id="${roomId}"]`);
                if (roomCardGuest) {
                    const totalCountSpanGuest = roomCardGuest.querySelector(".total-rooms span");
                    if (totalCountSpanGuest) {
                        totalCountSpanGuest.textContent = newTotalRoomsGuest;
                    }
                }
            }
            // Fetch initial room count from the database and update display on page load
            fetchRoomCountGuest();
        });
    </script>

    <!-- Fetching and updating booked rooms count of Guest rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the initial room count from the database and update the display
            function fetchBookedRoomsCountsGuest() {
                fetch('get_booked_counts_guest.php')
                    .then(response => response.json())
                    .then(data => {
                        // Assuming the data contains room counts for each room ID
                        Object.keys(data).forEach(roomId => {
                            updateBookedCountGuest(roomId, data[roomId]);
                        });
                    })
                    .catch(error => console.error('Error fetching initial room count:', error));
            }

            // Function to update the room count display
            function updateBookedCountGuest(roomId, newBookedRoomsGuest) {
                const bookedCardGuest = document.querySelector(`.room-card[data-room-id="${roomId}"]`);
                if (bookedCardGuest) {
                    const totalBookedSpanGuest = bookedCardGuest.querySelector(".booked-rooms-guest span");
                    if (totalBookedSpanGuest) {
                        totalBookedSpanGuest.textContent = newBookedRoomsGuest;
                    }
                }
            }
            // Fetch initial room count from the database and update display on page load
            fetchBookedRoomsCountsGuest();
        });
    </script>

    <!-- Fetching and updating available rooms count of Guest rooms -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to fetch the initial room count from the database and update the display
            function fetchAvailableCountGuest() {
                fetch('get_available_guest_room_count.php')
                    .then(response => response.json())
                    .then(data => {
                        // Assuming the data contains room counts for each room ID
                        Object.keys(data).forEach(roomId => {
                            updateAvailableCountGuest(roomId, data[roomId]);
                        });
                    })
                    .catch(error => console.error('Error fetching initial room count:', error));
            }

            // Function to update the room count display
            function updateAvailableCountGuest(roomId, newAvailableRoomsGuest) {
                const availableCardGuest = document.querySelector(`.room-card[data-room-id="${roomId}"]`);
                if (availableCardGuest) {
                    const availableCountSpanGuest = availableCardGuest.querySelector(".available-rooms-guest span");
                    if (availableCountSpanGuest) {
                        availableCountSpanGuest.textContent = newAvailableRoomsGuest;
                    }
                }
            }
            // Fetch initial room count from the database and update display on page load
            fetchAvailableCountGuest();
        });
    </script>


</body>

</html>