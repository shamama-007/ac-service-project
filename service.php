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
            <ul class="menu v-class-resp">
                <li><a class="menu-black" href="index.php">Home</a></li>
                <li><a class="menu-black" href="service.php">Service</a></li>
                <li><a class="menu-black" href="contact.php">Contact us</a></li>
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
</header>
<!-- Header End Here -->
<!-- Service Section Start Here -->
<div class="service-container">
    <div class="service-content service-img">
        <h1>Lorem ipsum dolor sit amet.</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti dolores ratione amet illum distinctio,
            ab consequatur laborum perferendis placeat repellat soluta ducimus tenetur quidem, nulla sed officiis.
        </p>
    </div>
    <div class="service-detail">
        <div class="service-slider" data-aos="fade-up" data-aos-delay="50">
            <div class="side left-side left-order-1">
                <img src="img/img5.jpg" alt="">
            </div>
            <div class="side right-side">
                <h1>Your Safety And Security Is Our First Priority</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A cumque, ea quasi voluptates, nam molestiae
                    necessitatibus nihil sint iste facilis pariatur distinctio quis accusantium quia rem eius molestias
                    perspiciatis beatae alias, eligendi velit porro quae sed. Voluptas maiores assumenda minima veniam,
                    ratione beatae delectus ex tenetur unde provident cumque quidem.</p>
                <a href="#" class="fav-btn">Contact Us</a>
            </div>
        </div>
        <div class="service-slider" data-aos="fade-up" data-aos-delay="50">
            <div class="side left-side left-order-2 ">
                <img src="img/img1.jpg" alt="">
            </div>
            <div class="side right-side right-order-1">
                <h1>Your Safety And Security Is Our First Priority</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A cumque, ea quasi voluptates, nam molestiae
                    necessitatibus nihil sint iste facilis pariatur distinctio quis accusantium quia rem eius molestias
                    perspiciatis beatae alias, eligendi velit porro quae sed. Voluptas maiores assumenda minima veniam,
                    ratione beatae delectus ex tenetur unde provident cumque quidem.</p>
                <a href="#" class="fav-btn">Contact Us</a>
            </div>
        </div>
        <div class="service-slider" data-aos="fade-up" data-aos-delay="50">
            <div class="side left-side left-order-1">
                <img src="img/img2.jpg" alt="">
            </div>
            <div class="side right-side">
                <h1>Your Safety And Security Is Our First Priority</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A cumque, ea quasi voluptates, nam molestiae
                    necessitatibus nihil sint iste facilis pariatur distinctio quis accusantium quia rem eius molestias
                    perspiciatis beatae alias, eligendi velit porro quae sed. Voluptas maiores assumenda minima veniam,
                    ratione beatae delectus ex tenetur unde provident cumque quidem.</p>
                <a href="#" class="fav-btn">Contact Us</a>
            </div>
        </div>
        <div class="service-slider" data-aos="fade-up" data-aos-delay="50">
            <div class="side left-side left-order-2">
                <img src="img/img3.jpg" alt="">
            </div>
            <div class="side right-side right-order-1">
                <h1>Your Safety And Security Is Our First Priority</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A cumque, ea quasi voluptates, nam molestiae
                    necessitatibus nihil sint iste facilis pariatur distinctio quis accusantium quia rem eius molestias
                    perspiciatis beatae alias, eligendi velit porro quae sed. Voluptas maiores assumenda minima veniam,
                    ratione beatae delectus ex tenetur unde provident cumque quidem.</p>
                <a href="#" class="fav-btn">Contact Us</a>
            </div>
        </div>
        <div class="service-slider" data-aos="fade-up" data-aos-delay="50">
            <div class="side left-side left-order-1">
                <img src="img/img6.jpg" alt="">
            </div>
            <div class="side right-side">
                <h1>Your Safety And Security Is Our First Priority</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A cumque, ea quasi voluptates, nam molestiae
                    necessitatibus nihil sint iste facilis pariatur distinctio quis accusantium quia rem eius molestias
                    perspiciatis beatae alias, eligendi velit porro quae sed. Voluptas maiores assumenda minima veniam,
                    ratione beatae delectus ex tenetur unde provident cumque quidem.</p>
                <a href="#" class="fav-btn">Contact Us</a>
            </div>
        </div>
    </div>
    <!-- Service Section End Here -->

    <!-- Contact Section Start Here -->
    <div class="contact-me-section" id="service">
        <div class="contact-me-content">
            <div class="heading">
                <h1>Book Your Service</h1>
                <form action="" method="POST" class="content">
                    <div class="form-control">
                        <div class="form-content" id="form-content-2">
                            <span class="icon xx-icon"><i class="fas fa-user"></i></span>
                            <input type="text" id="name" placeholder="Name">
                            <span class="icon err-icon" id="name-icon"><i class="fas fa-exclamation-circle"></i></span>
                        </div>
                        <p class="error" id="name-error">field</p>
                    </div>
                    <div class="form-control">
                        <div class="form-content" id="form-content-2">
                            <span class="icon xx-icon"><i class="fas fa-envelope"></i></span>
                            <input type="text" id="email" placeholder="Email">
                            <span class="icon err-icon" id="email-icon"><i class="fas fa-exclamation-circle"></i></span>
                        </div>
                        <p class="error" id="email-error">field</p>
                    </div>
                    <div class="form-control">
                        <div class="form-content" id="form-content-2">
                            <span class="icon xx-icon"><i class="fas fa-mobile"></i></span>
                            <label for="mobile"></label>
                            <input type="text" class="number_form" id="number_form" placeholder="Mobile" value="+92" readonly>
                            <input type="number" id="mobile" placeholder="0000000000">
                            <span class="icon err-icon" id="mobile-icon"><i class="fas fa-exclamation-circle"></i></span>
                        </div>
                        <p class="error" id="mobile-error">field</p>
                    </div>
                    <div class="form-control">
                        <div class="form-content" id="form-content-2">
                            <span class="icon xx-icon"><i class="fas fa-map-marker-alt"></i></span>
                            <select id="service_value" name="service_value">
                                <option value="" disabled hidden selected>Type of Service</option>
                                <option value="Bathroom">Bathroom</option>
                                <option value="AC repairing">AC repairing</option>
                                <option value="Refigrator repairing">Refigrator repairing</option>
                                <option value="Electric Wire">Electric Wire</option>
                                <option value="Computer Service">Computer Service</option>
                            </select>
                            <span class="icon err-icon" id="service-icon"><i class="fas fa-exclamation-circle"></i></span>
                        </div>
                        <p class="error" id="service-error">field</p>
                    </div>
                    <div class="form-control">
                        <div class="form-content" id="form-content-2">
                            <span class="icon xx-icon"><i class="fas fa-city"></i></span>
                            <input type="text" id="city" placeholder="City">
                            <span class="icon err-icon" id="city-icon"><i class="fas fa-exclamation-circle"></i></span>
                        </div>
                        <p class="error" id="city-error">field</p>
                    </div>
                    <div class="form-control">
                        <div class="form-content" id="form-content-2">
                            <span class="icon xx-icon"><i class="fas fa-map-marker-alt"></i></span>
                            <input type="text" id="address" placeholder="Address">
                            <span class="icon err-icon" id="address-icon"><i class="fas fa-exclamation-circle"></i></span>
                        </div>
                        <p class="error" id="address-error">field</p>
                    </div>
                    <!-- latitude -->
                    <input type="hidden" id="lat" name="lat" />
                    <!-- longitude -->
                    <input type="hidden" id="lng" name="lng" />
                    <!-- Google map -->
                    <div>
                        <div class="google-map">
                            <span class="fas fa-exclamation-triangle alert-icon"></span><span class="google-map-text">Important! Before book service select the actual service place. </span>
                        </div>
                        <div id="map_canvas" style="width: auto; height: 400px;"></div>
                    </div>
                    <div class="next-sec">
                        <button type="button" onclick="validation()" class="fav-btn btn-request">Request a
                            Call</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Contact Section End Here -->
