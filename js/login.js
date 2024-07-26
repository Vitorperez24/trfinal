document.getElementById('login-button').addEventListener('click', function() {
    window.location.href = 'index.php';
});

document.getElementById('forgot-password').addEventListener('click', function(event) {
    event.preventDefault();
    window.location.href = 'forgot-password.php';
});

document.getElementById('register-button').addEventListener('click', function() {
    window.location.href = 'register.php';
});
document.addEventListener("DOMContentLoaded", function() {
    // Adicionando ouvinte de evento ao link "Esqueceu sua senha?"
    document.getElementById("esqueceuSenhaLink").addEventListener("click", function(event) {
        event.preventDefault(); // Prevenir o comportamento padrão do link
        window.location.href = "recsenha.php"; // Redirecionar para a página de recuperação de senha
    });
});

