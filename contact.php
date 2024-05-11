<!-- Navbar Start Here -->
<?php
define('MYSITE', true);
include 'top.php';
?>
<!-- Navbar End Here -->
<!-- Header Start Here -->
<header>
    <nav class="nav height-navbar-resp">
        <div class="nav-left">
            <div class="logo logo-black">A<span class="ac_part">C</span> Part</div>
            <div class="menu v-class-resp">
                <li><a class="menu-black" href="index.php">Home</a></li>
                <li><a class="menu-black" href="service.php">Service</a></li>
                <li><a class="menu-black" href="contact.php">Contact us</a></li>
            </div>
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
</header>
<!-- Header End Here -->
<!-- Contact Section Start Here -->
<section class="contact-section">
    <div class="content">
        <div class="left-side">
            <h1>JUST REACH US RIGHT HERE</h1>
            <div class="form-contact">
                <label for="name">Name</label>
                <input type="text" id="name" placeholder="Enter Your Name">
            </div>
            <div class="form-contact">
                <label for="name">Address</label>
                <input type="text" id="email" placeholder="Enter a valid email address">
            </div>
            <div class="form-contact">
                <label for="name">Message</label>
                <textarea name="" id="message2" cols="30" rows="10" placeholder="Enter Your message"></textarea>
            </div>
            <div class="form-contact">
                <button type="button" onclick="validation3()" class="fav-btn contact-btn">Submit</button>
            </div>
        </div>
        <div class="right-side">
            <h1>LET'S GET SOCIAL!</h1>
            <div class="contact-social">
                <a href="" class="social-icon facebook">
                    <i class="fab fa-facebook-square"></i>
                </a>
                <p class="contact-social-title">Facebook</p>
                <p class="contact-social-text">@SampleText</p>
            </div>
            <div class="contact-social">
                <a href="" class="social-icon twitter">
                    <i class="fab fa-twitter-square"></i>
                </a>
                <p class="contact-social-title">Twitter</p>
                <p class="contact-social-text">@SampleText</p>
            </div>
            <div class="contact-social">
                <a href="" class="social-icon linkedin">
                    <i class="fab fa-linkedin"></i>
                </a>
                <p class="contact-social-title">Linkedin</p>
                <p class="contact-social-text">@SampleText</p>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End Here -->
<!-- Last Section Start Here -->
<?php
include 'footer.php';
?>
<!-- Last Section End Here -->
<!-- Contact Form Submit Start Here -->
<script>
    function validation3() {
        const error_modal = document.getElementById('error-modal');
        const success_modal = document.getElementById('success-modal');
        const error_title = document.querySelector('.error-title');
        const success_title = document.querySelector('.success-title');
        const error_heading = document.querySelector('.error-heading');
        const success_heading = document.querySelector('.success-heading');
        var name = document.getElementById('name');
        var email = document.getElementById('email');
        var message = document.getElementById('message2');
        if (name.value === '') {
            error_modal.style.display = 'flex';
            error_title.innerHTML = 'Oops!';
            error_heading.innerHTML = 'Name is required';
        } else if (email.value === '') {
            error_modal.style.display = 'flex';
            error_title.innerHTML = 'Oops!';
            error_heading.innerHTML = 'Email is required';
        } else if (message.value === '') {
            error_modal.style.display = 'flex';
            error_title.innerHTML = 'Oops!';
            error_heading.innerHTML = 'Message is required';
        } else if (name.value != '' || email.value != '' || message.value != '') {
            const xhr = new XMLHttpRequest();
            let data = `name=${name.value}&email=${email.value}&message=${message.value}`;
            xhr.open('POST', 'partially/contact_handle.php');
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (this.responseText == "insert") {
                    success_modal.style.display = 'flex';
                    success_title.innerHTML = 'Thank You!';
                    success_heading.innerHTML = 'Contact has been successfully!';
                } else if (this.responseText == 'not_insert') {
                    error_modal.style.display = 'flex';
                    error_title.innerHTML = 'Oops!';
                    error_heading.innerHTML = 'Contact has not been successfully!';
                } else if (this.responseText == 'Invalid email format') {
                    error_title.innerHTML = 'Oops!';
                    error_heading.innerHTML = 'Invalid email format';
                    error_modal.style.display = 'flex';
                }
            }
            xhr.send(data);
            name.value = '';
            email.value = '';
            message.value = '';
        }
    }
</script>
<!-- Contact Form Submit End Here  -->