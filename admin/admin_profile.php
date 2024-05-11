<?php
require 'partially/db.php';
if (isset($_POST['admin-update'])) {
$image = rand(111111111, 999999999) . '_' . $_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], "img/" .  $image);
if ($_FILES['image']['type'] != 'image/jpeg' && $_FILES['image']['type'] != 'image/png' && $_FILES['image']['type'] != 'image/jpg') {
echo 'please select png || jpg || jpeg format';
} else {
$id = $_SESSION['ADMIN_ID'];
$sql = "UPDATE `admin` SET image = '$image' WHERE id = '$id'";
$result = mysqli_query($con, $sql);
if ($result) {
echo 'update';
header('location: admin_profile.php');
} else {
echo 'not update';
}
}
}
?>
<!-- Navbar Start Here -->
<?php include 'top.php'; ?>
<!-- Navbar End Here -->
<div class="content">
    <div class="detail">
        <div class="heading">
            <h2>Admin Profile</h2>
        </div>
        <form action="" method="POST" class="admin_profile_setting" enctype="multipart/form-data">
            <button type="button" class="profile-image-admin profile-img" id="custom">
            <img class="" src="img/<?php echo $row_admin['image'] ?>" class="img-upload" alt="profile_image">
            <span class="camera-icon"><i class="fas fa-camera"></i></span>
            </button>
            <input type="file" class="real-btn" id="real-btn" name="image" id="image" hidden><br>
            <span class="admin-email">Email: <?php echo $_SESSION['ADMIN_EMAIL'] ?></span>
            <div class="admin-btn-update">
                <button type="submit" name="admin-update" class="custom-btn">Profile Update</button>
            </div>
        </form>
        <hr>
        <br>
        <div class="heading">
            <h2>Password Management</h2>
        </div>
        <form action="" method="POST" class="password_management">
            <div class="form-control">
                <div class="form-content" id="form-content-2">
                    <span class="icon xx-icon"><i class="fas fa-lock"></i></span>
                    <input type="text" id="old_password" placeholder="Old Password">
                    <span class="icon err-icon" id="old_password-icon"><i class="fas fa-exclamation-circle"></i></span>
                </div>
                <p class="error" id="old_password-error">field</p>
            </div>
            <div class="form-control">
                <div class="form-content" id="form-content-2">
                    <span class="icon xx-icon"><i class="fas fa-key"></i></span>
                    <input type="text" id="new_password" placeholder="New Password">
                    <span class="icon err-icon" id="new_password-icon"><i class="fas fa-exclamation-circle"></i></span>
                </div>
                <p class="error" id="new_password-error">field</p>
            </div>
            <div class="form-control">
                <div class="form-content" id="form-content-2">
                    <span class="icon xx-icon"><i class="fas fa-unlock-alt"></i></span>
                    <input type="text" id="conf_password" placeholder="Confirm Password">
                    <span class="icon err-icon" id="conf_password-icon"><i class="fas fa-exclamation-circle"></i></span>
                </div>
                <p class="error" id="conf_password-error">field</p>
            </div>
            <button type="button" onclick="validation()" class="custom-btn btn-request">Password Update</button>
        </form>
    </div>
</div>
</body>
<script src="js/main.js"></script>
<script>
function validation() {
const error_modal = document.getElementById('error-modal');
const success_modal = document.getElementById('success-modal');
const error_title = document.querySelector('.error-title');
const success_title = document.querySelector('.success-title');
const error_heading = document.querySelector('.error-heading');
const success_heading = document.querySelector('.success-heading');
var old_password = document.getElementById('old_password');
var new_password = document.getElementById('new_password');
var conf_password = document.getElementById('conf_password');
var old_password_error = document.getElementById('old_password-error');
var new_password_error = document.getElementById('new_password-error');
var conf_password_error = document.getElementById('conf_password-error');
var old_password_icon = document.getElementById('old_password-icon');
var new_password_icon = document.getElementById('new_password-icon');
var conf_password_icon = document.getElementById('conf_password-icon');
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
if (old_password.value === '') {
old_password_error.innerHTML = 'old password is required';
old_password_error.style.visibility = 'visible';
old_password_icon.style.display = 'flex';
}
if (new_password.value === '') {
new_password_error.innerHTML = 'New password is required';
new_password_error.style.visibility = 'visible';
new_password_icon.style.display = 'flex';
}
if (conf_password.value === '') {
conf_password_error.innerHTML = 'Confirm password is required';
conf_password_error.style.visibility = 'visible';
conf_password_icon.style.display = 'flex';
} else {
const xhr = new XMLHttpRequest();
let data = `old_password=${old_password.value}&new_password=${new_password.value}&conf_password=${conf_password.value}`;
xhr.open('POST', 'partially/admin_profile_handle.php');
xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
xhr.onload = function() {
console.log(this.responseText);
if (this.responseText == 'password update') {
success_modal.style.display = 'flex';
success_title.innerHTML = 'Thank You!';
success_heading.innerHTML = 'Password has been Updated!';
} else if (this.responseText == 'Database password do not match') {
error_modal.style.display = 'flex';
error_title.innerHTML = 'Oops!';
error_heading.innerHTML = 'Database password do not match!';
} else if (this.responseText == 'password do not match') {
error_title.innerHTML = 'Oops!';
error_heading.innerHTML = 'Password do not match';
error_modal.style.display = 'flex';
}
}
xhr.send(data);
old_password.value = '';
new_password.value = '';
conf_password.value = '';
}
}
</script>
<script>
const img_upload = document.getElementById('custom');
const real_btn = document.getElementById('real-btn');
img_upload.addEventListener('click', () => {
real_btn.click();
})
</script>
</html>