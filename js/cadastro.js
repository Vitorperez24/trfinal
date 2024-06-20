document.querySelectorAll('.password-toggle-icon').forEach(item => {
    item.addEventListener('click', function () {
        const passwordField = this.previousElementSibling;
        if (passwordField.type === "password") {
            passwordField.type = "text";
            this.querySelector('i').classList.remove('fa-eye');
            this.querySelector('i').classList.add('fa-eye-slash');
        } else {
            passwordField.type = "password";
            this.querySelector('i').classList.remove('fa-eye-slash');
            this.querySelector('i').classList.add('fa-eye');
        }
    });
});
