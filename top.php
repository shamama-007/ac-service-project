<?php

if(!defined('MYSITE')) {
    location('location: index.php');
    die();
} 

require 'partially/db.php';
// Visitor Increase Query
$sql_visitor = "UPDATE visitor SET visitor = visitor+1";
$result_visitor = mysqli_query($con, $sql_visitor);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AC Part</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
        <!-- FontAwesome CSS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
        <!-- AOS CSS -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!-- slider link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Custom Responsive CSS -->
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
        <!-- Feedback Section Start Here -->
        <div class="feedback-container" id="feedback-btn" onclick="feedback_modal()">
            <p class="feedback">Feedback</p>
        </div>
        <div class="feedback-content" id="modal-feedback">
            <form action="" class="content">
                <span onclick="feedback_modal()" class="close">+</span>
                <h2>Feedback From</h2>
                <div class="feedback-help">
                    <small>Can you help us improve?</small>
                </div>
                <div class="form-control">
                    <div class="form-content" id="form-content-2">
                        <span class="icon xx-icon"><i class="fas fa-envelope"></i></span>
                        <input type="text" id="email2" name="email" placeholder="Email">
                        <span class="icon err-icon" id="email2-icon"><i class="fas fa-exclamation-circle"></i></span>
                    </div>
                    <p class="error" id="email2-error">field</p>
                </div>
                <div class="feedback-help">
                    <small>Any Additional feedback?</small>
                </div>
                <div class="form-control">
                    <div class="form-content" id="form-content-2">
                        <span class="icon xx-icon"><i class="fas fa-comment"></i></span>
                        <textarea name="message" id="message" placeholder="Message" cols="30" rows="10"></textarea>
                        <span class="icon err-icon" id="message-icon"><i class="fas fa-exclamation-circle"></i></span>
                    </div>
                    <p class="error" id="message-error">field</p>
                </div>
                <div class="next-sec-2">
                    <button type="button" onclick="validation2()" class="fav-btn btn-request">Submit</button>
                </div>
            </form>
        </div>
        <!-- Feedback Section End Here -->