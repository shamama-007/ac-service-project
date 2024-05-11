<?php
require 'db.php';

$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format";
} else {
    $sql = "INSERT INTO `feedback` (`email`, `comment`, `status`, `date_and_time`) VALUES ('$email', '$message', '0', current_timestamp())";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo 'insert';
    } else {
        echo 'not_insert';
    }
}
?>