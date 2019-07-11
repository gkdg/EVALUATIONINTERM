<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>

<body>
    <h1>BIGGEST REAL ESTATE AGENCY</h1>
    <div>
        <nav>
            <ul>
                <li><a href="addHousing.php">Advertise a House</a></li>
                <li><a href="houses.php">Display Houses</a></li>
            </ul>
        </nav>
    </div>
</body>

</html>
<h2>ADVERTISE A HOUSE </h2>

<form enctype="multipart/form-data" action="" method='POST'>
    <input type="text" name="title" placeholder="title of the house" required>
    <br>
    <input type="text" name="address" placeholder="address of the house" required>
    <br>
    <input type="text" name="city" placeholder="city of the house" required>
    <br>
    <input type="text" name="postCode" placeholder="postal code" required>
    <br>
    <input type="int" name="area" placeholder="metre square of the house" required>
    <br>
    <input type="int" name="price" placeholder="price" required>
    <br>
    <select name="type">
        <option name="default" value="selectType">select a type</option>
        <option name="typeRent" value="rent">rent</option>
        <option name="typeSale" value="sale">sale</option>
    </select>
    <br>
    <textarea name="description" value="houseDescription" cols="30" rows="10" placeholder="description"></textarea>
    <br>
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    Choose a photo:<br><input name="photoUpload" type="file" />
    <br>
    <input type="submit" name="register" value="Register">
    <br>

</form>

</body>

</html>


<?php
require_once 'dataBase.php';
$imgFolder = 'img/';

$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
if ($conn) {
    $db_name = DB_NAME;
    $db_Select = mysqli_select_db($conn, $db_name);

    if (isset($_POST['register'])) {
        $title = $_POST['title'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $postCode = $_POST['postCode'];
        $area = (int) $_POST['area'];
        $price = (int) $_POST['price'];
        $type = $_POST['type'];
        $photo = $imgFolder;
        $description = $_POST['description'];
        $querry = "INSERT INTO housing
        (title, addresss, city, pc, area, price, typed, photo, descriptions) 
        VALUES ('$title', '$address', '$city', '$postCode', '$area', 
        '$price', '$type', '$photo', '$description')";
        $results = mysqli_query($conn, $querry);
        if ($results) {
            echo 'Registration is a success! <br>';
            $querryID = "SELECT id_housing FROM housing 
            WHERE title ='$title'";
            $resultID = mysqli_query($conn, $querryID);
            $idForPath = '';
            while ($db_record = mysqli_fetch_assoc($resultID)) {
                $idForPath = $db_record['id_housing'];
            }
            $registeredPhotoPath = $imgFolder . $idForPath . basename($_FILES['photoUpload']['name']);
            $querryPhoto = "UPDATE housing
            SET photo = '$registeredPhotoPath'
            WHERE id_housing = '$idForPath'";
            $resultsPhoto = mysqli_query($conn, $querryPhoto);
            move_uploaded_file($_FILES['photoUpload']['tmp_name'], $registeredPhotoPath);
            if ($resultsPhoto) {
                echo 'Photo registration success';
            } else {
                echo 'Photo could not be uploaded';
            }
        } else {
            echo 'Something went wrong please try again';
        }
    }
}
mysqli_close($conn);
