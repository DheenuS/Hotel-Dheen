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
</head>

<body>

    <div id="rooms" class=" mt-10">
        <h1 class=" text-center text-[26px] text-gray-800 font-semibold pt-20">Our Rooms</h1><!-- underline underline-offset-8 -->
        <h1 class=" text-center text-[16px] text-gray-600 font-normal mb-10">Explore our fantastic rooms</h1>
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
    <script>
        document.getElementById('open-popup').addEventListener('click', function() {
            document.getElementById('popups').classList.remove('hidden');
        });

        document.getElementById('close-popup').addEventListener('click', function() {
            document.getElementById('popups').classList.add('hidden');
        });
    </script>

    <div id="popups" class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-50 hidden z-20">
                    <form action="" method="POST" class=" text-left max-w-lg mx-auto mt-0 p-8 bg-white rounded-xl shadow-lg">
                        <button id="close-popup" class="absolute top-0 right-10 m-4 z-20">×</button>
                        <h1 class="text-2xl font-semibold text-center mb-6">Registration Form</h1>

                        <div class="grid grid-cols-2 md:grid-cols-2 gap-x-16">
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
</body>

</html>