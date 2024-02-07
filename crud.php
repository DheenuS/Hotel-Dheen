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
    echo "<script type='text/javascript'>alert('Edited successfully...')</script>";
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Dheen</title>
    <link rel="icon" href="Images/admin/dheenblack.jpeg">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body class=" flex flex-col justify-center items-center ">
    <div id="Registration" class="tabcontent">
        <table class="">
            <thead class=" text-left bg-gray-100">
                <tr class=" space-x-8 border-2 border-b ">
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Actions</th>
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
                        <td><?php echo $id ?></td>
                        <td><?php echo $firstname ?></td>
                        <td><?php echo $lastname ?></td>
                        <td><?php echo $email ?></td>
                        <td><?php echo $phone ?></td>
                        <td><?php echo $address ?></td>
                        <td><?php echo $username ?></td>
                        <td><?php echo $password ?></td>
                        <td>
                            <button class="open-popup" data-userid="<?php echo $id; ?>">
                                <span class="material-symbols-outlined text-[20px] p-2 rounded-full hover:bg-green-100 text-green-500 hover:text-green-600">
                                    Edit
                                </span>
                            </button>
                        </td>
                        <!-- <td>
                        <button id="open-popup">
                            <span class="material-symbols-outlined text-[20px] p-2 rounded-full hover:bg-green-100 text-green-500 hover:text-green-600">
                                edit
                            </span>
                        </button>
                    </td> -->
                        <td>
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

    <div id="popups" class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-50 hidden z-20">
        <form action="edit_user.php" method="POST" class="relative text-left max-w-lg mx-auto mt-0 p-8 bg-white rounded-xl shadow-lg">

            <button id="close-popup" class=" text-red-600 hover:text-red-500 absolute top-3 right-6 z-20 text-3xl">×</button>

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
    <!-- Script for popup -->
    <script>
        // document.getElementById('open-popup').addEventListener('click', function() {
        //     document.getElementById('popups').classList.remove('hidden');
        // });
        document.addEventListener('DOMContentLoaded', function() {
            var closePopupButton = document.getElementById('close-popup');
            var popups = document.getElementById('popups');

            closePopupButton.addEventListener('click', function() {
                popups.classList.add('hidden');
            });
        });



        // Add this script in the <script> section of your HTML
        document.querySelectorAll('.open-popup').forEach(function(button) {
            button.addEventListener('click', function() {
                var userId = this.getAttribute('data-userid');
                openEditPopup(userId);
            });
        });

        function openEditPopup(userId) {
            // Fetch the user details from the server using AJAX
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var userData = JSON.parse(xhr.responseText);
                    populateEditPopup(userData);
                }
            };
            xhr.open("GET", "get_user_data.php?userId=" + userId, true);
            xhr.send();
        }

        function populateEditPopup(userData) {
            // Populate the popup form with the existing user data
            document.getElementById('user_id').value = userData.id;
            document.getElementById('fname').value = userData.firstname;
            document.getElementById('lname').value = userData.lastname;
            document.getElementById('emails').value = userData.email;
            document.getElementById('phone').value = userData.phone;
            document.getElementById('address').value = userData.address;
            document.getElementById('username').value = userData.username;
            document.getElementById('password').value = userData.password;


            document.getElementById('popups').classList.remove('hidden');
        }


        function confirmDelete(userId) {
        var confirmation = confirm("Are you sure you want to delete this user?");
        if (confirmation) {
            window.location.href = 'delete_user.php?id=' + userId;
        }
    }
    </script>
</body>

</html>
<!-- <tr>
                    <td>1</td>
                    <td>Dheenu</td>
                    <td>S</td>
                    <td>dheen@gmail.com</td>
                    <td>4545454545</td>
                    <td>Siruvangur</td>
                    <td>Dheenu</td>
                    <td>123</td>
                    <td>
                        <button id="open-popup">
                            <span class="material-symbols-outlined text-[30px] p-2 rounded-full hover:bg-green-100 text-green-500 hover:text-green-600">
                                edit
                            </span>
                        </button>
                    </td>
                    <td>
                        <button>
                            <span class="material-symbols-outlined text-[30px] p-2 rounded-full hover:bg-red-100 text-red-500 hover:text-red-600">
                                delete
                            </span>
                        </button>
                    </td>
                </tr> -->




<!-- <form action="" method="POST" class="">
    <div class=" grid grid-cols-2 grid-rows-8 ">

        <label class=" text-[16px] mt-[20px]">First Name</label>
        <input type="text" name="fn" class=" w-[220px] text-[14px] border-2 mt-[16px] pl-[8px] border-gray-300 rounded-sm" required>

        <label class=" text-[16px] mt-[20px]">Last Name</label>
        <input type="text" name="ln" class="w-[220px] text-[14px] border-2 mt-[16px] pl-[8px] border-gray-300 rounded-sm" required>

        <label class=" text-[16px] mt-[20px]">Email</label>
        <input type="email" name="mail" placeholder="eg: dheen@gmail.com" class="w-[220px] text-[14px] border-2 mt-[16px] pl-[8px] border-gray-300 rounded-sm" required>

        <label class=" text-[16px] mt-[20px]">Phone</label>
        <input type="tel" name="number" pattern="[0-9]{3}[0-9]{3}[0-9]{3}[0-9]{1}" placeholder="enter 10 digits" class=" w-[220px] text-[14px] border-2 mt-[16px] pl-[8px] border-gray-300 rounded-sm" required>

        <label class=" text-[16px] mt-[20px]">Address</label>
        <input type="text" name="add" class=" w-[220px] text-[14px] border-2 mt-[16px] pl-[8px] border-gray-300 rounded-sm" required>

        <label class=" text-[16px] mt-[20px]">Username</label>
        <input type="text" name="uname" class=" w-[220px] text-[14px] border-2 mt-[16px] pl-[8px] border-gray-300 rounded-sm" required>

        <label class=" text-[16px] mt-[20px]">Password</label>
        <input type="password" name="pass" class="w-[220px] text-[14px] border-2 mt-[16px] pl-[8px] border-gray-300 rounded-sm" required>

    </div>
    <button type="submit" vlaue="submit" name="submit" class="text-[16px] w-full mt-[20px] bg-green-600 hover:bg-green-700 text-white font-normal pt-[8px] pb-[8px] rounded-md" required>Save</button>
</form> -->