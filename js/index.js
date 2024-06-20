document.addEventListener("DOMContentLoaded", function() {
    function redirectToPage(id) {
        switch (id) {
            case "racoes-cachorro":
                window.location.href = "crracoes.html";
                break;
            case "btnentrar":
                window.location.href = "login.html";
                break;
            case "btnCadastrar":
                window.location.href = "cadastro.html";
                break;
            case "btnCarrinho":
                document.getElementById('cart-sidebar').style.display = 'block';
                break;
            case "petiscos-cachorro":
                window.location.href = "crpetisos.html";
                break;
            case "farmacia-cachorro":
                window.location.href = "crfarma.html";
                break;
            case "coleiras-cachorro":
                window.location.href = "crcoleira.html";
                break;
            case "racoes-gato":
                window.location.href = "gtracoes.html";
                break;
            case "petiscos-gato":
                window.location.href = "gtpetiosos.html";
                break;
            case "farmacia-gato":
                window.location.href = "gtfarma.html";
                break;
            case "coleiras-gato":
                window.location.href = "gtcoleira.html";
                break;
            case "racoes-passaro":
                window.location.href = "pasracoes.html";
                break;
            case "gaiolas-passaro":
                window.location.href = "pasgaio.html";
                break;
            case "acessorios-passaro":
                window.location.href = "pasace.html";
                break;
            case "conheca-dallas":
                window.location.href = "dallasclub.html";
                break;
            case "ofertas-dallas":
                window.location.href = "dallasclub2.html";
                break;
            default:
                console.log("ID não reconhecido: " + id);
                break;
        }
    }

    function addClickListener(elementId, redirectId) {
        document.getElementById(elementId).addEventListener("click", function() {
            redirectToPage(redirectId);
        });
    }

    // Event listeners para os links do submenu
    addClickListener("racoes-cachorro", "racoes-cachorro");
    addClickListener("petiscos-cachorro", "petiscos-cachorro");
    addClickListener("farmacia-cachorro", "farmacia-cachorro");
    addClickListener("coleiras-cachorro", "coleiras-cachorro");
    addClickListener("racoes-gato", "racoes-gato");
    addClickListener("petiscos-gato", "petiscos-gato");
    addClickListener("farmacia-gato", "farmacia-gato");
    addClickListener("coleiras-gato", "coleiras-gato");
    addClickListener("racoes-passaro", "racoes-passaro");
    addClickListener("gaiolas-passaro", "gaiolas-passaro");
    addClickListener("acessorios-passaro", "acessorios-passaro");
    addClickListener("conheca-dallas", "conheca-dallas");
    addClickListener("ofertas-dallas", "ofertas-dallas");

    // Event listeners para os botões de login, cadastro e carrinho
    addClickListener("btnentrar", "btnentrar");
    addClickListener("btnCadastrar", "btnCadastrar");
    addClickListener("btnCarrinho", "btnCarrinho");

    document.querySelectorAll(".btn-add-to-cart").forEach(function(button) {
        button.addEventListener("click", function() {
            document.getElementById("cart-sidebar").style.display = "block";
        });
    });

    // Event listener para o botão "Voltar"
    document.getElementById("voltar").addEventListener("click", function() {
        document.getElementById('cart-sidebar').style.display = 'none';
    });

    // Event listener para o botão "Finalizar Compra"
    document.getElementById("finalizarCompra").addEventListener("click", function() {
        window.location.href = 'pagamento.html';
    });
});
