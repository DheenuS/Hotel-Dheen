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
    <!-- Booking Registration form -->
    <div id="popups" class=" hidden fixed top-10 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-50 z-20"><!-- booking-form  -->
            <form id="reservation-form" action="" method="POST" class=" relative text-left max-w-lg mx-auto mt-0 p-8 bg-white rounded-lg shadow-lg">
                <button id="close-popup" class=" text-red-600 hover:text-red-500 absolute top-3 right-6 z-20 text-3xl">×</button>
                <h1 class="text-2xl font-semibold text-center mb-8">Reservation Form</h1>

                <div class="grid grid-cols-2 md:grid-cols-2 gap-x-16">
                    <div>
                        <label for="name" class="block text-[15px] mb-2">Name</label>
                        <input type="text" pattern="[a-zA-Z]+" name="Name" id="name" class="w-full p-2 border" required>

                        <label for="email" class="block text-[15px] mt-2 mb-1">Email</label>
                        <input type="email" name="Email" id="email" class="w-full p-2 border" required>

                        <label for="phone" class="block text-[15px] mt-2 mb-1">Phone Number</label>
                        <input type="tel" name="Phone" id="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="w-full p-2 border" required>

                        <label for="address" class="block text-[15px] mt-2 mb-1">Address</label>
                        <input type="text" name="Address" id="address" class="w-full p-2 border" required>
                        <label for="adults" class="block text-[15px] mt-2 mb-1" id="ad">Adults</label>
                        <select name="Adults" id="adults" class="w-full p-2 border" required>
                            <option value="">Select Adults</option>
                            <option value="1" id="option1">1</option>
                            <option value="2" id="option2">2</option>
                            <option value="3" id="option3">3</option>
                            <option value="4" id="option4">4</option>
                            <option value="5" id="option5">5</option>
                        </select>

                    </div>
                    
                    <div>
                        <label for="children" class="block text-[15px] mt-1 mb-1" id="child">Child</label>
                        <select name="Children" id="children" class="w-full p-2 border">
                            <option value="">Select Children</option>
                            <option value="1" id="option-1">1</option>
                            <option value="2" id="option-2">2</option>
                            <option value="3" id="option-3">3</option>
                            <option value="4" id="option-4">4</option>
                            <option value="5" id="option-5">5</option>
                        </select>
                        <label for="roomType" class="block text-[15px] mt-2 mb-2">Room Type</label>
                        <select name="roomType" id="roomType" class="w-full p-2 border data-room-type">
                            <option value="Single">Single</option>
                            <option value="Double">Double</option>
                            <option value="Triple">Triple</option>
                            <option value="Quad">Quad</option>
                            <option value="Family">Family</option>
                            <option value="King">King</option>
                            <option value="Queen">Queen</option>
                            <option value="Guest">Guest</option>
                        </select>
                        <label for="roomPrice" class="block text-[15px] mt-2 mb-1">Room Price</label>
                        <select name="roomPrice" id="roomPrice" class="w-full p-2 border data-room-price">
                            <option value="₹1,800">₹1,800</option>
                            <option value="₹2,200">₹2,200</option>
                            <option value="₹4,400">₹4,400</option>
                            <option value="₹6,000">₹6,000</option>
                            <option value="₹8,500">₹8,500</option>
                            <option value="₹2,400">₹2,400</option>
                            <option value="₹2,600">₹2,600</option>
                            <option value="₹9,700">₹9,700</option>
                        </select>

                        <label for="checkIn" class="block text-[15px] mt-2 mb-1">Check-In</label>
                        <input type="date" name="checkIn" id="checkIn" class="w-full p-2 border" required>

                        <label for="checkOut" class="block text-[15px] mt-2 mb-1">Check-Out</label>
                        <input type="date" name="checkOut" id="checkOut" class="w-full p-2 border" required>
                        <!-- Hidden input field for total number of days -->
                        <input type="hidden" name="totalDays" id="totalDays">
                    </div>

                </div>
                <button type="submit" class="text-[16px] w-full bg-blue-600 hover:bg-blue-700 text-center text-white font-normal py-2 px-4 rounded-md mt-6">Book</button>
        </div>
    </div>
    </form>
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
            closePopupButton.addEventListener('click', function() {
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

</body>