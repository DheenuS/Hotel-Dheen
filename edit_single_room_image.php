<?php 
include("db.php");
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    if($_FILES["image"]["error"] === 4){
        echo "<script type='text/javascript'>alert('Image does not exists...'); setTimeout(function(){ window.location.href = 'admindash.php' }, 1000);</script>";
    }
    else {
        $fileName = $_FILES["image"]["name"];
        $fileSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];

        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));

        if(!in_array($imageExtension, $validImageExtension)) {
            echo "<script type='text/javascript'>alert('Invalid image extension...'); setTimeout(function(){ window.location.href = 'admindash.php' }, 1000);</script>";
        }
        else if($fileSize > 1000000) {
            echo "<script type='text/javascript'>alert('Image size to long...'); setTimeout(function(){ window.location.href = 'admindash.php' }, 1000);</script>";
        }
        else {
            $newImageName = uniqid();
            $newImageName .= '.' .$imageExtension;
            move_uploaded_file($tmpName, 'Images/rooms' . $newImageName);
            $query = "INSERT INTO adminrooms VALUES('1', $newImageName )";
            mysqli_query($con, $query);
            echo "<script type='text/javascript'>alert('Image Updated...'); setTimeout(function(){ window.location.href = 'admindash.php' }, 1000);</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
</head>
<body class="flex items-center justify-center">
        <?php 
        $i = 1;
        $rows = mysqli_query($con, "SELECT image FROM adminrooms WHERE id = 1");
        ?>
        <?php foreach($rows as $row) : ?>
            <div class="w-[400px] h-[400px]">
                <table>
                <tr>
                    <td><?php $i++; ?></td>
                    <td><img src="Image/rooms/<?php echo $row['image']; ?> width=200" alt=""></td>
                    <td></td>
                </tr>
                <?php endforeach; ?>
                </table>
            </div>
    </div>
</body>
</html>