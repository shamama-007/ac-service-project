<?php
require 'db.php';

if (!isset($_GET['id'])) {
    header('location: ../contact.php');
} else {
    $id = $_GET['id'];
    $sql = "UPDATE contact SET `status` = '1' WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: ../contact.php');
    } else {
        echo 'not update';
    }
}
