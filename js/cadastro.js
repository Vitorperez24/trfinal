<<<<<<< HEAD
document.addEventListener("DOMContentLoaded", function() {
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

    // Interceptar o envio do formulário
    const form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevenir o envio padrão do formulário

        const formData = new FormData(form);

        fetch('php/processa_cadastro.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert(data.message); // Exibir mensagem de sucesso
                window.location.href = 'login.php'; // Redirecionar para a página de login
            } else {
                alert(data.message); // Exibir mensagem de erro
            }
        })
        .catch(error => {
            console.error('Erro:', error);
            alert('Ocorreu um erro ao processar seu cadastro.');
        });
    });
});
=======
document.addEventListener("DOMContentLoaded", function() {
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

    // Interceptar o envio do formulário
    const form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevenir o envio padrão do formulário

        const formData = new FormData(form);

        fetch('php/processa_cadastro.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert(data.message); // Exibir mensagem de sucesso
                window.location.href = 'login.html'; // Redirecionar para a página de login
            } else {
                alert(data.message); // Exibir mensagem de erro
            }
        })
        .catch(error => {
            console.error('Erro:', error);
            alert('Ocorreu um erro ao processar seu cadastro.');
        });
    });
});
>>>>>>> 00923980e9edbe82e6b1895f6a70fd5e8358f27d
