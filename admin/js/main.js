// Modal Success
var success_btn = document.getElementById('success-btn');
success_btn.addEventListener('click', () => {
    window.location.reload();
})

// Modal Error 
var error_btn = document.getElementById('error-btn');
error_btn.addEventListener('click', () => {
    var error_modal = document.getElementById('error-modal');
    error_modal.style.display = 'none';
})


// const feedback_btn = document.getElementById('feedback-btn');

// function feedback_modal() {
//     const modal_feedback = document.getElementById('modal-feedback');
//     modal_feedback.classList.toggle('modal_active');
// }