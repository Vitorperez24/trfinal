// recovery.js
document.addEventListener("DOMContentLoaded", function() {
    var form = document.getElementById("recoveryForm");
    
    form.addEventListener("submit", function(event) {
        var emailInput = document.getElementById("email");
        var email = emailInput.value.trim();
        
        if (!isValidEmail(email)) {
            alert("Por favor, insira um endereço de e-mail válido.");
            emailInput.focus();
            event.preventDefault();
        }
    });

    function isValidEmail(email) {
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailPattern.test(email);
    }
});
