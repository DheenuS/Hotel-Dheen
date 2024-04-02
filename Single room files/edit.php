<?php
session_start();
include("db.php");

$query = "select * from signup where id = '$edit'";
$run = mysqli_query($con, $query);

while ($row = mysqli_fetch_array($run)) {
    $uid = $row['id'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $email = $row['email'];
    $phone = $row['phone'];
    $address = $row['address'];
    $username = $row['username'];
    $password = $row['password'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <link rel="icon" href="Images/admin/dheenblack.jpeg">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
<div class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-50 z-20">
    <a href="crud.php">    
    <button class=" text-red-600 hover:text-red-500 absolute top-[190px] right-[510px] z-20 text-3xl">×</button>
    </a>
        <form action="" method="POST" class=" relative text-left max-w-lg mx-auto mt-0 p-8 bg-white rounded-xl shadow-lg">
            <div class="grid grid-cols-2 gap-x-16">
                <div>
                    <label for="firstname" class="block text-[16px] mb-1">First Name</label>
                    <input type="text" name="fn" value="<?php echo $firstname;?>" id="fname" class="w-full p-2 border" required>

                    <label for="lastname" class="block text-[16px] mb-1">Last Name</label>
                    <input type="text" name="ln" value="<?php echo $lastname;?>" id="lname" class="w-full p-2 border" required>

                    <label for="email" class="block text-[16px] mt-4 mb-1">Email</label>
                    <input type="email" name="mail" value="<?php echo $email;?>" id="emails" placeholder="eg: dheen@gmail.com" class="w-full p-2 border" required>

                    <label for="phone" class="block text-[16px] mt-4 mb-1">Phone Number</label>
                    <input type="tel" name="number" value="<?php echo $phone;?>" id="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="enter 10 digits" class="w-full p-2 border" required>
                </div>
                <div>
                    <label for="address" class="block text-[16px] mt-4 mb-1">Address</label>
                    <input type="text" name="add" value="<?php echo $address;?>" id="address" class="w-full p-2 border" required>
    
                    <label for="username" class="block text-[16px] mt-4 mb-1">Username</label>
                    <input type="text" name="uname" value="<?php echo $username;?>" id="username" class="w-full p-2 border" required>
    
                    <label for="password" class="block text-[16px] mt-4 mb-1">Password</label>
                    <input type="password" name="pass" value="<?php echo $password;?>" id="password" class="w-full p-2 border" required>
                    
                    <button type="submit" value="submit" name="submit" class="text-[16px] w-full bg-green-600 hover:bg-green-700 text-center text-white font-normal py-2 px-4 rounded-md mt-6">Save</button>
                </div>
            </div>
    </div>
    </form>
</body>
</html>