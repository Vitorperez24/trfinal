document.addEventListener("DOMContentLoaded", function() {
    // Adicionando ouvintes de evento aos botões
    document.getElementById("btndallas").addEventListener("click", function() {
        window.location.href = "dallasclub.html";
    });

    document.getElementById("btnCadastrar").addEventListener("click", function() {
        window.location.href = "cadastro.html";
    });

    document.getElementById("btnentrar").addEventListener("click", function() {
        window.location.href = "cadastro.html";
    });

    document.getElementById("btnCarrinho").addEventListener("click", function() {
        window.location.href = "carrinho.html";
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
