document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("recuperarSenhaForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Impede o envio padrão do formulário

        // Simula um envio bem-sucedido
        setTimeout(function() {
            document.getElementById("mensagemConfirmacao").style.display = "block";
        }, 1000); // Atraso de 1 segundo para simular o tempo de envio do formulário

        // Para realmente enviar o formulário, remova a linha de prevenção e o setTimeout acima
        // e descomente a linha abaixo:
        // this.submit();
    });
});
