<?php

// Condition Without Session Set Login
if (!isset($_SESSION['ADMIN_EMAIL'])) {
    header('location: login.php');
    die();
}

$id = $_SESSION['ADMIN_ID'];
$sql_admin = "SELECT * FROM `admin` WHERE id = '$id'";
$result_admin = mysqli_query($con, $sql_admin);
$row_admin = mysqli_fetch_assoc($result_admin);

// Fetch Book_Order Table With status (0)
$sql_notification_order = "SELECT * FROM book_order WHERE status = '0'";
$result_notification_order = mysqli_query($con, $sql_notification_order);
$row_notification_order = mysqli_num_rows($result_notification_order);

// Fetch Feedback With status (0)
$sql_notification_feedback = "SELECT * FROM feedback WHERE status = '0'";
$result_notification_feedback = mysqli_query($con, $sql_notification_feedback);
$row_notification_feedback = mysqli_num_rows($result_notification_feedback);

// Fetch Contact With status (0)
$sql_notification_contact = "SELECT * FROM contact WHERE status = '0'";
$result_notification_contact = mysqli_query($con, $sql_notification_contact);
$row_notification_contact = mysqli_num_rows($result_notification_contact);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Admin Panel -- <?php echo $_SESSION['ADMIN_EMAIL']?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Custom Css Link -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive Css Link -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Favicon -->
     <link rel="icon" type="image/x-icon" href="img/maintenance.png">
</head>

<body>
    <!-- Error Modal -->
    <div class="control-modal" id="error-modal">
        <div class="owner-modal">
            <img src="img/error.png" class="img1">
            <p class="error-title">Oops!</p>
            <h1 class="error-heading">Username and Password Wrong</h1>
            <button type="button" class="btn error-btn" id="error-btn">Cancel</button>
        </div>
    </div>
    <!-- Success Modal -->
    <div class="control-modal" id="success-modal">
        <div class="owner-modal">
            <img src="img/success.png" class="img1">
            <p class="success-title"></p>
            <h1 class="success-heading"></h1>
            <button type="button" class="btn error-btn" id="success-btn">Cancel</button>
        </div>
    </div>

    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="sidebar-btn"></i>
    </label>
    <!-- admin Nav-bar -->
    <header>
        <div class="left-area">
            <h3>A<span>C</span> Admin Panel</h3>
        </div>
        <div class="right-area">
            <a href="partially/logout.php" class="fav-btn logout-btn">LOGOUT</a>
        </div>
    </header>
    <!-- Admin Sidebar -->
    <div class="sidebar">
        <center>
            <div class="profile-image-admin sidebar-img">
                <img src="img/<?php echo $row_admin['image'] ?>" class="profile-image" alt="profile_image">
            </div>
            <h4><?php echo $_SESSION['ADMIN_EMAIL'] ?></h4>
        </center>
        <a href="dashboard.php"><i class="fas fa-desktop"></i><span>Dashboard</span><span class="notification"><?php echo $row_notification_order ?></span></a>
        <a href="feedback.php"><i class="fas fa-comment"></i><span>Feedback</span><span class="notification"><?php echo $row_notification_feedback ?></span></a>
        <a href="contact.php"><i class="fas fa-users"></i><span>Contact me</span><span class="notification"><?php echo $row_notification_contact ?></span></a>
        <a href="admin_profile.php"><i class="fas fa-user-circle"></i><span>Profile</span></a>
        <a href="partially/logout.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
    </div>