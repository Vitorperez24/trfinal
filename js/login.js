document.getElementById('login-button').addEventListener('click', function() {
    window.location.href = 'index.html';
});

document.getElementById('forgot-password').addEventListener('click', function(event) {
    event.preventDefault();
    window.location.href = 'forgot-password.html';
});

document.getElementById('register-button').addEventListener('click', function() {
    window.location.href = 'register.html';
});
