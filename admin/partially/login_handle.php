<?php
require 'db.php';
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

$sql = "SELECT * FROM `admin` WHERE email = '$email'";
$result = mysqli_query($con, $sql);
$check = mysqli_num_rows($result);
if ($check) {
    while ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['password'])) {
            $_SESSION['ADMIN_ID'] = $row['id'];
            $_SESSION['ADMIN_EMAIL'] = $email;
            echo 'logged in';
        } else {
            echo 'invalid credential';
        }
    }
} else {
    echo 'invalid credential';
}
