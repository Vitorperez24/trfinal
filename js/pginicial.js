document.addEventListener("DOMContentLoaded", function() {
    // Adicionando um ouvinte de evento ao botão
    document.getElementById("btnCadastrar").addEventListener("click", function() {
        // Redirecionando para a página de cadastro
        window.location.href = "cadastro.html";
    });
});
document.addEventListener("DOMContentLoaded", function() {
    // Adicionando um ouvinte de evento ao botão
    document.getElementById("btnentrar").addEventListener("click", function() {
        // Redirecionando para a página de cadastro
        window.location.href = "cadastro.html";
    });
});
document.addEventListener("DOMContentLoaded", function() {
    // Adicionando um ouvinte de evento ao botão
    document.getElementById("btnCarrinho").addEventListener("click", function() {
        // Redirecionando para a página de cadastro
        window.location.href = "carrinho.html";
    });
});
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("btnCadastrar").addEventListener("click", function() {
        window.location.href = "cadastro.html";
    });

    // Adiciona evento para todos os botões "Adicionar ao Carrinho"
    document.querySelectorAll(".btn-add-to-cart").forEach(function(button) {
        button.addEventListener("click", function() {
            document.getElementById("cart-message").style.display = "block";
        });
    });

    document.getElementById("close-cart-message").addEventListener("click", function() {
        document.getElementById("cart-message").style.display = "none";
    });
});
