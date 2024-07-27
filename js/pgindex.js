document.addEventListener("DOMContentLoaded", function() {
    console.log("Arquivo index.js carregado!");

    // Função para redirecionar
    function redirectToPage(id) {
        switch (id) {
            case "racoes-cachorro":
                window.location.href = "crracoes.php";
                break;
            case "btnentrar":
                window.location.href = "login.php";
                break;
            case "btnCadastrar":
                window.location.href = "cadastro.php"; // URL correta
                break;
            case "btnCarrinho":
                document.getElementById('cart-sidebar').style.display = 'block';
                break;
            case "petiscos-cachorro":
                window.location.href = "crpetisos.php";
                break;
            case "farmacia-cachorro":
                window.location.href = "crfarma.php";
                break;
            case "coleiras-cachorro":
                window.location.href = "crcoleira.php";
                break;
            case "racoes-gato":
                window.location.href = "gtracoes.php";
                break;
            case "petiscos-gato":
                window.location.href = "gtpetiosos.php";
                break;
            case "farmacia-gato":
                window.location.href = "gtfarma.php";
                break;
            case "coleiras-gato":
                window.location.href = "gtcoleira.php";
                break;
            case "racoes-passaro":
                window.location.href = "pasracoes.php";
                break;
            case "gaiolas-passaro":
                window.location.href = "pasgaio.php";
                break;
            case "acessorios-passaro":
                window.location.href = "pasace.php";
                break;
            case "conheca-dallas":
                window.location.href = "dallasclub.php";
                break;
            case "ofertas-dallas":
                window.location.href = "dallasclub2.php";
                break;
            case "btnvoltar":
                document.getElementById('cart-sidebar').style.display = 'none'; // Fecha o carrinho
                break;
            default:
                console.log("ID não reconhecido: " + id);
                break;
        }
    }

    // Função para adicionar ouvinte de clique
    function addClickListener(elementId, redirectId) {
        const element = document.getElementById(elementId);
        if (element) {
            element.addEventListener("click", function() {
                redirectToPage(redirectId);
            });
        } else {
            console.log(`Elemento com ID ${elementId} não encontrado.`);
        }
    }

    // Adiciona ouvintes de clique
    addClickListener("racoes-cachorro", "racoes-cachorro");
    addClickListener("btnentrar", "btnentrar");
    addClickListener("btnCadastrar", "btnCadastrar");
    addClickListener("btnCarrinho", "btnCarrinho");
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
    addClickListener("btnvoltar", "btnvoltar");
});