</div>
<!-- Service Section End Here -->
<!-- Last Section Start Here -->
<?php
include 'footer.php';
?>
<!-- Last Section End Here -->

<!-- Contact Form Submit Start Here -->
<script>
    // mobile validation
    const mobile = document.getElementById('mobile');
    mobile.addEventListener('keyup', () => {
        var x = mobile.value.split('');
        if (x.length > 10) {
            mobile.value = mobile.value.substring(0, 10);
        }
    });

    function validation() {


        const error_modal = document.getElementById('error-modal');
        const success_modal = document.getElementById('success-modal');
        const error_title = document.querySelector('.error-title');
        const success_title = document.querySelector('.success-title');
        const error_heading = document.querySelector('.error-heading');
        const success_heading = document.querySelector('.success-heading');

        var name = document.getElementById('name');
        var email = document.getElementById('email');
        var number_form = document.getElementById('number_form').value;
        var mobile = document.getElementById('mobile').value;

        var service_value = document.getElementById('service_value').value;
        var city = document.getElementById('city');
        var address = document.getElementById('address');
        var lat = document.getElementById('lat');
        var lng = document.getElementById('lng');

        var name_error = document.getElementById('name-error');
        var email_error = document.getElementById('email-error');
        var mobile_error = document.getElementById('mobile-error');
        var service_error = document.getElementById('service-error');
        var city_error = document.getElementById('city-error');
        var address_error = document.getElementById('address-error');

        var name_icon = document.getElementById('name-icon');
        var email_icon = document.getElementById('email-icon');
        var mobile_icon = document.getElementById('mobile-icon');
        var service_icon = document.getElementById('service-icon');
        var city_icon = document.getElementById('city-icon');
        var address_icon = document.getElementById('address-icon');

        var form_content = document.querySelectorAll('.form-content');
        var error = document.querySelectorAll('.error');
        var err_icon = document.querySelectorAll('.err-icon');

        // combined mobile number 
        var mobile_number = number_form + mobile;
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
        if (mobile.length < 10) {
            mobile_error.innerHTML = 'mobile is required';
            mobile_error.style.visibility = 'visible';
            mobile_icon.style.display = 'flex';

        }
        if (service_value == '') {
            service_error.innerHTML = 'Service is required';
            service_error.style.visibility = 'visible';
            service_icon.style.display = 'flex';
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
        if(lat.value === "") {
            error_modal.style.display = 'flex';
            error_title.innerHTML = 'Oops!';
            error_heading.innerHTML = 'Select location';
        }
        if(lng.value === "") {
            error_modal.style.display = 'flex';
            error_title.innerHTML = 'Oops!';
            error_heading.innerHTML = 'Select location';
        }
         if(name.value != '' || email.value != '' || mobile.value != '' || service_value != '' || city.value != '' || address.value != '' || lat.value != '' || lng.value != '') {
            const xhr = new XMLHttpRequest();
            let data = `name=${name.value}&email=${email.value}&mobile=${mobile_number}&type_service=${service_value}&city=${city.value}&address=${address.value}&lat=${lat.value}&lng=${lng.value}`;
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
                } else {
                    error_title.innerHTML = 'Oops!';
                    error_heading.innerHTML = 'Some error occured please try again';
                    error_modal.style.display = 'flex';
                }
            }
            xhr.send(data);
        }
        name.value = '';
        email.value = '';
        service_value.value = '';
        city.value = '';
        address.value = '';

    }
</script>
<!-- Contact Form Submit End Here  -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLLTbUNP5Zv5gDzUkFc2tAKRwJarnKli8"></script>
<script type="text/javascript">
    // Creating map object
    var map = new google.maps.Map(document.getElementById('map_canvas'), {
        zoom: 15,
        center: {
            lat: 30.3753,
            lng: 69.3451
        },
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    //Marker
    var vMarker = new google.maps.Marker({
        position: {
            lat: 30.3753,
            lng: 69.3451
        },
        map: map,
        draggable: true
    });
    google.maps.event.addListener(vMarker, 'dragend', function() {
        var lat = (vMarker.getPosition().lat());
        var lng = (vMarker.getPosition().lng());
        document.getElementById('lat').value = lat;
        document.getElementById('lng').value = lng;
    });
</script>