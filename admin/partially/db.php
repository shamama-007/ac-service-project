<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'acproject');

if (!$con) {
    echo 'connection has been failed';
}


?>