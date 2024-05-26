// Função para redirecionar para outra página com base no ID do submenu clicado
function redirectToPage(id) {
    switch (id) {
        case "racoes-cachorro":
            window.location.href = "crracoes.html";
            break;
        case "btnentrar":
            window.location.href = "login.html";
            break;
        case "btncadastrar":
            window.location.href = "cadastro.html";
            break;
        case "btncarrinho":
            document.getElementById('cart-sidebar').style.display = 'block';
            break;
        case "addToCartBtn":
            window.location.href = "outra_pagina.html";
            break;
        case "finalizarCompra":
            window.location.href = "pagamento.html";
            break;
        case "voltar":
            document.getElementById('cart-sidebar').style.display = 'none';
            break;
        default:
            console.log("ID não reconhecido:", id);
    }
}

// Função auxiliar para adicionar event listener de clique e redirecionar
function addClickListener(elementId, redirectId) {
    const element = document.getElementById(elementId);
    if (element) {
        element.addEventListener("click", function() {
            redirectToPage(redirectId);
        });
    } else {
        console.log("Elemento não encontrado:", elementId);
    }
}

// Event listeners para os botões de login, cadastro e carrinho
addClickListener("btnentrar", "btnentrar");
addClickListener("btncadastrar", "btncadastrar");
addClickListener("btncarrinho", "btncarrinho");

// Event listener para o botão de adicionar ao carrinho
addClickListener("addToCartBtn", "addToCartBtn");

// Event listeners para os botões do carrinho
addClickListener("finalizarCompra", "finalizarCompra");
addClickListener("voltar", "voltar");

// Seletor para todas as imagens dentro da classe "product-card"
const productImages = document.querySelectorAll('.product-card img');

// Adicionando event listener a cada imagem
productImages.forEach(image => {
    image.addEventListener('click', function() {
        // Aqui você pode definir a página para a qual deseja redirecionar
        window.location.href = 'carrinho.html';
    });
});
