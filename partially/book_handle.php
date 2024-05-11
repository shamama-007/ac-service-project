<?php
require 'db.php';

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$mobile = htmlspecialchars($_POST['mobile']);
$type_service = htmlspecialchars($_POST['type_service']);
$city = htmlspecialchars($_POST['city']);
$address = htmlspecialchars($_POST['address']);
$txtlat = htmlspecialchars($_POST['lat']);
$txtlng = htmlspecialchars($_POST['lng']);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid_email";
} else {
    $sql = "INSERT INTO `book_order` (`name`, `email`, `mobile`, `type_service`, `city`, `address`, `latitude`, `longitude`, `status`, `date_and_time`) VALUES ('$name', '$email', '$mobile', '$type_service', '$city', '$address', '$txtlat', '$txtlng', '0', current_timestamp())";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo 'insert';
    } else {
        echo 'not_insert';
    }
}
?>