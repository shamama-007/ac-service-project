<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta email="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Custom Css Link -->
    <link rel="stylesheet" href="css/style.css">
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
    <!-- Login From -->
    <div class="login-container">
        <form action="" class="container">
            <h1 class="admin_heading">LOGIN NOW</h1>
            <input type="text" class="admin_email" id="email" placeholder="Email" autocomplete="off">
            <input type="password" class="admin_password" id="password" placeholder="Password" autocomplete="off">
            <button type="button" onclick="validation()" id="login-btn">login</button>
        </form>
    </div>
</body>
<!-- Custom Js Link -->
<script src="js/main.js"></script>
<script>
    function validation() {

        const error_modal = document.getElementById('error-modal');
        const success_modal = document.getElementById('success-modal');

        const error_title = document.querySelector('.error-title');
        const success_title = document.querySelector('.success-title');

        const error_heading = document.querySelector('.error-heading');
        const success_heading = document.querySelector('.success-heading');

        var email = document.getElementById('email');
        var password = document.getElementById('password');

        if (email.value === '') {
            error_modal.style.display = 'flex';
            error_title.innerHTML = 'Oops!';
            error_heading.innerHTML = 'Email is required!';

        } else if (password.value === '') {
            error_modal.style.display = 'flex';
            error_title.innerHTML = 'Oops!';
            error_heading.innerHTML = 'Password is required!';
        } else {
            const xhr = new XMLHttpRequest();
            let data = `email=${email.value}&password=${password.value}`;
            xhr.open('POST', 'partially/login_handle.php');
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (this.responseText == 'logged in') {
                    window.location.href = 'dashboard.php';
                } else if (this.responseText == 'invalid credential') {
                    error_modal.style.display = 'flex';
                    error_title.innerHTML = 'Oops!';
                    error_heading.innerHTML = 'Some error occurred!';
                }
            }
            xhr.send(data);
        }

    }
</script>

</html>