<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Houses</title>
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

<?php
require_once 'dataBase.php';
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
if ($conn) {
    $db_name = DB_NAME;
    $db_Select = mysqli_select_db($conn, $db_name);
    $querry = "SELECT * FROM housing";
    $results = mysqli_query($conn, $querry);
    while ($db_record = mysqli_fetch_assoc($results)) {
        echo '<hr>';
        echo  '<h2>' . $db_record['title'] . '</h2><br>';
        echo '<img height= "300" width="300" src="' . $db_record['photo'] . '" alt=""><br>';
        echo 'Location: ' . $db_record['addresss'] . ' ' . $db_record['city'] . '<br>';
        echo 'Meter Square: ' . $db_record['area'] . '<br>';
        echo 'Price: ' . $db_record['price'] . ' €<br>';
        echo 'Type: ' . $db_record['typed'] . '<br>';
        echo 'Description: ' . $db_record['descriptions'] . '<br>';
    }
}
mysqli_close($conn);
