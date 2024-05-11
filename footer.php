<?php
if(!defined('MYSITE')) {
    location('location: index.php');
    die();
}
?>
<footer>
    <div class="footer-content">
        <div class="footer-sec sect-1">
            <h1>A<span class="fav-color">C</span> Part</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae sed corrupti, unde fuga non
            excepturi ullam, adipisci officia reprehenderit quos vero, beatae ducimus illo nesciunt!</p>
            <a href="https://www.facebook.com/" class="social-icon facebook">
                <span class="icon"><i class="fab fa-facebook-square"></i></span>
            </a>
            <a href="https://twitter.com/" class="social-icon twitter">
                <span class="icon"><i class="fab fa-twitter-square"></i></span>
            </a>
            <a href="https://www.linkedin.com/" class="social-icon linkedin">
                <span class="icon"><i class="fab fa-linkedin"></i></span>
            </a>
            <a href="https://www.instagram.com/" class="social-icon instagram">
                <span class="icon"><i class="fab fa-instagram-square"></i></span>
            </a>
        </div>
        <div class="footer-sec sect-2">
            <h1>Service</h1>
            <div><a href="#">Ac service</a></div>
            <div><a href="#">About</a></div>
            <div><a href="#">Service</a></div>
            <div><a href="#">Contact</a></div>
        </div>
        <div class="footer-sec sect-3">
            <h1>Contact Me</h1>
            <div>
                <p>+999 999 999</p>
            </div>
            <div>
                <p>support@gmail.com</p>
            </div>
            <div>
                <p>Whatapp: 999 888 777</p>
            </div>
            <div>
                <p>Cell No: 222 444 777</p>
            </div>
            <div class="developer_content">
                <p class="developer_type">Developer By: <span class="developer_name">Shamama-Bin-Shakil</span></p>
            </div>
        </div>
    </div>
</footer>
</body>
<!-- AOS Js Link -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- slider link -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- Custom Js Link -->
<script src="js/main.js"></script>
<!-- slider link -->
<script>
$(document).ready(function() {
$(".owl-carousel").owlCarousel({
items: 1,
loop: true,
dots: true,
smartSpeed: 1000,
autoplay: true,
autoplayTimeout: 8000,
autoplayHoverPause: true
});
});
</script>
<!-- AOS INIT HERE -->
<script>
AOS.init({
delay: 0,
duration: 400,
easing: 'ease',
once: true,
});
</script>
</html>