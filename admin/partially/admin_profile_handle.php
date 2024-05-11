<?php
// if (!isset($_SESSION['ADMIN_EMAIL'])) {
//     header('location: login.php');
//     die();
// }
require 'db.php';

$old_password = htmlspecialchars($_POST['old_password']);
$new_password = htmlspecialchars($_POST['new_password']);
$conf_password = htmlspecialchars($_POST['conf_password']);

$id = $_SESSION['ADMIN_ID'];
if ($new_password === $conf_password) {
    $sqlquery = "SELECT password FROM `admin` WHERE id = '$id'";
    $result = mysqli_query($con, $sqlquery);
    if ($row = mysqli_fetch_assoc($result)) {
        $password_form_db = $row['password'];
        if (password_verify($old_password, $password_form_db)) {
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
            $sqlUpdate = "UPDATE `admin` SET password = '$hashed_password' WHERE id = '$id'";
            $result_2 = mysqli_query($con, $sqlUpdate);
            echo 'password update';
        } else {
            echo 'Database password do not match';
        }
    }
} else {
    echo 'password do not match';
}
