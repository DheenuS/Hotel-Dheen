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
    <!-- Booking Form -->
</head>

<body class="bg-gray-200 flex mt-[80px] justify-center">
    <!-- Booking Form -->
    <form action="" method="POST" id="usersignup" class=" w-[750px] h-auto pt-6 pb-10 bg-white shadow-lg rounded-lg">
        <h1 class=" text-[18px] font-semibold text-center pb-10">Registration Form</h1>
        <div class="flex text-left">
            <div class="">
                <label for="text" class=" text-[16px] ml-[48px]">Name</label>
                <input type="text" name="Name" id="name" class=" w-[280px] mt-[6px] ml-[48px] mb-[20px] text-[14px] border-2 border-t-0 border-x-0 border-gray-800 pl-[2px] outline-none " required>
                <label for="email" class=" text-[16px] ml-[48px] ">Email</label>
                <input type="email" name="Email" id="email" class=" w-[280px] mt-[6px] ml-[48px] mb-[20px] text-[14px] border-2 border-t-0 border-x-0 border-gray-800 pl-[2px] outline-none " required>
                <label for="phone" class=" text-[16px] ml-[48px]">Phone Number</label>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{3}[0-9]{1}" class=" w-[280px] mt-[6px] ml-[48px] mb-[20px] text-[14px] border-2 border-t-0 border-x-0 border-gray-800 pl-[2px] outline-none " required>
                <label for="text" class=" text-[16px] ml-[48px]">Address</label>
                <input type="text" name="Name" id="name" class=" w-[280px] mt-[6px] ml-[48px] mb-[20px] text-[14px] border-2 border-t-0 border-x-0 border-gray-800 pl-[2px] outline-none " required>
                <label for="date" class=" text-[16px] ml-[48px]">Check-In</label>
                <input type="date" name="" id="" class="w-[280px] mt-[6px] ml-[48px] mb-[20px] text-[14px border-2 border-t-0 border-x-0 border-gray-800 pl-[2px] outline-none " required>
            </div>
            <div class="">
                <label for="select" class=" text-[16px] ml-[48px]">Adults</label>
                <select name="" id="" class="w-[280px] mb-[20px] mt-[7px] ml-[48px] text-[14px] border-2 border-t-0 border-x-0 border-gray-800 pl-[2px] outline-none " required>
                    <option value="">Select Adults</option>
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5</option>
                </select>
                <label for="select" class=" text-[16px] ml-[48px]">Child</label>
                <select name="" id="" class="w-[280px] mb-[20px] mt-[7px] ml-[48px] text-[14px] border-2 border-t-0 border-x-0 border-gray-800 pl-[2px] outline-none " required>
                    <option value="">Select Children</option>
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5</option>
                </select>
                <label for="select" class=" text-[16px] ml-[48px]">Room Type</label>
                <select name="" id="" class="w-[280px] mb-[20px] mt-[7px] ml-[48px] text-[14px] border-2 border-t-0 border-x-0 border-gray-800 pl-[2px] outline-none " required>
                    <option value="Single">Single</option>
                </select>
                <label for="select" class=" text-[16px] ml-[48px]">Room Price</label>
                <select name="" id="" class="w-[280px] mb-[20px] mt-[7px] ml-[48px] text-[14px] border-2 border-t-0 border-x-0 border-gray-800 pl-[2px] outline-none " required>
                    <option value="₹2,800">₹2,800</option>
                </select>
                <label for="date" class=" text-[16px] ml-[48px]">Check-Out</label>
                <input type="date" name="" id="" class="w-[280px] mb-[20px] mt-[7px] ml-[48px] text-[14px] border-2 border-t-0 border-x-0 border-gray-800 pl-[2px] outline-none " required>
            </div>
        </div>
        <button type="submit" id="myButton" name="user_signup_submit" class=" text-[16px] w-[280px] ml-[240px] mt-[50px] bg-blue-600 hover:bg-blue-700 text-center text-white font-normal pt-[8px] pb-[8px] rounded-md" required>Book</button>
    </form>
</body>