w<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta email="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
</head>

<body>
    <div class="login-container">
        <form action="" method="POST" class="admin-content">
            <h2>Admin Signup</h2>
            <div class="form-control">
                <div class="form-content" id="form-content-2">
                    <span class="icon xx-icon"><i class="fas fa-user"></i></span>
                    <input type="text" id="email" placeholder="email">
                    <span class="icon err-icon" id="email-icon"><i class="fas fa-exclamation-circle"></i></span>
                </div>
                <p class="error" id="email-error">field</p>
            </div>

            <div class="form-control">
                <div class="form-content" id="form-content-2">
                    <span class="icon xx-icon"><i class="fas fa-lock"></i></span>
                    <input type="text" id="password" placeholder="password">
                    <span class="icon err-icon" id="password-icon"><i class="fas fa-exclamation-circle"></i></span>
                </div>
                <p class="error" id="password-error">field</p>
            </div>

            <div class="next-sec">
                <button type="button" onclick="validation()" class="fav-btn btn-request">Login</button>
            </div>

        </form>
    </div>
</body>
<script src="fontawesome/js/all.min.js"></script>
<script>
    function validation() {
        var email = document.getElementById('email');
        var password = document.getElementById('password');

        var email_error = document.getElementById('email-error');
        var password_error = document.getElementById('password-error');

        var email_icon = document.getElementById('email-icon');
        var password_icon = document.getElementById('password-icon');


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

        if (email.value === '') {
            email_error.innerHTML = 'email is required';
            email_error.style.visibility = 'visible';
            email_icon.style.display = 'flex';

        }
        if (password.value === '') {
            password_error.innerHTML = 'password is required';
            password_error.style.visibility = 'visible';
            password_icon.style.display = 'flex';
        }else {
            const xhr = new XMLHttpRequest();
            let data = `email=${email.value}&password=${password.value}`;
            xhr.open('POST', 'partially/signup_handle.php');
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                console.log(this.responseText);
            }
            xhr.send(data);
        }
     
    }
</script>

</html>