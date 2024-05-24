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
document.addEventListener("DOMContentLoaded", function() {
    // Adicionando ouvinte de evento ao link "Esqueceu sua senha?"
    document.getElementById("esqueceuSenhaLink").addEventListener("click", function(event) {
        event.preventDefault(); // Prevenir o comportamento padrão do link
        window.location.href = "recsenha.html"; // Redirecionar para a página de recuperação de senha
    });
});
