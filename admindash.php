<?php
session_start();
include("db.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fn'];
    $lname = $_POST['ln'];
    $gmail = $_POST['mail'];
    $num = $_POST['number'];
    $addr = $_POST['add'];
    $user = $_POST['uname'];
    $password = $_POST['pass'];
}
if (!empty($gmail) && !empty($password) && !is_numeric($gmail)) {
    $query = "insert into signup (firstname, lastname, email, phone, address, username, password) values ('$fname', '$lname', '$gmail', '$num', '$addr', '$user', '$password')";
    mysqli_query($con, $query);
    echo "<script type='text/javascript'>alert('User Added successfully...')</script>";
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
    <style>
        /* body {
            cursor: url("icons/cursor.svg"), auto;
        } */
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
</head>

<body class=" bg-white overflow-hidden">
    <!-- Navigation -->
    <nav class=" px-[86px] flex items-center px-6 sticky top-0 shadow-lg bg-gray-50 p-[12px] z-50">
        <div class="text-black text-nowrap text-[26px] font-semibold">Hotel Dheen</div>
        <div class="container flex justify-end">
            <div class="flex items-center space-x-8 font-normal">

                <div class="relative inline-block text-left z-40">
                    <img id="dropdown-button" src="Images/admin/dheen-straight.jpg" alt="admin" class=" w-[50px] h-[50px] hover:bg-gray-200 border-1 rounded-full px-2 py-2 hover:cursor-pointer inline-flex">

                    <div id="dropdown-menu" class="hidden origin-top-right absolute right-0 mt-1 w-[140px] rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">

                        <div class="py-1" role="none">

                            <a href="index.php" class="text-gray-700 block px-6 py-2 text-sm hover:bg-gray-100 flex" role="menuitem" tabindex="-1" id="menu-item-3">
                                <span class="material-symbols-outlined">
                                    logout
                                </span>
                                <p class=" ml-2">Logout</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </nav>


    <!-- Vertical Tabs -->
    <div class="tab sticky left-0">
        <button class="tablinks" onclick="openCity(event, 'Dashboard')">
            <div class=" flex flex-col items-center justify-center">
                <span class="material-symbols-outlined">
                    admin_panel_settings
                </span>
                <p class="">Dashboard</p>
            </div>
        </button>

        <button class="tablinks" onclick="openCity(event, 'Registration')">
            <div class=" flex flex-col items-center justify-center">
                <span class="material-symbols-outlined">
                    groups
                </span>
                <p class="">Registration</p>
            </div>
        </button>

        <button class="tablinks" onclick="openCity(event, 'Booked')">
            <div class=" flex flex-col items-center justify-center">
                <span class="material-symbols-outlined">
                    book
                </span>
                <p class="">Rooms Booked</p>
            </div>
        </button>

        <button class="tablinks" onclick="openCity(event, 'Rooms')" id="defaultOpen">
            <div class=" flex flex-col items-center justify-center">
                <span class="material-symbols-outlined">
                    bedroom_parent
                </span>
                <p class="">Rooms</p>
            </div>
        </button>

        <button class="tablinks" onclick="openCity(event, 'Staffs')">
            <div class=" flex flex-col items-center justify-center">
                <span class="material-symbols-outlined">
                    person
                </span>
                <p class="">Staffs</p>
            </div>
        </button>

        <button class="tablinks" onclick="openCity(event, 'Queries')">
            <div class=" flex flex-col items-center justify-center">
                <span class="material-symbols-outlined">
                    account_circle
                </span>
                <p class="">Guest Queries</p>
            </div>
        </button>
    </div>


    <div id="Dashboard" class="tabcontent overflow-y-scroll">
        <?php

        // Query to fetch the counts
        $queryRegistration = "SELECT COUNT(*) AS guestCount FROM signup";
        $queryStaffs = "SELECT COUNT(*) AS staffsCount FROM staffs";
        $queryGuestQueries = "SELECT COUNT(*) AS guestQueriesCount FROM contactus";

        // Execute the queries
        $resultRegistration = mysqli_query($con, $queryRegistration);
        $resultStaffs = mysqli_query($con, $queryStaffs);
        $resultGuestQueries = mysqli_query($con, $queryGuestQueries);

        // Fetch counts from the results
        $rowRegistration = mysqli_fetch_assoc($resultRegistration);
        $rowStaffs = mysqli_fetch_assoc($resultStaffs);
        $rowGuestQueries = mysqli_fetch_assoc($resultGuestQueries);

        // Display the counts in the respective divs
        echo "<div>Total Guests: " . $rowRegistration['guestCount'] . "</div>";
        echo "<div>Total Staffs: " . $rowStaffs['staffsCount'] . "</div>";
        echo "<div>Guest Queries: " . $rowGuestQueries['guestQueriesCount'] . "</div>";
        ?>
        <div class="grid grid-cols-3 grid-rows-2 py-5 gap-x-10 gap-y-5 px-10">
            <div class=" w-[360px] h-[300px] bg-gray-200 rounded-lg"></div>
            <div class=" w-[360px] h-[300px] bg-gray-200 rounded-lg"></div>
            <div class=" w-[360px] h-[300px] bg-gray-200 rounded-lg"></div>
            <div class=" w-[360px] h-[300px] bg-gray-200 rounded-lg"></div>
            <div class=" w-[360px] h-[300px] bg-gray-200 rounded-lg"></div>
            <div class=" w-[360px] h-[300px] bg-gray-200 rounded-lg"></div>
        </div>
    </div>


    <!-- Registration starts -->
    <div id="Registration" class="tabcontent overflow-y-scroll">
        <button id="add-user-button" class="top-2 bg-blue-600 hover:bg-blue-700 text-white font-normal py-2 px-4 rounded-md mt-2 ml-[1062px] ">
            Add User
        </button>
        <table class="w-full mt-2 border-collapse">
            <thead class=" sticky top-0 text-left bg-gray-100">
                <tr class=" space-x-8 border-b border-b-2 border-gray-300">
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
                    <tr>
                        <td class="py-4 px-4"><?php echo $id ?></td>
                        <td class="py-4 px-4"><?php echo $firstname ?></td>
                        <td class="py-4 px-6"><?php echo $lastname ?></td>
                        <td class="py-4 px-2"><?php echo $email ?></td>
                        <td class="py-4 px-6"><?php echo $phone ?></td>
                        <td class="py-4 px-2"><?php echo $address ?></td>
                        <td class="py-4 px-6"><?php echo $username ?></td>
                        <td class="py-4 px-6"><?php echo $password ?></td>
                        <td>
                            <button>
                                <span onclick="openRegisterEditPopup(<?php echo $id ?>,'<?php echo $firstname ?>','<?php echo $lastname ?>','<?php echo $email ?>','<?php echo $phone ?>','<?php echo $address ?>','<?php echo $username ?>','<?php echo $password ?>')" class="material-symbols-outlined text-[20px] p-2 rounded-full hover:bg-green-100 text-green-500 hover:text-green-600">
                                    Edit
                                </span>
                            </button>
                            <!-- <td>
                        <button id="open-popup">
                            <span class="material-symbols-outlined text-[20px] p-2 rounded-full hover:bg-green-100 text-green-500 hover:text-green-600">
                                edit
                            </span>
                        </button>
                    </td> -->
                            <button onclick="confirmDelete(<?php echo $id; ?>)">
                                <span class="material-symbols-outlined text-[20px] p-2 rounded-full hover:bg-red-100 text-red-500 hover:text-red-600">
                                    delete
                                </span>
                            </button>
                        </td>
                    </tr>
                <?php
                    $id++;
                } ?>
            </tbody>
        </table>
    </div>

    <div id="userEditPopup" class="modal hidden fixed overflow-hidden top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-50 z-30">
        <form action="edit_user.php" method="POST" class="modal-content relative text-left max-w-lg mx-auto mt-0 p-8 bg-white rounded-xl shadow-lg">
            <span class="  absolute top-0 right-0 mt-2 mr-6 close text-3xl font-semibold cursor-pointer text-red-600" onclick="closeUserEditPopup()">&times;</span>


            <div class="grid grid-cols-2 gap-x-16">
                <div>
                    <!-- Add this hidden field for user_id -->
                    <input type="hidden" name="user_id" id="user_id" value="">

                    <label for="firstname" class="block text-[16px] mb-1">First Name</label>
                    <input type="text" name="fn" id="fname" class="w-full p-2 border" required>

                    <label for="lastname" class="block text-[16px] mb-1">Last Name</label>
                    <input type="text" name="ln" id="lname" class="w-full p-2 border" required>

                    <label for="email" class="block text-[16px] mt-4 mb-1">Email</label>
                    <input type="email" name="mail" id="emails" placeholder="eg: dheen@gmail.com" class="w-full p-2 border" required>

                    <label for="phone" class="block text-[16px] mt-4 mb-1">Phone Number</label>
                    <input type="tel" name="number" id="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="enter 10 digits" class="w-full p-2 border" required>
                </div>
                <div>
                    <label for="address" class="block text-[16px] mt-4 mb-1">Address</label>
                    <input type="text" name="add" id="address" class="w-full p-2 border" required>

                    <label for="username" class="block text-[16px] mt-4 mb-1">Username</label>
                    <input type="text" name="uname" id="username" class="w-full p-2 border" required>

                    <label for="password" class="block text-[16px] mt-4 mb-1">Password</label>
                    <input type="password" name="pass" id="password" class="w-full p-2 border" required>

                    <button type="submit" value="submit" name="submit" class="text-[16px] w-full bg-green-600 hover:bg-green-700 text-center text-white font-normal py-2 px-4 rounded-md mt-6">Save</button>
                </div>
            </div>
    </div>
    </form>

    <div id="add-popup" class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-50 hidden z-20">
        <form action="" method="POST" class="relative text-left max-w-lg mx-auto mt-0 p-8 bg-white rounded-xl shadow-lg">
            <button id="close-add-popup" class="text-red-600 hover:text-red-500 absolute top-3 right-6 z-20 text-3xl">×</button>
            <div class="grid grid-cols-2 gap-x-16">
                <div>
                    <!-- Add this hidden field for user_id -->
                    <input type="hidden" name="user_id" id="user_id" value="">

                    <label for="firstname" class="block text-[16px] mb-1">First Name</label>
                    <input type="text" name="fn" id="fname" class="w-full p-2 border" required>

                    <label for="lastname" class="block text-[16px] mb-1">Last Name</label>
                    <input type="text" name="ln" id="lname" class="w-full p-2 border" required>

                    <label for="email" class="block text-[16px] mt-4 mb-1">Email</label>
                    <input type="email" name="mail" id="emails" placeholder="eg: dheen@gmail.com" class="w-full p-2 border" required>

                    <label for="phone" class="block text-[16px] mt-4 mb-1">Phone Number</label>
                    <input type="tel" name="number" id="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="enter 10 digits" class="w-full p-2 border" required>
                </div>
                <div>
                    <label for="address" class="block text-[16px] mt-4 mb-1">Address</label>
                    <input type="text" name="add" id="address" class="w-full p-2 border" required>

                    <label for="username" class="block text-[16px] mt-4 mb-1">Username</label>
                    <input type="text" name="uname" id="username" class="w-full p-2 border" required>

                    <label for="password" class="block text-[16px] mt-4 mb-1">Password</label>
                    <input type="password" name="pass" id="password" class="w-full p-2 border" required>
                </div>
            </div>
            <button type="submit" value="submit" name="add-submit" class="text-[16px] w-full bg-green-600 hover:bg-green-700 text-center text-white font-normal py-2 px-4 rounded-md mt-6">Add User</button>
        </form>
    </div>
    <!-- Registration ends -->


    <div id="Booked" class="tabcontent">
        <div class="grid grid-cols-4 grid-rows-2 py-5 gap-x-10 gap-y-5 px-10">
            <div class=" w-[250px] h-[300px] bg-gray-200 rounded-lg"></div>
            <div class=" w-[250px] h-[300px] bg-gray-200 rounded-lg"></div>
            <div class=" w-[250px] h-[300px] bg-gray-200 rounded-lg"></div>
            <div class=" w-[250px] h-[300px] bg-gray-200 rounded-lg"></div>
            <div class=" w-[250px] h-[300px] bg-gray-200 rounded-lg"></div>
            <div class=" w-[250px] h-[300px] bg-gray-200 rounded-lg"></div>
            <div class=" w-[250px] h-[300px] bg-gray-200 rounded-lg"></div>
            <div class=" w-[250px] h-[300px] bg-gray-200 rounded-lg"></div>
        </div>
    </div>

    <div id="Rooms" class="tabcontent overflow-y-scroll">
    <div>
        <!-- <div class=" mx-auto flex justify-center px-16 container text-center bg-gray-200 mt-10 pt-12 pb-12 rounded-xl"> -->

            <div class=" relative gap-x-16 gap-y-8 grid grid-cols-4 grid-rows-2 mt-4">
                <!-- Room 1 -->
                <div class=" bg-[#fafafa] relative w-[240px] h-[300px] rounded-lg shadow-lg p-2 z-1">
                    <img src="Images/rooms/room1.jpg" alt="image" class=" w-full h-[160px] rounded-md">
                    <div class=" flex justify-between items-center px-1 mt-2">
                        <p class=" text-start font-semibold text-[15px]">Single Room</p>
                        <!-- <div class=" text-green-600">25% Offer <span class=" text-black font-normal line-through text-[16px]">₹5000</span></div> -->
                        <div class=" font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[2px] rounded-md">₹2,800</div>
                    </div>
                    <div class="flex justify-between mt-[18px]">
                        <a class=" text-red-500 px-6 py-2 flex items-center">
                            <span class="material-symbols-outlined text-[18px] mt-1 border-1 rounded-full hover:cursor-pointer">
                                delete
                            </span>
                            <p class="ml-1 mt-1 pb-[1px] text-[16px] text-red-500 font-normal hover:cursor-pointer">Delete</p>
                        </a>
                         <button id="open-popup" class="bg-blue-500 hover:bg-blue-600 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold shadow-md">Add Room</button>
                    </div>
                </div>



                <!-- Room 2 -->
                <div class=" bg-[#fafafa] relative w-[240px] h-[300px] rounded-lg shadow-lg p-2 z-0">
                    <img src="Images/rooms/room2.jpg" alt="image" class=" w-full h-[160px] rounded-md">
                    <div class=" flex justify-between items-center px-1 mt-2">
                        <p class=" text-start font-semibold text-[15px]">Double Room</p>
                        <!-- <div class=" text-green-600">25% Offer <span class=" text-black font-normal line-through text-[16px]">₹5000</span></div> -->
                        <div class=" font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[2px] rounded-md">₹4,500</div>
                    </div>
                    <div class="flex justify-between mt-[18px]">
                        <a class=" text-red-500 px-6 py-2 flex items-center">
                            <span class="material-symbols-outlined text-[18px] mt-1 border-1 rounded-full hover:cursor-pointer">
                                delete
                            </span>
                            <p class="ml-1 mt-1 pb-[1px] text-[16px] text-red-500 font-normal hover:cursor-pointer">Delete</p>
                        </a>
                         <button id="open-popup" class="bg-blue-500 hover:bg-blue-600 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold shadow-md">Add Room</button>
                    </div>
                </div>
                <!-- Room 3 -->
                <div class=" bg-[#fafafa] relative w-[240px] h-[300px] rounded-lg shadow-lg p-2 z-0">
                    <img src="Images/rooms/room3.jpg" alt="image" class=" w-full h-[160px] rounded-md">
                    <div class=" flex justify-between items-center px-1 mt-2">
                        <p class=" text-start font-semibold text-[15px]">Triple Room</p>
                        <!-- <div class=" text-green-600">25% Offer <span class=" text-black font-normal line-through text-[16px]">₹5000</span></div> -->
                        <div class=" font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[2px] rounded-md">₹7,000</div>
                    </div>
                    <div class="flex justify-between mt-[18px]">
                        <a class=" text-red-500 px-6 py-2 flex items-center">
                            <span class="material-symbols-outlined text-[18px] mt-1 border-1 rounded-full hover:cursor-pointer">
                                delete
                            </span>
                            <p class="ml-1 mt-1 pb-[1px] text-[16px] text-red-500 font-normal hover:cursor-pointer">Delete</p>
                        </a>
                         <button id="open-popup" class="bg-blue-500 hover:bg-blue-600 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold shadow-md">Add Room</button>
                    </div>
                </div>
                <!-- Room 4 -->
                <div class=" bg-[#fafafa] relative w-[240px] h-[300px] rounded-lg shadow-lg p-2 z-0">
                    <img src="Images/rooms/room4.jpg" alt="image" class=" w-full h-[160px] rounded-md">
                    <div class=" flex justify-between items-center px-1 mt-2">
                        <p class=" text-start font-semibold text-[15px]">Quad Room</p>
                        <!-- <div class=" text-green-600">25% Offer <span class=" text-black font-normal line-through text-[16px]">₹5000</span></div> -->
                        <div class=" font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[2px] rounded-md">₹5,000</div>
                    </div>
                    <div class="flex justify-between mt-[18px]">
                        <a class=" text-red-500 px-6 py-2 flex items-center">
                            <span class="material-symbols-outlined text-[18px] mt-1 border-1 rounded-full hover:cursor-pointer">
                                delete
                            </span>
                            <p class="ml-1 mt-1 pb-[1px] text-[16px] text-red-500 font-normal hover:cursor-pointer">Delete</p>
                        </a>
                         <button id="open-popup" class="bg-blue-500 hover:bg-blue-600 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold shadow-md">Add Room</button>
                    </div>
                </div>
                <!-- Room 5 -->
                <div class=" bg-[#fafafa] relative w-[240px] h-[300px] rounded-lg shadow-lg p-2 z-0">
                    <img src="Images/rooms/room8.jpg" alt="image" class=" w-full h-[160px] rounded-md">
                    <div class=" flex justify-between items-center px-1 mt-2">
                        <p class=" text-start font-semibold text-[15px]">Family Room</p>
                        <!-- <div class=" text-green-600">25% Offer <span class=" text-black font-normal line-through text-[16px]">₹5000</span></div> -->
                        <div class=" font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[2px] rounded-md">₹5,600</div>
                    </div>
                    <div class="flex justify-between mt-[18px]">
                        <a class=" text-red-500 px-6 py-2 flex items-center">
                            <span class="material-symbols-outlined text-[18px] mt-1 border-1 rounded-full hover:cursor-pointer">
                                delete
                            </span>
                            <p class="ml-1 mt-1 pb-[1px] text-[16px] text-red-500 font-normal hover:cursor-pointer">Delete</p>
                        </a>
                         <button id="open-popup" class="bg-blue-500 hover:bg-blue-600 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold shadow-md">Add Room</button>
                    </div>
                </div>
                <!-- Room 6 -->
                <div class=" bg-[#fafafa] relative w-[240px] h-[300px] rounded-lg shadow-lg p-2 z-0">
                    <img src="Images/rooms/room6.jpg" alt="image" class=" w-full h-[160px] rounded-md">
                    <div class=" flex justify-between items-center px-1 mt-2">
                        <p class=" text-start font-semibold text-[15px]">King Room</p>
                        <!-- <div class=" text-green-600">25% Offer <span class=" text-black font-normal line-through text-[16px]">₹5000</span></div> -->
                        <div class=" font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[2px] rounded-md">₹6,400</div>
                    </div>
                    <div class="flex justify-between mt-[18px]">
                        <a class=" text-red-500 px-6 py-2 flex items-center">
                            <span class="material-symbols-outlined text-[18px] mt-1 border-1 rounded-full hover:cursor-pointer">
                                delete
                            </span>
                            <p class="ml-1 mt-1 pb-[1px] text-[16px] text-red-500 font-normal hover:cursor-pointer">Delete</p>
                        </a>
                         <button id="open-popup" class="bg-blue-500 hover:bg-blue-600 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold shadow-md">Add Room</button>
                    </div>
                </div>
                <!-- Room 7 -->
                <div class=" bg-[#fafafa] relative w-[240px] h-[300px] rounded-lg shadow-lg p-2 z-0">
                    <img src="Images/rooms/room7.jpg" alt="image" class=" w-full h-[160px] rounded-md">
                    <div class=" flex justify-between items-center px-1 mt-2">
                        <p class=" text-start font-semibold text-[15px]">Queen Room</p>
                        <!-- <div class=" text-green-600">25% Offer <span class=" text-black font-normal line-through text-[16px]">₹5000</span></div> -->
                        <div class=" font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[2px] rounded-md">₹3,200</div>
                    </div>
                    <div class="flex justify-between mt-[18px]">
                        <a class=" text-red-500 px-6 py-2 flex items-center">
                            <span class="material-symbols-outlined text-[18px] mt-1 border-1 rounded-full hover:cursor-pointer">
                                delete
                            </span>
                            <p class="ml-1 mt-1 pb-[1px] text-[16px] text-red-500 font-normal hover:cursor-pointer">Delete</p>
                        </a>
                         <button id="open-popup" class="bg-blue-500 hover:bg-blue-600 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold shadow-md">Add Room</button>
                    </div>
                </div>
                <!-- Room 8 -->
                <div class=" bg-[#fafafa] relative w-[240px] h-[300px] rounded-lg shadow-lg p-2 z-0">
                    <img src="Images/rooms/room5.jpg" alt="image" class=" w-full h-[160px] rounded-md">
                    <div class=" flex justify-between items-center px-1 mt-2">
                        <p class=" text-start font-semibold text-[15px]">Guest Room</p>
                        <!-- <div class=" text-green-600">25% Offer <span class=" text-black font-normal line-through text-[16px]">₹5000</span></div> -->
                        <div class=" font-semibold text-[14px] bg-green-400 pr-[16px] pl-[16px] pt-[2px] pb-[2px] rounded-md">₹3,700</div>
                    </div>
                    <div class="flex justify-between mt-[18px]">
                        <a class=" text-red-500 px-6 py-2 flex items-center">
                            <span class="material-symbols-outlined text-[18px] mt-1 border-1 rounded-full hover:cursor-pointer">
                                delete
                            </span>
                            <p class="ml-1 mt-1 pb-[1px] text-[16px] text-red-500 font-normal hover:cursor-pointer">Delete</p>
                        </a>
                         <button id="open-popup" class="bg-blue-500 hover:bg-blue-600 rounded-md pr-[14px] pl-[14px] pt-[4px] pb-[4px] text-white text-[14px] font-semibold shadow-md">Add Room</button>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </div>
    </div>

    <div id="Staffs" class="tabcontent overflow-y-scroll overflow-x-scroll bg-gray-50">
        <form action="add_staff.php" method="POST" class="sticky z-10 top-0 pt-[12px] pb-[12px] flex items-center pl-8 bg-gray-100 rounded-br-xl rounded-bl-xl">
            <label>Staff Name: </label>
            <input type="text" name="name" pattern="[a-zA-Z]+" class="w-[318px] px-2 py-[6px] ml-6 rounded-md border-2 border-gray-200 text-gray-500" required>
            <label class=" ml-14">Staff Role: </label>
            <select name="role" class="w-[320px] px-2 py-[6px] ml-6 rounded-md border-2 border-gray-200 text-gray-500" required>
                <option value="select">select role</option>
                <option value="manager">manager</option>
                <option value="housekeeper">housekeeper</option>
                <option value="security">security</option>
                <option value="front desk">front desk</option>
                <option value="porter">porter</option>
                <option value="cook">cook</option>
                <option value="chef">chef</option>
                <option value="server">server</option>
                <option value="technician">technician</option>
            </select>
            <button type="submit" name="btn" class="ml-12 px-4 py-2 rounded-md bg-blue-600 hover:bg-blue-700 text-white">Add staff</button>
        </form>
        <div class="relative ml-4 gap-x-10 gap-y-4 grid grid-cols-5 grid-rows-3">
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
                    <p class="font-semibold text-[13px] pt-2"><?php echo $name ?></p>
                    <p class="font-semibold text-[12px] text-gray-400"><?php echo $role ?></p>
                    <div class="absolute left-0 bottom-2 right-2 flex">
                        <a class=" edit-button absolute left-1 bottom-2 text-green-500 px-6 py-2 flex items-center" onclick="openStaffEditPopup(<?php echo $id; ?>, '<?php echo $name; ?>', '<?php echo $role; ?>')">
                            <span class="material-symbols-outlined text-[14px] mt-1 border-1 rounded-full hover:cursor-pointer">
                                edit
                            </span>
                            <p class="ml-1 mt-1 text-[12px] text-green-500">Edit</p>
                        </a>
                        <a onclick="confirmDelete(<?php echo $id; ?>)" class=" absolute right-0 bottom-2 text-red-500 px-6 py-2 flex items-center">
                            <span class="material-symbols-outlined text-[14px] mt-1 border-1 rounded-full hover:cursor-pointer">
                                delete
                            </span>
                            <p class="ml-1 mt-1 text-[12px] text-red-500 hover:cursor-pointer">Delete</p>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- Popup for Staff Edit -->
    <div id="staffEditPopup" class="modal hidden fixed h-full overflow-hidden bg-black bg-opacity-50 z-30 w-full">
        <div class=" relative modal-content bg-white mx-auto mt-20 p-[40px] rounded-md w-[400px]">
            <span class="  absolute top-0 right-0 mt-2 mr-6 close text-3xl font-semibold cursor-pointer text-red-600" onclick="closeStaffEditPopup()">&times;</span>
            <form action="edit_staff.php" method="POST">
                <input type="hidden" name="editStaffId" id="editStaffId">

                <label for="staff_name" class=" ">Staff Name:</label>
                <input type="text" name="edit_staff_name" id="staff_name" class="w-full p-2 border" required>

                <label for="staff_role">Staff Role:</label>
                <select name="edit_staff_role" id="staff_role" class="w-full p-2 border" required>
                    <option value="select">select role</option>
                    <option value="manager">manager</option>
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




    <div id="Queries" class="tabcontent overflow-y-scroll">
        <table class="w-full mt-2 border-collapse">
            <thead class=" sticky top-0 text-left bg-gray-100">
                <tr class=" text-nowrap border-b border-b-2 border-gray-300">

                    <th class="py-4 px-4">Id</th>
                    <th class="py-4 px-4">First Name</th>
                    <th class="py-4 px-4">Last Name</th>
                    <th class="py-4 px-4">Email</th>
                    <th class="py-4 px-4">Message</th>
                    <th class="py-4 px-2">Actions</th>
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
                    <tr>
                        <td class="py-4 px-4"><?php echo $id ?></td>
                        <td class="py-4 px-4"><?php echo $firstname ?></td>
                        <td class="py-4 px-4"><?php echo $lastname ?></td>
                        <td class="py-4 px-4"><?php echo $email ?></td>
                        <td class="py-4 px-4 text-wrap"><?php echo $message ?></td>
                        <td>
                            <button onclick="confirmDelete(<?php echo $id; ?>)">
                                <span class="material-symbols-outlined ml-4 text-[20px] p-2 rounded-full hover:bg-red-100 text-red-500 hover:text-red-600">
                                    delete
                                </span>
                            </button>
                        </td>
                    </tr>
                <?php
                    $id++;
                } ?>
            </tbody>
        </table>
    </div>

    <!-- End of vertical tabs -->

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
    <script>
        function confirmDelete(userId) {
            var confirmation = confirm("Are you sure you want to delete this data?");
            if (confirmation) {
                window.location.href = 'delete_user.php?id=' + userId;
            }
        }
    </script>

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
        }

        function closeUserEditPopup() {
            // Close the popup
            document.getElementById('userEditPopup').classList.add('hidden');
        }
    </script>

    <!-- JavaScript to toggle the visibility of the "Add" popup -->
    <script>
        document.getElementById('add-user-button').addEventListener('click', function() {
            document.getElementById('add-popup').classList.remove('hidden');
        });

        document.addEventListener('DOMContentLoaded', function() {
            var closeAddPopupButton = document.getElementById('close-add-popup');
            var addPopup = document.getElementById('add-popup');

            closeAddPopupButton.addEventListener('click', function() {
                addPopup.classList.add('hidden');
            });
        });
    </script>

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
</body>

</html>