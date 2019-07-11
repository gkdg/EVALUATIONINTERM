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
        echo $db_record['title'] . '<br>';
        echo '<img height= "300" width="300" src="' . $db_record['photo'] . '" alt=""><br>';
        echo $db_record['addresss'] . ' ' . $db_record['city'] . '<br>';
        echo $db_record['area'] . '<br>';
        echo $db_record['price'] . '<br>';
        echo $db_record['typed'] . '<br>';
        echo $db_record['descriptions'] . '<br>';
    }
}
mysqli_close($conn);
