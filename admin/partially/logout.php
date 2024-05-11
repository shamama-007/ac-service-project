<?php
require 'db.php';
unset($_SESSION['ADMIN_ID']);
unset($_SESSION['ADMIN_EMAIL']);
header('location: ../login.php');
?>
