document.addEventListener("DOMContentLoaded", function() {
    // Adicionando ouvinte de evento ao link "Esqueceu sua senha?"
    document.getElementById("esqueceuSenhaLink").addEventListener("click", function(event) {
        event.preventDefault(); // Prevenir o comportamento padrão do link
        window.location.href = "recsenha.html"; // Redirecionar para a página de recuperação de senha
    });
  
    // Evento para o botão "Cadastrar"
    document.getElementById("btnCadastrar").addEventListener("click", function() {
        window.location.href = "cadastro.html"; // Redirecionar para a página de cadastro
    });
  
    // Função para alternar a visibilidade da senha
    function togglePasswordVisibility(passwordFieldId) {
        const passwordField = document.getElementById(passwordFieldId);
        const passwordToggleIcon = passwordField.nextElementSibling.querySelector('i');
        if (passwordField.type === "password") {
            passwordField.type = "text";
            passwordToggleIcon.classList.remove('fa-eye');
            passwordToggleIcon.classList.add('fa-eye-slash');
        } else {
            passwordField.type = "password";
            passwordToggleIcon.classList.remove('fa-eye-slash');
            passwordToggleIcon.classList.add('fa-eye');
        }
    }
  
    // Adicionar o ouvinte de evento ao ícone de alternância de senha
    document.querySelectorAll('.password-toggle-icon').forEach(item => {
        item.addEventListener('click', function() {
            const passwordFieldId = this.previousElementSibling.getAttribute('id');
            togglePasswordVisibility(passwordFieldId);
        });
    });
  });
  