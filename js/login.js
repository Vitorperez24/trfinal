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
     // Adicionar evento de submissão ao formulário de login
     document.getElementById("loginForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevenir o envio padrão do formulário

        // Remover mensagens de erro anteriores
        const errorMessages = document.querySelectorAll('.error-message');
        errorMessages.forEach(msg => msg.remove());

        // Obter dados do formulário
        const formData = new FormData(this);

        function login(username, email) {
            const user = { username: username, email: email };
            localStorage.setItem('user', JSON.stringify(user));
            window.location.href = 'index.php'; // Redireciona para a página inicial
        }

        // No fetch, após verificar a resposta do servidor
        fetch("php/processa_login.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // Verificar a resposta do servidor
            if (data.status === "success") {
                // Chamar a função de login com os dados do usuário
                login(data.nomeUsuario, data.email);
            } else {
                // Exibir mensagem de erro no formulário
                const errorMessage = document.createElement('div');
                errorMessage.textContent = data.message;
                errorMessage.classList.add('error-message');
                const form = document.getElementById('loginForm');
                form.prepend(errorMessage); // Adiciona mensagem de erro acima do formulário
            }
        })
        .catch(error => {
            console.error('Erro ao processar o login:', error);
        });
    });

    
  });
  