document.addEventListener("DOMContentLoaded", function() {
    // Selecionando todas as imagens com a classe "racoes para cachorro"
    var imagens = document.querySelectorAll(".product-card img");

    // Iterando sobre cada imagem
    imagens.forEach(function(imagem) {
        // Adicionando um ouvinte de evento de clique a cada imagem
        imagem.addEventListener("click", function() {
            // Redirecionando para a página de destino especificada
            window.location.href = "produtoaberto.html";
        });
    });
});
