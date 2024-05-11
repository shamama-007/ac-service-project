<?php
require 'db.php';

if (!isset($_GET['id'])) {
    header('location: ../dashboard.php');
} else {
    $id = htmlspecialchars($_GET['id']);
    $sql = "UPDATE book_order SET `status` = '0' WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: ../dashboard.php');
    } else {
        echo 'not update';
    }
}
