<!-- Navbar Start Here -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AC Part</title>
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Custom Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">

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

<!-- Navbar End Here -->
<!-- Header Start Here -->
<header>
    <nav class="nav height-navbar-resp">
        <div class="nav-left">
            <div class="logo logo-black">A<span class="ac_part">C</span> Part</div>
            <ul class="menu v-class-resp">
                <li><a class="menu-black" href="http://acservice.42web.io/index.php">Home</a></li>
                <li><a class="menu-black" href="http://acservice.42web.io/service.php">Service</a></li>
                <li><a class="menu-black" href="http://acservice.42web.io/contact.php">Contact us</a></li>
            </ul>
        </div>
        <div class="nav-right v-class-resp">
            <a href="service.php#service" class="fav-btn">Contact</a>
        </div>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>
    <div class="error-container">
        <h1>404 page not found</h1>
        <h3>Please check URL</h3>
    </div>
</header>
<!-- Header End Here -->
<!-- Service Section Start Here -->
<!-- Service Section End Here -->
<!-- Last Section Start Here -->
<?php
include '../footer.php';
?>
<!-- Last Section End Here -->
<!-- Contact Form Submit Start Here -->
<script>
function validation() {
const error_modal = document.getElementById('error-modal');
const success_modal = document.getElementById('success-modal');
const error_title = document.querySelector('.error-title');
const success_title = document.querySelector('.success-title');
const error_heading = document.querySelector('.error-heading');
const success_heading = document.querySelector('.success-heading');
var name = document.getElementById('name');
var email = document.getElementById('email');
var mobile = document.getElementById('mobile');
var subject = document.getElementById('subject');
var city = document.getElementById('city');
var address = document.getElementById('address');
var name_error = document.getElementById('name-error');
var email_error = document.getElementById('email-error');
var mobile_error = document.getElementById('mobile-error');
var subject_error = document.getElementById('subject-error');
var city_error = document.getElementById('city-error');
var address_error = document.getElementById('address-error');
var name_icon = document.getElementById('name-icon');
var email_icon = document.getElementById('email-icon');
var mobile_icon = document.getElementById('mobile-icon');
var subject_icon = document.getElementById('subject-icon');
var city_icon = document.getElementById('city-icon');
var address_icon = document.getElementById('address-icon');
var form_content = document.querySelectorAll('.form-content');
var error = document.querySelectorAll('.error');
var err_icon = document.querySelectorAll('.err-icon');
form_content.forEach((element) => {
element.style.border = '1px solid #8e8e8e';
})
err_icon.forEach((element) => {
element.style.display = 'none';
});
error.forEach((element) => {
element.style.visibility = 'hidden';
});
if (name.value === '') {
name_error.innerHTML = 'Name is required';
name_error.style.visibility = 'visible';
name_icon.style.display = 'flex';
}
if (email.value === '') {
email_error.innerHTML = 'Email is required';
email_error.style.visibility = 'visible';
email_icon.style.display = 'flex';
}
if (mobile.value === '') {
mobile_error.innerHTML = 'Mobile is required';
mobile_error.style.visibility = 'visible';
mobile_icon.style.display = 'flex';
}
if (city.value === '') {
city_error.innerHTML = 'City is required';
city_error.style.visibility = 'visible';
city_icon.style.display = 'flex';
}
if (address.value === '') {
address_error.innerHTML = 'Address is required';
address_error.style.visibility = 'visible';
address_icon.style.display = 'flex';
}
if (subject.value === '') {
subject_error.innerHTML = 'Subject is required';
subject_error.style.visibility = 'visible';
subject_icon.style.display = 'flex';
}
if (name.value != '' || email.value != '' || mobile.value != '' || city.value != '' || address.value != '' || subject.value != '') {
const xhr = new XMLHttpRequest();
let data = `name=${name.value}&email=${email.value}&mobile=${mobile.value}&type_service=${subject.value}&city=${city.value}&address=${address.value}`;
xhr.open('POST', 'partially/book_handle.php');
xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
xhr.onload = function() {
console.log(this.responseText);
if (this.responseText == "insert") {
success_modal.style.display = 'flex';
success_title.innerHTML = 'Thank You!';
success_heading.innerHTML = 'Service Order has been successfully!';
} else if (this.responseText == "not_insert") {
error_modal.style.display = 'flex';
error_title.innerHTML = 'Oops!';
error_heading.innerHTML = 'Service Order has not been successfully!';
} else if (this.responseText == "Invalid_email") {
error_title.innerHTML = 'Oops!';
error_heading.innerHTML = 'Invalid email format';
error_modal.style.display = 'flex';
}
}
xhr.send(data);
}
name.value = '';
email.value = '';
mobile.value = '';
subject.value = '';
city.value = '';
address.value = '';
}
</script>
<!-- Contact Form Submit End Here  -->