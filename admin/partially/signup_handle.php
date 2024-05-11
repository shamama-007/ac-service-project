<?php
if (!isset($_SESSION['ADMIN_EMAIL'])) {
    header('location: login.php');
    die();
}
require 'db.php';
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM `admin` WHERE email = '$email'";
$result = mysqli_query($con, $sql);
$check = mysqli_num_rows($result);
if ($check) {
    echo 'email is not exist';
} else {
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO `admin` (`email`, `password`, `date_and_time`) VALUES ('$email', '$hash', current_timestamp())";
    $result = mysqli_query($con, $sql);
    if($result) {
        echo 'inset';
    }else {
        echo 'not_inset';
    }
}
