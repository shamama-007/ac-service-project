// Nav bar Sticky
window.addEventListener('scroll', () => {
    var nav = document.querySelector('.nav');
    nav.classList.toggle('sticky', window.scrollY > 150);
});

var burger = document.querySelector(".burger");
var nav = document.querySelector(".nav");
var menu = document.querySelector(".menu");
var nav_right = document.querySelector(".nav-right");

burger.addEventListener("click", () => {
    nav.classList.toggle("height-navbar-resp");
    menu.classList.toggle("v-class-resp");
    nav_right.classList.toggle("v-class-resp");
});

const feedback_btn = document.getElementById('feedback-btn');

function feedback_modal() {
    const modal_feedback = document.getElementById('modal-feedback');
    modal_feedback.classList.toggle('modal_active');
}


// feedback AJAX
function validation2() {
    const error_modal = document.getElementById('error-modal');
    const success_modal = document.getElementById('success-modal');

    const error_title = document.querySelector('.error-title');
    const success_title = document.querySelector('.success-title');

    const error_heading = document.querySelector('.error-heading');
    const success_heading = document.querySelector('.success-heading');

    var email = document.getElementById('email2');
    var message = document.getElementById('message');

    var email_error = document.getElementById('email2-error');
    var message_error = document.getElementById('message-error');

    var email_icon = document.getElementById('email2-icon');
    var message_icon = document.getElementById('message-icon');


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
        email_error.innerHTML = 'Email is required';
        email_error.style.visibility = 'visible';
        email_icon.style.display = 'flex';
    }
    if (message.value === '') {
        message_error.innerHTML = 'Message is required';
        message_error.style.visibility = 'visible';
        message_icon.style.display = 'flex';

    } else {
        const xhr = new XMLHttpRequest();
        let data = `email=${email.value}&message=${message.value}`;
        xhr.open('POST', 'partially/feedback_handle.php');
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (this.responseText == 'insert') {
                success_modal.style.display = 'flex';
                success_title.innerHTML = 'Thank You!';
                success_heading.innerHTML = 'Feedback has been submitted';
            } else if (this.responseText == 'not_insert') {
                error_modal.style.display = 'flex';
                error_title.innerHTML = 'Oops!';
                error_heading.innerHTML = 'Feedback has been not submitted!';
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


// Modal Error and Success
var success_btn = document.getElementById('success-btn');
success_btn.addEventListener('click', () => {
    window.location.reload();
})

var error_btn = document.getElementById('error-btn');
error_btn.addEventListener('click', () => {
    var error_modal = document.getElementById('error-modal');
    error_modal.style.display = 'none';
})
