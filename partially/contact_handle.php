<?php
require 'db.php';
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format";
} else {
    $sql = "INSERT INTO `contact` (`name`, `email`, `message`, `status`, `date_and_time`) VALUES ('$name', '$email', '$message', '0', current_timestamp())";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo 'insert';
    } else {
        echo 'not_insert';
    }
}
?>