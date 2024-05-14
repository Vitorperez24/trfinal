function validarEmail() {
    var emailInput = document.getElementById("email");
    var email = emailInput.value.trim();

    if (isValidEmail(email)) {
        document.getElementById("resultado").textContent = "E-mail válido!";
        document.getElementById("resultado").style.color = "green";
    } else {
        document.getElementById("resultado").textContent = "E-mail inválido!";
        document.getElementById("resultado").style.color = "red";
    }
}

function isValidEmail(email) {
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
}
