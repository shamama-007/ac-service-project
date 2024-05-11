<?php
require 'db.php';

if (!isset($_GET['id'])) {
    header('location: ../feedback.php');
} else {
    $id = $_GET['id'];
    $sql = "UPDATE feedback SET `status` = '1' WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: ../feedback.php');
    } else {
        echo 'not update';
    }
}
